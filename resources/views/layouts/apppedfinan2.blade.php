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
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script type='text/javascript'>
$(document).ready(function() {
 $("body").css("display", "none");
    $("body").fadeIn(0);
 
 $("a.transicion").click(function(event){
  event.preventDefault();
  linkLocation = this.href;
  $("body").fadeOut(1000, redirectPage);   });
   function redirectPage() {
  window.location = linkLocation;
 }
});
</script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body class="bg-vivo">
    <div class="row bg-white ocultar-div fixed-top">
         @include('layouts.navbar')
    </div>
    <div class="row bg-white ocultar-div fixed-top3">
        @include('layouts.navbarsur')
    </div>
    <div class="row bg-white ocultar-div-tab ocultar-div-desk">
         @include('layouts.navbarmovil')
    </div>
    <div class="row bg-white ocultar-div-tab ocultar-div-desk">
        @include('layouts.headerlogin')
    </div>
    <div class="row bg-white">
        @include('layouts.carousel')
    </div>
     <div class="row mt-3 mb-4">
            @yield('content')  
    </div>
    
        @include('layouts.footerfin')
    
    @include('layouts.cookies')   
</body>

</html>