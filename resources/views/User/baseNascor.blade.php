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
    <link rel="stylesheet" href="../public/css/estilos.css" />
</head>
<body>
<aside>
    
 @include('layouts/menuhor')
    
</aside>
<section class="container">   
    
    @include('layouts/logout')

    <div class="titulo p-3"><h1>Base datos Nascor</h1></div>
    <hr><nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">BBDD Nascor</li>
        </ol>
    </nav>
    <div>
      <div class="float-left">
          <div class="card col-auto">
              <div class="card-header text-center font-weight-bold w-100" >
                     <u>Estado Pedidos</u>
              </div>
              <div class="card-body text-center" >
                 <a class="btn btn-light" href="comandes" role="button"><i class="fas fa-truck-loading"></i><small> Pedidos</small></a>
              </div>
              <div class="card-body text-center" >
                 <a class="btn btn-light" href="carregues" role="button"><i class="fas fa-truck-moving"></i><small> Cargas</small></a>
              </div>
              <div class="card-body text-center" >
                 <a class="btn btn-light" href="transferencies" role="button"><i class="fas fa-cloud-download-alt"></i><small> Transferencias</small></a>
              </div>
              <div class="card-body text-center" >
                 <a class="btn btn-light " href="express" role="button"><i class="fas fa-bolt"></i><small> Express</small></a>
              </div>
              <div class="card-body text-center" >
                 <a class="btn btn-light" href="cobertures" role="button"><small>Cobertures</small></a>
              </div>
          </div>
          <div class="text-center float-bottom mt-2 mr-1" >
              <a class="btn btn-light w-100" href="#" role="button"></a>
          </div>
          <div class="text-center float-bottom mt-2 mr-1" >
              <a class="btn btn-light w-100" href="#" role="button"><small>AutoDisparo</small></a>
          </div>
          <div class="text-center float-bottom mt-2 mr-1 " >
              <a class="btn btn-light w-100" href="#" role="button"><small>AutoDisparo Vendes</small></a>
          </div>
          <div class="text-center float-bottom mt-2 mr-1" >
              <a class="btn btn-danger w-100" href="#" role="button"><small>Actualitzar Noves Vendes</small></a>
          </div>
      </div>    
      <div class="float-left">
              <div class="card">
                  <div class="card-header text-center font-weight-bold" >
                         <u>Consulta Stock</u>
                  </div>
                  <div class="card-body text-center" >
                         <a class="btn btn-light" href="plantes" role="button"><i class="fas fa-layer-group"></i><small> Por Instalaciones</small></a>
                  </div>
                  <div class="card-body text-center" >
                         <a class="btn btn-light" href="objectius" role="button"><i class="fas fa-rocket"></i><small> Objetivos Stock</small></a>
                  </div>
                  <div class="card-body text-center" >
                         <a class="btn btn-light" href="#" role="button"><i class="fas fa-chart-bar"></i><small> Consulta Stock</small></a>
                  </div>
                  <div class="card-body text-center" >
                         <a class="btn btn-light" href="#" role="button"><i class="fas fa-oil-can"></i><small> Lts. Necesarios</small></a>
                  </div>
                  <div class="card-body text-center" >
                         <a class="btn btn-light" href="#" role="button"><i class="fas fa-flag-checkered"></i><small> Para Mañana</small></a>
                  </div>
               </div>
               <div class="text-center float-bottom mt-2" >
                    <a class="btn btn-light w-100" href="#" role="button"><small>Nafta</small></a>
               </div>
               <input type="text" class="form-control mt-2" id="exampleInputEmail1" >
               <input type="text" class="form-control mt-1" id="exampleInputEmail2" >
      </div>
      <div class="float-left">        
                <div class="card">
                        <div class="card-header text-center font-weight-bold" >
                           <u>Precios</u>
                         </div>
                         <div class="card-body text-center">
                           <a class="btn btn-light" href="#" role="button"><i class="fas fa-dollar-sign"></i><small> Conf. Precios</small></a>
                         </div>
                         <div class="card-body text-center">
                           <a class="btn btn-light" href="#" role="button"><i class="fas fa-file-alt"></i><small> Gen. Archivo</small></a>
                         </div>
                         
                </div>
                <div class="text-center float-bottom mt-2" >
                    <a class="btn btn-light" href="#" role="button"><small>Subcuentas</small></a>
                </div>
                <div class="float-bottom mt-5" >
                    
                </div>
                <div class="text-center float-bottom mt-2" >
                    <a class="btn btn-light mt-5" href="#" role="button"><small>Regularització Mensual</small></a>
                </div>
                <div class="text-center float-bottom mt-2" >
                    <a class="btn btn-light" href="#" role="button"><small>Preus Icor</small></a>
                </div>
                <div class="form-group text-center mt-5">
                  <label for="exampleFormControlSelect1">Nombre</label>
                  <select class="form-control text-center w-100 ml-1" id="exampleFormControlSelect1">
                    <option>Juan Sin Miedo</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
      </div>
      <div class="float-left">
              <div class="card">
                  <div class="card-header text-center font-weight-bold" >
                     <u>Gráficos</u>
                   </div>
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><i class="fas fa-tags"></i><small> Gráfico Precios</small></a>
                   </div>
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><i class="fas fa-chart-line"></i><small> Gráfico Platts</small></a>
                   </div>
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><i class="fas fa-chalkboard"></i><small> Gráficos</small></a>
                   </div>
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><i class="fas fa-map"></i><small> Mapa</small></a>
                   </div>
              </div>
              <div class="text-center float-bottom mt-5" >
                  <a class="btn btn-light w-75" href="#" role="button">Primes</a>
              </div>
              <div class="text-center float-bottom mt-2" >
                  <a class="btn btn-light w-75" href="#" role="button">Comando262</a>
              </div>
              <div class="text-center float-bottom mt-5">
                <label class="w-50 bg-light border-0 text-center">45</label>
              </div>
              <div class="text-center float-bottom">
                  <label class="w-75 bg-light border text-center">15.000,85€</label>
              </div>
      </div>       
      <div class="float-left">
              <div class="card">
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><small>Pricing</small></a>
                   </div>
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><small>Mena</small></a>
                   </div>
                   <div class="card-body text-center" >
                     <a class="btn btn-light" href="#" role="button"><small>Consumo2016</small></a>
                   </div>
              </div>
              <div class="text-center float-bottom mt-4" >
                    <a class="btn btn-light" href="#" role="button"><small>Lots Serrezoil</small></a>
              </div>
              <div class="form-group text-center mt-5">
                  <label for="exampleFormControlSelect1">Mes</label>
                  <select class="form-control-sm text-center w-100" id="exampleFormControlSelect1">
                    <option>Gener</option>
                    <option>Febrer</option>
                    <option>Març</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
              <div class="form-group text-center">
                  <label for="exampleFormControlSelect1">Any</label>
                  <select class="form-control-sm text-center w-100" id="exampleFormControlSelect1">
                    <option>2020</option>
                    <option>2019</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div> 
               <div class="text-center float-bottom mt-5">
                 <label class="w-50 bg-light border-0 text-center">33</label>
              </div>
              <div class="text-center float-bottom">
                  <label class="w-75 bg-light border text-center">10.000,85€</label>
              </div>          
      </div>
      <div class="float-left">
            <div class="card">
                     <div class="card-header text-center font-weight-bold">
                       <h4><b>Nascor</b></h4>
                     </div>
                     <div class="card-body text-center" >
                       <a class="btn btn-light" href="#" role="button">Imputacions</a>
                     </div>
                     <div class="card-body text-center" >
                       <a class="btn btn-light" href="#" role="button">Proformes</a>
                     </div>
                     <div class="card-body text-center" >
                       <a class="btn btn-light" href="#" role="button">Nova Operativa</a>
                     </div>
                     <div class="card-body text-center" >
                       <a class="btn btn-light" href="#" role="button">Transport</a>
                     </div>
                     <div class="card-body text-center" >
                       <a class="btn btn-light" href="#" role="button">Telèfons</a>
                     </div>
                     <div class="card-body text-center" >
                       <a class="btn btn-light" href="#" role="button">Avales</a>
                     </div>
                     
                        
            </div>
            <div class="text-center float-bottom mt-1">
                <label class="w-50 bg-light border-0 text-center">20</label>
            </div>
            <div class="text-center float-bottom">
                <label class="w-75 bg-light border text-center">1.000€</label>
            </div>
       </div>
    </div>
      <table class="card col-12 border-0">
        <tr>
          <td class="col-md-4">
            <div class="form-group-sm text-center mt-5">
                  <input type="text" class="form-control float-right w-25" id="exampleInputEmail1" >
                  <label for="exampleFormControlSelect1" class="float-left">Nom Transport</label>
                  <select class="form-control text-center w-100 ml-1" id="exampleFormControlSelect1">
                    <option>Juan Sin Miedo</option>
                    <option>3</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group-sm text-center mt-5">
                  <input type="text" class="form-control float-right w-25" id="exampleInputEmail4" >
                  <label for="exampleFormControlSelect1"  class="float-left">Transportistas</label>
                  <select class="form-control text-center w-100 ml-1" id="exampleFormControlSelect1">
                    <option>Juan Sin Miedo</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
          </td>

          <td class="col-2 border">
            <div class="form-check">
              <input class="form-check-input position-static" type="radio" id="blankRadio2" name="blankRadio2" value="option2" aria-label="..." checked>
              <label class="form-check-label" for="blankRadio2">Per_Client</label>
            </div>
            <div class="form-check">
              <input class="form-check-input position-static mt-2" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
              <label class="form-check-label" for="blankRadio1">Tots</label>
            </div>
          </td>

          <td class="col-2">
            <div>
              <a class="btn btn-light w-100" href="#" role="button">Meroil</a>
              <a class="btn btn-light w-100 mt-2" href="#" role="button">Previsions</a>
            </div>
            
          </td>

          <td class="col-4">
            <div class="bg-light">
              <div class="float-left">
                <div class="text-center float-left mt-1">
                    <label class="w-50 bg-light border-0 text-center">Total Stock Actual</label>
                </div>
                <div class="text-center float-left">
                    <label class="w-75 bg-light border text-center">1.000€</label>
                </div>
              </div>
               <div class="float-left">
                <div class="text-center float-bottom mt-1">
                    <label class="w-50 bg-light border-0 text-center">45</label>
                </div>
                <div class="text-center float-bottom">
                    <label class="w-75 bg-light border text-center">1.000€</label>
                </div>
              </div>
                
            </div>
          </td>
      </tr>
        
    </table>
      <hr>
      <div class="container">
        <table class="col-md-12">
          <tr>
            <td >
              <div class="form-group-sm text-center col-m-6">
                  <select class="form-control text-center w-100 ml-1" id="exampleFormControlSelect1">
                    <option></option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
            </td>
            <td>
              <input type="text" class="form-control ml-4 w-25" id="exampleInputEmail7" placeholder="2:50:9" >
            </td>
            <td>
              <a class="btn btn-light w-100 " href="#" role="button">Requery</a>
            </td>
          </tr>
        </table>
        <div>
          <table class="mt-4 w-100">
            <tr>
              <td>
                 <div class="card">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">
                          <table>
                            <th>
                                Facturado   
                            </th>
                            <tr>
                              <td class="float-left"><small>Fecha</small></td>
                              <td class="float-right"><small> Litros</small></td>
                            </tr>
                          </table>
                        </label>

                        <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                  </div>
              </td>
              <td>
                <div class="card">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">
                          <table>
                            <th>
                                Pedidos   
                            </th>
                            <tr>
                              <td class="float-left"><small>Fecha</small></td>
                              <td class="float-right"><small> Litros</small></td>
                            </tr>
                          </table>
                        </label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                  </div>
              </td>
              <td>
                <div class="card">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">
                          <table>
                            <th>
                                Compras   
                            </th>
                            <tr>
                              <td class="float-left"><small>Fecha</small></td>
                              <td class="float-right"><small> Litros</small></td>
                            </tr>
                          </table>
                        </label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                  </div>
              </td>
            </tr>
          </table>
         
          
          
        
</section>

  
  
    <!-- Scripts -->
    <script src="../public/js/app.js"></script>
     <!-- Latest compiled JavaScript -->
    <script src="../public/js/bootstrap.min.js" type="text/javascript"></script>
  
</body>
</html>
