<?php 
  $reduser= $now->format('d/m/yy');
  ?>
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
        <div class="ml-2 w-75">
          <div class="float-left">
                <a class="btn btn-light" href="#" role="button">Detall</a>
                <a class="btn btn-light" href="#" role="button">Alliberar</a>
          </div> 
          <div class="float-right">
            <div class="form-check form-check-inline">
                  <input class="form-check-input position-static" type="checkbox" id="blankCheck" name="blankCheck" aria-label="...">
                  <label class="form-check-label text-muted mr-2" for="blankCheck"><small>Imputar </small></label>
                  <input class="form-check-input position-static" type="checkbox" id="blankCheck2" name="blankCheck2" aria-label="..." >
                  <label class="form-check-label text-muted" for="blankCheck2"><small>Posar Referència</small></label>
            </div>     
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="ml-2 w-100 offset">
          <div class="mt-4 form-inline float-left">
                <a class="btn btn-light" href="#" role="button">T</a>
                <a class="btn btn-light text-center ml-2" href="#" role="button"> - </a>
                <input class="form-control-sm ml-2 text-center" type="text" placeholder="{{$reduser}}">
                <a class="btn btn-light text-center ml-2" href="#" role="button"> + </a>
          </div > 
          <div class="mt-4 float-right">
            <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadio" value="#">
            <label class="form-check-label text-muted" for="exampleRadios1">
              Sense Número
            </label>
            <div class="form-inline ml-2 border float-right ml-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                  <label class="form-check-label text-muted" for="inlineRadio1">Per Nom</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label text-muted" for="inlineRadio2">Per Hora</label>
                </div>
            </div>
            <div class="form-inline ml-2 float-right">
              <a class="btn btn-light" href="#" role="button">Imprimir</a>
            </div>
            <div class="ml-2 float-right">
              <input class="form-control-sm ml-2 text-center" type="text" placeholder="26">
            </div>
         </div>   
        </div>
    </div>
    <div class="row">
        <div class="w-100">
          <table class="table table-bordered w-75 ml-5 mt-5 float-left" id="tablapersonal">
            <tr>
              <td>26/11/2020</td>
              <td>26/11/2020</td>
              <td>(6)CARTAGENA</td>
              <td>ATTITUDE & ABILITY (EESS FERROCARR)</td>
              <td>GASOLINA 95 HQ400</td>
              <td>6000</td>
              <td>6439240</td>
              <td>13:05:00</td>
            </tr>
          </table>
          <form class="form-group mt-5">
            <input class="form-control-sm ml-2" type="text" placeholder="">
            <input class="form-control-sm mt-1 ml-2" type="text" placeholder="">
            <a class="btn btn-light text-center mr-5 ml-5 mt-2" href="#" role="button">Disponible</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-2" href="#" role="button">Serrezoil</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-5" href="#" role="button">Remafe</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-1" href="#" role="button">Per Zones</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-1" href="#" role="button">Per plantes</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-3" href="#" role="button">Serrezoil</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-5" href="#" role="button">Imprimir</a>
            <a class="btn btn-light text-center mr-5 ml-5 mt-4" href="#" role="button">Serrezoil Diego</a>
          </form>
          
        </div>
    </div>
    <div class="row w-100">
        <div class="form-inline ml-5 py-2 border float-right ml-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" CHECKED>
                  <label class="form-check-label text-muted" for="inlineRadio1">Diari</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label text-muted" for="inlineRadio2">Mensual</label>
                </div>
          </div>
          <div>
            <form class="form-inline ml-2">
              <div class="form-group text-center">
                    <label class="float-left text-muted" for="exampleFormControlSelect">Referència</label>
                    <select class="form-control text-center ml-1" id="exampleFormControlSelect">
                      <option></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>      
            </form>
            <form class="form-inline ml-2">
              <div class="form-group text-center">
                    <label class="float-left text-muted" for="exampleFormControlSelect">Comanda</label>
                    <select class="form-control text-center ml-3" id="exampleFormControlSelect">
                      <option></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>
            </form>
            <form class="form-inline ml-2">
              <div class="form-group text-center">
                    <label class="float-left text-muted" for="exampleFormControlSelect">Instalació</label>
                    <select class="form-control text-center ml-3" id="exampleFormControlSelect">
                      <option></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>
            </form>
          </div>
          <div>
            <input class="form-control-sm text-center" type="text" placeholder="17.602">
          </div>
          <div class="ml-2">
            <div class="form-check">
                <input class="form-check-input position-static" type="radio" id="blankRadio2" name="blankRadio2" value="option2" aria-label="..." checked>
                <label class="form-check-label" for="blankRadio2">Per_Nom</label>
              </div>
              <div class="form-check">
                <input class="form-check-input position-static mt-2" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                <label class="form-check-label" for="blankRadio1">Altres</label>
              </div>
          </div>
          <div class="form-group-sm text-center ml-2">
            <form class="form-inline">
                    <label for="exampleFormControlSelect" class="float-left text-muted"><small>Client</small></label>
                    <input type="text" class="form-control-sm ml-3" id="exampleInputEmail1" >
                    
            </form>
            <select class="form-control text-center ml-1" id="exampleFormControlSelect">
                      <option></option>
                      <option>3</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
            </select>
          </div>
          <div>
            <form class="form-group text-center ml-4">
              <a class="form-control btn btn-light text-center mt-2" href="Nascor" role="button">Tancar</a>
              <a class="form-control btn btn-light text-center mt-2" href="#" role="button">Guanys</a>
            </form>
          
          </div>
      </div>
          
          
    </div>
    <div class="row w-50 float-right">
          <form class="form-inline float-right">
            <a class="form-control-sm btn btn-light text-center mt-2 ml-1" href="#" role="button">Saldos Zona</a>
            <a class="form-control-sm btn btn-light text-center mt-2 ml-1" href="#" role="button">Saldos Total</a>
            <form class="form-group text-center ml-4">
              <a class="form-control-sm btn btn-light text-center ml-2 mt-2" href="#" role="button">Saldos Qualitats</a>
              <a class="form-control-sm btn btn-light text-center ml-2 mt-2" href="#" role="button">Zones 3</a>
            </form>
          </form>
    </div>
    <div class="row w-100">
      <form class="form-inline ml-4 mt-5">
        <input class="form-control-sm ml-2" type="text" placeholder="">
        <label class="float-left text-mute ml-4"> Texto91</label>
        <input class="form-control-sm ml-1" type="text" placeholder="">
        <a class="form-control btn btn-light text-center ml-5" href="#" role="button">Q8</a>
        <a class="form-control btn btn-light text-center ml-1" href="#" role="button">Nafta</a>
       
      </form>
      <form class="form-group ml-5 mt-5">
        <a class="form-control btn btn-light text-center" href="#" role="button">Remafe</a>
        <a class="form-control btn btn-light text-center mt-1" href="#" role="button">Resto Remafe</a>
      </form>
      <div class="mt-5 ml-2">
        <a class="form-control btn btn-light text-center" href="#" role="button">Remafe(R)</a>
      </div>

    </div>
  </div>
</section>  
    <!-- Scripts -->
    <script src="/./simongrup-laravel/public/js/app.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
</body>
</html>