<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PowerBi-SimonGrup</title>
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
		@include('layouts/menucall')
</aside>
<section class="container">	
  @include('layouts/logout')
		<div class="titulo p-3"><h1>Gotraxx Rutas</h1></div>
    <hr><nav aria-label="breadcrumb" id="breadcrumb">
        <ol class="breadcrumb bg-dark">
          <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item"><a href="bienvenidocall" class="text-light">Call Center</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gotraxx Rutas</li>
        </ol>
    </nav>
	<iframe width="100%" height="100%" src="http://www.gotraxx.com/new/#/triplist" frameborder="0" allowFullScreen="true"></iframe>
	
	<!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
	
</body>
</html>
