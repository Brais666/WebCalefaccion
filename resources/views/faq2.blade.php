<?php
use App\Oferta;

$ofertas = Oferta::all(); 
?>

@extends('layouts.appfaq')
@section('title', 'Agrupación de pedidos de Gasoil Simon Grup')
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
            <option selected value="{{ url('faq2') }}">¿Qué es la Agrupación de Pedidos Verdes?</option>
            <option value="{{ url('faq2') }}">¿Cómo puedo beneficiarme de la Agrupación de Pedidos Verdes?</option>
            <option value="{{ url('faq2') }}">¿Por qué con la Agrupación de Pedidos Verdes el gasoil es más barato?</option>
            <option value="{{ url('faq2').'#pedidoagrupado'}}">¿Qué ventajas obtengo al hacer un Pedido Agrupado?</option>
            <option value="{{ url('faq2').'#pedidoagrupadogc'}}">Ejemplos de Pedidos Agrupado de Gasoil Calefacción</option>
            <option value="{{ url('faq2').'#pedidominimo'}}">¿Cuál es el pedido mínimo de Gasóleo de Calefacción?</option>
            <option value="{{ url('faq2').'#pedidos'}}">¿Si hacemos un pedido agrupado, cómo especificamos la cantidad individual a servir?</option>
            <option value="{{ url('faq2').'#pedidos'}}">¿Podemos agrupar pedidos aunque nuestros domicilios se encuentren en calles o poblaciones distintas?</option>
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
        <li class="licuenta active">
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
                 <section>
                     <h3 class="card-title titlefaq" id="pedidoagrupado">¿Qué es la Agrupación de Pedidos Verdes?</h3>
                <p class="card-text">Es nuestro programa de descuento por volumen de litros para pedidos conjuntos.</p>
                 </section>
                
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" id="diasven">
                <h3 class="card-title titlefaq" >¿Cómo puedo beneficiarme de la Agrupación de Pedidos Verdes?</h3>
                <p class="card-text">Realizando un pedido agrupado de Gasoil Calefacción de entre un mínimo de dos y un máximo de diez agrupados.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" >¿Por qué con la Agrupación de Pedidos Verdes el gasoil es más barato?</h3>
                <p class="card-text">Porque al aumentar el volumen total de litros del pedido podemos ofrecer precios más bajos ya que nuestra tarifa de precios es escalada.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="pedidoagrupadogc">¿Qué ventajas obtengo al hacer un Pedido Agrupado?</h3>
                <p class="card-text">Comprar tu gasoil de calefacción al precio de un volumen de litros mucho mayor y por consiguiente mucho más barato. Por ejemplo, si hacéis un pedido conjunto entre 4 vecinos por un total de 2.800 litros, comprareis al precio de 2.800 litros aunque a cada vecino se le sirva una cantidad inferior a ese total, pues lo importante, es que entre todos sumáis 2.800l.</p>
                <p class="card-text">Tabla de pedidos agrupados:</p>
                <ul>
                    <li>De 2 AGRUPADOS</li>
                    <li>De +1.000 litros a +2.000 litros</li>
                </ul>
                <ul>
                    <li>De 3 A 5 AGRUPADOS</li>
                    <li>De +2.500 litros a +3.500 litro</li>
                </ul>
                <ul>
                    <li>De 6 A 10 AGRUPADOS</li>
                    <li>De +4.000 litros a +5.000 litros</li>
                </ul>
                <ul>
                    <li>+10 AGRUPADOS</li>
                    <li>Consultar</li>
                </ul>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h5 class="card-title titlefaq" id="pedidominimo">Ejemplos de Pedidos Agrupado de Gasoil Calefacción</h5>
                <p class="card-text">Ejemplo suponiendo que el precio por litro de gasoil calefacción estuviera a 0.68€ litro para 2 Agrupados:</p>
                <ul>
                    <li>Agrupado 1: 300 litros / 0.68 litro</li>
                    <li>Agrupado 2: 700 litros / 0.68 litro</li>
                </ul>
                <ul>
                    <li>Total agrupados: 2</li>
                    <li>Total litros: 1.000</li>
                    <li>Precio total: 680€ (0.68€ litro)</li>
                </ul>
                <p class="card-text">----------------------</p>
                <p class="card-text">Ejemplo suponiendo que el precio por litro de gasoil calefacción estuviera a 0.67€ litro para 5 Agrupados:</p>
                <ul>
                    <li>Agrupado 1: 800 litros / 0.67 litro</li>
                    <li>Agrupado 2: 700 litros / 0.67 litro</li>
                    <li>Agrupado 3: 500 litros / 0.67 litro</li>
                    <li>Agrupado 4: 300 litros / 0.67 litro</li>
                    <li>Agrupado 5: 300 litros / 0.67 litro</li>
                </ul>
                <ul>
                    <li>Total agrupados: 5</li>
                    <li>Total litros: 2.600 litros</li>
                    <li>Precio total: 1.742€ (0.67€ litro)</li>
                </ul>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿Cuál es el pedido mínimo de Gasóleo de Calefacción?</h3>
                <p class="card-text">400 litros por domicilio para pedidos individuales.</p>
                <p class="card-text">300 litros por domicilio para pedidos Agrupados siempre que entre todos los solicitantes superen el mínimo total (ver tabla de pedidos agrupados).</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">¿Si hacemos un pedido agrupado, cómo especificamos la cantidad individual a servir?</h3>
                <p class="card-text">Una vez hecho el pedido agrupado, dónde habréis especificado los datos de al menos uno de los agrupados y el total de agrupados y litros, nos pondremos en contacto con vosotros para tomaros los datos individuales así como los litros a servir en cada domicilio.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="pedidos">¿Podemos agrupar pedidos aunque nuestros domicilios se encuentren en calles o poblaciones distintas?</h3>
                <p class="card-text">Sí, sólo que las entregas podrían producirse en días distintos si las localidades pertenecen a rutas de reparto distintas.</p>
              </div>
            </div>
            
           
            
    </div>
  </div>

  
  
</div>

</script>
@endsection