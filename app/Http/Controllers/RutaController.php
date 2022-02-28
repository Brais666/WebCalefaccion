<?php

namespace App\Http\Controllers;

use App\Ruta;
use App\Tarifas;
use App\Temporals;
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

  public function datesRutes($nomRuta, $dateday, $datehoy, $diahoynum)
  {
    switch ($nomRuta) {
      case 'Ruta Centro':
      case 'Ruta Madrid':
      case 'Ruta Guadalajara':
      case 'Ruta Valencia':
      case 'Ruta Limites 30Km':
      case 'Ruta interior Naquera':
        switch ($diahoynum) {
          case 1:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(2);
            }
            break;
          case 2:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(2);
            }
            break;
          case 3:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(2);
            }
            break;
          case 4:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(4);
            }
            break;
          case 5:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(3);
            } else {
              $entrega = Carbon::now()->addDays(4);
            }
            break;
          case 6:
            $entrega = Carbon::now()->addDays(3);
            break;
          default:
            $entrega = Carbon::now()->addDays(2);
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;

      case 'Ruta 3':
      case 'Ruta 5':
        switch ($diahoynum) {
          case 1:
            $entrega = Carbon::now()->addDays(7);
            break;
          case 2:
            $entrega = Carbon::now()->addDays(6);
            break;
          case 3:
            $entrega = Carbon::now()->addDays(5);
            break;
          case 4:
            $entrega = Carbon::now()->addDays(4);
            break;
          case 5:
            $entrega = Carbon::now()->addDays(3);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(2);
            break;
          default:
            $entrega = Carbon::now()->addDays(8);
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;

      case 'Ruta Falset':
        switch ($diahoynum) {
          case 1:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(4);
            }
            break;
          case 2:
            $entrega = Carbon::now()->addDays(3);
            break;
          case 3:
            $entrega = Carbon::now()->addDays(2);
            break;
          case 4:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(5);
            }

            break;
          case 5:
            $entrega = Carbon::now()->addDays(4);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(3);
            break;
          default:
            $entrega = Carbon::now()->addDays(2);
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
      case 'Ruta Montroig':
        switch ($diahoynum) {
          case 1:
            $entrega = Carbon::now()->addDays(2);
            break;
          case 2:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(3);
            }
            break;
          case 3:
            $entrega = Carbon::now()->addDays(2);
            break;
          case 4:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(4);
            }
            break;
          case 5:
            $entrega = Carbon::now()->addDays(3);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(2);
            break;
          default:
            $entrega = Carbon::now()->addDays(3);
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
      case 'Ruta 1':
        switch ($diahoynum) {
          case 1:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(3);
            }

            break;
          case 2:
            $entrega = Carbon::now()->addDays(2);
            break;
          case 3:
            $entrega = Carbon::now()->addDays(6);
            break;
          case 4:
            $entrega = Carbon::now()->addDays(5);
            break;
          case 5:
            $entrega = Carbon::now()->addDays(4);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(3);
            break;
          default:
            $entrega = Carbon::now()->addDays(2);
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
      case 'Ruta 2':
      case 'Ruta 4':
        switch ($diahoynum) {
          case 1:
            $entrega = Carbon::now()->addDays(3);
            break;
          case 2:
            $entrega = Carbon::now()->addDays(2);
            break;
          case 3:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(5);
            }

            break;
          case 4:
            $entrega = Carbon::now()->addDays(4);
            break;
          case 5:
            $entrega = Carbon::now()->addDays(3);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(5);
            break;
          default:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(4);
            }
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
      case 'Ruta Montblanc':
      case 'Ruta LLeida':
        switch ($diahoynum) {
          case 1:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(8);
            }

            break;
          case 2:
            $entrega = Carbon::now()->addDays(7);
            break;
          case 3:
            $entrega = Carbon::now()->addDays(6);
            break;
          case 4:
            $entrega = Carbon::now()->addDays(5);
            break;
          case 5:
            $entrega = Carbon::now()->addDays(4);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(3);
            break;
          default:
            $entrega = Carbon::now()->addDays(2);
            break;
        }

        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
      case 'Ruta Vilafranca':
        switch ($diahoynum) {
          case 1:
            $entrega = Carbon::now()->addDays(3);
            break;
          case 2:
            $entrega = Carbon::now()->addDays(2);
            break;
          case 3:
            if ($dateday > 0) {
              $entrega = Carbon::now()->addDays(1);
            } else {
              $entrega = Carbon::now()->addDays(8);
            }
            break;
          case 4:
            $entrega = Carbon::now()->addDays(7);
            break;
          case 5:
            $entrega = Carbon::now()->addDays(6);
            break;
          case 6:
            $entrega = Carbon::now()->addDays(5);
            break;
          default:
            $entrega = Carbon::now()->addDays(4);
            break;
        }
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
      default:
        $entrega = Carbon::now()->addDays(2);
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        return compact('entrega', 'entregadia', 'entregadianum', 'diasentrega');
        break;
    }
  }

  public function consulta($pobl, $poblidz, $cantidad, $unidad, $meses, $valor)
  {
    if (($cantidad < 300 && $unidad == "Lts.") or ($cantidad < 150 && $unidad == "€")) {
      throw new NotEnoughQuantityException();
    }

    $poblacion = Ruta::where('poblacion', '=', $pobl)->first();
    if (is_null($poblacion)) {
      $pueblo = $pobl;
      $poblacion = new Poblacion([
        'nombre' => $pobl,
        'cantidad' => $cantidad,
        'unidad' => $unidad,
      ]);
      $poblacion->save();

      throw new RouteNotDefinedException();
    }

    $nomRuta = $poblacion->nombreruta;

    $preciol2 = 0;
    $datehoy = Carbon::now();
    $datehoy2 = Carbon::now()->format('l');
    $diahoy = Carbon::now()->format('j');
    $datemed = $datehoy->format('Y-m-d 12:00:00');

    $diahoynum = $datehoy->dayOfWeek;
    $dateday = $datehoy->diffInMinutes($datemed, false);
    if ($dateday > 0) {
      $entrega = Carbon::now()->addDays(1);
    } else {
      $entrega = Carbon::now()->addDays(2);
    }

    $entregadia = $entrega->format('l');
    $entregadianum = $entrega->format('j');
    $diasentrega = $entrega->diffInDays($datehoy);

    $entrega = $this->datesRutes($nomRuta, $dateday, $datehoy, $diahoynum);
    $entregadia = ucfirst(Carbon::create($entrega['entrega'])->locale('es_ES')->dayName);

    $poblidz = $poblacion->idzona;

    switch ($poblidz) {
      case 000:
        $pueblo = $pobl;

        $poblacion = new Poblacion([
          'nombre' => $pobl,
          'cantidad' => $cantidad,
          'unidad' => $unidad,
        ]);
        $poblacion->save();

        throw new RouteDefineInFutureException;
        break;
      case 001:
        $provincia = "Madrid";
        break;
      case 002:
        $provincia = "Guadalajara";
        break;
      case 004:
        if ($poblacion->nombreruta == "Ruta LLeida") {
          $provincia = "Lleida";
        } else {
          $provincia = "Tarragona";
        }
        break;
      default:
        $provincia = "Valencia";
        break;
    }

    $postal = Ruta::where('codigopost', '=', $pobl)->first();
    $user = Auth::user();

    $pobzone = "#" . $poblacion->idzona;
      $cp = $poblacion->codigopost;

      $tarifa1 = Tarifas::where('rango1', '=', 0)->where('zona', '=', $poblacion->idzona)->latest('created_at', 'asc')->first();
      $tarifa2 = Tarifas::where('rango1', '=', 400)->where('zona', '=', $poblacion->idzona)->latest('created_at', 'asc')->first();
      $tarifa3 = Tarifas::where('rango1', '=', 1000)->where('zona', '=', $poblacion->idzona)->latest('created_at', 'asc')->first();

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

      $interes = 0.341447;

      if ($cantidad < 400) {
        $preciol2 = $tarifa1->precio;
      } elseif (($cantidad < 1000) && ($cantidad > 399)) {
        $preciol2 = $tarifa2->precio;
      } elseif (($cantidad > 999)) {
        $preciol2 = $tarifa3->precio;
      }
      if ($unidad == 'Lts.') {
        $cantidad2 = $cantidad;
        $total = $cantidad2 * $preciol2;
      } else {
        $total = $cantidad;
        $cantidad2 = $cantidad / $preciol2;
        $cantidad2 = round($cantidad2 * 1000) / 1000;
      }

      $result = (($preciol2 + $comision) * ($cantidad2)) * ($interes);

      $meses = 3;
      $diferencia = ($result * $meses) - $total;

      if ($preciol2 == 0) {
        $diferencialitro = 0;
        $diferencialitro2 = 0;
      } else {
        $diferencialitro = ($diferencia / $preciol2) / $cantidad;
        $diferencialitro = round($diferencialitro * 1000) / 1000;
        $diferencialitro2 = $diferencialitro + $preciol2;
        $diferencialitro2 = round($diferencialitro2 * 1000) / 1000;
      }

      if (isset($user)) {
        $temporal = new Temporals([
          'user' => Auth::user()->id,
          'email' => Auth::user()->email,
          'poblacion' => $pobl,
          'cantidad' => $cantidad2,
          'unidad' => $unidad,
          'preciol' => $preciol2,
          'codigopost' => $cp,
          'entregadia' => $entregadia,
          'entregadianum' => $entregadianum,
          'dentrode' => $diasentrega,
          'provincia' => $provincia,

        ]);
        $temporal->save();
      } else {
        $nomRuta = $poblacion->nombreruta;

        $temporal = new Temporals([
          'user' => '666666',
          'email' => 'notemail@no.com',
          'poblacion' => $pobl,
          'cantidad' => $cantidad2,
          'unidad' => $unidad,
          'preciol' => $preciol2,
          'codigopost' => $cp,
          'entregadia' => $entregadia,
          'entregadianum' => $entregadianum,
          'dentrode' => $diasentrega,
          'provincia' => $provincia,
        ]);
        $temporal->save();
      }
      return compact('entregadia', 'entregadianum', 'diasentrega', 'pobl', 'provincia', 'preciol2', 'total', 'diferencialitro', 'diferencialitro2', 'diferencia', 'cantidad');
  }

  public function index(Request $request)
  {
    $this->deleteSession($request);

    $request->validate([
      'poblacion' => 'required|string|min:1',
      'cantidad' => 'required|string|min:1',
      'select' => 'required|string|min:1',
    ]);

    $pobl = $request->input('poblacion');
    $poblidz = "";
    $cantidad = $request->input('cantidad');
    $unidad = $request->input('select');
    $meses = $request->input('term');
    $valor = $request->get('term');

    try {
      $consulta = $this->consulta($pobl, $poblidz, $cantidad, $unidad, $meses, $valor);

      // dd($consulta);

      $request->session()->put(['entregadia' => $consulta['entregadia']]);
      $request->session()->put(['entregadianum' => $consulta['entregadianum']]);
      $request->session()->put(['diasentrega' => $consulta['diasentrega']]);
      $request->session()->put(['pobl' => $consulta['pobl']]);
      $request->session()->put(['provincia' => $consulta['provincia']]);
      $request->session()->put(['preciol' => $consulta['preciol2']]);
      $request->session()->put(['total' => $consulta['total']]);
      $request->session()->put(['diferencialitro' => $consulta['diferencialitro']]);
      $request->session()->put(['diferencialitro2' => $consulta['diferencialitro2']]);
      $request->session()->put(['total' => $consulta['total']]);

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
    $request->session()->forget('pobl');
    $request->session()->forget('provincia');
    $request->session()->forget('preciol');
    $request->session()->forget('total');
    $request->session()->forget('diferencialitro2');
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
