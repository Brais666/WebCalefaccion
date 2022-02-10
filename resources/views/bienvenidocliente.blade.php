<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CallCenter-SimonGrup</title>
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
        
    @include('layouts/menucliente')
        
</aside>
<section class="container"> 
    @include('layouts/logoutclie')
    <div class="titulo p-3"><h1>Bienvenid@ {{ Auth::user()->name }} </h1></div>

   <hr><nav aria-label="breadcrumb" id="breadcrumb" class="w-25">
        <ol class="breadcrumb  bg-dark">
          <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ Auth::user()->name }}</li>
        </ol>
    </nav>
     <section class="text-light">
          <div  id="cliente">
            <img src="images/SIMON_GRUP.PNG" >
            <div class="row p-4 text-center">
                
                <div class="mb-2 ml-3">Le damos la bienvenida a nuestra web dónde podrá encontrar diferentes funcionalidades:</div>
                  
                
                <ol>
                  <li>  Podrá acceder desde su menú y editar sus datos (en el menú (Perfil)).</li>

                  <li>  Podrá acceder desde su menú a los pedidos realizados(en el menú (Mis pedidos)).</li>
                  <li>  Podrá acceder desde su menú a los precios y ofertas ex(en el menú (Mis pedidos)).</li>
                </ol>
            </div>
          </div>
     </section>
    <!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>   
</body>
</html>


