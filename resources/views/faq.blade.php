<?php
use App\Oferta;

$ofertas = Oferta::all(); 
?>
@extends('layouts.appfaq')
@section('title', 'Pedido online Simon Grup')
@section('content')
<head>
    <link rel="canonical" href="https://www.gasoleodecalefaccion.com/faq" />
</head>
<div class="row bg-faq pt-1 pb-1 fixed-top4">
  <div class="col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
        <div class="card-body movil-faq">
         <h1 style="font-size: 30px;" class="card-title text-white ml-22">Preguntas Frecuentes</h1>
         <h2 style="font-size: 20px;" class="card-subtitle mb-2 text-white text-muted subtitlefaq ocultar-div ml-3">Encuentra la información que buscas</h2>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-9 pt-2 ml-7 ocultar-mobile">
    <select class="form-control mlmov-4" onchange="window.location.href=this.value;">                        
            <option selected value="{{ url('faq') }}">¿Que son los días Verdes?</option>
            <option value="{{ url('faq') }}">¿En qué consisten los Días Verdes?</option>
            <option value="{{ url('faq').'#entrega' }}">¿Cómo solicito la entrega de mi pedido para un día Verde?</option>
            <option value="{{ url('faq').'#solicitarent' }}">Si el día Verde no me va bien, ¿Puedo solicitar la entrega un día distinto?</option>
            <option value="{{ url('faq').'#diasv' }}">¿Cómo sé cuál es el Día Verde en mi Comunidad Autónoma?</option>
            <option value="{{ url('faq').'#recibire' }}">¿Cuándo recibiré mi pedido de gasoil calefacción si lo pido hoy?</option>
            <option value="{{ url('faq').'#urgente' }}">¿Puedo hacer un pedido de Gasoil Calefacción urgente?</option>
            <option value="{{ url('faq').'#formapago' }}">¿Qué formas de pago hay y cuando lo hago efectivo?</option>
            <option value="{{ url('faq').'#impuestos' }}">¿Los impuestos están incluidos en el precio?</option>
            <!--<option value="{{ url('faq').'#diferencias' }}">¿Por qué hay diferencias de precio por litro entre comunidades autónomas?</option>-->
            <option value="{{ url('faq').'#ped' }}">¿Cuál es el pedido mínimo de Gasóleo de Calefacción?</option>
            <option value="{{ url('faq').'#ped' }}">He hecho un pedido y no estoy seguro de cuantos litros van a caber en mi depósito, ¿Qué pasa si al final no caben?</option>
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
        <li class="licuenta active">
          <a href="faq">Pedido online</a>
        </li>
        <li class="licuenta">
          <a href="faq2">Agrupación de Gasoil</a>
        </li >
        <li class="licuenta">
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
                     <h3 class="card-title titlefaq" id="entrega">¿Que son los días Verdes?</h3>
                <p class="card-text">Los días Verdes es el programa de reducción de costes de gasoleodecalefaccion.com, gracias al cual podemos reducir el precio por litro del Gasoil Calefacción y tú puedes ahorrar.</p>
                 </section>
                
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" id="solicitarent">
                <h3 class="card-title titlefaq">¿En qué consisten los Días Verdes?</h3>
                <p class="card-text">En agrupar los pedidos de gasoil calefacción por población y día, de ese modo podemos optimizar las rutas de reparto haciéndolas más eficientes, económicas y rápidas. Lo que nos permite reducir las distancias recorridas y a su vez nuestras emisiones de CO2.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="diasv">¿Cómo solicito la entrega de mi pedido para un día Verde?</h3>
                <p class="card-text">Si compras online a través de gasoleodecalefaccion.com, tu pedido de Gasoil Calefacción siempre se servirá en tu domicilio un día Verde. Eso significa que el precio al que hagas tu pedido, ya será el más bajo posible.
                Si tu compra es por teléfono, nuestro asesor de ventas te asignará el día Verde disponible que mejor se adapte a tu necesidad para ofrecerte el mismo precio que en la web, es decir, el precio del día Verde.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" id="recibire">
                <h3 class="card-title titlefaq">Si el día Verde no me va bien, ¿Puedo solicitar la entrega un día distinto?</h3>
                <p class="card-text">Por teléfono sí, aunque no podemos asegurarte ni la disponibilidad ni el precio de un día Verde. En cualquier caso puedes consultarnos y te atenderemos encantados.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" >
                <h3 class="card-title titlefaq" id="urgente">¿Cómo sé cuál es el Día Verde en mi Comunidad Autónoma?</h3>
                <p class="card-text">Se filtra por población.Para conocer el día Verde que corresponde a tu población, en la página principal de gasoleodecaelfaccion.com,introduce en el buscador el nombre de tu población. Si no aparece tu población en el buscador, puedes llamarnos y consultar o bien, utilizar nuestro formulario de contacto.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="formapago">¿Cuándo recibiré mi pedido de gasoil calefacción si lo pido hoy?</h3>
                <p class="card-text">Para saber qué día recibirás tu pedido, puedes consultar los días de entrega para tu población en el buscador del pie de página de tu Comunidad Autónoma. La entrega podría oscilar entre 2 y 6 días si por ejemplo pides un viernes y el día verde para tu localidad es el próximo jueves.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="impuestos">¿Puedo hacer un pedido de Gasoil Calefacción urgente?</h3>
                <p class="card-text">Si deseas hacer un pedido urgente, recomendamos que te pongas en contacto con nosotros por teléfono llamando al 949 247 034 o al 977 773 800.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="diferencias">¿Qué formas de pago hay y cuando lo hago efectivo?</h3>
                <p class="card-text">Al contado, en metálico/tarjeta al recibir el suministro o bien vía recibo bancario si has financiado tu pedido de gasóleo calefacción con el plan de crédito VIVO.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿Los impuestos están incluidos en el precio?</h3>
                <p class="card-text">Todos los impuestos están incluidos en los precios de toda la tienda.</p>
              </div>
            </div>
           <!-- <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿Por qué hay diferencias de precio por litro entre comunidades autónomas?</h3>
                <p class="card-text">Las diferencias de precio entre comunidades autónomas pueden venir dadas por los impuestos comunitarios. El impuesto comunitario específico viene grabado por cada Comunidad Autónoma de forma independiente, de ahí que el mismo gasóleo pueda tener un precio distinto en una comunidad a otra.</p>
              </div>
            </div>-->
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿Cuál es el pedido mínimo de Gasóleo de Calefacción?</h3>
                <p class="card-text"><p>300 litros por domicilio para pedidos individuales.</p>
              <p>300 litros por domicilio para pedidos Agrupados siempre que entre todos los solicitantes superen el mínimo total (ver tabla de pedidos agrupados).</p></p>
              </div>
            </div>
            <section>
              <div class="card pt-2 pb-1" >
              <div class="card-body" id="ped">
                  <section id="whatsapp">
                <h3 class="card-title titlefaq" >He hecho un pedido y no estoy seguro de cuantos litros van a caber en mi depósito, ¿Qué pasa si al final no caben?</h3>
                <p class="card-text">No te preocupes se te facturará siempre, al precio y a razón de los litros que servidos, por consiguiente ten en cuenta que si pides 1.000 litros a un precio pero luego sólo te caben 500 litros, deberemos facturarte al precio litro de esa cantidad. Recuerda que nuestras tarifas van escaladas por volumen.</p>
                </section>
              </div>
            </div>
            </section>
            
    </div>
  </div>

</div>

</script>
@endsection