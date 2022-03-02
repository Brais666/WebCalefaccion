<?php

namespace App\Http\Controllers;

use Session;
use App\Pedidos;
use App\User;
use App\Oferta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Exception;

class CouponNotValidException extends Exception
{
};

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;

        $telefono = Auth::user()->telefono;
        $cp = session('cp');
        $precioLitro = session('precioLitro');
        $cantidad = session('cantidad');
        $poblacion = session('poblacion');
        $email = auth()->user()->email;

        $total = session('total');

        return view('pedidos.list', compact('total', 'cantidad', 'poblacion', 'email', 'telefono', 'cp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('pedidos.create', compact('temporal'));
    }

    public function sendEmail($pedido, $entregaDia, $precioLitro)
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = $pedido->id;
        $objDemo->demo_two = $pedido->nombre;
        $objDemo->demo_three = $pedido->dni;
        $objDemo->demo_four = $pedido->address;
        $objDemo->demo_five = $pedido->poblacion;
        $objDemo->demo_six = $pedido->provincia;
        $objDemo->demo_seven = $pedido->CP;
        $objDemo->demo_eight = $pedido->canal;
        $objDemo->demo_nine = $pedido->estado;
        $objDemo->demo_ten = $pedido->producto;
        $objDemo->demo_eleven = $pedido->cantidad;
        $objDemo->demo_twelve = $pedido->total;
        $objDemo->demo_thirteen = $entregaDia;
        $objDemo->demo_fourteen = $precioLitro;
        $objDemo->sender = 'Simongrup S.l.';
        $objDemo->receiver = $pedido->nombre;

        Mail::to('sofia.shevchuk8@gmail.com')->send(new DemoEmail($objDemo));
        Mail::to('it@nascorenergias.com')->send(new DemoEmail($objDemo));
    }

    public function storePedido($nombre, $codigoPromo, $telefono, $idUser, $simonCoins, $email, $now, $dni, $direccion, $poblacion, $cp, $canal, $estado, $producto, $cantidad, $total, $observaciones, $entregaDia, $precioLitro, $cuponValidado)
    {
        if ($codigoPromo && !$cuponValidado) {
            // Not considering the zone
            $oferta = Oferta::where('oferta', 'like', $codigoPromo)->whereDate('fecha_ini', '<', Carbon::now())->whereDate('fecha_fin', '>', Carbon::now())->where('rango1', '<=', $cantidad)->where('rango2', '>=', $cantidad)->first();
            $valeBienvenida = User::where('bienvenidavale', '=', 1)->where('id', 'like', $idUser)->first();

            if ($codigoPromo == 'WEB5' && $valeBienvenida != null) {

                $totalt = $cantidad * $precioLitro;
                $totalDescuento = $totalt - 5;

                return $totalDescuento;
            }

            if ($oferta == null) {
                throw new CouponNotValidException();
            } else {
                $totalDescuento = $cantidad * $precioLitro;

                if ($oferta->tipo == '€') {
                    $totalDescuento = $totalDescuento - $oferta->cantidad01;
                } else {
                    $totalDescuento = $totalDescuento - $totalDescuento * $oferta->cantidad02 / 100;
                }

                return $totalDescuento;
            }
        } else if ($simonCoins) {
        } else {
            $pedido = new Pedidos([
                'nombre' => $nombre,
                'email' => $email,
                'fechaentrada' => $now,
                'dni' => $dni,
                'address' => $direccion,
                'poblacion' => $poblacion,
                'provincia' => session('provincia'),
                'CP' => $cp,
                'canal' => $canal,
                'estado' => $estado,
                'producto' => $producto,
                'cantidad' => $cantidad,
                'total' => $total,
                'observaciones' => $observaciones,
                'seleccionado' => 'si',
                'financiado' => 0,
                'cuotas' => 0,
                'totalfinan' => 0,
                'meses' => 1,
                'telefono' => $telefono,
            ]);

            $pedido->save();

            // TDOO: set bienvenida to false in case is using that coupon

            $valeBienvenida = User::where('bienvenidavale', '=', 1)->where('id', 'like', $idUser)->first();
            if ($valeBienvenida != null) {
                $valeBienvenida->bienvenidavale = 0;
                $valeBienvenida->save();
            }

            $user = User::find($idUser);

            // Updating the user info with the latest order
            $user->dni = $dni;
            $user->telefono = $telefono;
            $user->provincia = session('provincia');
            $user->localidad = $poblacion;
            $user->address = $direccion;
            $user->CP = $cp;

            $user->update();

            // $this->sendEmail($pedido, $entregaDia, $precioLitro);

            return null;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Dni' => 'required',
            'CP' => 'required',
            //'Nombre' => 'required',
            /*'txtFirstName'=>'required',
            'txtLastName'=> 'required',*/
            'Direccion' => 'required',
        ]);

        $id = Auth::user()->id;

        $codigoPromo = $request->get('txtPromocion');

        $simonCoins = $request->get('txtSimon');
        $now =  Carbon::now();

        $nombre = Auth::user()->name;
        $telefono = $request->get('tel');
        if ($request->get('tel') == null) {
            $telefono = Auth::user()->telefono;
        }
        $dni = $request->get('Dni');
        $idUser = Auth::user()->id;
        $email = auth()->user()->email;
        $direccion = $request->get('Direccion');
        $poblacion = session('poblacion');
        $cp = $request->get('CP');
        $canal = 'WEB';
        $estado = 'Pendiente';
        $producto = 'GOB';
        $cantidad = session('cantidad');
        $total = session('total');
        $observaciones = $request->get('observaciones');
        $entregaDia = session('entregadia');
        $precioLitro = session('precioLitro');
        $codigoPromoValidado = $codigoPromo == null;

        try {
            $precioCuponAplicado = $this->storePedido($nombre, $codigoPromo, $telefono, $idUser, null, $email, $now, $dni, $direccion, $poblacion, $cp, $canal, $estado, $producto, $cantidad, $total, $observaciones, $entregaDia, $precioLitro, $codigoPromoValidado);

            if ($precioCuponAplicado != null) {
                $request->session()->put(['codigopromo' => 1]);

                return view('pedidos.list', compact('total', 'cantidad', 'poblacion', 'email', 'telefono', 'cp', 'precioCuponAplicado'))->with('success', 'cupón validado');
            } else {
                $id = 3594;

                $request->session()->forget('poblacion');
                $request->session()->forget('cantidad');
                $request->session()->forget('unidad');
                $request->session()->forget('precioLitro');
                $request->session()->forget('diferencialitro2');
                $request->session()->forget('meses');
                $request->session()->forget('result');
                $request->session()->forget('nomRuta');
                $request->session()->forget('address');
                $request->session()->forget('dni');
                $request->session()->forget('telefono');
                $request->session()->forget('codigopromo');

                return view('pedidos.pedidos2')->with('success', 'Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
            }
        } catch (CouponNotValidException $e) {
            return view('pedidos.list', compact('total', 'cantidad', 'poblacion', 'email', 'telefono', 'cp'))->with('danger', 'cupón no válido');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userName = Auth::user()->name;

        $pedidos = Pedidos::where('nombre', 'like', $userName)->latest('created_at', 'desc')->first();

        return view('pedidos.view', compact('pedidos'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function click()
    {
        $session = Auth::user()->name;

        $pedidos = Pedidos::where('nombre', 'like', $session)->latest('created_at', 'asc')->first();

        $cliente = User::where('name', 'like', $session)->get();


        return view('pedidos.unclick', compact('pedidos', 'cliente'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function unclick()
    {
        $session = Auth::user()->name;

        $pedidos = Pedidos::where('nombre', 'like', $session)->latest('created_at', 'asc')->first();

        return view('pedidos.pedidosunclick', compact('pedidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'txtFirstName' => 'required',
            'txtLastName' => 'required',
            'Direccion' => 'required'
        ]);


        $pedido = Pedido::find($id);
        $pedido->first_name = $request->get('txtFirstName');
        $pedido->last_name = $request->get('txtLastName');
        $pedido->address = $request->get('Direccion');

        $pedido->update();

        return redirect('/pedidos')->with('success', 'Pedido modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect('/pedidos')->with('success', 'Pedido eliminado correctamente');
    }
}
