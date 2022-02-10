<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado de Usuarios-SimonGrup</title>
	<!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-----------------BootstrapCDN------------------------------>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- CSS-->
    <link rel="stylesheet" href="/./simongrup-laravel/public/css/estilos.css" />
</head>
<body>
<aside>
		
	@include('layouts/menuhor')
		
</aside>
<section class="container">	
@include('layouts/logout')	
		<div class="titulo p-3"><h1>{{$title}}</h1></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark w-50" id="breadcrumbhome">
          <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
            <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">User</a></li>
            <li class="breadcrumb-item active"><a href="#" class="text-light">BBDD Nascor</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>

	  <div class="row">
        <div class="w-100">
        	  <div class="float-left ml-5 mr-5 text-muted">Planta</div>
              <div class="float-left ml-5 mr-5 text-muted">Producte</div>
              <div class="float-left ml-5 mr-5 text-muted">Objectiu</div>
              <div class="float-left ml-5 mr-5 text-muted">Stock Actual</div>
              <div class="float-left ml-5 mr-5 text-muted">Necessari</div>
          <table class="table table-bordered w-75 ml-5 float-left" id="tablapersonal">
            <tr>
              <td>Alacant</td>
              <td>Gasóleo A</td>
              <td>290000</td>
              <td>800</td>
              <td>282000</td>
            </tr>
          </table>          
        </div>
    </div>
    <div class="row">
    	<div class="float-left ml-5">
    		<a class="btn btn-light" href="#" role="button">Objectius</a>
    	</div>
        <div class="float-right ml-5">
      	  <a class="btn btn-light" href="#" role="button">Llistar</a>	
          <a class="btn btn-light" href="Nascor" role="button">Tancar</a>
        </div>
    </div>
      
	</section>
	
	<!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
	
</body>
</html>