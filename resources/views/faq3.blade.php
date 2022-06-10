<?php
use App\Oferta;

$ofertas = Oferta::all(); 
?>

@extends('layouts.appfaq')
@section('title', 'Financiación de Gasoil Simon Grup')
@section('content')
<head>
    <link rel="canonical" href="https://www.gasoleodecalefaccion.com/faq" />
</head>
<div class="row bg-faq pt-1 pb-1 fixed-top4">
  <div class="col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
        <div class="card-body movil-faq">
         <h1 style="font-size:30px" class="card-title text-white ml-22">Preguntas Frecuentes</h1>
         <h2 style="font-size:20px" class="card-subtitle mb-2 text-white text-muted subtitlefaq ocultar-div ml-3">Encuentra la información que buscas</h2>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-9 pt-2 ml-7 ocultar-mobile">
    <select class="form-control mlmov-4" onchange="window.location.href=this.value;">                        
            <option selected value="{{ url('faq3') }}">¿Qué es el plan de crédito VIVO?</option>
            <option value="{{ url('faq3') }}">¿Para qué sirve el plan de crédito VIVO?</option>
            <option value="{{ url('faq3') }}">¿Qué ventajas tengo al financiar mi pedido con VIVO?</option>
            <option value="{{ url('faq3').'#cuotas' }}">¿En cuántas cuotas puedo financiar mi pedido?</option>
            <option value="{{ url('faq3').'#comision' }}">¿Cobráis comisión por el servicio de financiación?</option>
            <option value="{{ url('faq3').'#ejemplo' }}">Ejemplo de financiación</option>
            
        </select>
  </div>
</div>  
<div class="container">
  <div class="row padding-faq">
    <div class="col-sm-4  col-xs-4 border mt-2 pt-2 pl-2 pb-1 menufaq">
      <ul class="margin-left-faq">
        <!--<li class="licuenta">
          <a href="faq1">¡Cada litro cuenta!</a>
        </li>!-->
        <li class="licuenta">
          <a href="faq">Pedido online</a>
        </li>
        <li class="licuenta">
          <a href="faq2">Agrupación de Gasoil</a>
        </li >
        <li class="licuenta active">
          <a href="faq3">Financiación de Gasoil</a>
        </li>
        <li class="licuenta">
          <a href="faq4">Promociones</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-7 col-xs-8 border mt-2 pt-2 pl-2 containerfaq">
      <div class="card pt-1" >
              <div class="card-body" >
                 <section id="diasv">
                     <h3 class="card-title titlefaq">¿Qué es el plan de crédito VIVO?</h3>
                <p class="card-text">El plan de crédito VIVO es nuestro servicio de financiación para Gasoil Calefacción.</p>
                 </section>
                
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" id="cuotas">
                <h3 class="card-title titlefaq">¿Para qué sirve el plan de crédito VIVO?</h3>
                <p class="card-text">Sirve para financiar tu pedido de gasoil de calefacción de modo que puedas comprar para toda la temporada una o varias veces y pagar en cómodas cuotas. Algo así como una tarifa plana.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="comision">¿Qué ventajas tengo al financiar mi pedido con VIVO?</h3>
                <p class="card-text">A diferencia de otros servicios de financiación VIVO te permite disponer de crédito inmediatamente después de haberlo liquidado. Si por ejemplo financias tu pedido en 3 cuotas, cuando abones la primera, ésta ya estará disponible si deseas volver a financiar un nuevo pedido sin tener que hacer de nuevas gestiones de apertura o papeleo.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿En cuántas cuotas puedo financiar mi pedido?</h3>
                <p class="card-text">Puedes financiar tu gasoil de calefacción de 3 a un máximo de 12 cuotas.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿Cobráis comisión por el servicio de financiación?</h3>
                <p class="card-text">No, pero la entidad financiera colaboradora sí cobra una comisión calculada en base a un interés fijo del 8'50% + TAE + la comisión de apertura. Si deseas saber cuánto te costaría fraccionar el pago de tu pedido, puedes utilizar nuestro simulador de crédito aquí.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="ejemplo">Ejemplo de financiación</h3>
                <p class="card-text">A continuación puede ver un ejemplo de financiación con 3 cuotas:</p>
                <ul>
                    <li>Precio litro: <b>0.67€/l</b>.</li>
                    <li>Litros a financiar: <b>1.000</b></li>
                    <li>Comisión aplicada: <b>0.01€</b></li>
                    <li>Coeficiente de cálculo para cuota mensual: <b>0.341447</b></li>
                    <li>Cuotas a liquidar: <b>3</b></li>
                    <li>Precio estimado de cada cuota: <b>235.6€</b></li>
                </ul>
                <p class="card-text"><b>Total: 706.8€</b></p>
              </div>
            </div>
            
            
    </div>
  </div>

  
  
</div>

</script>
@endsection