<?php

namespace App\Http\Controllers;

use App\Ruta;
use App\Tarifas;
use App\Poblacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class RouteNotDefinedException extends Exception
{
};
class NotEnoughQuantityException extends Exception
{
};
class RouteDefineInFutureException extends Exception
{
};

class RutaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function frequenciaRuta($nomRuta)
  {
    switch ($nomRuta) {
      case 'Ruta Centro':
      case 'Ruta Madrid':
      case 'Ruta Guadalajara':
      case 'Ruta Valencia':
      case 'Ruta Limites 30Km':
      case 'Ruta interior Naquera':
        return [1, 1, 1, 1, 1, 0, 0];
        break;
      case 'Ruta 3':
      case 'Ruta 5':
        return [1, 0, 0, 0, 0, 0, 0];
        break;

      case 'Ruta Falset':
        return [0, 1, 0, 0, 1, 0, 0];
        break;
      case 'Ruta Montroig':
        return [1, 0, 1, 0, 1, 0, 0];
        break;
      case 'Ruta 1':
        return [0, 1, 0, 1, 0, 0, 0];
        break;
      case 'Ruta 2':
      case 'Ruta 4':
        return [1, 0, 0, 1, 0, 0, 0];
        break;
      case 'Ruta Montblanc':
      case 'Ruta LLeida':
        return [0, 1, 0, 0, 0, 0, 0];
        break;
      case 'Ruta Vilafranca':
        return [0, 0, 0, 1, 0, 0, 0];
        break;
      case 'Ruta Torredembarra':
        return [0, 0, 0, 0, 1, 0, 0];
        break;
    }
  }

  // This calculation right now won't consider schedule on weekend after Thursday midday. 
  public function datesRutes($nomRuta, $dateDay, $dateHoy, $diaHoyNum)
  {
    $frequencia = $this->frequenciaRuta($nomRuta);
    $offset = 1;
    // Add extra day when user check after midday 
    if ($diaHoyNum < 5 && $dateDay < 0) {
      if ($dateDay < 0) {
        $offset += 1;
      }
    } else if ($diaHoyNum > 4 || $diaHoyNum == 4 && $dateDay < 0) {
      // After thursday midday the next possible day is Tuesday
      $offset = 9 - $diaHoyNum;
    }

    // Finding the next day available on the route to deliver
    $found = false;
    $index =  $diaHoyNum + $offset;
    if ($index > 7) {
      $index = $index - 7;
    }
    while (!$found) {
      if ($frequencia[$index - 1] == 1) {
        $found = true;
      } else {
        $index += 1;
        if ($index > 7) {
          $index = 1;
        }
        $offset += 1;
      }
    }
    $entrega = clone ($dateHoy);
    $entrega = $entrega->addDay($offset);

    return $entrega;
  }

  public function consulta($nombrePoblacion, $cantidad, $unidad)
  {
    if (($cantidad < 300 && $unidad == "Lts.") || ($cantidad < 150 && $unidad == "€")) {
      
      throw new NotEnoughQuantityException();
    }

    $ruta = Ruta::where('poblacion', '=', $nombrePoblacion)->first();
    if (is_null($ruta)) {
      $poblacionNoDefinida = new Poblacion([
        'nombre' => $nombrePoblacion,
        'cantidad' => $cantidad,
        'unidad' => $unidad,
      ]);
      $poblacionNoDefinida->save();

      throw new RouteNotDefinedException();
    }

    $poblIdZone = $ruta->idzona;

    switch ($poblIdZone) {
      case 000:
        $poblacionNoDefinida = new Poblacion([
          'nombre' => $nombrePoblacion,
          'cantidad' => $cantidad,
          'unidad' => $unidad,
        ]);
        $poblacionNoDefinida->save();

        throw new RouteDefineInFutureException;
        break;
      case 001:
        $provincia = "Madrid";
        break;
      case 002:
        $provincia = "Guadalajara";
        break;
      case 004:
        if ($ruta->nombreruta == "Ruta LLeida") {
          $provincia = "Lleida";
        } else {
          $provincia = "Tarragona";
        }
        break;
      default:
        $provincia = "Valencia";
        break;
    }

    $nomRuta = $ruta->nombreruta;

    $precioLitro = 0;
    $dateHoy = Carbon::now();

    $datemed = $dateHoy->format('Y-m-d 12:00:00');

    $diaHoyNum = $dateHoy->dayOfWeekIso;
    $dateDay = $dateHoy->diffInMinutes($datemed, false);

    $entrega = $this->datesRutes($nomRuta, $dateDay, $dateHoy, $diaHoyNum);

    $entregadia = ucfirst(Carbon::create($entrega)->locale('es_ES')->dayName);
    $entregadianum = $entrega->format('j');
    $diasentrega = $entrega->diffInDays($dateHoy);

    // $postal = Ruta::where('codigopost', '=', $poblacion)->first();
    $user = Auth::user();

    $pobzone = "#" . $ruta->idzona;
    $cp = $ruta->codigopost;

    $tarifa1 = Tarifas::where('rango1', '=', 0)->where('zona', '=', $ruta->idzona)->latest('created_at', 'asc')->first();
    $tarifa2 = Tarifas::where('rango1', '=', 400)->where('zona', '=', $ruta->idzona)->latest('created_at', 'asc')->first();
    $tarifa3 = Tarifas::where('rango1', '=', 1000)->where('zona', '=', $ruta->idzona)->latest('created_at', 'asc')->first();

    if ($cantidad <= 200) {
      $comision = 0.03;
    } else if ($cantidad >= 200) {
      $comision = 0.03;
    } else if ($cantidad >= 300) {
      $comision = 0.02;
    } else if ($cantidad >= 400) {
      $comision = 0.015;
    } else if ($cantidad >= 500) {
      $comision = 0.01;
    }

    if ($cantidad < 400) {
      $precioLitro = $tarifa1->precio;
    } elseif (($cantidad < 1000) && ($cantidad > 399)) {
      $precioLitro = $tarifa2->precio;
    } elseif (($cantidad > 999)) {
      $precioLitro = $tarifa3->precio;
    }
    if ($unidad == 'Lts.') {
      $total = $cantidad * $precioLitro;
    } else {
      $total = $cantidad;
      $cantidad = $cantidad / $precioLitro;
    }

    $valor = 0.3417;

    $result = (($precioLitro + $comision) * ($cantidad)) * ($valor);

    $meses = 3;
    $diferencia = ($result * $meses) - $total;

    if ($precioLitro == 0) {
      $diferencialitro = 0;
      $diferencialitro2 = 0;
    } else {
      $diferencialitro = ($diferencia / $precioLitro) / $cantidad;
      $diferencialitro = round($diferencialitro * 1000) / 1000;
      $diferencialitro2 = $diferencialitro + $precioLitro;
      $diferencialitro2 = round($diferencialitro2 * 1000) / 1000;
    }

    if (isset($user)) {
    } else {
      $nomRuta = $ruta->nombreruta;
    }

    $comision = 0.03;
    if ($cantidad <= 300) {
      $comision = 0.02;
    } else if ($cantidad <= 400) {
      $comision = 0.015;
    } else if ($cantidad <= 500) {
      $comision = 0.01;
    }

    return compact('entregadia', 'entregadianum', 'nombrePoblacion', 'diasentrega', 'provincia', 'precioLitro', 'total', 'diferencialitro', 'diferencialitro2', 'diferencia', 'cantidad', 'valor', 'cp', 'comision', 'entrega');
  }

  public function check(Request $request)
  {
    $nombrePoblacion = $request->get('poblacion');
    $cantidad = $request->get('cantidad');
    $unidad = $request->get('unidad');

    try {
      $consulta = $this->consulta($nombrePoblacion, intval($cantidad), $unidad);
      return response()->json($consulta);
    } catch (RouteNotDefinedException $e) {
      return response()->json(['error' => ['code' => 1001, 'description'  => 'Route not define']], 404);
    } catch (NotEnoughQuantityException $e) {
      return response()->json(['error' => ['code' => 1002, 'description'  => 'Not enough quantity']], 404);
    } catch (RouteDefineInFutureException $e) {
      return response()->json(['error' => ['code' => 1003, 'description'  => 'Route define for the future']], 404);
    }
  }

  public function index(Request $request)
  {
    $this->deleteSession($request);

    $request->validate([
      'poblacion' => 'required|string|min:1',
      'cantidad' => 'required|string|min:1',
      'select' => 'required|string|min:1',
    ]);

    $nombrePoblacion = $request->input('poblacion');
    $cantidad = $request->input('cantidad');
    $unidad = $request->input('select');

    try {
      $consulta = $this->consulta($nombrePoblacion, intval($cantidad), $unidad);

      $request->session()->put(['entregadia' => $consulta['entregadia']]);
      $request->session()->put(['entregadianum' => $consulta['entregadianum']]);
      $request->session()->put(['diasentrega' => $consulta['diasentrega']]);
      $request->session()->put(['poblacion' => $nombrePoblacion]);
      $request->session()->put(['provincia' => $consulta['provincia']]);
      $request->session()->put(['precioLitro' => $consulta['precioLitro']]);
      $request->session()->put(['diferencialitro' => $consulta['diferencialitro']]);
      $request->session()->put(['diferencialitro2' => $consulta['diferencialitro2']]);
      $request->session()->put(['total' => $consulta['total']]);
      $request->session()->put(['cp' => $consulta['cp']]);
      $request->session()->put(['cantidad' => $consulta['cantidad']]);
      $request->session()->put(['entrega' => $consulta['entrega']]);

      return view('bienvenido', $consulta);
    } catch (RouteNotDefinedException $e) {
      return view('consulta.index');
    } catch (NotEnoughQuantityException $e) {
      return view('welcome')->with("danger", "Pónte en contacto con nosotros para cantidades inferiores a 300 litros o importes inferiores a 150€:   949 247 034 (Madrid) / 977 773 800 (Cataluña).");
    } catch (RouteDefineInFutureException $e) {
      return view('consulta2.index');
    }
  }

  public function deleteSession(Request $request)
  {
    $request->session()->forget('entregadia');
    $request->session()->forget('entregadianum');
    $request->session()->forget('diasentrega');
    $request->session()->forget('poblacion');
    $request->session()->forget('provincia');
    $request->session()->forget('precioLitro');
    $request->session()->forget('total');
    $request->session()->forget('diferencialitro2');
    $request->session()->forget('codigopromo');
    $request->session()->forget('totaltemp');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Ruta  $ruta
   * @return \Illuminate\Http\Response
   */
  public function show(Ruta $ruta)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Ruta  $ruta
   * @return \Illuminate\Http\Response
   */
  public function edit(Ruta $ruta)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Ruta  $ruta
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Ruta $ruta)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Ruta  $ruta
   * @return \Illuminate\Http\Response
   */
  public function destroy(Ruta $ruta)
  {
    //
  }
}
