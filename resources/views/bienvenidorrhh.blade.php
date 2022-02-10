<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRHH-SimonGrup</title>
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
        
    @include('layouts/menurrhh')
        
</aside>
<section class="container"> 
    @include('layouts/logout')
    <div class="row titulo p-3"><h1>Bienvenid@ RRHH {{ Auth::user()->name }} </h1></div>

   <hr><nav aria-label="breadcrumb" id="breadcrumb" class="w-25">
        <ol class="breadcrumb  bg-dark">
          <li class="breadcrumb-item ml-2" ><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">RRHH</li>
        </ol>
    </nav>

    
 <!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>   
</body>
</html>

