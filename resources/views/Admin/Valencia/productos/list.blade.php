<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../public/images/9998Simon Grup.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>SimonGrup</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <!-- fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <!-- CSS Files -->
      <link href="../public/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../public/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
      
  </head>
<body>  
     <div class="wrapper">
          @include('layouts.sidebar')
          <div class="main-panel">
              @include('layouts.navbar')
              <div class="content">

    <div class="row">
        <div class="col-lg-11">
                <h1>Productos</h1>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('productos.create') }}">Añadir</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>Id prod.</th>
            <th>Nombre</th>
            <th>Fecha creación</th>
            <th>Pvp</th>
            <th>Rango</th>
            <th>Empresa</th>
            <th width="280px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($productos as $producto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->created_at }}</td>
                <td>{{ $producto->pvp }}</td>
                <td>{{ $producto->rang }}</td>
                <td>{{ $producto->empresa }}</td>
                <td>
                    <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('productos.show',$producto->id) }}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('productos.edit',$producto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
<script src="../public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="../public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../public/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../public/js/plugins/bootstrap-switch.js"></script> 
  <!--  Notifications Plugin    -->
  <script src="../public/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
  <script src="../public/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
</html>