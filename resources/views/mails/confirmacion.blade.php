<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../public/images/9998Simon Grup.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>@yield('title')</title>
 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/public/css/estilos.css" />
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container border">  
    <div class="row pt-2 pb-5">
        <div class="col-md-12 movillogo2 ">
            <a class="navbar-brand align-middle" href="https://134.122.70.106/nueva/public">
                <img src="http://localhost/nueva3/public/images/logosg.png">
            </a>
        </div>
    </div>
    <br><br>
    	<div class="row pt-1 pb-1">
    		<p><b>Tu pedido se ha realizado</b></p>
    	</div>
    	<hr class="blue">
    	<div class="row pt-1 pb-1">
    		 <p><h4> Hola, {{ $demo->receiver }}</h4></p>

		 	<p><h4>Tu pedido ( {{ $demo->demo_one }} ) se ha confirmado</h4></p>
    	</div>
             
         <div class="row pt-2 pb-1">
         	<p>Detalles del pedido</p>
         </div>

		 <hr class="blue">
 
		
           
           <section class="gris">
           
             <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <!--<th>ID</th>-->
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Dir.</th>
                    <th>Localidad</th>
                    <th>Provincia</th>
                    <th>C. Postal</th>
                    <th>Canal:</th>
                    <th>Estado</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr> 
                <tr>
                    <!--<td>{{ $demo->demo_one }}</td>-->
                    <td>{{ $demo->demo_two }}</td>
                    <td>{{ $demo->demo_three }}</td>
                    <td>{{ $demo->demo_four }}</td>
                    <td>{{ $demo->demo_five }}</td>
                    <td>{{ $demo->demo_six }}</td>
                    <td>{{ $demo->demo_seven }}</td>
                    <td>{{ $demo->demo_eight }}</td>
                    @if($demo->demo_nine  == 'Pendiente')
                            <td class="text-warning">{{ $demo->demo_nine }}</td>
                    @elseif($pedidos->estado == 'Confirmado')
                            <td class="text-success">{{ $demo->demo_nine }}</td>
                    @endif
                    
                    <td>{{ $demo->demo_ten }}</td>
                    <td>{{ $demo->demo_eleven }} l</td>
                    <td>{{ $demo->demo_twelve }} eur.</td>
                </tr> 
           </table>
           <br>
            
       <div class="row text-center">
       		<p>Si necesitas más información o ayuda acerca de tu pedido contáctanos.</p>
       		<p>Atentamente,</p>
       </div><br>
       <div class="row text-center pb-1 pt-1 ">
            <a class="text-center" href="https://134.122.70.106/nueva/public">
                <img src="http://localhost/nueva3/public/images/logosg.png">
            </a>
        </div>
        <br/>

{{ $demo->sender }}


</div>
<br>
<div class="row footer" style="background-color: blue;color:white">
	<br>
	<div class="row text-center pt-1 pb-1">
		También puedes realizar tu pedido por los siguientes canales:
	</div> 
	<br>
	<div class="row">
		<div class="col-md-3 text-center">
			<div class="card" >
               <i class="fas fa-phone-alt"></i>
              <div class="card-body">
                <h5 class="card-title">Llámanos</h5>
                <p class="card-text">949 247 034</p>
               
             </div>
           </div>
		</div>
		<div class="col-md-3 text-center">
			<div class="card" >
               <i class="far fa-user fa-4x"></i>
              <div class="card-body">
                <h5 class="card-title">Te llamamos GRATIS</h5>
               <a href="#" class="btn btn-primary ">Pulsa aquí</a>
             </div>
           </div>
		</div>
		<div class="col-md-3 text-center">
			<div class="card " >
               <i class="fab fa-whatsapp fa-4x"></i>
              <div class="card-body">
                <h5 class="card-title">Whatsapp</h5>
                <p class="card-text">600 492 947</p>
             </div>
           </div>
		</div>
		<div class="col-md-3 text-center">
			<div class="card" >
               <i class="fas fa-globe fa-4x"></i>
              <div class="card-body">
                <h5 class="card-title">Pedido online</h5>
               <a href="#" class="btn btn-primary">Pulsa aquí</a>
             </div>
           </div> 
		</div>
	</div>
	<br>
	<div class="row text-center">
		<div class="card" >
               <i class="fas fa-phone-alt"></i>
              <div class="card-body">
                <h2 class="card-title"><b>Síguenos por</b></h2><br>
                <div class="col-md-5"></div>
               	<div class="col-md-2">
               	 <div class="col-md-4">
               	 	<i class="fab fa-facebook fa-3x"></i>
               	 </div>
               	 <div class="col-md-4">
               	 	<i class="fab fa-instagram fa-3x"></i>
               	 </div>
               	 <div class="col-md-4">
               	 	<i class="fab fa-linkedin fa-3x"></i>
               	 </div>
 				</div>
 				<div class="col-md-5"></div>
             </div>
           </div> 
	</div>
	<br><br>
	<hr style="color: white;width:85%">
	<br><br>
	<div class="row text-center">
		<p>&copy; Copyright Simon Grup {{ now()->year }}*|LIST:COMPANY|*,<small><i>All rights reserved.</i></small></p>
		<p>*|IFNOT:ARCHIVE_PAGE|**|LIST:DESCRIPTION|*</p>
	</div>
	<br>
	<div class="row text-center">
		<small><a href="#" style="color: white;"><u>Darme de baja de esta lista</u></a> <a href="#" style="color: white;"><u>Actualizar preferencias de suscripción.</u></a></small>
	</div>
	<br>
	<div class="row text-center">
		<small><p>Nuestra dirección:</p></small>
	</div>
	<div class="row text-center">
		<small><p>*|HTML:LIST_ADDRESS_HTML|**|END:IF|*</p></small>
	</div>
	
</div>