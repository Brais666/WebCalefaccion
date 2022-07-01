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
    public function interesesFromMonth($meses)
    {
        $intereses = 0.341447;
        switch ($meses) {
            case 3:
                $intereses = 0.341447;
                break;
            case 4:
                $intereses = 0.256987;
                break;
            case 5:
                $intereses = 0.206313;
                break;
            case 6:
                $intereses = 0.172531;
                break;
            case 7:
                $intereses = 0.148403;
                break;
            case 8:
                $intereses = 0.130307;
                break;
            case 9:
                $intereses = 0.116234;
                break;
            case 10:
                $intereses = 0.104976;
                break;
            case 11:
                $intereses = 0.095766;
                break;
            case 12:
                $intereses = 0.088092;
                break;
        }
        return $intereses;
    }

    public function precioTotal($total, $precioLitro, $pedidoFinanciado, $cantidad, $meses)
    {
        $comision = 0.03;
        if ($cantidad <= 300) {
            $comision = 0.02;
        } else if ($cantidad <= 400) {
            $comision = 0.015;
        } else if ($cantidad <= 500) {
            $comision = 0.01;
        }

        $intereses = $this->interesesFromMonth($meses);

        if ($pedidoFinanciado) {
            $totalMes = ($precioLitro + $comision) * $cantidad * $intereses;
            $total = ($totalMes * $meses);
        }

        return $total;
    }

    public function precioTotalNew($total, $precioLitro, $pedidoFinanciado, $cantidad, $meses, $codigoPromo, $idUser, $simonCoins)
    {
        if ($codigoPromo) {
            $oferta = Oferta::where('oferta', 'like', $codigoPromo)->whereDate('fecha_ini', '<', Carbon::now())->whereDate('fecha_fin', '>', Carbon::now())->where('rango1', '<=', $cantidad)->where('rango2', '>=', $cantidad)->first();
            $valeBienvenida = User::where('bienvenidavale', '=', 1)->where('id', 'like', $idUser)->first();

            if ($codigoPromo == 'WEB5' && $valeBienvenida != null) {
                if ($meses != null) {
                    $total = $this->precioTotal($total, $precioLitro, true, $cantidad, $meses);
                    $totalDescuento = $total - 5;
                } else {
                    $total = $cantidad * $precioLitro;
                    $totalDescuento = $total - 5;
                }

                return $totalDescuento;
            }

            if ($oferta == null) {
                throw new CouponNotValidException();
            } else {
                if ($meses != null) {
                    $total = $this->precioTotal($total, $precioLitro, true, $cantidad, $meses);
                    if ($oferta->tipo == '€') {
                        $totalDescuento = $total - $oferta->cantidad01;
                    } else {
                        $totalDescuento = $total - $total * $oferta->cantidad02 / 100;
                    }
                } else {
                    $totalDescuento = $cantidad * $precioLitro;

                    if ($oferta->tipo == '€') {
                        $totalDescuento = $totalDescuento - $oferta->cantidad01;
                    } else {
                        $totalDescuento = $totalDescuento - $totalDescuento * $oferta->cantidad02 / 100;
                    }
                }

                return $totalDescuento;
            }
        } else if ($simonCoins) {
        } else {
            return $this->precioTotal($total, $precioLitro, $pedidoFinanciado, $cantidad, $meses);
        }
    }

    public function applyOffert(Request $request)
    {
        $total = $request->get('total');

        $precioLitro = $request->get('precioLitro');
        $pedidoFinanciado = $request->get('pedidoFinanciado');
        $cantidad = $request->get('cantidad');
        $meses = $request->get('meses');
        $codigoPromo = $request->get('codigoPromo');
        $idUser = Auth::user()->id;

        // Not supporting simon coins
        try {
            $total = $this->precioTotalNew($total, $precioLitro, $pedidoFinanciado, $cantidad, $meses, $codigoPromo, $idUser, null);

            return response()->json(['discountPrice' => $total]);
        } catch (CouponNotValidException $e) {
            return response()->json(['error' => ['code' => 2001, 'description'  => 'Coupon not valid']], 404);
        }
    }

    public function commission($quantity)
    {
        $comision = 0.03;
        if ($quantity <= 300) {
            $comision = 0.02;
        } else if ($quantity <= 400) {
            $comision = 0.015;
        } else if ($quantity <= 500) {
            $comision = 0.01;
        }
        return $comision;
    }

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
        $pedidoFinanciado = ($request->get('financiado') == true);
        $meses = $request->get('meses');

        $request->session()->put(['financiado' => $pedidoFinanciado]);
        $request->session()->put(['meses' => $meses]);


        $total = session('total');
        $total = $this->precioTotal($total, $precioLitro, $pedidoFinanciado, $cantidad, $meses);
        $precioLitro = $total / $cantidad;

        // dd($precioLitro);

        return view('pedidos.list', compact('total', 'cantidad', 'poblacion', 'email', 'telefono', 'cp', 'precioLitro', 'pedidoFinanciado', 'meses'));
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

    public function storePedido($nombre, $telefono, $idUser, $email, $now, $dni, $direccion, $poblacion, $cp, $canal, $estado, $producto, $cantidad, $total, $observaciones, $precioLitro, $meses, $codigoPromo, $provincia, $estimatedDeliveryDate)
    {
        $totalFinanciado = null;
        if ($meses != null) {
            $totalFinanciado = $this->precioTotal($total, $precioLitro, true, $cantidad, $meses);
        }

        $pedido = new Pedidos([
            'nombre' => $nombre,
            'email' => $email,
            'fechaentrada' => $now,
            'dni' => $dni,
            'address' => $direccion,
            'poblacion' => $poblacion,
            'provincia' => $provincia,
            'CP' => $cp,
            'canal' => $canal,
            'estado' => $estado,
            'producto' => $producto,
            'cantidad' => $cantidad,
            'total' => $total,
            'observaciones' => $observaciones,
            'seleccionado' => 'si',
            'financiado' => $meses != null,
            'cuotas' => $meses ?? 1,
            'totalfinan' => $totalFinanciado ?? 0,
            'meses' => $meses ?? 1,
            'telefono' => $telefono,
            'estimatedDeliveryDate' => $estimatedDeliveryDate,
        ]);

        $pedido->save();

        // TODO: set bienvenida to false in case is using that coupon

        $valeBienvenida = User::where('bienvenidavale', '=', 1)->where('id', 'like', $idUser)->first();
        if ($valeBienvenida != null) {
            $valeBienvenida->bienvenidavale = 0;
            $valeBienvenida->save();
        }

        $user = User::find($idUser);

        // Updating the user info with the latest order
        $user->dni = $dni;
        $user->telefono = $telefono;
        $user->provincia = $provincia;
        $user->localidad = $poblacion;
        $user->address = $direccion;
        $user->CP = $cp;

        $user->update();

        // $this->sendEmail($pedido, $entregaDia, $precioLitro);

        return $pedido;
    }

    public function storePedidoApi(Request $request)
    {
        // Not supporting financing yet or simon coins
        $meses = null;
        $simonCoins = null;
        $pedidoFinanciado = false;

        // Constants
        $canal = 'APP';
        $estado = 'Pendiente';
        $producto = 'GOB';

        $now = Carbon::now();

        // User info
        $nombre = Auth::user()->name;
        $userId = Auth::user()->id;
        $email = auth()->user()->email;

        // Post parameters
        $codigoPromo = $request->get('codigoPromo');
        $telephone = $request->get('telephone');
        if ($request->get('telephone') == null) {
            $telephone = Auth::user()->telefono;
        }
        $dni = $request->get('dni');
        $address = $request->get('address');
        $location = $request->get('location');
        $postalCode = $request->get('postalCode');
        $quantity = $request->get('quantity');
        $totalPrice = $request->get('totalPrice');
        $observations = $request->get('observations');
        $literPrice = $request->get('literPrice');
        $province = $request->get('province');

        $estimatedDeliveryDate = \Carbon\Carbon::parse($request->get('estimatedDeliveryDate'));
        // dd($estimatedDeliveryDate);

        $pedido = $this->storePedido($nombre, $telephone, $userId, $email, $now, $dni, $address, $location, $postalCode, $canal, $estado, $producto, $quantity, $totalPrice, $observations, $literPrice, $meses, $codigoPromo, $province, $estimatedDeliveryDate);
        $pedido['estimatedDeliveryDate'] = $pedido['estimatedDeliveryDate']->timestamp*1000;
        return response()->json($pedido, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meses = session('meses');

        $codigoPromo = $request->get('txtPromocion');

        $simonCoins = $request->get('txtSimon');
        $now = Carbon::now();

        $nombre = Auth::user()->name;
        $telefono = $request->get('tel');
        if ($request->get('tel') == null) {
            $telefono = Auth::user()->telefono;
        }
        $dni = $request->get('Dni');
        $userId = Auth::user()->id;
        $email = auth()->user()->email;
        $direccion = $request->get('Direccion');
        $poblacion = session('poblacion');
        $cp = session('cp');
        $canal = 'WEB';
        $estado = 'Pendiente';
        $producto = 'GOB';
        $cantidad = session('cantidad');
        $total = session('total');
        $observaciones = $request->get('observaciones');
        $entregaDia = session('entregadia');
        $precioLitro = session('precioLitro');
        $codigoPromoValidado = $codigoPromo == null;
        $estimatedDeliveryDate = session('estimatedDeliveryDate');

        $comision = $this->commission($total);

        $provincia = session('provincia');

        $pedidoFinanciado = session('financiado');

        if ($codigoPromo && !$codigoPromoValidado) {
            try {
                $precioCuponAplicado = $this->precioTotalNew($total, $precioLitro, $pedidoFinanciado, $cantidad, $meses, $codigoPromo, $userId, $simonCoins);
                $total = $this->precioTotal($total, $precioLitro, true, $cantidad, $meses);

                $request->session()->put(['codigopromo' => 1]);

                return view('pedidos.list', compact('total', 'cantidad', 'poblacion', 'email', 'telefono', 'cp', 'precioCuponAplicado', 'precioLitro', 'comision', 'pedidoFinanciado', 'meses'))->with('success', 'cupón validado');
            } catch (CouponNotValidException $e) {
                return view('pedidos.list', compact('total', 'cantidad', 'poblacion', 'email', 'telefono', 'cp', 'meses'))->with('danger', 'cupón no válido');
            }
        } else {
            $this->storePedido($nombre, $telefono, $userId, $email, $now, $dni, $direccion, $poblacion, $cp, $canal, $estado, $producto, $cantidad, $total, $observaciones, $precioLitro, $meses, $codigoPromo, $provincia, $estimatedDeliveryDate);

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
