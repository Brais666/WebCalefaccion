<?php
use Carbon\Carbon;
//dd(session());


  if(session()->has('poblacion'))
    {
        $poblses = session('poblacion');
        $nomRuta = session('nomRuta');
        $diferencialitro2 = session('diferencialitro2');
        $result =session('result');
    }

    if(session()->has('preciol'))
    {
        $preciol2ses = session('preciol');
    }

if(isset($preciol2ses))
    {
        $diferencialitro1 = session('diferencialitro2');
    }
    else
    {
        $diferencialitro = 0;
    }

  $datehoy = Carbon::now();
  $datehoy2 = Carbon::now()->format('l');
  $diahoy = Carbon::now()->format('j');
  $datemed = $datehoy->format('Y-m-d 12:00:00');
  $dateday = $datehoy->diffInMinutes($datemed,false);
  $diahoynum = $datehoy->dayOfWeek;
  if($dateday > 0)
        {
            $entrega = Carbon::now()->addDays(0);
            //dd($entrega);
        }
        else
        {
            $entrega = Carbon::now()->addDays(1);
        }
  $entregadia = $entrega->format('l');
  $entregadianum = $entrega->format('j');
  $diasentrega = $entrega->diffInDays($datehoy);
  $valor = 0.341;
  
  //dd($entrega);
  
  if ( isset($unidad) ) {   
      
  }
  else
  {
    $unidad = "";
  }

  if ( isset($cantidad) ) 
  {
    $cantidad2 =$cantidad;   
  }
  else
  {
     $total =0;
     $cantidad2=0;
     $cantidad = 0;
     $diferencia = 0;
  }

  if ( isset($nomRuta) ) {   
  }
  else
  {
    $nomRuta = "";
  }

  if ( isset($pobl) ) {   
  }
  else
  {
    $pobl = "";
  }
 
  
  if($unidad == '€')
  {
    $total = $cantidad;
    $cantidad2 = $cantidad/$preciol2;
    $cantidad2 =round($cantidad2*1000)/1000;
  }
  else
  {
    $cantidad2 =$cantidad;
    $total = $cantidad2 * $preciol2;
  }
    
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
                }
                else
                {
                    $entrega = Carbon::now()->addDays(2);
                }
              $entregadia = $entrega->format('l');
              $entregadianum = $entrega->format('j');
              
              
              
              if($diasentrega > 0)
              {
                  $diasentrega = $entrega->diffInDays($datehoy);
              }
              else
              {
                  $diasentrega = 1;
              }
              break;

          case 'Ruta 3':
          case 'Ruta 5':
            switch($diahoynum)
            {
                case 1:
                  $entrega =Carbon::now()->addDays(7);
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
            switch($diahoynum)
            {
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
                      $entrega = Carbon::now()->addDays(2);
                      break;
                    case 2:
                      if($dateday > 0)
                        {
                            $entrega = Carbon::now()->addDays(1);
                        }
                        else
                        {
                            $entrega = Carbon::now()->addDays(3);
                        }
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
                  $entrega = Carbon\Carbon::now()->addDays(3);
                  break;
                default:
                  $entrega = Carbon\Carbon::now()->addDays(2);
                  break;
              }

              $entregadia = $entrega->format('l');
              $entregadianum = $entrega->format('j');
              $diasentrega = $entrega->diffInDays($datehoy);
              break;
          
              
          case 'Ruta Vilafranca':
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

       if($cantidad2 <= 200)
       {
        $comision = 0.03;
       }
       else if($cantidad2 >=200 )
       {
        $comision = 0.03;
       }
       else if($cantidad2 >=300 )
       {
        $comision = 0.02;
       }
       else if($cantidad2 >=400 )
       {
        $comision = 0.015;
       }
       else if($cantidad2 >=500 )
       {
        $comision = 0.01;
       }

       $interes = 0.341447;

        if ( isset($preciol2) ) {  
          $preciol2 =$preciol2; 
        }
        else
        {
          $preciol2 = 0;
        }

        $result= (($preciol2+$comision)*($cantidad2))*($interes);

        $result=round($result*100)/100;
        
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
          session()->put(['preciol'=> $diferencialitro2]);
          session()->put(['totalfinan'=> $result * $meses]);
          session()->put(['entrega'=> $entregadia]);
          session()->put(['numerodia'=> $entregadianum]);

        }  
        
        
  ?>
  <script type="text/javascript">
        /* Funcion suma. */
    function SumarAutomatico (valor) {
      var cantidad = "<?php echo $cantidad2 ?>";
      var preciol2 ="<?php echo $preciol2 ?>";
      var comision = "<?php echo $comision ?>";
      var total = "<?php echo $total ?>";
      
      $comision = parseFloat(comision);
      $preciol2 = parseFloat(preciol2);
      $cantidad = parseFloat(cantidad);
      $total = parseFloat(total);

      
      $valor = parseFloat(valor); // Convertir a numero decimal (número).

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

      /* Variable generando la suma. */
      //$result= (($preciol+$comision)*($cantidad2))*($valor);

      $1result = $preciol2 + $comision;
      $2result = $1result * $cantidad;
      $result = $2result * $valor ;
      $valor = Math.round($valor*1000)/1000;
      $result2 = $result;
      $result = Math.round($result*100)/100;
      $diferencia = (($result2 * $meses) - $total);

      $diferencia = Math.round($diferencia*100)/100;

      $diferencia2 = $diferencia / $preciol2

      $diferencialitro =$diferencia2 / $cantidad;
      $diferencialitro2 = $diferencialitro + $preciol2;

      $diferencialitro2 =Math.round($diferencialitro2*100)/100;
      $totalfinan = $result2*$meses;
      $totalfinan = Math.round($totalfinan*100)/100;
      // Escribir el resultado en una etiqueta "span".
      document.getElementById('result').innerHTML = $totalfinan;
      //document.getElementById('diferencia').innerHTML = $diferencia;
      //document.getElementById('diferencialitro2').innerHTML = $diferencialitro2;
      document.getElementById('valor').innerHTML = $valor;
      document.getElementById('comi').innerHTML = $comision;
  }
  </script>
  
 
@extends('layouts.app')
@section('title', 'SimonGrup')
@section('content')
<div class="container">
        @if (auth()->check())
          <form class="pt-2" action="#" method="POST" id="pedido">
          <div class="form-group">
              @csrf                  
                <div class="col-sm-12 pb-1 mb-bienv col-xs-12">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="col-sm-12 border pt-2 pb-1">
                      <div class="row pt-1">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-6 col-xs-7 text-blue"><p>Fecha de entrega</p></div>
                        <div class="col-lg-5 col-md-5 col-xs-5"><p class="float-left" data-toggle="tooltip" data-placement="top" title="Día de reparto">{{$entregadia}} {{$entregadianum}} </p></div>
                      </div>
                      <hr class="blue">
                      <div class="row pt-1">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-6 col-xs-7 text-blue"><p>Días hasta entrega</p></div>
                        <div class="col-lg-5 col-md-5 col-xs-5"><p class="float-left">{{$diasentrega}} Días</p></div>
                        
                      </div>
                      <hr class="blue">
                      <div class="row pt-1 mb-5">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-6 col-xs-7 text-blue"><p>Población</p></div>
                        <div class="col-lg-5 col-md-5 col-xs-5">
                        <?php
                            if(session()->has('poblacion'))
                           {?>
                           <p class="float-left">{{$poblses}}</p></div>
                           <?php 
                               
                           }
                           else
                           {
                               ?>
                            <p class="float-left">{{$pobl}}</p></div>
                            <?php 
                               
                           }
                           ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12 pt-mov pttab-1">
                      <div class="col-sm-12 border">
                        <div class="row pt-2 mr-3">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-6 col-xs-7"><p>Precio por litro</p></div>
                          <div class="col-sm-4 col-xs-5 float-right" name="preciol">
                              <?php
                            if(session()->has('preciol'))
                           {?>
                           <p class="float-right total" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro">{{$preciol2ses}} €</p></div>
                           <?php 
                               
                           }
                           else
                           {
                               ?>
                            <?php 
                           }
                           ?>
                          <div class="col-sm-1"></div>
                        </div> 
                        <div class="row mr-3">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-6 col-xs-9"><p>Total</p></div>
                          <div class="col-sm-4 col-xs-3 float-right"><span class="float-right totalmini" id="pedido" data-toggle="tooltip" data-placement="top" title="Precio a pagar total">{{$total}} € </span></div>
                          <div class="col-sm-1"></div>
                        </div> 
                        <div class="row mb-3 pt-2 pb-2 pbtab-2 text-center foc" >
                            @if($total == 0)
                                <button type="submit" class="btn btnheight buttoncons" name="medio" id="medio" data-toggle="tooltip" data-placement="top" title="Tooltip on top" > <a href="#" class="btn blue no-margin" style="color:white;" disabled >Hacer Pedido</a></button>
                            @else   
                                <button type="submit" class="btn btnheight buttoncons xs-buttons" data-toggle="tooltip" data-placement="top" title="hacer pedido"> <a href="{{route('pedidos.store')}}" class="btn blue no-margin " style="color:white;" >Hacer Pedido</a></button>
                            @endif
                        </div>
                      </div>
                    </div>
                </div>              
              </div>
            </div>
        @else
          <form class="pt-1">
            <div class="form-group">
              @csrf                  
              <div class="col-sm-12 pb-1 mb-bienv col-xs-12 ">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="col-sm-12 border pt-2 pb-1">
                        <div class="row pt-1">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-5 text-blue col-xs-7 text-blue"><p>Fecha de entrega</p></div>
                          <div class="col-sm-5 col-xs-5"><p class="float-left" data-toggle="tooltip" data-placement="top" title="Día de reparto"> {{$entregadia}} {{$entregadianum}}</p></div>
                        <div class="col-sm-1"></div>
                        </div>
                        <hr class="blue">
                        <div class="row pt-1">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-5 text-blue col-xs-7 text-blue"><p>Días hasta entrega</p></div>
                          <div class="col-sm-5 col-xs-5"><p class="float-left">{{$diasentrega}} Días</p></div>
    
                        </div>
                        <hr class="blue">
                        <div class="row pt-1 mb-5">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-5 text-blue col-xs-7 text-blue"><p>Población</p></div>
                          <div class="col-sm-5 col-xs-5"><p class="float-left">{{$pobl}}</p></div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 pt-mov">
                      <div class="col-sm-12 border">
                        <div class="row pt-2 mr-3">
                            <div class="col-sm-1"></div>
                          <div class="col-sm-6 col-xs-7"><p>Precio por litro</p></div>
                          <div class="col-sm-4 col-xs-5 float-right" name="preciol"><p class="float-right total" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro">{{$preciol2}} €</p></div>
                          <div class="col-sm-1"></div>
                        </div> 
                        <div class="row mr-3">
                          <div class="col-sm-1"></div>
                          <div class="col-sm-6 col-xs-8"><p>Total</p></div>
                          <div class="col-sm-4 col-xs-4 float-right"><span class="float-right totalmini" id="pedido" data-toggle="tooltip" data-placement="top" title="Precio a pagar total" >{{$total}} € </span></div>
                          <div class="col-sm-1"></div>
                        </div> 
                        <div class="row mb-3 pt-2 pb-2 text-center">
                             @if($total == 0)
                                <button type="submit" class="btn btnheight buttoncons xs-buttons" name="medio" id="medio" data-toggle="tooltip" data-placement="top" title="No se puede hacer pedido de 0" > <a href="#" class="btn blue no-margin" style="color:white;" disabled >Hacer Pedido</a></button>
                            @else   
                                <button type="submit" class="btn btnheight buttoncons xs-buttons " data-toggle="tooltip" data-placement="top" title="hacer pedido" > <a href="{{ url('/login?redirect_to='.url()->full())}}" class="btn blue no-margin " style="color:white;">Hacer Pedido</a></button>
                            @endif
                            
                        </div>
                      </div>
                    </div>
                  </div>
               </div>              
              </div>                     
          </form>
        @endif
        <input type="hidden" class="row " tabindex="-1" id="foc"></input>
        <div class="form-group bg-info" >
            <div class="col-sm-12 col-xs-12 mb-5 pt-1 ">
              <div class="col-sm-12">
              <div class="row pt-2 border ">
                  <div class="col-sm-6">
                    <div class="row ">
                      <div class="col-sm-12 ">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-5 text-center ">
                          <img height="65em" src="images/Vivo.png">
                        </div>
                        <div class="col-sm-4">
                        </div>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-11 text-center pt-1 ">
                        <p class="pt-1 pr-2 lfinan2">Financia tu gasóleo calefacción con el plan dinámico de crédito Vivo.</p>
                        <p class="pt-1 pr-2 lfinan">Cada cuota liquidada vuelve a estar inmediatamente a tu disposición sin necesidad de realizar nuevos trámites ni liquidar la totalidad de los plazos</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 vertical-line">
                    <div class="row pt-1">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-6 text-vivo"><p class="lfinan3"><small>Quiero mis cutoas financiadas a</small></p></div>
                      <div class="col-sm-4">
                        <select name="term" onchange="SumarAutomatico(this.value);" class="form-control selectfinan" id="term" >                        
                          <option value="0.341447" selected>3 meses</option>
                          <option value="0.256987">4 meses</option>
                          <option value="0.206313">5 meses</option>
                          <option value="0.172531">6 meses</option>
                          <option value="0.148403">7 meses</option>
                          <option value="0.130307">8 meses</option>
                          <option value="0.116234">9 meses</option>
                          <option value="0.104976">10 meses</option>
                          <option value="0.095766">11 meses</option>
                          <option value="0.088092">12 meses</option>
                        </select>
                      </div>
                    </div>
                    <div class="row pt-1">
                        @if(isset($preciol2ses))
                            <div class="col-sm-1"></div>
                          <div class="col-sm-6 col-xs-7"><p>Precio por litro</p></div>
                          <div class="col-sm-4 col-xs-5 total"><span class=" float-right" id="diferencialitro">{{$diferencialitro1}} €</span></div>
                        @else
                          <div class="col-sm-1"></div>
                          <div class="col-sm-6 col-xs-7"><p>Precio por litro</p></div>
                          <div class="col-sm-4 col-xs-5 total"><span class=" float-right" id="diferencialitro">{{$diferencialitro2}} €</span></div>
                         @endif
                    </div> 
                    <div class="row pt-1">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-6 col-xs-8"><p>Total</p></div>
                      <div class="col-sm-4 col-xs-4 "><span id="result" class="totalmini float-right">{{$result*$meses}} €</span></div>
                    </div>
                    <div class="row pedido text-center">
                        @if (auth()->check())
                            @if($total == 0)
                                <button type="submit" class="btn buttonfinan mlmov-1"><a href="# " style="color:white;" id="pedbtn" disabled>Hacer pedido financiado</a></button>
                            @else   
                                <button type="submit" class="btn buttonfinan mlmov-1"><a href="{{route('pedidofinanciado.store')}} " style="color:white;" id="pedbtn">Hacer pedido financiado</a></button>
                            @endif
                        @else
                            <button type="submit" class="btn buttonfinan mlmov-1" disabled data-toggle="tooltip" data-placement="top" title="Es necesario loguearse o registrarse para activar esta función"><a href="{{route('pedidofinanciado.store')}} " style="color:white;" id="pedbtn">Hacer pedido financiado</a></button>
                        @endif
                    </div>
                  </div>
                    <div class="row detalles">
                        <div class="row" id="jua">
                            <div class="col-sm-12 col-xs-12 text-center" id="detalles2"><span class="material-icons text-vivo toggle"><b>arrow_drop_down</b></span></div>
                        </div>
                        <div class="row tabindex="-1"">
                          <a href="#jua" onclick="myFunction()"><p class="text-center toggle">Detalles</p></a> 
                        </div>
                    </div>
                    <div class="showpanel text-center pt-1" id="hola">
                        <div class="row">
                            <span class="material-icons text-vivo toggle "><b>arrow_drop_up</b></span>
                        </div>
                        <div class="col-sm-12">
                            <div class="row formcons bg-white">
                                <div class="col-sm-6 col-xs-12"> 
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-5 col-xs-8 text-vivo"><small><p>Comisión aplicada</p></small></div>
                                        <div class="col-sm-5 col-xs-4 "><small class="float-left"><span id="comi">{{$comision}}</span> €</p></small></div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-5 col-xs-8 text-vivo"><small><p>Coeficiente de cálculo para cuota mensual</p></small></div>
                                        <div class="col-sm-5 col-xs-4"><small class="float-left"><p name="interes" ><span id="valor">{{$valor}}</span> € </p></small></div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10 col-xs-12">
                                            <p class="peq">*coeficiente calculado en base a un tipo de interés fijo del 8'50% + TAE + la comisión de apertura.</p>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10 col-xs-12">
                                            <p class="peq">Nota: Este simulador de cuotas es meramente orientativo por lo que puede que no se ajuste con total exactitud a la cuota real y por lo tanto carece de valor contractual.</p>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
     </div>
</form>
         
<script>
$( "p.toggle" ).click(function() {
  $( ".showpanel" ).slideToggle( "slow" );
});
</script>

<script>
$( "p.toggle" ).click(function() {
  $( ".swipe-promo" ).slideToggle( "slow" );
});
</script>



<script>
function myFunction() {
  document.getElementById('detalles2').style.display = "none";
}
</script>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

  function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('poblacion').value;
  var usuario2 = document.getElementById('cantidad').value;
   var unidad = document.getElementById('unidad').value;
  var total = document.getElementById('pedido');
  if(usuario.length == 0) {
    if(usuario2.length == 0) {
    swal('No has escrito nada ni en la población, ni en la cantidad',);
    return;
      }
      else
      {
        swal('No has escrito nada en la población',);
        return;
      }
    
  }
 
  if(usuario2.length == 0) {
     if(usuario.length == 0) {
      swal('No has escrito nada ni en la población, ni en la cantidad',);
      return;
    }
    else
    {
      swal('No has escrito nada en la cantidad',);
      return;
    }
  }

  if(pedido.length == 0)
  {
    swal("no se puede realizar el pedido de 0",);
  }
  this.submit();
}
</script>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("pedido").addEventListener('submit', validarFormulario); 
});

  function validarFormulario(evento) {
  evento.preventDefault();
 
  var pedido = document.getElementById('pedido')
 
 if(pedido.length == 0){
    swal("no se puede realizar el pedido de 0",);
  }
  this.submit();
    }
</script>

<script type="text/javascript">
    window.onload = function () {
        document.getElementById("foc").focus();
    }
</script>

@endsection