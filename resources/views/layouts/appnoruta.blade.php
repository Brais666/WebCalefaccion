<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="description" content="Haz tu pedido de gasóleo de calefacción a domicilio, con transporte e impuestos incluidos y la posibilidad de financiarlo.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../images/9998Simon Grup.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1 , width=320, height=device-height">
 
    <title>@yield('title')</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
    

    
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css" />
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">
</head>
<body class="bg-info">
    <div class="row bg-white ocultar-div fixed-top">
         @include('layouts.navbar')
    </div>
    <div class="row bg-white ocultar-div fixed-top3">
        @include('layouts.navbarsur')
    </div>
    <div class="row bg-white ocultar-div-tab ocultar-div-desk">
         @include('layouts.navbarmovil')
    </div>
    <div class="row bg-white">
        @include('layouts.headerlogin')
    </div>
     <div class="row bg-white pb-7">
        
    </div>
   
    <div class="row bg-white">
          @include('layouts.carousel')
      </div> 
    <div class="row bg-white ">
        @include('layouts.hoy')
    </div>
    <div class="row bg-white mb-4 ">
        <div class="container">
            <div class="row">
              <section class="grisbienvenido mt-5 mb-5">
                <form action="{{url('/')}}" class="navfont">
                  <div class="form-group">
                          @csrf
                    <div class="col-md-12">
                        <div class="col-sm-6 col-xs-12 pbmov-2 text-left">
                          <label for="poblacion" class="col-sm-12 col-xs-12 labelmov text-muted">Introduce la población</label>
                            <input type="text" class="form-control input col-sm-12 ml-2" id="poblacion" name="poblacion" readonly="true" placeholder="Si quieres consultar el precio de otra población apreta el botón 'Consultar precios'" >
                        </div>
                        <div class="col-sm-2 col-xs-6 pbmov-2 text-muted">
                                <label for="cantidad">Cantidad</label>
                                
                                    <input type="number" class="form-control input col-xs-12" id="cantidad" name="cantidad" min="1" readonly="true" >
                                 
                              </div>
                        <div class="col-sm-2 col-xs-6 pbmov-2 text-muted">
                                <label for="select">Unidad</label>
                                <select class="form-control input" name="select" id="select" readonly="true">  
                                    <!--<option value="Lts.">Lts.</option>
                                             <option value="€">€</option>-->
                                </select>
                              </div>            
                        <div class="col-sm-2 col-xs-12 align-middle pt-med pbmov-2 text-center">
                            <button type="submit" class="btn buttoncons" >
                                Consultar precios
                            </button>
                        </div>
                    </div>
                  </div>     
                </form>
              </section>
            </div>
        </div>
    </div>    
    <section class="mb-4">
            @yield('content')
    </section>
    <div class="footer pt-4">
            @include('layouts.footer')
        </div>
      @include('layouts.cookies')  
</body>

</html>
