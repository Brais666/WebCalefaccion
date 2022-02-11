<?php

namespace App\Http\Controllers;

use Session;
use App\Pedidos;
use App\User;
use App\Temporals;
use App\Oferta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

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
        $temporal = Temporals::find($id);
        $temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();

        $prev= url()->current();
        
        if($prev == "http://calefaccion.store/pedidos")
        {
            //dd("we");
            return view('pedidos.list',compact('temporal'));
        }
        else if($prev == "http://calefaccion.store/pedidofinanciado")
        {
            
            return view('pedidofinanciado.list',compact('temporal'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        return view('pedidos.create',compact('temporal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $id = Auth::user()->id;
        
        $temporal = Temporals::find($id);
        $temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();
        $request->validate([
            'Dni'=>'required',
            'CP' =>'required',
            //'Nombre' => 'required',
            /*'txtFirstName'=>'required',
            'txtLastName'=> 'required',*/
            'Direccion' => 'required',
        ]);

        $session = Session::get('_token');
       
        $codigopromo = $request->get('txtPromocion');
        
        //dd($codigopromocion);
        //dd($request);
        $simon = $request->get('txtSimon');
        $now =  Carbon::now();
        
        if(isset($codigopromo))
        {
            //$codpromo = Oferta::where('oferta','like',$codigopromo)->where('fecha_ini','<',$now)->where('fecha_fin','>',$now)->where('rango1','<',$temporal->cantidad)->where('rango2','>',$temporal->cantidad)->get();
            $name = Auth::user()->name;
            $fecha = Oferta::where('oferta','like',$codigopromo)->get();
            $bienvenida = User::where('bienvenidavale','=',1)->where('name', 'like', $name)->get();
            $bienvenida2 = count($bienvenida);
            $fecha2 = count($fecha);
            $addressSession = $request->get('Direccion');
            $telefonoSession = $request->get('tel');
            $dniSession = $request->get('Dni');
            session()->put(['address'=> $addressSession]);
            session()->put(['telefono'=> $telefonoSession]);
            session()->put(['dni'=> $dniSession]);
            //dd(session());
            /*if(($codigopromo == 'bienvenidavale') && $bienvenida2 > 0 && !empty($bienvenida)  )
            {
                dd($bienvenida);
                $prev= url()->previous();
                $request->session()->put(['codigopromo'=> 1]);
            
                 if($prev == "http://calefaccion.store/pedidos")
                        {
                                foreach ($bienvenida as $bienvenidas)
                                
                                //{
                                
                
                                  $bienvenidas->bienvenidavale = 0;
                                    
                                   
                                   $bienvenidas->save();
                                    
                                     
                                //}
                                
                           
                            
                                    $totalt = $temporal->cantidad * $temporal->preciol;
                                    $totaltemp = $totalt - 5;
                                    $total2 = $totaltemp;
                                    $cantidad = $request->txtCantidad;
                                    $poblacion = $request->txtPoblacion;
                                    $request->session()->put(['totaltemp'=> $totalt]);
                                    
                                    
                                    return view('pedidos.list',compact('total2','cantidad','poblacion'))->with('success','cupón validado');
                        }
                else if($prev == "http://calefaccion.store/pedidofinanciado")
                        {
                                foreach ($bienvenida as $bienvenidas)
                                
                                //{
                                     
                
                                  $bienvenidas->bienvenidavale = 0;
                                    
                                   
                                   $bienvenidas->save();
                                    
                                     
                                //}
                                
                                     $valor = $request->get('term');
                                       
                                       
                                         switch($valor)
                                      {
                                        case 0.341447:
                                        default:
                                            $meses = 3;
                                        break;
                                        case 0.256987:
                                            $meses = 4;
                                        break;
                                        case 0.206313:
                                            $meses = 5;
                                        break;
                                        case 0.172531:
                                            $meses = 6;
                                        break;
                                        case 0.148403:
                                            $meses = 7;
                                        break;    
                                        case 0.130307:
                                            $meses = 8;
                                        break;
                                        case 0.116234:
                                            $meses = 9;
                                        break;
                                        case 0.104976:
                                            $meses = 10;
                                        break;
                                        case 0.095766:
                                            $meses = 11;
                                        break;
                                        case 0.088092:
                                            $meses = 12;
                                        break;
                                      }
                                      
                                      $cantidad = intval($request->get('txtCantidad'));
                                      $preciol = floatval($temporal->preciol);
                            //mira
                        
                                       if($cantidad <= 200)
                                       {
                                        $comision = 0.03;
                                       }
                                       else if($cantidad >=200 && $cantidad <300)
                                       {
                                        $comision = 0.03;
                                       }
                                       else if($cantidad >=300 && $cantidad <400)
                                       {
                                        $comision = 0.02;
                                       }
                                       else if($cantidad >=400 && $cantidad <500)
                                       {
                                        $comision = 0.015;
                                       }
                                       else if($cantidad >=500 )
                                       {
                                        $comision = 0.01;
                                       }
                                
                                    
                                    $valor = (float)$valor;
                
                                   $nresult = $preciol + $comision;
                                   
                                   $total = $nresult * $cantidad;
                                   
                                   $total = $total * $valor;
                                   
                                   $total = round($total*100)/100;
                                   $cuotas = $total ;
                                   $total = $total * $meses;
                                   $cuotas = $cuotas - ($meses/10);
                                   $totalt = round($total*100)/100;
                                    
                                    
                                    $totalt=round($total*100)/100;
                            
                                    //$totalt = $temporal->cantidad * $temporal->preciol;
                                    $totaltemp = $totalt - 10;
                                    $total2 = $totaltemp;
                                    $cantidad = $request->txtCantidad;
                                    $poblacion = $request->txtPoblacion;
                                    
                                    return view('pedidofinanciado.list',compact('total2','cantidad','poblacion'))->with('success','cupón validado');
                        }
            }
            */
            
            if($fecha2 > 0) 
            {
                $request->session()->put(['codigopromo'=> 1]);
        
                $prev= url()->previous();
                //dd($fecha2);
                foreach ($fecha as $fechas)
                {
                
                $now = strtotime($now);
                //dd($now);
                 $fechaini= strtotime($fechas->fecha_ini);
                $inicial = $now -$fechaini;
                
                $fechafin = strtotime($fechas->fecha_fin);
                $final = $now -$fechafin;
                //dd($final);
                }
                
                if(($codigopromo == 'bienvenidavale') && $bienvenida2 > 0 && !empty($bienvenida)  )
            {
                //dd($bienvenida);
                $prev= url()->previous();
                $request->session()->put(['codigopromo'=> 1]);
            
                 if($prev == "http://calefaccion.store/pedidos")
                        {
                                foreach ($bienvenida as $bienvenidas)
                                
                                //{
                                
                
                                  $bienvenidas->bienvenidavale = 0;
                                    
                                   
                                   $bienvenidas->save();
                                    
                                     
                                //}
                                
                           
                            
                                    $totalt = $temporal->cantidad * $temporal->preciol;
                                    $totaltemp = $totalt - 5;
                                    $total2 = $totaltemp;
                                    $cantidad = $request->txtCantidad;
                                    $poblacion = $request->txtPoblacion;
                                    $request->session()->put(['totaltemp'=> $totalt]);
                                    
                                    
                                    return view('pedidos.list',compact('total2','cantidad','poblacion'))->with('success','cupón validado');
                        }
                else if($prev == "http://calefaccion.store/pedidofinanciado")
                        {
                                foreach ($bienvenida as $bienvenidas)
                                
                                //{
                                     
                
                                  $bienvenidas->bienvenidavale = 0;
                                    
                                   
                                   $bienvenidas->save();
                                    
                                     
                                //}
                                
                                     $valor = $request->get('term');
                                       
                                       
                                         switch($valor)
                                      {
                                        case 0.341447:
                                        default:
                                            $meses = 3;
                                        break;
                                        case 0.256987:
                                            $meses = 4;
                                        break;
                                        case 0.206313:
                                            $meses = 5;
                                        break;
                                        case 0.172531:
                                            $meses = 6;
                                        break;
                                        case 0.148403:
                                            $meses = 7;
                                        break;    
                                        case 0.130307:
                                            $meses = 8;
                                        break;
                                        case 0.116234:
                                            $meses = 9;
                                        break;
                                        case 0.104976:
                                            $meses = 10;
                                        break;
                                        case 0.095766:
                                            $meses = 11;
                                        break;
                                        case 0.088092:
                                            $meses = 12;
                                        break;
                                      }
                                      
                                      $cantidad = intval($request->get('txtCantidad'));
                                      $preciol = floatval($temporal->preciol);
                            //mira
                        
                                       if($cantidad <= 200)
                                       {
                                        $comision = 0.03;
                                       }
                                       else if($cantidad >=200 && $cantidad <300)
                                       {
                                        $comision = 0.03;
                                       }
                                       else if($cantidad >=300 && $cantidad <400)
                                       {
                                        $comision = 0.02;
                                       }
                                       else if($cantidad >=400 && $cantidad <500)
                                       {
                                        $comision = 0.015;
                                       }
                                       else if($cantidad >=500 )
                                       {
                                        $comision = 0.01;
                                       }
                                
                                    
                                    $valor = (float)$valor;
                
                                   $nresult = $preciol + $comision;
                                   
                                   $total = $nresult * $cantidad;
                                   
                                   $total = $total * $valor;
                                   
                                   $total = round($total*100)/100;
                                   $cuotas = $total ;
                                   $total = $total * $meses;
                                   $cuotas = $cuotas - ($meses/10);
                                   $totalt = round($total*100)/100;
                                    
                                    
                                    $totalt=round($total*100)/100;
                            
                                    //$totalt = $temporal->cantidad * $temporal->preciol;
                                    $totaltemp = $totalt - 10;
                                    $total2 = $totaltemp;
                                    $cantidad = $request->txtCantidad;
                                    $poblacion = $request->txtPoblacion;
                                    
                                    return view('pedidofinanciado.list',compact('total2','cantidad','poblacion'))->with('success','cupón validado');
                        }
            }else{
                return view('pedidos.list')->with('danger','cupón no válido');
            }
                
                if(isset($fecha) && ($inicial > 0) && ($final < 0))
                {
                    //dd("gsgdg");
                    foreach ($fecha as $fechas)
                    {
                        if($prev == "http://calefaccion.store/pedidos")
                        {
                            
                            if(($fechas->tipo) == '%')
                            {
                                
                                $totalt = $temporal->cantidad * $temporal->preciol;
                                $totaltemp = number_format(($totalt * $fechas->cantidad02)/100,2);
                                $total2 = $request->txtTotal-$totaltemp;
                                $cantidad = $request->txtCantidad;
                                $poblacion = $request->txtPoblacion;
                                $request->session()->put(['totaltemp'=> $totalt]);
                                //dd($total2);
                                 foreach ($bienvenida as $bienvenidas)
                                
                                //{
                                
                
                                  $bienvenidas->bienvenidavale = 0;
                                    //dd($bienvenidas);
                                   
                                   $bienvenidas->save();
                                    
                                     
                                //}
                                
                                 return view('pedidos.list',compact('total2','cantidad','poblacion'))->with('success','cupón validado');
                            }
                            elseif(($fechas->tipo) == '€')
                            {
                               $totalt = $temporal->cantidad * $temporal->preciol;
                                $totaltemp = $totalt - $fechas->cantidad01;
                                $total2 = floatval($totaltemp);
                                $cantidad2 = $request->txtCantidad;
                                $poblacion = $request->txtPoblacion;
                                $request->session()->put(['totaltemp'=> $totalt]);
                                //dd($total2);
                                
                                
                                
                                foreach ($bienvenida as $bienvenidas)
                                
                                {
                                
                
                                  $bienvenidas->bienvenidavale = 0;
                                    //dd($bienvenidas);
                                   
                                   $bienvenidas->save();
                                    
                                     
                                }
                                
                                 return view('pedidos.list',compact('total2','cantidad2','poblacion'))->with('success','cupón validado'); 
                            }
                           else
                           {
                               dd("HOL");
                                alert("fallo en el cupón");
                           }
                        }
                         else if($prev == "http://calefaccion.store/pedidofinanciado")
                        {
                            if(($fechas->tipo) == '%')
                            {
                                
                                $totalt = $temporal->cantidad * $temporal->preciol;
                                $totaltemp = number_format(($totalt * $fechas->cantidad02)/100,2);
                                $total2 = $request->txtTotal-$totaltemp;
                                $cantidad = $request->txtCantidad;
                                $poblacion = $request->txtPoblacion;
                                $request->session()->put(['totaltemp'=> $totalt]);
                                //dd($total2);
                                
                                 return view('pedidofinanciado.list',compact('total2','cantidad','poblacion'))->with('success','cupón validado');
                            }
                            elseif(($fechas->tipo) == '€')
                            {
                               $totalt = $temporal->cantidad * $temporal->preciol;
                                $totaltemp = $totalt - $fechas->cantidad01;
                                $total2 = floatval($totaltemp);
                                $cantidad2 = $request->txtCantidad;
                                $poblacion = $request->txtPoblacion;
                                $request->session()->put(['totaltemp'=> $totalt]);
                                //dd($total2);
                                
                                 return view('pedidofinanciado.list',compact('total2','cantidad2','poblacion'))->with('success','cupón validado'); 
                            }
                           else
                           {
                               dd("HOL");
                                alert("fallo en el cupón");
                           }
                           
                        }
                    }
                }
                else
                {
                    
                    dd("HOL2");
                    return view('pedidos.list')->with('danger','cupón no válido');
                }
            
            
            }
            else
            {
                $prev= url()->previous();
                //dd($temporal);
                if($prev == "http://calefaccion.store/pedidos")
                {
                    //dd("Hallo");
                    return view('pedidos.list')->with('danger','cupón no válido');
                }
                else if($prev == "http://calefaccion.store/pedidofinanciado")
                {
                    //dd("Hallo2");
                    return view('pedidofinanciado.list')->with('danger','cupón no válido');
                }
            }
             
             
            
            //dd($codpromo);
          
            
        }
        elseif(isset($simon))
        {
            
        }
        else
        {
            //dd($request);
            $request->session()->put(['codigopromo'=> 0]);
            //dd(session());
            $prev= url()->previous();
            
            if($request->get('tel')!== null)
            {
                $telefono= $request->get('tel');
                 
            }
            else{
                $telefono= Auth::user()->telefono;
                 
            }
           
            if($prev == "https://calefaccion.store/pedidos")
            {
                //dd(Auth::user()->id);
                
                $id = Auth::user()->id;
                $temporal = Temporals::find($id);
                $temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();
                
                if(is_null($temporal))
                {
                    $id = 666666;
                    $temporal = Temporals::find($id);
                    $temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();
                    //dd($temporal);
                }
                
                //dd($temporal);
                $pedido = new Pedidos([
                'session_token'=> $request->get('txtSession'),
                'codigocliente' => $request->get('txtCodCli'),
                'codigoproconsi'=> 'BXY14GDHF',
                'nombre'=> $request->get('txtNombre'),
                'email' => auth()->user()->email,
                'fechaentrada'=> $now,
                'dni'=> $request->get('Dni'),
                'address'=> $request->get('Direccion'),
                'poblacion'=> $request->get('txtPoblacion'),
                'provincia'=> $temporal->provincia,
                'CP'=> $request->get('CP'),
                'canal'=> $request->get('txtCanal'),
                'estado'=> $request->get('txtEstado'),
                'producto'=> $request->get('txtProducto'),
                'cantidad'=> $request->get('txtCantidad'),
                'total'=> $request->get('txtTotal'),
                'observaciones'=> $request->get('observaciones'),
                'seleccionado'=> 'si',
                'financiado' => 0,
                'cuotas' => 0,
                'totalfinan' => 0,
                'meses' => 1,
                'telefono' => $telefono,

            ]);
               // dd($pedido);
            $pedido->save();
            
            $id = auth()->user()->id;
            $user = User::find($id);
        
            $user->dni = $request->get('Dni');
            $user->telefono = $request->get('tel');
            $user->provincia = $temporal->provincia;
            $user->localidad = $request->get('txtPoblacion');
            $user->address = $request->get('Direccion');
            $user->CP = $request->get('CP');
                
           //dd($user->CP);
            $user->update();

            $objDemo = new \stdClass();
            $objDemo->demo_one = $session;
            $objDemo->demo_two = $request->get('txtNombre');
            $objDemo->demo_three = $request->get('Dni');
            $objDemo->demo_four = $request->get('Direccion');
            $objDemo->demo_five = $request->get('txtPoblacion');
            $objDemo->demo_six = $temporal->provincia;
            $objDemo->demo_seven = $request->get('CP');
            $objDemo->demo_eight = $request->get('txtCanal');
            $objDemo->demo_nine = $request->get('txtEstado');
            $objDemo->demo_ten = $request->get('txtProducto');
            $objDemo->demo_eleven = $request->get('txtCantidad');
            $objDemo->demo_twelve = $request->get('txtTotal');
            $objDemo->sender = 'Simongrup S.l.';
            $objDemo->receiver = Auth::user()->name;
            
    //dd($objDemo);
            //Mail::to(Auth::user()->name)->send(new DemoEmail($objDemo));
           Mail::to('sofia.shevchuk8@gmail.com')->send(new DemoEmail($objDemo));
            Mail::to('it@nascorenergias.com')->send(new DemoEmail($objDemo));
           // Mail::to('operador23@simongrup.com')->send(new DemoEmail($objDemo));
            //Mail::to('pedidos@simongrup.com')->send(new DemoEmail($objDemo));
            
            $id =3594;
            $temporal = Temporals::latest('created_at' )->first();
            //$temporal = Temporals::find($id);
            //dd($temporal);
            
            $temporal->delete();
            $request->session()->forget('poblacion');
            $request->session()->forget('cantidad');
            $request->session()->forget('unidad');
            $request->session()->forget('preciol');
            $request->session()->forget('diferencialitro2');
            $request->session()->forget('meses');
            $request->session()->forget('result');
            $request->session()->forget('nomRuta');
             $request->session()->forget('address');
            $request->session()->forget('dni');
            $request->session()->forget('telefono');
           
                //dd("jkbjkgh");
                return view('pedidos.pedidos2',compact('temporal'))->with('success','Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
            }
            else if($prev == "https://calefaccion.store/pedidofinanciado")
            {
                //dd($fecha2);
                $valor = $request->get('term');
               //dd($valor);
                 switch($valor)
              {
                case 0.341447:
                default:
                    $meses = 3;
                break;
                case 0.256987:
                    $meses = 4;
                break;
                case 0.206313:
                    $meses = 5;
                break;
                case 0.172531:
                    $meses = 6;
                break;
                case 0.148403:
                    $meses = 7;
                break;    
                case 0.130307:
                    $meses = 8;
                break;
                case 0.116234:
                    $meses = 9;
                break;
                case 0.104976:
                    $meses = 10;
                break;
                case 0.095766:
                    $meses = 11;
                break;
                case 0.088092:
                    $meses = 12;
                break;
              }
              
             // dd($request);
              $cantidad = intval($request->get('txtCantidad'));
              
             $preciol = floatval(session('preciol'));
              //dd(session());
              //dd(session('diferencialitro2'));
    //mira

               if($cantidad <= 200)
               {
                $comision = 0.03;
               }
               else if($cantidad >=200 && $cantidad <300)
               {
                $comision = 0.03;
               }
               else if($cantidad >=300 && $cantidad <400)
               {
                $comision = 0.02;
               }
               else if($cantidad >=400 && $cantidad <500)
               {
                $comision = 0.015;
               }
               else if($cantidad >=500 )
               {
                $comision = 0.01;
               }

               $interes = 0.341447;

               //$result= (($preciol+$comision)*($cantidad))*($valor);
               
                //$valor = (float)$valor;
                
               $nresult = $preciol + $comision;
               
               $total =  $cantidad * $nresult ;
               //dd($preciol);
               $total = $total * $valor;
               
               //$total = round($total*100)/100;
               $cuotas = $total ;
               
               $total = $total * $meses;
               
               
               $total = round($total*100)/100;
                
                
                
                 if($request->get('tel')!== null)
                    {
                        $telefono= $request->get('tel');
                    }
                    else{
                        $telefono= Auth::user()->telefono;
                    }
                
               //dd($cuotas);
                $pedido = new Pedidos([
                'session_token'=> $request->get('txtSession'),
                'codigocliente' => $request->get('txtCodCli'),
                'codigoproconsi'=> 'BXY14GDHF',
                'nombre'=> $request->get('txtNombre'),
                'email' => auth()->user()->email,
                'fechaentrada'=> $now,
                'dni'=> $request->get('Dni'),
                'address'=> $request->get('Direccion'),
                'poblacion'=> $request->get('txtPoblacion'),
                'provincia'=> $temporal->provincia,
                'CP'=> $request->get('CP'),
                'canal'=> $request->get('txtCanal'),
                'estado'=> $request->get('txtEstado'),
                'producto'=> $request->get('txtProducto'),
                'cantidad'=> $request->get('txtCantidad'),
                'total'=> $total,
                'observaciones'=> $request->get('observaciones'),
                'seleccionado'=> 'si',
                'financiado' => 1,
                'cuotas' => $cuotas,
                'totalfinan' => $total,
                'meses' => $meses,
                'telefono' => $telefono,

            ]);
               //dd(session());
               //dd($pedido); 
               
            $pedido->save();

            /*$objDemo = new \stdClass();
            $objDemo->demo_one = $session;
            $objDemo->demo_two = $request->get('txtNombre');
            $objDemo->demo_three = $request->get('Dni');
            $objDemo->demo_four = $request->get('Direccion');
            $objDemo->demo_five = $request->get('txtPoblacion');
            $objDemo->demo_six = $request->get('txtProvincia');
            $objDemo->demo_seven = $request->get('CP');
            $objDemo->demo_eight = $request->get('txtCanal');
            $objDemo->demo_nine = $request->get('txtEstado');
            $objDemo->demo_ten = $request->get('txtProducto');
            $objDemo->demo_eleven = $request->get('txtCantidad');
            $objDemo->demo_twelve = $request->get('txtTotal');
            $objDemo->sender = 'Simongrup S.l.';
            $objDemo->receiver = 'Adnan Basic';*/
            
           // $prev= url()->previous();
            dd("hola");
            Mail::to($data['email'])->send(new DemoEmail($objDemo));
            Mail::to("sofia.shevchuk8@gmail.com")->send(new DemoEmail($objDemo));
            Mail::to('it@nascorenergias.com')->send(new DemoEmail($objDemo));
            //Mail::to('operador23@simongrup.com')->send(new DemoEmail($objDemo));
            

            $id = 1;
            $temporal = Temporals::find($id);
            
            //$temporal->delete();
            //dd(session());
            $request->session()->forget('poblacion');
            $request->session()->forget('cantidad');
            $request->session()->forget('unidad');
            $request->session()->forget('preciol');
            $request->session()->forget('diferencialitro2');
            $request->session()->forget('meses');
            $request->session()->forget('result');
            $request->session()->forget('nomRuta');
            //dd("hhh");
            //dd(session());

             
                return view('pedidofinanciado.pedidos2',compact('temporal'))->with('success','Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
            }
            return view('pedidos.list',compact('temporal'))->with('danger','cupón no válido');
        }  
        //dd($request);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $session = Session::get('_token');

        $pedidos = Pedidos::where('session_token','like',$session)->latest('created_at','desc')->first();


        return view('pedidos.view',compact('pedidos'));
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

        $pedidos = Pedidos::where('nombre','like',$session)->latest('created_at','asc')->first();

        $cliente = User::where('name','like',$session)->get();


        return view('pedidos.unclick',compact('pedidos','cliente'));
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

        $pedidos = Pedidos::where('nombre','like',$session)->latest('created_at','asc')->first();

        return view('pedidos.pedidosunclick',compact('pedidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit',compact('pedido'));
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
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
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
