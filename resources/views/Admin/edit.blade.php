<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimonGrup</title>
    <!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- CSS-->
    <link rel="stylesheet" href="css/estilos.css" />
    <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
</head>
<body>
<aside>
        
    @include('layouts/menuadmin')
        
</aside>
<section class="container"> 
    @include('layouts/logout')
    <div class="titulo p-3"><h1>  {{ Auth::user()->name }} edita tu perfil </h1></div>

   <hr>
   <nav aria-label="breadcrumb" id="breadcrumb" class="w-25">
        <ol class="breadcrumb  bg-dark">
          <li class="breadcrumb-item ml-2"><a href="../welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
     </nav>
     <section class="bg-grey">
          <div>
            <div class="row ml-3 p-4">               
                    <form action="#" method="PUT">
                  		{{$usuario->name}}
                  		<div class="row p-2 mb-5">
                  			
                  			<form class="p-4 ml-2 mt-5">
                  				<div class="form-group ml-1">
								    <div class="input-group">
							          <div class="input-group-text"><i class="fas fa-at"></i></div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->email}}">
							        </div>
								</div>
								<div class="form-group w-50 ml-5">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Apellidos</div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->apellidos}}">
							        </div>
								</div>							
								<div class="form-group w-50 w-50 ml-1">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Dirección</div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->address}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-4">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Localidad</div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->localidad}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-1">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Provincia</div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->localidad}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-3">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">C.P.</div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->CP}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-3">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold"><i class="fas fa-phone"></i></div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->telefono}}">
							        </div>
								</div>
                  			</form>
                  		</div>
                  		<div class="row">
                  			<input class="btn btn-primary" type="submit" value="Modificar" href="{{route('perfil.update',$item)}}">
                  		</div>
                  		
  					 </form>               
            </div>
          </div>
     </section>
 <!-- Scripts -->
    <!-- Scripts -->
    <script src="js/app.js"></script>
     <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
</body>
</html>

