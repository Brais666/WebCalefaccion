<?php
use App\Oferta;
use App\Temporals;

$id = Auth::user()->id;
$temporal = Temporals::find($id);
$temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();
$preciol = $temporal->preciol;
$datehoy = Carbon\Carbon::now();

//dd($preciol);


 if(session()->has('poblacion'))
    {
        $diferencialitro2 = session('diferencialitro2');
        $result =session('result');
        $meses = session('meses');
        $result =round($result*100)/100;
        //dd($result);
    }
else
{
    $diferencialitro2 = 0;
    $result = 0;
}
    
    
if(!empty($temporal))
{
    if($temporal->unidad == '€')
    {
        $total = $temporal->preciol * $temporal->cantidad;
        $cantidad =  $temporal->cantidad; 

    }
    else
    {
       $total = $temporal->preciol * $temporal->cantidad;
       $cantidad = $temporal->cantidad;
    
    }
    
    if(!empty($total2))
    {
        $total = $total2;  
    }
    else
    {
        $total = $temporal->preciol * $temporal->cantidad;
    }
    
}
else
{
    if(!empty($total2))
    {
        //dd($total2);
    }
    else
    {
        dd($juas);
    }
    
    $total=$cantidad2;
    $cantidad = $cantidad2;
}

$session = Session::get('_token');
$now = $datehoy;
$codigopromo = "";
$codcli = auth()->user()->codigoempresa;
$email =  auth()->user()->email;
$cp= auth()->user()->CP;
$temporal->cantidad  = round($temporal->cantidad*100)/100;
//dd($request);



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
       
          //session()->put(['preciol'=> $diferencialitro2]);
          //session()->put(['totalfinan'=> $result * $meses]);
?>

<!--<script>
    window.addEventListener("load", cargaPagina);
    function cargaPagina() {
        var btn = document.getElementById("codigoval").addEventListener("click", cambiaValores);
        
        var codigopromo = document.getElementById('txtPromocion').value;
        
    }

    function cambiaValores() {
        var inputNombre = document.getElementById("txtTotal");
        var  codigopromo  = document.getElementById('txtPromocion').value;
         
        inputNombre.value = "2";
    }

</script>-->
<script type="text/javascript">
        /* Funcion suma. */
    function SumarAutomatico (valor) {
      var cantidad = "<?php echo $cantidad ?>";
      var preciol ="<?php echo $preciol ?>";
      var comision = "<?php echo $comision ?>";
      var total = "<?php echo $total ?>";
      
      
      
    
      $comision = parseFloat(comision);
      $preciol = parseFloat(preciol);
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

      $1result = $preciol + $comision;
     // document.write($preciol);
      $2result = $1result * $cantidad;
      $result = $2result * $valor ;
      $valor = Math.round($valor*1000)/1000;
      $3result = $result;
      $result2 = $3result;
      $result = Math.round($result*100)/100;
      $result2 = Math.round($result2*1000)/1000;
      $diferencia = (($result2 * $meses) - $total);
      
      
      $diferencia = Math.round($diferencia*100)/100;
      $diferencia2 = $diferencia / $preciol
      $diferencialitro =$diferencia2 / $cantidad;
      $diferencialitro2 = $diferencialitro + $preciol;
      $diferencialitro2 =Math.round($diferencialitro2*1000)/1000;
      $totalfinan = $result2*$meses;
      $totalfinan = Math.round($totalfinan*100)/100;
     // document.write($totalfinan);
      // Escribir el resultado en una etiqueta "span".
      document.getElementById('result').innerHTML = $totalfinan;
      document.getElementById('txtFinan').innerHTML = $totalfinan;
      document.getElementById('preciol').innerHTML = $diferencialitro2;
     // document.getElementById('meses').innerHTML = $meses;
      //document.getElementById('resultfin').innerHTML = $totalfinan;
       //document.getElementById('result').value = $totalfinan;
     
      /*$http.post("http://localhost/nueva3/public/pedidos", {totalfinan:$totalfinan});
      $.post("http://localhost/nueva3/public/pedidofinanciado", {meses:$meses});*/
      
     
       
  }
  

  
  </script>
  
  <?php
    $total = (($preciol+$comision)*($cantidad))*($interes);
    $total = round($total*100)/100;
    $totalfinan = $result * $meses;
    //dd($totalfinan);
    //dd($meses);
    //dd(session());
    ?>
      
@extends('layouts.apppedfinan2')
@section('title', 'SimonGrup')
@section('content')

<div class="col-sm-2"></div>
<div class="container-fluid border col-sm-8 col-xs-11 mt-2 mlmov-1 mb-2 pb-2">         
                <div class="row pt-2 ml-2 mlmov-2">
                    <div class="col-lg-11">
                        <h2>Resumen del Pedido financiado</h2>
                    </div>
                </div>
                <div class="row ml-2 mlmov-3">
                    <h5 class="ml-2">Datos de contacto</h5>
                </div>
                <div class="row pb-1 ml-2 mlmov-3">
                    <p class="ml-2">Rellene los campos o modifique los que considere necesario.</p>
                </div>
                
                @if(count($errors) > 0)
            		<div class="errors bg-danger text-danger">
            			<ul>
            			@foreach($errors->all() as $error)
            				<li>{{ $error }}</li>
            			@endforeach
            			</ul>
            		</div>
            	@endif
                <form action="{{ route('pedidos.store') }}" method="POST">
                    @csrf
                    <div class="form-row ml-2 mr-2">
                            <input type="hidden" class="form-control" id="txtSession" value="{{session::get('_token')}}" name="txtSession">
                            <input type="hidden" class="form-control" id="txtProvincia" value="{{$temporal->provincia}}" name="txtProvincia">
                            <input type="hidden" class="form-control" id="txtCodCli" value="{{$codcli}}" name="txtCodCli">
                            <input type="hidden" class="form-control" id="txtFinan"  value ="1" name="txtFinan">
                            <input type="hidden" class="form-control" id="txtNombre"  name="txtNombre" value="{{Auth::user()->name}}" readonly="true">
                            <input type="hidden" class="form-control" id="txtFecha_ini" name="txtFecha_ini" value="{{$datehoy->format('Y-m-d')}}" readonly="true"></input>
                            
                        
                        <div class="col-lg-6 pb-2">
                            <div class="row">
                                <div class="form-group col-lg-7">
                                    <label for="Direccion">Dirección:</label>
                                    <input type="text" class="form-control inputfinan" id="Direccion" name="Direccion" value="{{Auth::user()->address}}">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="tel">Teléfono contacto:</label>
                                    <input type="text" class="form-control inputfinan" id="tel" value="{{Auth::user()->telefono}}" name="tel">
                                    @if(!empty($temporal))
                                    <input type="hidden" class="form-control" id="CP" value="{{$temporal->codigopost}}" name="CP">
                                    @else
                                    <input type="hidden" class="form-control" id="CP" value="{{$cp}}" name="CP">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                @if(isset(Auth::user()->dni))
                                <div class="form-group col-lg-4">
                                    <label for="Dni">DNI / CIF:</label>
                                    <input type="text" class="form-control inputfinan" id="Dni" name="Dni" value="{{Auth::user()->dni}}" readonly="true"></input>
                                </div>
                                @else
                                <div class="form-group col-lg-4">
                                    <label for="Dni">DNI / CIF:</label>
                                    <input type="text" class="form-control inputfinan" id="Dni" name="Dni" placeholder=""></input>
                                </div>
                                @endif
                                 <div class="form-group col-lg-8">
                                    <label for="txtEmail">Email:</label>
                                    <input type="text" class="form-control inputfinan" id="txtEmail"  name="txtEmail" value="{{$email}}" readonly="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                               <div class="col-lg-12">
                                   <label for="tel">¿Tienes alguna indicación? Escríbela aquí</label>
                                   <textarea class="form-control inputfinan" id="exampleFormControlTextarea1" rows="5"></textarea>
                               </div>
                            </div>
                        
                       
                        
                            
                        
                      
                            @if(!empty($temporal))
                            <input type="hidden" class="form-control" id="txtPoblacion" value="{{$temporal->poblacion}}" name="txtPoblacion" readonly="true">
                            @else
                            <input type="hidden" class="form-control" id="txtPoblacion" value="{{$poblacion}}" name="txtPoblacion">
                            @endif
                        
                        
                        
                            <input type="hidden" class="form-control" id="txtCanal" value="WEB" name="txtCanal" readonly="true">
                            <input type="hidden" class="form-control" id="txtEstado" value="Pendiente" name="txtEstado" readonly="true">
                            <input type="hidden" class="form-control" id="txtProducto" name="txtProducto" value="GOB" readonly="true">

                        <div class="form-group col-sm-2">
                            
                            @if(!empty($temporal))
                                @if($temporal->unidad == 'Lts.')
                                    <input type="hidden" class="form-control" id="txtCantidad" name="txtCantidad" value="{{$temporal->cantidad }} " readonly="true">
                                @else
                                    <input type="hidden" class="form-control" id="txtCantidad" name="txtCantidad" value="{{round(($cantidad)*1000)/1000}}" readonly="true">
                                @endif
                            @else
                            <input type="text" class="form-control" id="txtCantidad" name="txtCantidad" value="{{$cantidad }}" readonly="true">
                            @endif
                        </div>
                         <div class="form-group col-sm-2">
                            <input type="hidden" class="form-control" id="txtTotal" value="{{round($total*10)/10 }} " name="txtTotal" readonly="true">
                        </div>
                        <hr class="red">
                        <div class="row pt-2">
                            <h5 class="ml-22">Resumen del Pedido</h5>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row col-sm-12 pt-2 pb-1">
                                     <div class="row pt-1">
                                          <div class="col-sm-1"></div>
                                          <div class="col-sm-6 col-xs-7 text-vivo"><p>Financiado a</p></div>
                                          <div class="col-sm-4 col-xs-5">
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
                                            <div class="col-sm-1"></div>
                                        </div>
                                        
                                    <hr class="red2">
                                     <div class="row pt-1">
                                      <div class="col-sm-1"></div>
                                      <div class="col-sm-7 col-xs-7 text-vivo"><p>Fecha de entrega</p></div>
                                      <div class="col-sm-3 col-xs-5"><p class="float-right" data-toggle="tooltip" data-placement="top" title="Día de reparto"> {{$temporal->entregadia}} {{$temporal->entregadianum}}</p></div>
                                      <div class="col-sm-1"></div>
                                    </div>
                                    <hr class="red2">
                                    <div class="row pt-1">
                                      <div class="col-sm-1"></div>
                                      <div class="col-sm-7 col-xs-8 text-vivo"><p>Días hasta entrega</p></div>
                                      <div class="col-sm-3 col-xs-4"><p class="float-right">{{$temporal->dentrode}} Días</p></div>
                                      <div class="col-sm-1"></div>
                                    </div>
                                    <hr class="red2">
                                    <div class="row pt-1 mb-5">
                                      <div class="col-sm-1"></div>
                                      <div class="col-sm-7 col-xs-8 text-vivo"><p>Población</p></div>
                                      <div class="col-sm-3 col-xs-4"><p class="float-right">{{$temporal->poblacion}}</p></div>
                                      <div class="col-sm-1"></div>
                                    </div>
                                    
                                     <div class="regresar text-center">
                                        <button type="submit" class="btn buttonfinan" ><a href="bienvenido" style="color:white;">Volver atrás</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                               
                                 @if(!empty($temporal))
                                        <div class="form-row ">
                                            <div class="form-group col-sm-8  nopl" id="codprom">
                                             @if(empty($success))
                                                    <small><input type="text" class="form-control inputv" id="txtPromocion" name="txtPromocion" placeholder="¿Tienes un código promocional? Introdúcelo!"></small>
                                                
                                                @if(!empty($danger))<i class="fas fa-times text-danger"></i>
                                                    <br><div class=" col-sm-10 text-danger"> {{ $danger }}</div>
                                                @endif
                                            @endif
                                            @if(!empty($success))
                                                <div class=" col-lg-11 success alert-success"> {{ $success }}</div>
                                            @endif
                                            </div>   
                                        </div>
                                @endif
                                <div class="row col-sm-12 pb-1">
                                    <div class="row">
                                      
                                      <div class="col-sm-8 col-xs-7"><p>Precio por litro</p></div>
                                      <div class="col-sm-4 col-xs-5 " ><span class="float-right totalmini" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro" name="preciol" id="preciol">{{$diferencialitro2}}€</span></div>
                                      
                                    </div> 
                                    
                                    @if(session('codigopromo') > 0)
                                    
                                    <div class="row pb-1 pt-1">
                                      
                                      <div class="col-sm-8 col-xs-7"><p>Total (IVA incl.)</p></div>
                                      <div class="col-sm-4 col-xs-5  text-muted"><small><span class="float-right total offer" id="result" name="result" value="€">  {{$result*$meses}}€</span></small></div>
                                      
                                      <input type="hidden" id="resultfin" name="resultfin" readonly="true" value="{{$total}}">
                                    </div> 
                                    
                                    <div class="row pb-2 pt-1">
                                      <?php
                                        $vale=10;
                                        $totalfinan = $totalfinan - 10;
                                        ?>
                                      <div class="col-sm-8 col-xs-7"><p>Total con cupón aplicado</p></div>
                                      <div class="col-sm-4 col-xs-5 "><span class="float-right total"  value="€"> {{$totalfinan}} €</span></div>
                                      
                                      <input type="hidden" id="resultfin" name="resultfin" readonly="true" value="{{$total}}">
                                    </div> 
                                    
                                    @else
                                    
                                        <div class="row pb-7 pt-1">
                                          
                                          <div class="col-sm-8 col-xs-7"><p>Total (IVA incl.)</p></div>
                                          <div class="col-sm-4 col-xs-5 "><span class="float-right total" id="result" name="result" value="€">  {{$totalfinan}}€</span></div>
                                          
                                          <input type="hidden" id="resultfin" name="resultfin" readonly="true" value="{{$total}}">
                                        </div>
                                        
                                    @endif
                                    
                                    <div class="row mlmov-4">
                                        <div class="form-check">
                                          <div class="col-sm-2"></div>
                                          <div class="col-sm-8 col-xs-12">
                                            <div class="col-sm-1 col-xs-1">
                                              <input type="checkbox" class="form-check-input" value="1" id="exampleCheck1" onclick="btTutorial.disabled = !this.checked">
                                            </div>
                                            <div class="col-sm-10 col-xs-10">
                                              <a href="condiciones"><p class="form-check-label text-muted" for="exampleCheck1"><small>Acepto las condiciones de servico.<small></p></a>
                                            </div>
                                              
                                          </div> 
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 regresar mlmov-6">
                                        <button type="submit" name="btTutorial" disabled class="btn buttonfinan">Validar pedido</button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--@if(!empty($temporal))
                        <div class="form-row">
                            <div class="form-group col-sm-3" id="codprom">
                                <label for="txtPromocion">Código promocional:</label>
                                <br><small>Introduce código</small>
                                <input type="text" class="form-control" id="txtPromocion" name="txtPromocion">
                            </div>   
                            <div class="form-group col-sm-3" id="simon">
                                <label for="txtSimon">Simon Coins:</label>
                                <br><small class="text-success"> Tienes X Simon Coins <i class="fas fa-1x fa-info-circle text-info" data-toggle="tooltip" data-placement="top" title="*SimonCoin: Moneda adquirida cada 10l de un pedido. &#10; Cada 10 SimonCoins equivale a 1€ de descuento"></i></small>
                                <input type="text" class="form-control" id="txtSimon" name="txtSimon" >
                            </div> 
                        </div>
                        @endif-->
                    

                  </div>  
                </form>
         </div>  

</div>
<script>
    $("#txtPromocion").keydown(function(){
        $("#simon").hide();
    });
</script>
<script>
    $("#simon").keydown(function(){
        $("#codprom").hide();
    });
</script>

<script type="text/javascript">
    window.onload = function () {
        document.getElementById("txtPromocion").focus();
    }
</script>

<script type="text/javascript">
    window.onload = function () {
        document.getElementById("term").focus();
    }
</script>

<script type="text/javascript">
  $(document).ready(function(){
  $('input[type="submit"]').attr('disabled','disabled');
  $('input[type="text"]').keypress(function(){
  if($(this).val() != ''){
  $('input[type="submit"]').removeAttr('disabled');
  }
  });
  });
</script>

@endsection