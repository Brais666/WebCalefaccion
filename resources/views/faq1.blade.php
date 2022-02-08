<?php
use App\Oferta;

$ofertas = Oferta::all();	
?>

@extends('layouts.appfaq')
@section('title', 'SimonGrup')
@section('content')
<div class="row bg-faq pt-1 pb-1 fixed-top4">
	<div class="col-sm-2"></div>
	<div class="col-sm-4">
		<div class="card">
  			<div class="card-body movil">
			   <h3 class="card-title text-white ml-25">Preguntas Frecuentes</h3>
			   <h4 class="card-subtitle mb-2 text-white text-muted subtitlefaq ocultar-div ml-3">Encuentra la información que buscas</h4>
			</div>
		</div>
	</div>
	
	<div class="col-sm-3 col-xs-9 pt-2 ml-7 ocultar-mobile">
		<select class="form-control mlmov-4">                        
            <a href="#diasv"><option selected>¿Vale, pero qué es un SimonCoin?</option></a>
            <a href="#diasven"><option >¿Cuántos SimonCoins recibiré con mi suministro?</option></a>
            <option >¿Cuánto vale cada Simoncoin?</option>
            <option >Quiero canjearlos por un descuento, ¿cómo lo hago?</option>
            <option >Quiero utilizarlos para financiar mi pedido ¿Cómo lo hago?</option>
            <option >Quiero donarlos a la Cruz Roja ¿Cómo lo hago?</option>
            <option >¿Puedo usar los 50 SimonCoins que regaláis en mi primer pedido?</option>
            
        </select>
	</div>
</div>	
<div class="container">
	<div class="row pb-13">
		<div class="col-sm-4  col-xs-4 border mt-2 pt-2 pl-2 pb-1 menufaq">
			<ul>
					<!--<li class="licuenta">
					<a href="faq1">¡Cada litro cuenta!</a>
				</li>!-->
				<li class="licuenta">
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
                     <h5 class="card-title titlefaq">¿Vale, pero qué es un SimonCoin?</h5>
                <p class="card-text">Un Simoncoin es la moneda oficial de Días Verdes de Simon Grup que recibirás por cada 10 litros suministrados.</p>
                 </section>
                
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" id="diasven">
                <h5 class="card-title titlefaq">¿Cuánto SimonCoins recibiré con mi suministro?</h5>
                <p class="card-text">Por cada 10 litros, recibirás un SImonCoin, por lo que si por ejemplo haces un pedido de 500 litro en total acumularás 50 SimonCoins.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h5 class="card-title titlefaq">¿Cuánto vale cada Simoncoin?</h5>
                <p class="card-text">Un SimonCoin vale 10 cts de euro.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h5 class="card-title titlefaq">Quiero canjearlos por un descuento, ¿cómo lo hago?</h5>
                <p class="card-text">Al realizar tu próximo pedido, simplemente solicita el cambio a euros y el resultado, lo restaremos al total de tu pedido.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h5 class="card-title titlefaq">Quiero utilizarlos para financiar mi pedido ¿Cómo lo hago?</h5>
                <p class="card-text">Al financiar tu pedido, haremos la conversión de tus SimonCoins a euros y los restaremos al precio final.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h5 class="card-title titlefaq">Quiero donarlos a la Cruz Roja ¿Cómo lo hago?</h5>
                <p class="card-text">¡Simplemente indícanoslo y nosotros haremos el resto!</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h5 class="card-title titlefaq">¿Puedo usar los 50 SimonCoins que regaláis en mi primer pedido?</h5>
                <p class="card-text">Sí, puedes usarlos o acumularlos para el siguiente.</p>
              </div>
            </div>
            
            </section>
            
		</div>
	</div>

	
	
</div>

</script>
@endsection