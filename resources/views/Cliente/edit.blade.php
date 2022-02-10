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
    <link rel="stylesheet" href="../css/estilos.css" />
</head>
<body>
<aside>
        
    @include('layouts/menucliente')
        
</aside>
<section class="container"> 
    @include('layouts/logout')
    <div class="titulo p-3"><h1>Bienvenid@  {{ Auth::user()->name }} edita tu perfil </h1></div>

   <hr>
   <nav aria-label="breadcrumb" class="w-25">
        <ol class="breadcrumb  bg-dark">
          <li class="breadcrumb-item ml-2"><a href="../welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
     </nav>
     <section class="bg-grey">
            <div class="row ml-3 p-4">               
              <form class="p-4 ml-2 mt-5"  action="{{route('cliente.edit',$usuario->id)}}" method ="POST">
                  {{csrf_field() }}    
                  		
                <div class="row p-2 mb-5">
                  <div class="form-group ml-1">
								    <div class="input-group">
							        <div class="input-group-text"><i class="fas fa-at"></i></div>
							          <input type="email" class="form-control" name="mail" placeholder="{{$usuario->email}}">
							      </div>
								  </div>
								  <div class="form-group w-50 ml-5">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Apellidos</div>
							          <input type="text" class="form-control" name="apellidos" placeholder="{{$usuario->apellidos}}">
							      </div>
								  </div>							
								  <div class="form-group w-50 w-50 ml-1">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Dirección</div>
							          <input type="text" class="form-control" name="direccion" placeholder="{{$usuario->address}}">
							      </div>
								  </div>
								  <div class="form-group w-25 ml-4">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Localidad</div>
							          <input type="text" class="form-control" name="localidad" placeholder="{{$usuario->localidad}}">
							      </div>
								  </div>
								  <div class="form-group w-25 ml-1">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Provincia</div>
							          <input type="text" class="form-control" name="provincia" placeholder="{{$usuario->provincia}}">
							      </div>
								  </div>
								  <div class="form-group w-25 ml-3">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">C.P.</div>
							          <input type="text" class="form-control" name="CP" placeholder="{{$usuario->CP}}">
							      </div>
								  </div>
								  <div class="form-group w-25 ml-3">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold"><i class="fas fa-phone"></i></div>
							          <input type="text" class="form-control" name="telefono" placeholder="{{$usuario->telefono}}">
							      </div>
								  </div>                  			                 
                  
                </div> 
                <div class="row float-left">
                      <button type="submit" class="btn btn-primary"><small>Modificar</small></a>
                      </button>
                  </div>                		
  					 </form>               
            </div>
            
     </section>
 <!-- Scripts -->
    <!-- Scripts -->
    <script src="../js/app.js"></script>
     <!-- Latest compiled JavaScript -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    
</body>
</html>

