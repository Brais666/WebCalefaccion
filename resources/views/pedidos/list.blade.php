<?php
use App\Oferta;
use App\Temporals;

$id = Auth::user()->id;
$temporal = Temporals::find($id);
$temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();
$datehoy = Carbon\Carbon::now();
//dd(session());

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
       // dd($total2);
    }
    else
    {
        $id = 666666;
        $temporal = Temporals::find($id);
        $temporal = Temporals::where('user','=',$id)->latest('created_at','asc')->first();
        
    }
    
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
}
$session = Session::get('_token');
$now = $datehoy;
$codigopromo = "";
$codcli = auth()->user()->codigoempresa;
$email =  auth()->user()->email;
$cp= auth()->user()->CP;
$temporal->cantidad  = round($temporal->cantidad*100)/100;
$totaltemp = session('totaltemp');
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
<?
   // dd(session());
   
    ?>
@extends('layouts.app2')
@section('title', 'SimonGrup')
@section('content')
<div class="col-sm-2"></div>
<div class="container-fluid border col-sm-8 col-xs-11 mt-2 mlmov-1 mb-2 pb-2">         
                <div class="row pt-2 ml-2 mlmov-2">
                    <div class="col-lg-11">
                        <h2>Resumen del Pedido</h2>
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
                <form id="formulario" action="{{ route('pedidos.store') }}" method="POST" >
                    @csrf
                    <div class="form-row ml-2 mr-2">
                            <input type="hidden" class="form-control" id="txtSession" value="{{session::get('_token')}}" name="txtSession">
                            <input type="hidden" class="form-control" id="txtProvincia" value="{{$temporal->provincia}}" name="txtProvincia">
                            <input type="hidden" class="form-control" id="txtCodCli" value="{{$codcli}}" name="txtCodCli">
                            <input type="hidden" class="form-control" id="txtFinan" value="0" name="txtFinan">
                            <input type="hidden" class="form-control" id="txtNombre"  name="txtNombre" value="{{Auth::user()->name}}" readonly="true">
                            <input type="hidden" class="form-control" id="txtFecha_ini" name="txtFecha_ini" value="{{$datehoy->format('Y-m-d')}}" readonly="true"></input>
                            
                            <div class="col-lg-6 pb-2">
                                <div class="row">
                                    <div class="form-group col-lg-7">
                                        <label for="Direccion">Dirección:</label>
                                        
                                        
                                        @if(session()->has('address'))
                                            <input type="text" class="form-control input" id="Direccion" name="Direccion" value="{{session('address')}}" >
                                        @else
                                            <input type="text" class="form-control input" id="Direccion" name="Direccion" value="{{Auth::user()->address}}" >
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-5">
                                        
                                        <label for="tel">Teléfono contacto:</label>
                                        
                                        @if(session()->has('telefono'))
                                            <input type="tel" class="form-control input" id="tel" value="{{session('telefono')}}" name="tel" pattern="[0-9]{9}">
                                        @else
                                            <input type="tel" class="form-control input" id="tel" value="{{Auth::user()->telefono}}" name="tel" pattern="[0-9]{9}">
                                        @endif
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
                                            <input type="text" class="form-control input" id="Dni" name="Dni" value="{{Auth::user()->dni}}" readonly="true"></input>
                                        </div>
                                    @else
                                        <?php   
                                           //dd(session('dni'));
                                            ?>
                                        @if(session()->has('dni'))
                                        
                                            <div class="form-group col-lg-4">
                                                <label for="Dni">DNI / CIF:</label>
                                                <input type="text" class="form-control input" id="Dni" name="Dni"  pattern="{9-10}" value="{{session('dni')}}"></input>
                                            </div>
                                        @else
                                            <div class="form-group col-lg-4">
                                                <label for="Dni">DNI / CIF:</label>
                                                <input type="text" class="form-control input" id="Dni" name="Dni" placeholder="" pattern="{9-10}"></input>
                                            </div>
                                        @endif
                                    @endif
                                
                                    <div class="form-group col-lg-8">
                                        <label for="txtEmail">Email:</label>
                                        <input type="text" class="form-control input" id="txtEmail"  name="txtEmail" value="{{$email}}" readonly="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="col-lg-12">
                                   <label for="observaciones">¿Tienes alguna indicación? Escríbela aquí</label>
                                   <textarea class="form-control input" id="observaciones" name="observaciones" rows="5"></textarea>
                               </div>
                            </div>
                                @if(session()->has('poblacion'))
                                    <input type="hidden" class="form-control" id="txtPoblacion" value="{{session('poblacion')}}" name="txtPoblacion">
                                @else
                                    <input type="hidden" class="form-control" id="txtPoblacion" value="{{$poblacion}}" name="txtPoblacion">
                                @endif
                            </div>
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
                            <!--<br><small class="text-danger">Sin promoción: {{$total}}</small>-->
                            <input type="hidden" class="form-control" id="txtTotal" value="{{round($total*10)/10 }} " name="txtTotal" readonly="true">
                        </div>
                        <hr class="blue2">
                        <div class="row pt-2">
                            <h5 class="ml-4">Resumen del Pedido</h5>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row col-sm-12 pt-2 pb-1">
                                     <div class="row pt-1">
                                      <div class="col-sm-1"></div>
                                      <div class="col-sm-6 col-xs-7 text-blue"><p>Entrega prevista</p></div>
                                      <div class="col-sm-4 col-xs-5"><p class="float-right" data-toggle="tooltip" data-placement="top" title="Día de reparto"> {{session('entrega')}} {{session('numerodia')}}</p></div>
                                      <div class="col-sm-1"></div>
                                    </div>
                                    <hr class="blue">
                                    <div class="row pt-1">
                                    <div class="col-sm-1"></div>
                                      <div class="col-sm-7 col-xs-8 text-blue"><p>Días hasta entrega</p></div>
                                      <div class="col-sm-3 col-xs-4"><p class="float-right">{{session('diashasta')}} Días</p></div>
                                      <div class="col-sm-1"></div>
                                    </div>
                                    <hr class="blue">
                                    <?php
                                     //dd(session('poblacion'));
                                     ?>
                                    <div class="row pt-1 mb-5 ">
                                      <div class="col-sm-1"></div>
                                      <div class="col-sm-5 text-blue col-xs-8"><p>Población</p></div>
                                      <div class="col-sm-5 col-xs-4"><p class="float-right">{{session('poblacion')}}</p></div>
                                      <div class="col-sm-1"></div>
                                    </div>
                                     <div class="regresar text-center pb-2">
                                        <button type="submit" class="btn buttoncons" ><a href="bienvenido" style="color:white;">Volver atrás</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                @if(!empty($temporal))
                                        <div class="form-row">
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
                                    <div class="row ">
                                      <div class="col-sm-8 col-xs-7"><p>Precio por litro</p></div>
                                      <div class="col-sm-4 col-xs-5" name="preciol"><p class="float-right totalmini" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro">{{session('preciol')}} €</p></div>
                                      <?php
                                        //dd(session());
                                        ?>
                                    </div> 
                                    
                                    @if(session('codigopromo') > 0)
                                    <div class="row pt-1">
                                      <div class="col-sm-8 col-xs-7"><p>Total (IVA incl.)</p></div>
                                      <div class="col-sm-4 col-xs-5 float-right text-muted"><small><span class="float-right total offer" id="pedido" data-toggle="tooltip" data-placement="top" title="Precio a pagar total">{{$totaltemp}} € </span></small></div>
                                    </div>
                                    <div class="row pb-2 pt-1">
                                      <div class="col-sm-8 col-xs-7"><p>Total con cupón aplicado</p></div>
                                      <div class="col-sm-4 col-xs-5 "><span class="float-right total" id="result" name="result" value="€"> {{$total}}€</span></div>
                                    </div> 
                                    @else
                                    <?php
                                     //dd(session());
                                     ?>
                                        <div class="row pt-1 pb-3">
                                          <div class="col-sm-8 col-xs-7"><p>Total (IVA incl.)</p></div>
                                          <div class="col-sm-4 col-xs-5 float-right "><span class="float-right total" id="pedido" data-toggle="tooltip" data-placement="top" title="Precio a pagar total">{{session('total')}} € </span></small></div>
                                        </div>
                                    @endif
                                    
                                    <div class="row mlmov-4">
                                        <div class="form-check">
                                          <div class="col-sm-2 "></div>
                                          <div class="col-sm-8 col-xs-12">
                                            <div class="col-sm-1 col-xs-1">
                                              <input type="checkbox" class="form-check-input"  id="exampleCheck1" onclick="btTutorial.disabled = !this.checked">
                                            </div>
                                            <div class="col-sm-10 col-xs-10">
                                              <a href="condiciones" class="condiciones"><p class="form-check-label text-muted" for="exampleCheck1" ><small>Acepto las condiciones de servico.<small></p></a>
                                            </div>
                                          </div> 
                                    </div> 
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 regresar mlmov-6">
                                        <button type="submit" name="btTutorial"  DISABLED class="btn buttoncons" data-toggle="tooltip" data-placement="top" title="Acepta las condiciones de servicio">Validar pedido</button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>
                        </div>
                    <!--<div class="form-group col-sm-3" id="simon">
                                <label for="txtSimon">Simon Coins:</label>
                                <br><small class="text-success"> Tienes X Simon Coins <i class="fas fa-1x fa-info-circle text-info" data-toggle="tooltip" data-placement="top" title="*SimonCoin: Moneda adquirida cada 10l de un pedido. &#10; Cada 10 SimonCoins equivale a 1€ de descuento"></i></small>
                                <input type="text" class="form-control" id="txtSimon" name="txtSimon" >
                            </div> -->

                  </div>  
                </form>
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
  $(document).ready(function(){
  $('input[type="submit"]').attr('disabled','disabled');
  $('input[type="text"]').keypress(function(){
  if($(this).val() != ''){
  $('input[type="submit"]').removeAttr('disabled');
  }
  });
  });
</script>

<script type="text/javascript">

  
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

  function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('exampleCheck1');
  document.write(usuario.checked);
     if(document.getElementById('exampleCheck1').checked ){
         swal('Tienes que aceptar las condiciones de servicio',);
         
     return;
    {
     else{
         swal('Tienes que aceptar las condiciones de servicioghyuagfsduygAYUFSASW',);
     }
  /*if(usuario.length == 0) {
    if(usuario2.length == 0) {
    swal('No has escrito nada ni en la población, ni en la cantidad',);
    return;
  }
  else
  {
    swal('No has escrito nada en la población',);
    return;
  }
    
  }*/
  
  //this.submit();
}
</script> 


@endsection