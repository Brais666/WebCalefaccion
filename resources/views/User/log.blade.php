<?php 
    $file="";
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}-SimonGrup</title>
	<!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  	<!-----------------BootstrapCDN------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <!-- CSS-->
    <link rel="stylesheet" href="css/estilos.css" />
    <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
    <aside>
    		@include('layouts/menuhor')
    </aside>
    <section class="container">	
      @include('layouts/logout')
    		<div class="titulo p-3"><h1>{{$title}}</h1></div>
        <hr>
        <nav aria-label="breadcrumb" id="breadcrumb">
            <ol class="breadcrumb bg-dark w-25">
              <li class="breadcrumb-item ml-2"><a href="bienvenido" class="text-light">Home</a></li>
              <li class="breadcrumb-item "><a href="bienvenido" class="text-light">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
            </ol>
        </nav>	
      <form action="" class="ml-5 mt-5 w-100">
        <div class="row">
        <form class="form-inline ml-5 mt-5 w-100">
          <div class="row">
            <div class="form-group">
                <label class="font-weight-bold" for="Nombre">Nombre:</label>
                <input type="email" class="form-control ml-2" id="Nombre" name="Nombre">
            </div>
            <div class="form-check ml-5">
              <input class="form-check-input" type="radio" value="" id="cambiados" name="optradio">
              <label class="form-check-label font-weight-bold" for="cambiados">
                Datos cambiados
              </label>
            </div>
            <div class="form-check ml-5">
              <input class="form-check-input" type="radio" value="" id="FRM" name="optradio">
              <label class="form-check-label font-weight-bold" for="FRM">
                FRM
              </label>
            </div>
            <div class="form-group ml-5">
              <select id="inputState" class="form-control font-weight-bold">
                <option selected>Nascor</option>
                <option>Multiestaciones</option>
                <option>Gasomad</option>
              </select>
            </div>
           </div>
        </form>

        </div>
          <div class="row">
            <form class="form-inline ml-5 mt-1" action="/test/save" method="post">         
              <form autocomplete="off">
                <div class="flex-row d-flex justify-content-center">
                    <div class="col-lg-6 col-11 px-1 mt-5">
                        <div class="input-group input-daterange"> 
                          <input type="text" id="start" class="form-control text-left mr-2"> 
                          <label class="ml-3 form-control-placeholder" id="start-p" for="start">Fecha inicial</label> <span class="fa fa-calendar" id="fa-1"></span> 
                          <input type="text" id="end" class="form-control text-left ml-2"> 
                          <label class="ml-3 form-control-placeholder" id="end-p" for="end">Fecha final:</label> <span class="fa fa-calendar" id="fa-2"></span> </div>
                    </div>
                </div>
              </form>
            </form>
            <div class="form-group">
              <div class="mt-5 ml-5 float-right">
                <?php
                   echo Form::open(array('url' => '/log','files'=>'true'));
                   echo 'Selecciona el archivo ';
                   echo Form::file('image[]', ['multiple' => 'multiple']);
                   ?>
                   <button type="submit" class="btn btn-primary">Búsqueda</button>
                   <button id="btn-borrar" class="btn btn-danger">Borrar</button>
                   <?php 
                   echo Form::close();
                ?> 

              </div>
            </div>

          </div>
          <div class="row">
            <div class="form-group ml-5 w-75">     
              <textarea class="form-control" style="height:800px" id="exampleFormControlTextarea1">
                  @if(empty($files) )
                    No se ha seleccionado ningún archivo
                  @else
                      @foreach($files as $file)
                       {{$file2 = file_get_contents($file->getRealPath())}}
                       {{print_r($file2)}}
                      @endforeach

                  @endif            
              </textarea>
             </div>
          </div>
      </form>
  	  <!-- Scripts -->
      <script src="js/app.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      
      <script>
          $(document).ready(function(){
            $('.input-daterange').datepicker({
              format: 'dd-mm-yyyy'
            });
          });
      </script>
      <script type="text/javascript">
        $("#btn-borrar").on("click",function() {
        $('#exampleFormControlTextarea1').val('');        
        });
      </script>
	
</body>
</html>
