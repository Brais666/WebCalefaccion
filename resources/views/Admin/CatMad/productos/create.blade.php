<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../../public/images/9998Simon Grup.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>SimonGrup</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <!-- fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <!-- CSS Files -->
      <link href="../../public/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../../public/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
      
  </head>
<body>  
     <div class="wrapper">
          @include('layouts.sidebar2')
          <div class="main-panel">
              @include('layouts.navbar')
              <div class="content">
            <div class="row">
                <div class="col-lg-11">
                    <h2>Añade nuevo producto</h2>
                </div>
                <div class="col-lg-1">
                    <a class="btn btn-primary" href="{{ url('productos') }}"> Back</a>
                </div>
            </div>
         
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="txtId">Id:</label>
                    <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" id="txtNombre" placeholder="Introduce nombre de producto" name="txtNombre">
                </div>
                <div class="form-group">
                    <label for="txtPvp">PVP:</label>
                    <textarea class="form-control" id="txtPvp" name="txtPvp" placeholder="Introduce pvp"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtRang">Rango:</label>
                    <textarea class="form-control" id="txtRang" name="txtRang" placeholder="Introduce el rango"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtEmpresa">Empresa:</label>
                    <textarea class="form-control" id="txtEmpresa" name="txtEmpresa" placeholder="Introduce empresa"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
</body>
<script src="../../public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="../../public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../public/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../../public/js/plugins/bootstrap-switch.js"></script> 
  <!--  Notifications Plugin    -->
  <script src="../../public/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
  <script src="../../public/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
</html>