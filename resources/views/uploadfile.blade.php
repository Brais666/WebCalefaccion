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
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
		<div class="titulo p-3"><h1>prueba log</h1></div>
    <hr>
    <nav aria-label="breadcrumb" id="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="bienvenido" class="text-light">Home</a></li>
          <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gerencia</li>
        </ol>
    </nav>	

    <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>

	
	<!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
	
</body>
</html>