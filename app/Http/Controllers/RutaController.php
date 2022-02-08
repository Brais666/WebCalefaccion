<?php

namespace App\Http\Controllers;

use App\Ruta;
use App\Tarifas;
use App\Temporals;
use App\Poblacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ( isset($nomRuta) ) {   
          }
          else
          {
            $nomRuta = "";
          }
          
          
        $pobl=$request->input('poblacion');
        $poblidz = "";
        $cantidad=$request->input('cantidad');
        $unidad = $request->input('select');
        $meses = $request->input('term');
        $request->session()->put(['poblacion'=> $pobl]);
        $request->session()->put(['cantidad'=> $cantidad]);
        $request->session()->put(['unidad'=> $unidad]);
        $request->session()->put(['codigopromo'=> 0]);
        
        
       if(($cantidad<300 && $unidad == "Lts.") or ($cantidad<150 && $unidad == "€"))
        {
                    
            //dd($cantidad);
            return view('welcome')->with("danger","Pónte en contacto con nosotros para cantidades inferiores a 300 litros o importes inferiores a 150€:   949 247 034 (Madrid) / 977 773 800 (Cataluña)." );
            
        }
        
        $preciol2 = 0;
        $datehoy = Carbon::now();
        $datehoy2 = Carbon::now()->format('l');
        $diahoy = Carbon::now()->format('j');
        $datemed = $datehoy->format('Y-m-d 12:00:00');
        
        $diahoynum = $datehoy->dayOfWeek;
        $dateday = $datehoy->diffInMinutes($datemed,false);
        if($dateday > 0)
        {
            $entrega = Carbon::now()->addDays(1);
            
        }
        else
        {
            $entrega = Carbon::now()->addDays(2);
        }
        
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
        
        //dd($nomRuta);
        
        
        

            switch($nomRuta) 
            {
              case 'Ruta Centro':
              case 'Ruta Madrid':
              case 'Ruta Guadalajara':
              case 'Ruta Valencia':
              case 'Ruta Limites 30Km':
              case 'Ruta interior Naquera':
                  if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                        //dd($entrega);
                    }
                    else
                    {
                        $entrega = Carbon::now()->addDays(2);
                    }
                  $entregadia = $entrega->format('l');
                  $entregadianum = $entrega->format('j');
                  $diasentrega = $entrega->diffInDays($datehoy);
                  break;
    
              case 'Ruta 3':
              case 'Ruta 5':
                switch($diahoynum){
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
                      $entrega = Carbon::now()->addDays(2);
                      break;
                  }
                  $entregadia = $entrega->format('l');
                  $entregadianum = $entrega->format('j');
                  $diasentrega = $entrega->diffInDays($datehoy);
                  break;
              case 'Ruta Falset':
                switch($diahoynum){
                    case 1:
                      $entrega = Carbon::now()->addDays(4);
                      break;
                    case 2:
                      $entrega = Carbon::now()->addDays(3);
                      break;
                    case 3:
                      $entrega = Carbon::now()->addDays(2);
                      break;
                    case 4:
                      $entrega = Carbon::now()->addDays(6);
                      break;
                    case 5:
                      $entrega = Carbon::now()->addDays(5);
                      break;
                    case 6:
                      $entrega = Carbon::now()->addDays(4);
                      break;
                    default:
                      $entrega = Carbon::now()->addDays(2);
                      break;
                  }
                  $entregadia = $entrega->format('l');
                  $entregadianum = $entrega->format('j');
                  $diasentrega = $entrega->diffInDays($datehoy);
                  break;
 /////        
             case 'Ruta Montroig':
                switch($diahoynum)
                {
                   case 1:
                      $entrega = Carbon::now()->addDays(2);
                      break;
                    case 2:
                      if($dateday > 0)
                        {
                            $entrega = Carbon::now()->addDays(1);
                        }
                        else
                        {
                            $entrega = Carbon::now()->addDays(2);
                        }
                      break;
                    case 3:
                      $entrega = Carbon::now()->addDays(7);
                      break;
                    case 4:
                      $entrega = Carbon::now()->addDays(6);
                      break;
                    case 5:
                      $entrega = Carbon::now()->addDays(5);
                      break;
                    case 6:
                      $entrega = Carbon::now()->addDays(4);
                      break;
                    default:
                      $entrega = Carbon::now()->addDays(3);
                      break;
                }
                    $entregadia = $entrega->format('l');
                    $entregadianum = $entrega->format('j');
                    $diasentrega = $entrega->diffInDays($datehoy);
                    break;
              case 'Ruta 1':
                switch($diahoynum){
                    case 1:
                      $entrega = Carbon::now()->addDays(3);
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
                  break;
              case 'Ruta 2':
              case 'Ruta 4':
                switch($diahoynum){
                    case 1:
                      $entrega = Carbon::now()->addDays(3);
                      break;
                    case 2:
                      $entrega = Carbon::now()->addDays(2);
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
                      $entrega = Carbon::now()->addDays(5);
                      break;
                    default:
                      $entrega = Carbon::now()->addDays(4);
                      break;
                  }
                  $entregadia = $entrega->format('l');
                  $entregadianum = $entrega->format('j');
                  $diasentrega = $entrega->diffInDays($datehoy);
                  break;
              case 'Ruta Montblanc':
                  switch($diahoynum){
                    case 1:
                      $entrega = Carbon::now()->addDays(8);
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
                  break;
              case 'Ruta LLeida':
                  $entrega = Carbon::now()->addDays(5);
                  $entregadia = $entrega->format('l');
                  $entregadianum = $entrega->format('j');
                  $diasentrega = $entrega->diffInDays($datehoy);
                  break;
              case 'Ruta Vilafranca':
              switch($diahoynum){
                    case 1:
                      $entrega = Carbon::now()->addDays(3);
                      break;
                    case 2:
                      $entrega = Carbon::now()->addDays(2);
                      break;
                    case 3:
                      $entrega = Carbon::now()->addDays(8);
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
                  break;
              default:
                  $entrega = Carbon::now()->addDays(2);
                  $entregadia = $entrega->format('l');
                  $entregadianum = $entrega->format('j');
                  $diasentrega = $entrega->diffInDays($datehoy);
                  break;
            }

        switch($entregadia) {
          case 'Monday':
              $entregadia ='Lunes';
              break;
          case 'Tuesday':
              $entregadia ='Martes';
              break;
          case 'Wednesday':
              $entregadia ='Miércoles';
              break;
          case 'Thursday':
              $entregadia ='Jueves';
              break;
          case 'Friday':
              $entregadia = 'Viernes';
              break;
          case 'Saturday':
              $entregadia = 'Sábado';
              break;
          default:
              $entregadia = 'Domingo';
              break;
        }
        

    //$provincia = "Tarragona";
//dd($provincia);
        //$entregaprox = $entregadia + $entregadianum;
        //dd($diasentrega);
            
        if ($request->input('poblacion')) 
        { 
            $datehoy = Carbon::now();
        $datehoy2 = Carbon::now()->format('l');
        $diahoy = Carbon::now()->format('j');
        $datemed = $datehoy->format('Y-m-d 12:00:00');
        
        $diahoynum = $datehoy->dayOfWeek;
        $dateday = $datehoy->diffInMinutes($datemed,false);
        if($dateday > 0)
        {
            $entrega = Carbon::now()->addDays(1);
            //dd($entrega);
        }
        else
        {
            $entrega = Carbon::now()->addDays(2);
        }
        
        $entregadia = $entrega->format('l');
        $entregadianum = $entrega->format('j');
        $diasentrega = $entrega->diffInDays($datehoy);
            
            $poblacion = Ruta::where('poblacion', '=', $pobl)->first();
            if (is_null($poblacion)) {
              $pueblo =  $request->input('poblacion');
                //dd($pueblo);
                $poblacion = new Poblacion([
                            'nombre' => $request->input('poblacion'),
                            'cantidad' => $request->input('cantidad'),
                            'unidad' => $request->input('select'),
                    ]); 
                    $poblacion->save();
                
            return view('consulta.index');

            }

             
            $poblidz = $poblacion->idzona;
            
            
            switch($poblidz)
            {
                case 000:
                    $pueblo =  $request->input('poblacion');
               
                    $poblacion = new Poblacion([
                            'nombre' => $request->input('poblacion'),
                            'cantidad' => $request->input('cantidad'),
                            'unidad' => $request->input('select'),
                    ]); 
                    $poblacion->save();
                    
                    return view('consulta2.index');
                    break;
                case 001:
                    $provincia = "Madrid";
                    break;
                case 002:
                    $provincia = "Guadalajara";
                    break;
                case 004:
                    if($poblacion->nombreruta == "Ruta LLeida" )
                        {
                            $provincia = "Lleida";
                        }
                    else
                    {
                        $provincia = "Tarragona";
                    }
                    break;
                default :
                     $provincia = "Valencia";
                    break;
            }
            //dd($provincia);
            $postal = Ruta::where('codigopost', '=', $pobl)->first();
            $user = Auth::user();
            
             
            if (!is_null($poblacion)) 
            {
                $request->session()->forget('preciol');
                $request->session()->forget('diferencialitro2');
                $request->session()->forget('meses');
                $request->session()->forget('result');
                $pobzone = "#".$poblacion->idzona;
                $cp = $poblacion->codigopost;
                
                $tarifa1 = Tarifas::where('rango1', '=',0)->where('zona','=', $poblacion->idzona)->latest('created_at','asc')->first();
                $tarifa2 = Tarifas::where('rango1', '=',400)->where('zona','=', $poblacion->idzona)->latest('created_at','asc')->first();
                //$tarifa2 = Tarifas::all();
                $tarifa3 = Tarifas::where('rango1', '=',1000)->where('zona','=', $poblacion->idzona)->latest('created_at','asc')->first();
                
                if($cantidad <= 200)
                   {
                    $comision = 0.03;
                   }
                   else if($cantidad >=200 )
                   {
                    $comision = 0.03;
                   }
                   else if($cantidad >=300 )
                   {
                    $comision = 0.02;
                   }
                   else if($cantidad >=400 )
                   {
                    $comision = 0.015;
                   }
                   else if($cantidad >=500 )
                   {
                    $comision = 0.01;
                   }
            
                   $interes = 0.341447;
       
            $request->session()->forget('preciol');
            $request->session()->forget('diferencialitro2');
            $request->session()->forget('meses');
            $request->session()->forget('result');
                //dd($cantidad);
                if($cantidad < 400)
                {
                    $preciol2 = $tarifa1->precio;
                }
                elseif(($cantidad < 1000) && ($cantidad > 399))
                {
                    $preciol2 = $tarifa2->precio;
                }
                elseif(($cantidad > 999))
                {
                    $preciol2 = $tarifa3->precio;
                }
                    if($unidad == 'Lts.')
                    {
                        $cantidad2 = $cantidad;
                        $total = $cantidad2 * $preciol2;
                    }
                    else
                    {
                        $total = $cantidad;
                        $cantidad2 = $cantidad/$preciol2;
                        $cantidad2 =round($cantidad2*1000)/1000;
                    }
                    
                     $result= (($preciol2+$comision)*($cantidad2))*($interes);
                     
                     //dd($result);
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
              $meses=3;
        $diferencia = ($result * $meses) - $total;

        if($preciol2 == 0)
        {
          $diferencialitro = 0;
          $diferencialitro2 =0;
        }
        else
        {
          $diferencialitro = ($diferencia / $preciol2)/$cantidad;
          $diferencialitro = round($diferencialitro*1000)/1000;
          $diferencialitro2 = $diferencialitro + $preciol2;
          $diferencialitro2 =round($diferencialitro2*1000)/1000;
        }  
                $request->session()->put(['preciol'=> $preciol2]);
               $request->session()->put(['diferencialitro2'=> $diferencialitro2]);
               $request->session()->put(['result'=> $result]);
                $request->session()->put(['meses'=> $meses]);
                //dd($preciol2);
                    
                $nomRuta =$poblacion->nombreruta;
                
                 switch($nomRuta) {
          case 'Ruta Centro':
          case 'Ruta Madrid':
          case 'Ruta Guadalajara':
          case 'Ruta Valencia':
          case 'Ruta Limites 30Km':
          case 'Ruta interior Naquera':
               if($dateday > 0)
                {
                    $entrega = Carbon::now()->addDays(1);
                    $diasentrega = $entrega->diffInDays($datehoy);
                    //dd($entrega);
                }
                else
                {
                    $entrega = Carbon::now()->addDays(2);
                    $diasentrega = 2;
                }
                    $entregadia = $entrega->format('l');
                    $entregadianum = $entrega->format('j');
                    $diasentrega = $entrega->diffInDays($datehoy);
                    //dd($diasentrega);
                      break;

          case 'Ruta 3':
          case 'Ruta 5':
            switch($diahoynum){
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
              break;
          case 'Ruta Falset':
            switch($diahoynum){
                case 1:
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
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
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
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
              break;
             case 'Ruta Montroig':
                 
                switch($diahoynum)
                {
                   case 1:
                      $entrega = Carbon::now()->addDays(3);
                      break;
                   case 2:
                      if($dateday > 0)
                        {
                            $entrega = Carbon::now()->addDays(1);
                        }
                        else
                        {
                            $entrega = Carbon::now()->addDays(8);
                        }
                      break;
                    case 3:
                      $entrega = Carbon::now()->addDays(7);
                      break;
                    case 4:
                      $entrega = Carbon::now()->addDays(6);
                      break;
                    case 5:
                      $entrega = Carbon::now()->addDays(5);
                      break;
                    case 6:
                      $entrega = Carbon::now()->addDays(4);
                      break;
                    default:
                      $entrega = Carbon::now()->addDays(3);
                      break;
                }
                    $entregadia = $entrega->format('l');
                    $entregadianum = $entrega->format('j');
                    $diasentrega = $entrega->diffInDays($datehoy);
                    //dd($entrega);
                    break;
          case 'Ruta 1':
            switch($diahoynum){
                case 1:
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
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
              break;
          case 'Ruta 2':
          case 'Ruta 4':
            switch($diahoynum)
            {
                case 1:
                  $entrega = Carbon::now()->addDays(3);
                  break;
                case 2:
                  $entrega = Carbon::now()->addDays(2);
                  break;
                case 3:
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
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
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
                        $entrega = Carbon::now()->addDays(4);
                    }
                  
                  break;
              }
              $entregadia = $entrega->format('l');
              $entregadianum = $entrega->format('j');
              $diasentrega = $entrega->diffInDays($datehoy);
              break;
          case 'Ruta Montblanc':
          case 'Ruta LLeida':
              switch($diahoynum){
                case 1:
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
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
              break;
          case 'Ruta Vilafranca':
          switch($diahoynum){
                case 1:
                  $entrega = Carbon::now()->addDays(3);
                  break;
                case 2:
                  $entrega = Carbon::now()->addDays(2);
                  break;
                case 3:
                    if($dateday > 0)
                    {
                        $entrega = Carbon::now()->addDays(1);
                    }
                    else
                    {
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
              break;
          default:
              $entrega = Carbon::now()->addDays(2);
              $entregadia = $entrega->format('l');
              $entregadianum = $entrega->format('j');
              $diasentrega = $entrega->diffInDays($datehoy);
              break;
        }
        

        switch($entregadia) {
          case 'Monday':
              $entregadia ='Lunes';
              break;
          case 'Tuesday':
              $entregadia ='Martes';
              break;
          case 'Wednesday':
              $entregadia ='Miércoles';
              break;
          case 'Thursday':
              $entregadia ='Jueves';
              break;
          case 'Friday':
              $entregadia = 'Viernes';
              break;
          case 'Saturday':
              $entregadia = 'Sábado';
              break;
          default:
              $entregadia = 'Domingo';
              break;
        }
        
        //dd($entregadia);
        
                $request->session()->put(['nomRuta'=> $nomRuta]);
                if (isset($user))
                {
                    //dd($diasentrega);
                    $temporal = new Temporals([
                            'user' => Auth::user()->id,
                            'email' => Auth::user()->email,
                            'poblacion' => $pobl,
                            'cantidad'=> $cantidad2,
                            'unidad'=> $unidad,
                            'preciol' => $preciol2,
                            'codigopost' => $cp,
                            'entregadia' => $entregadia,
                            'entregadianum' => $entregadianum,
                            'dentrode' => $diasentrega,
                            'provincia' => $provincia,
                            
                    ]);
                    $temporal->save();
                    //dd( $cantidad2);
                }
                else
                {
                     $nomRuta =$poblacion->nombreruta;
                $request->session()->put(['nomRuta'=> $nomRuta]);
                
                
                     $temporal = new Temporals([
                            'user' => '666666',
                            'email' => 'notemail@no.com',
                            'poblacion' => $pobl,
                            'cantidad'=> $cantidad2,
                            'unidad'=> $unidad,
                            'preciol' => $preciol2,
                            'codigopost' => $cp,
                            'entregadia' => $entregadia,
                            'entregadianum' => $entregadianum,
                            'dentrode' => $diasentrega,
                            'provincia' => $provincia,
                    ]); 
                    $temporal->save();  
                    //dd($preciol2);
                }
                
                
                return view('bienvenido',compact('pobl','cantidad' ,'nomRuta','unidad','preciol2'));
            }
            elseif(!is_null($postal))
            {

                $tarifa1 = Tarifas::where('rango1', '=',0)->where('zona','=', $postal->idzona)->latest('created_at','asc')->first();
                $tarifa2 = Tarifas::where('rango1', '=',400)->where('zona','=', $postal->idzona)->latest('created_at','asc')->first();
                $tarifa3 = Tarifas::where('rango1', '=',1000)->where('zona','=', $postal->idzona)->latest('created_at','asc')->first();
                
                if($cantidad < 400)
                {
                    $preciol2 = $tarifa1->precio;
                }
                elseif(($cantidad < 1000) && ($cantidad > 399))
                {
                    $preciol2 = $tarifa2->precio;
                }
                elseif(($cantidad > 999))
                {
                    $preciol2 = $tarifa3->precio;
                }

                if($unidad == 'Lts.')
                    {
                        $cantidad2 = $cantidad;
                    }
                    else
                    {
                        $cantidad2 = $cantidad/$preciol2;
                        $cantidad2 =round($cantidad2*1000)/1000;
                    }

                     $nomRuta =$postal->nombreruta;
                     $request->session()->put(['preciol'=> $preciol2]);
                     $request->session()->put(['totalfinan'=>$totalfinan]);
                     $request->session()->put(['nomRuta'=> $nomRuta]);
                     
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
                      
                if (isset($user))
                {
                    $temporal = new Temporals([
                            'user' => Auth::user()->id,
                            'email' => Auth::user()->email,
                            'poblacion' => $postal->poblacion,
                            'cantidad'=> $cantidad2,
                            'unidad'=> $unidad,
                            'preciol' => $preciol2,
                            'codigopost' => $postal->codigopost,
                            'entregadia' => $entregadia,
                            'entregadianum' => $entregadianum,
                            'dentrode' => $diasentrega,
                            'provincia' => $provincia,
                            'meses' => $meses,
                    ]);
                 dd("hola3");
                    $temporal->save();
                }
                else
                {
                     $temporal = new Temporals([
                            'user' => '666666',
                            'email' => 'notemail@no.com',
                            'poblacion' =>  $postal->poblacion,
                            'cantidad'=> $cantidad2,
                            'unidad'=> $unidad,
                            'preciol' => $preciol2,
                            'codigopost' => $postal->codigopost,
                            'entregadia' => $entregadia,
                            'entregadianum' => $entregadianum,
                            'dentrode' => $diasentrega,
                            'provincia' => $provincia,
                            'meses' => $meses,
                    ]); 
                    $temporal->save();  
                }
                
                $pobl = $postal->poblacion;
                dd("hola4");
                return view('bienvenido',compact('pobl','cantidad' ,'nomRuta','unidad','preciol2'));
            }
            else 
            {
dd("hh");
               return view('consulta.index');
            }

           
        }
        else
        {
            
           return view('consulta.index');
        }  

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
