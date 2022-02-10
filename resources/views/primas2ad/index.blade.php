<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primas2-SimonGrup</title>
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
    
  @include('layouts/menuadmin')
    
</aside>
<section class="container">   
    
    @include('layouts/logout')

    <div class="titulo p-3"><h1>Primas2</h1></div>
    <hr><nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="bienvenido" class="text-light">Home</a></li>
          <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>

      <div >
          <div class="card-body">            
            <div class="table-container">
              <table id="mytable" class="table table-bordred table-striped">
               <thead>
                 <th>ID_Terminal</th>
                 <th>Terminal</th>
                 <th>Producto</th>
                 <th>Zona</th>
                 <th>Platts</th>
                 <th>Logistica</th>
                 <th>Prima_$Tn</th>
                 <th>Dolar_Euro</th>
                 <th>ICE</th>
                 <th>Densidad_Def</th>
                 <th>Prima-€</th>
                 <th>Total</th>
               </thead>
               <tbody>
                @if($primas->count())  
                @foreach($primas as $prima)  
                <tr>
                    <td>{{$prima->ID_Terminal}}</td>
                    <td>{{$prima->Terminal}}</td>
                    <td>{{$prima->Producto}}</td>
                    <td>{{$prima->Zona}}</td>
                    <td>{{$prima->Platts}}</td>
                    <td>{{$prima->Logistica}}</td>
                    <td>{{$prima->PrimaDolarTn}}</td>
                    <td>{{$prima->Dolar_Euro}}</td>
                    <td>{{$prima->ICE}}</td>
                    <td>{{$prima->Densidad_Def}}</td>
                    <td>{{$prima->Prima_Eur}}</td>
                    <td>{{$prima->Total}}</td>
                  </tr>
                @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
                 
               </tbody>

              </table>
           </div>
      
      </div>
    </div>
  </section>
  
  
    <!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  
</body>
</html>