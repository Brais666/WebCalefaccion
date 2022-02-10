<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fichajes-SimonGrup</title>
	<!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-----------------BootstrapCDN------------------------------>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- CSS-->
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
<aside>
		@include('layouts/menurrhh')
</aside>
<section class="container">	
  @include('layouts/logout')
		<div class="titulo p-3"><h1>{{$title}}</h1></div>
    
    <hr><nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item"><a href="home" class="text-light">Home</a></li>
          <li class="breadcrumb-item active"><a href="bienvenidorrhh" class="text-light">RRHH</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
	<iframe width="100%" height="100%" src="https://www.advancedsoft.tech/" frameborder="0" allowFullScreen="true"></iframe>
	
	<!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
	
</body>
</html>