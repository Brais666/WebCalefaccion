<?php
use App\Oferta;

$ofertas = Oferta::all();	
?>

@extends('layouts.appfaq')
@section('title', 'Promociones Simon Grup')
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
            <option selected value="{{ url('faq4') }}">¿Qué es la promoción 10 euros de descuento por tu cumpleaños?</option>
            <option value="{{ url('faq4') }}">¿Qué sucede si mi cumpleaños es en Julio?</option>
            <option value="{{ url('faq4').'#ped' }}">Aún no soy cliente de gasoleodecalefaccion.com ¿Puedo participar en la promoción?</option>
            <option value="{{ url('faq4').'#ped' }}">Términos y condiciones de la promoción 10€ dto. por cumpleaños</option>
            
            
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
				<li class="licuenta">
					<a href="faq3">Financiación de Gasoil</a>
				</li>
				<li class="licuenta active">
					<a href="faq4">Promociones</a>
				</li>
			</ul>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-7 col-xs-8 border mt-2 pt-2 pl-2 containerfaq">
			<div class="card pt-1" >
              <div class="card-body" >
                 <section id="diasv">
                     <h3 class="card-title titlefaq">¿Qué es la promoción 10 euros de descuento por tu cumpleaños?</h3>
                <p class="card-text">Es una promoción disponible dentro de nuestro programa de fidelización de 10 euros de descuento sobre el precio final para todos aquellos clientes que hagan su pedido de gasóleo calefacción un mes antes de su cumpleaños, durante el mes de su cumpleaños o bien el siguiente a este.</p>
                 </section>
                
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body" id="diasven">
                <h3 class="card-title titlefaq">¿Qué sucede si mi cumpleaños es en Julio?</h3>
                <p class="card-text">Entendemos que prefieras comprar tu gasoil de calefacción en primavera, otoño o invierno por ese motivo, podemos guardar tu descuento hasta que hagas tu pedido siempre y cuando, nos lo notifiques previamente.</p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq">Aún no soy cliente de gasoleodecalefaccion.com ¿Puedo participar en la promoción?</h3>
                <p class="card-text">Sólo aquellos clientes que tengan al menos un pedido en su historial de compras pueden, aún así, si vas a hacer tu primera compra, cuando validemos tus datos podemos guardarte este descuento para tu próximo pedido (aunque el plazo de tu cumpleaños haya vencido).<br>
                    Puedes leer los términos y condiciones de la promoción en la siguiente pregunta.
                </p>
              </div>
            </div>
            <div class="card pt-2" >
              <div class="card-body">
                <h3 class="card-title titlefaq" id="ped">Términos y condiciones de la promoción 10€ dto. por cumpleaños</h3>
                <p class="card-text">Oferta acumulable sólo con el DIA VERDE para clientes que ya figuren en nuestra base de datos y tengan al menos un pedido en su histórico. Oferta válida para pedidos realizados entre el 19 de abril de 2019 y el 19 de abril de 2020 para un sólo uso por persona y cumpleaños. Sólo podrán adherirse a esta oferta aquellos clientes que sean titulares en el histórico de compras de Simon Grup, Gasomad Energía, Pratsoils o Simonoil y acrediten su fecha de nacimiento.</p>
              </div>
            </div>
            
            
            
		</div>
	</div>

	
	
</div>

</script>
@endsection