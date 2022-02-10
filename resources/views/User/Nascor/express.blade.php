<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base de Datos-Nascor</title>
  <!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- CSS-->
    <link rel="stylesheet" href="/./simongrup-laravel/public/css/estilos.css" />
</head>
<body>
<aside>
    
 @include('layouts/menuhor')
    
</aside>
<section class="container">   
    
      @include('layouts/logout')

      <div class="titulo p-3"><h1>Base datos Nascor</h1></div>
      <hr><nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-dark w-50">
            <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
            <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">User</a></li>
            <li class="breadcrumb-item active"><a href="#" class="text-light">BBDD Nascor</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
          </ol>
      </nav>
        
    <div class="row">
        <div class="ml-5 w-100 offset">
            <div class="mt-5 mr-5 form-inline float-left">
                  <input class="form-control-sm ml-2 text-center" type="text" placeholder="26/11/2020">
                  <div class="form-group-sm ml-5">
                      <label class="bg-light border text-muted border-0">Prov</label>
                            <select class="text-center form-control text-center ml-1" id="exampleFormControlSelect1">
                              <option>Cepsa</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                  </div>
                  <div class="form-group-sm col-m-6 ml-5">
                      <label class="w-75 bg-light border text-muted border-0">Planta</label>
                            <select class="text-center form-control text-center ml-1" id="exampleFormControlSelect1">
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                            </select>
                  </div>
                  <div class="form-group-sm col-m-6 ml-5">
                      <label class="w-75 bg-light border text-muted border-0">Producte</label>
                            <select class="text-center form-control text-center w-100 ml-1" id="exampleFormControlSelect1">
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                            </select>
                  </div>
            </div >
            <div class="form-inline mr-5 mt-5 float-right p-3">
                <input class="form-control-sm ml-2 text-center" type="text" placeholder="1">
            </div>                            
        </div>
    </div>
    <div class="row">
        <div class="w-100">
          <table class="table table-bordered w-75 ml-5 mt-5 float-left" id="tablapersonal">
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>          
        </div>
    </div>
    <div class="row">
        <div class="float-left ml-5">
         <div class="form-group border float-right p-2 ml-3 mr-5">
                <div class="form-check form-check-group">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label text-muted" for="inlineRadio1">Realitzada</label>
                </div>
                <div class="form-check form-check-group mt-1">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label text-muted" for="inlineRadio2">No Realitzada</label>
                </div>
                <div class="form-check form-check-group mt-1">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" checked>
                  <label class="form-check-label text-muted" for="inlineRadio3">Indiferent</label>
                </div>
          </div>
        </div>
        <div class="float-right ml-5">
          <a class="btn btn-light" href="#" role="button">Filtrar</a>
          
          <a class="btn btn-light ml-5" href="#" role="button">Imprimir</a>
          <a class="btn btn-light" href="Nascor" role="button">Tancar</a>
        </div>        
    </div>
    
    
</section>  
    <!-- Scripts -->
    <script src="/./simongrup-laravel/public/js/app.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
</body>
</html>