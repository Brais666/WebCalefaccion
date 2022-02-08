<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
  $admin = Auth::User()->admin;
?>
  <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../../public/assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../../public/images/9998Simon Grup.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>SimonGrup</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <!-- fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <!-- CSS Files -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- CSS -->
    <link rel="stylesheet" href="../public/css/estilos.css" />
      
  </head>
<body>  
      <div class="row ar"></div>
    <section class="main">
    
      <section class="article">
        <div class="container">
           @include('Admin.layouts.navbar')<br>
           @include('Admin.layouts.hoy')
        </div>
                
                
            <div class="row">
              <section class="separacion"></section>
              <section class="griscuenta"></section>
              <section class="separacion"></section>
              <section>
                 @if($admin == 5)
                  @include('Admin.layouts.menuCuentaAdmin')
                @else
                  @include('Admin.layouts.menuCuenta')
                @endif 
                @include('Admin.tarifas.containerTarifa')
</body>
 

</html>