  <?php 
  $datehoy = Carbon\Carbon::now()->format('l');
  $dathoyrest =Carbon\Carbon::now()->format('jS \\of F Y');
  $hora = Carbon\Carbon::now()->isoFormat('H:mm a');
    
      $mytime0 = Carbon\Carbon::now()->subDay(1)->format('l d-m');
      $mytime1 = Carbon\Carbon::now()->format('l d-m');
      $mytime2 = Carbon\Carbon::now()->addDay(1)->format('l d-m');
      $mytime3 = Carbon\Carbon::now()->addDay(2)->format('l d-m');
      $mytime4 = Carbon\Carbon::now()->addDay(3)->format('l d-m');
      $mytime5 = Carbon\Carbon::now()->addDay(4)->format('l d-m');
      $mytime6 = Carbon\Carbon::now()->addDay(5)->format('l d-m');
      $mytime7 = Carbon\Carbon::now()->addDay(6)->format('l d-m');

      $mytime0dm = Carbon\Carbon::now()->subDay(1)->format('d-m-Y');
      $mytime1dm = Carbon\Carbon::now()->format('d-m-Y');
      $mytime2dm = Carbon\Carbon::now()->addDay(1)->format('d-m-Y');
      $mytime3dm = Carbon\Carbon::now()->addDay(2)->format('d-m-Y');
      $mytime4dm = Carbon\Carbon::now()->addDay(3)->format('d-m-Y');
      $mytime5dm = Carbon\Carbon::now()->addDay(4)->format('d-m-Y');
      $mytime6dm = Carbon\Carbon::now()->addDay(5)->format('d-m-Y');
      $mytime7dm = Carbon\Carbon::now()->addDay(6)->format('d-m-Y');

      $mytime0d = Carbon\Carbon::now()->subDay(1)->format('l');
      $mytime1d = Carbon\Carbon::now()->format('l');
      $mytime2d = Carbon\Carbon::now()->addDay(1)->format('l');
      $mytime3d = Carbon\Carbon::now()->addDay(2)->format('l');
      $mytime4d = Carbon\Carbon::now()->addDay(3)->format('l');
      $mytime5d = Carbon\Carbon::now()->addDay(4)->format('l');
      $mytime6d = Carbon\Carbon::now()->addDay(5)->format('l');
      $mytime7d = Carbon\Carbon::now()->addDay(6)->format('l');

      if (($mytime0d == 'Sunday')  or ($mytime0d == 'Saturday'))
        {
          $mytime0djornada = 24;
          $mytime0d=0;
          $mytime0dfgreen=0;
          $mytime0dfyellow=0;
          $mytime0dfred=0;
          $mytime0dpedmat = 0;
          $mytime0dtotal = 1;         
          $mytime0druta = 0;
              
        }
      else
        {
          $mytime0djornada = 24;
          $mytime0d=1;
          $mytime0dfgreen=1;
          $mytime0dfyellow=1;
          $mytime0dfred=1;
          $mytime0dpedmat = 3;
          $mytime0dtotal = 3;
          $mytime0druta = 2;
            
          
        }
      
      if (($mytime1d == 'Sunday') or ($mytime1d == 'Saturday'))
        
        {
          $mytime1djornada = 24;
          $mytime1d=0;
          $mytime1dfgreen=0;
          $mytime1dfyellow=0;
          $mytime1dfred=0;
          $mytime1dpedmat = 0;
          $mytime1druta = 0;
          $mytime0dtotal = 1;
        }
      else
        {
          $mytime1djornada = 24;
          $mytime1d=6;
          $mytime1dfgreen=6;
          $mytime1dfyellow=6;
          $mytime1dfred=6;
          $mytime1dpedmat = 3;
          $mytime1druta = 1;
          $mytime1dtotal = 3;
        }
                            

      if (($mytime2d == 'Sunday') or ($mytime2d == 'Saturday'))
        
        {
          $mytime2djornada = 24;
          $mytime2d=0;
          $mytime2dfgreen=0;
          $mytime2dfyellow=0;
          $mytime2dfred=0;
          $mytime2dpedmat = 0;
          $mytime2druta = 0;
          $mytime2dtotal = 1;
        }
      else
        {
          $mytime2djornada = 24;
          $mytime2d=6;
          $mytime2dfgreen=6;
          $mytime2dfyellow=6;
          $mytime2dfred=6;
          $mytime2dpedmat = 3;
          $mytime2druta = 3;
          $mytime2dtotal = 4;
        }

      if (($mytime3d == 'Sunday') or ($mytime3d == 'Saturday'))
        
        {
          $mytime3djornada = 24;
          $mytime3d=0;
          $mytime3dfgreen=0;
          $mytime3dfyellow=0;
          $mytime3dfred=0;
          $mytime3dpedmat = 0;
          $mytime3druta = 0;
          $mytime3dtotal = 1;
        }
      else
        {
           $mytime3djornada = 24;
           $mytime3d=6;
           $mytime3dfgreen=6;
           $mytime3dfyellow=6;
           $mytime3dfred=6;
           $mytime3dpedmat = 3;
           $mytime3druta = 1;
           $mytime3dtotal = 4;
        }
                           
      if (($mytime4d == 'Sunday') or ($mytime4d == 'Saturday'))
        
        {
          $mytime4djornada = 24;
          $mytime4d=0;
          $mytime4dfgreen=0;
          $mytime4dfyellow=0;
          $mytime4dfred=0;
          $mytime4dpedmat = 0;
          $mytime4druta = 0;
          $mytime4dtotal = 1;
        }
      else
        {
          $mytime4djornada = 24;
          $mytime4d=2;
          $mytime4dfgreen=2;
          $mytime4dfyellow=2;
          $mytime4dfred=2;
          $mytime4dpedmat = 2;
          $mytime4druta = 3;
          $mytime4dtotal = 2;
        }
                            
      if (($mytime5d == 'Sunday') or ($mytime5d == 'Saturday'))
        
        {
          $mytime5djornada = 24;
          $mytime5d=0;
          $mytime5dfgreen=0;
          $mytime5dfyellow=0;
          $mytime5dfred=0;
          $mytime5dpedmat = 0;
          $mytime5druta = 0;
          $mytime5dtotal = 1;
        }
      else
        {
          $mytime5djornada = 24;
          $mytime5d=6;
          $mytime5dfgreen=6;
          $mytime5dfyellow=6;
          $mytime5dfred=6;
          $mytime5dpedmat = 2;
          $mytime5druta = 1;
          $mytime5dtotal = 3;
        }
                            
      if ($mytime6d == 'Sunday')
        
        {
          $mytime6djornada = 24;
          $mytime6d=0;
          $mytime6dfgreen=0;
          $mytime6dfyellow=0;
          $mytime6dfred=0;
          $mytime6dpedmat = 0;
          $mytime6druta = 0;
          $mytime6dtotal = 1;
        }
      else
        {
          $mytime6djornada = 24;
          $mytime6d=5;
          $mytime6dfgreen=5;
          $mytime6dfyellow=5;
          $mytime6dfred=5;
          $mytime6dpedmat = 3;
          $mytime6druta = 2;
          $mytime6dtotal = 2;
        }
      if ($mytime7d == 'Sunday')
        
        {
          $mytime7djornada = 24;
          $mytime7d=0;
          $mytime7dfgreen=0;
          $mytime7dfyellow=0;
          $mytime7dfred=0;
          $mytime7dpedmat = 0;
          $mytime7druta = 0;
          $mytime7dtotal = 1;
        }
      else
        {
          $mytime7djornada = 24;
          $mytime7d=1;
          $mytime7dfgreen=1;
          $mytime7dfyellow=1;
          $mytime7dfred=1;
          $mytime7dpedmat = 2;
          $mytime7druta = 0;
          $mytime7dtotal = 2;

          for($i = 1; $i < 6; $i++)
          {
            
            $mytime7druta = $mytime7druta + 1;
            
          }
        }
?>

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
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="../public/css/demo.css" rel="stylesheet" />
  </head>

  <body oncopy="return false" onpaste="return false">  
     <div class="wrapper">
          @include('layouts.sidebar2')
          <div class="main-panel">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                  <div class="container-fluid">
                      <a class="navbar-brand" href="#pablo" style="font-size:1rem"> Simon Grup - Panel capacidad de rutas - Gasomad </a>
                      <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-bar burger-lines"></span>
                          <span class="navbar-toggler-bar burger-lines"></span>
                          <span class="navbar-toggler-bar burger-lines"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navigation">
                          <ul class="nav navbar-nav mr-auto">
                              <li class="nav-item">
                                  <a href="#" class="nav-link" data-toggle="dropdown">
                                      
                                      <span class="d-lg-none">Simon Grup - Panel capacidad de rutas - Gasomad</span>
                                  </a>
                              </li>                          
                          </ul>
                          <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                                 @include('layouts/logout')
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
              <!-- End Navbar -->
              <div class="content">                  
                <div class="row mb-2 ml-5 mr-2 bg-white">
                
                  <div class="col-1 border-right"><h3><small>Hoy es</small></h3></div>
                  <div class="col-7">
                    <div class="row ml-2"><h3><small>{{$datehoy}} </small></h3> <h3><small> {{$dathoyrest}}</small></h3></div>
                  </div>
                  
                  <div class="col-2 border-right">
                    <div class="float-right">
                      <div ><small>Tarragona, España</small></div>
                      <div class="hora float-right"><h5><small>{{$hora}}</small></h5></div>
                   </div>                   
                  </div>
                  <div class="row float-right col-2">
                        <!-- weather widget start -->
                        <div class="my-auto" id="m-booked-prime-90758">
                           <div class="booked-wzsp-prime-in">
                             <div class="booked-wzsp-prime-data">
                               <div class="booked-wzsp-prime-img wt03">                              
                               </div> 
                               <div class="booked-wzsp-day-val"> 
                                  <div class="booked-wzsp-day-number">
                                    <span class="plus">+</span>14
                                  </div> 
                                  <div class="booked-wzsp-day-dergee"> 
                                      <div class="booked-wzsp-day-dergee-val">&deg;</div> 
                                      <div class="booked-wzsp-day-dergee-name">C</div> 
                                  </div> 
                                </div> 
                              </div> 
                            </div> 
                        </div>
                  </div> 
                </div>       
                <div class="row">
                  <figure class="highcharts-figure ml-4 col-12">
                    <div class="row ml-3">
                      
                      <div class="figure-fluid">
                                    <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                                    <div id="container1"></div>
                      </div>
                      <div class="figure-fluid  border border rounded">
                         <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                      <div id="container2"></div></div>
                      <div class="figure-fluid ">
                        <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                          </div>

                      <div id="container3"></div>
                      </div>
                      <div class="figure-fluid ">
                        <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                        <div id="container4"></div>
                      </div>
                      <div class="figure-fluid ">
                        <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                        <div id="container5"></div>
                      </div>
                      <div class="figure-fluid ">
                        <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                        <div id="container6"></div>
                      </div>
                      <div class="figure-fluid ">
                        <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                        <div id="container7"></div>
                      </div>
                      <div class="figure-fluid ">
                        <div class="row  ml-3">
                                      
                                      <div class="col-sm-3"><p class="text-danger">1</p></div>
                                      <div class="col-sm-2"><p>3</p></div>
                                      <div class="col-sm-2"><p>4</p></div>
                                      <div class="col-sm-2"><p>2</p></div>
                                      <div class="col-sm-3"></div>
                                      
                                    </div>
                        <div id="container8"></div>
                      </div>
                    </div>
                    
                    <div class="row pt-5 mt-5 col-11" id="table">
                        <div class="col-12 card" >
                          <!--<img src="..." class="card-img-top" alt="...">-->
                            <div class="col-3"><h4 class="card-title card-header">Pedidos:</h4>
                                <select class="form-control" id="locale" name="locale">
                                  <option value="Hoy" class="text-success"> Por Fecha: {{$mytime1}}</option>
                                  <option value="Mañana" class="text-danger">Por Fecha: {{$mytime2}}</option>
                                  <option value="PasadoMañana" class="text-danger"> Por Fecha: {{$mytime3}}</option>
                                  <option value="Siguiente" class="text-danger">Por Fecha: {{$mytime4}}</option>
                                  <option value="PostSiguiente" class="text-danger"> Por Fecha: {{$mytime5}}</option>
                                  <option value="ElOtro" class="text-danger">Por Fecha: {{$mytime6}}</option>
                                  <option value="ElOtroSiguiente" class="text-danger"> Por Fecha: {{$mytime7}}</option>
                                  <option value="Ayer" class="text-secondary">Por Fecha: {{$mytime0}}</option>
                                  <option value="CKW1234" class="text-info"> Por Matrícula: CKW1234</option>
                                  <option value="TRG2021" class="text-info">Por Matrícula: TRG2021</option>
                                  <option value="RST4321" class="text-info">Por Matrícula: RST4321</option>
                                  <option value="MLS2345" class="text-info">Por Matrícula: MLS2345</option>
                                  <option value="HVK2154" class="text-info">Por Matrícula: HVK2154</option>
                                </select>
                              </div>           
                           
                            <div class="card-body">  
                             <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Número de expedición</th>
                                    <th scope="col">Cliente
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Programado a las</th>
                                    <th scope="col">Franja de tiempo</th>
                                    <th scope="col">Personalizado1</th>
                                    <th scope="col">Volumen</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="table-success">
                                    <th scope="row"><small>2021/001/2100869</small></th>
                                    <td><small>Germans Martorell Dulcet</small></td>
                                    <td><small>CL Major nº1</small></td>
                                    <td><small>La Febro</small></td>
                                    <td><small>07:57</small></td>
                                    <td><small>07:00 - 13:00</small></td>
                                    <td><small>GASOLEO BONIFICADO</small></td>
                                    <td><small>1000</small></td>
                                  </tr>
                                  <tr class="table-warning">
                                    <th scope="row"><small>2021/001/2100860</small></th>
                                    <td><small>Maria Teresa Bonet Vallverdu</small></td>
                                    <td><small>Carrer de la Febro</small></td>
                                    <td><small>Prades</small></td>
                                    <td><small>08:14</small></td>
                                    <td><small>08:00 - 14:00</small></td>
                                    <td><small>GASOLEO BONIFICADO</small></td>
                                    <td><small>450</small></td>
                                  </tr>
                                  <tr class="table-danger">
                                    <th scope="row"><small>2021/001/2100795</small></th>
                                    <td ><small>Irene Vallverdu Balanya</small></td>
                                    <td><small>CL Caballa S/N</small></td>
                                    <td><small>Prades</small></td>
                                    <td><small>08:20</small></td>
                                    <td><small>09:30 - 14:00</small></td>
                                    <td><small>GASOLEO BONIFICADO</small></td>
                                    <td><small>400</small></td>
                                  </tr>
                                  <tr class="table-danger">
                                    <th scope="row"><small>2021/001/2100874</small></th>
                                    <td><small>Robert Salvado Vila</small></td>
                                    <td><small>@twitter</small></td>
                                    <td><small>nhdzh</small></td>
                                    <td><small>fdsgh</small></td>
                                    <td><small>fhg</small></td>
                                    <td><small>hf</small></td>
                                    <td><small>hf</small></td>
                                  </tr>
                                  <tr class="table-danger">
                                    <th scope="row"><small>2021/001/2100879</small></th>
                                    <td><small>xzc</small></td>
                                    <td><small>@twitter</small></td>
                                    <td><small>nhdzh</small></td>
                                    <td><small>fdsgh</small></td>
                                    <td><small>fhg</small></td>
                                    <td><small>hf</small></td>
                                    <td><small>hsdf</small></td>
                                  </tr>
                                </tbody>
                              </table>                             
                            </div>
                        </div>
                    </div>
                    
                  </figure>
              </div>            
    </div>
    <footer class="footer">
        <div class="container-fluid">
          <nav>
                          
          <p class="copyright text-center">
               ©
              <script>
                document.write(new Date().getFullYear())
              </script>
              <a href="#">SimonGrup</a>, el poder del gasóleo
          </p>
          </nav>
        </div>
      </footer>    
        

  </body>
  <script src="../public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script>
   
     $('th').click(function() {
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc) {
      rows = rows.reverse()
    }
    for (var i = 0; i < rows.length; i++) {
      table.append(rows[i])
    }
    setIcon($(this), this.asc);
  })

  function comparer(index) {
    return function(a, b) {
      var valA = getCellValue(a, index),
        valB = getCellValue(b, index)
      return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
    }
  }

  function getCellValue(row, index) {
    return $(row).children('td').eq(index).html()
  }

  function setIcon(element, asc) {
    $("th").each(function(index) {
      $(this).removeClass("sorting");
      $(this).removeClass("asc");
      $(this).removeClass("desc");
    });
    element.addClass("sorting");
    if (asc) element.addClass("asc");
    else element.addClass("desc");
  }
  </script>
  <script src="../public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="../public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../public/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../public/js/plugins/bootstrap-switch.js"></script> 
  <!--  Notifications Plugin    -->
  <script src="../public/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
  <script src="../public/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
  

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <script type="text/javascript">
      var Hoy = <?php echo json_encode($mytime1)?>;
      var Mañana = <?php echo json_encode($mytime2)?>;
      var PasadoMañana = <?php echo json_encode($mytime3)?>;
      var Siguiente = <?php echo json_encode($mytime4)?>;
      var PostSiguiente = <?php echo json_encode($mytime5)?>;
      var ElOtro = <?php echo json_encode($mytime6)?>;
      var ElOtroSiguiente = <?php echo json_encode($mytime7)?>;
      
      var ayer = <?php echo json_encode($mytime0)?>;

      var mytime0djfiat = <?php echo json_encode($mytime0djornada)?>;
      var mytime0djruta = <?php echo json_encode($mytime0djornada)?>;
      var mytime0djped = <?php echo json_encode($mytime0djornada)?>;

      var mytime1djfiat = <?php echo json_encode($mytime1djornada)?>;
      var mytime1djruta = <?php echo json_encode($mytime1djornada)?>;
      var mytime1djped = <?php echo json_encode($mytime1djornada)?>;

      var mytime2djfiat = <?php echo json_encode($mytime2djornada)?>;
      var mytime2djruta = <?php echo json_encode($mytime2djornada)?>;
      var mytime2djped = <?php echo json_encode($mytime2djornada)?>;

      var mytime3djfiat = <?php echo json_encode($mytime3djornada)?>;
      var mytime3djruta = <?php echo json_encode($mytime3djornada)?>;
      var mytime3djped = <?php echo json_encode($mytime3djornada)?>;

      var mytime4djfiat = <?php echo json_encode($mytime4djornada)?>;
      var mytime4djruta = <?php echo json_encode($mytime4djornada)?>;
      var mytime4djped = <?php echo json_encode($mytime4djornada)?>;

      var mytime5djfiat = <?php echo json_encode($mytime5djornada)?>;
      var mytime5djruta = <?php echo json_encode($mytime5djornada)?>;
      var mytime5djped = <?php echo json_encode($mytime5djornada)?>;

      var mytime6djfiat = <?php echo json_encode($mytime6djornada)?>;
      var mytime6djruta = <?php echo json_encode($mytime6djornada)?>;
      var mytime6djped = <?php echo json_encode($mytime6djornada)?>;

      var mytime7djfiat = <?php echo json_encode( $mytime7djfiat = $mytime7djornada - $mytime7druta ) ?>;
      var mytime7djruta = <?php echo ($mytime7djornada)?>;
      var mytime7djped = <?php echo ($mytime7djornada)?>;

                 
  Highcharts.chart('container1', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300, 
          width:150,        
          marginLeft: 1,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:lightgray"">' + ayer +'</p><br><br><div>'+ mytime0djped +' pedidos | 43%'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {             

               return '<div style="background-color:black; padding: 3px; color: red;">' + (this.axis.series[1].yData[this.x] ) + '</div>';
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',
            trackByArea: true,
           
          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1, 
            point:{
              events: { 
                click: function() {
                  if(this.series.name === 'Jordi'){
                    alert(this.series.point.name);
                  }


                    if((this.series.name === 'Jordi') || (this.series.name === 'Joe') || (this.series.name === 'Jane'))
                      {
                        
                      if(document.getElementById("table").style.display == "none" )
                        {
                          document.getElementById("table").style.display = "flex";
                          document.getElementById("table2").style.display = "none";
                           document.getElementById("mañana").style.display = "none";
                          document.getElementById("dia").selectedIndex = 1;
                          document.getElementById("locale").selectedIndex = 1;
                        }
                        else
                        {
                          document.getElementById("table").style.display = "none";
                          document.getElementById("table2").style.display = "none";
                           document.getElementById("mañana").style.display = "none";
                        }               
                    }
                    else if((this.series.name === 'CKW1234') || (this.series.name === 'TRG2021') || (this.series.name === 'RST4321') || (this.series.name === 'MLS2345') || (this.series.name === 'HVK2154') || (this.series.name === 'Matrícula') || (this.series.name === 'Total pedidos'))
                    {
                      if(document.getElementById("table2").style.display == "none" )
                        {
                          document.getElementById("table2").style.display = "flex";
                          document.getElementById("table").style.display = "none";
                           document.getElementById("mañana").style.display = "none";
                          document.getElementById("dia").selectedIndex = 1;
                          document.getElementById("locale").selectedIndex = 1;
                        }
                        else
                        {
                          document.getElementById("table").style.display = "none";
                          document.getElementById("table2").style.display = "none";
                           document.getElementById("mañana").style.display = "none";
                        }               
                    }                                             
                }
              }
            },               
          }
      }, 
      credits: {
            enabled: false
      },
      series: [{
          name: "Total fiabilidad",//jornada laboral 8 horas
          data: [{{$mytime0dtotal}}], //[Ayer,Hoy]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#FBFBFB',          
          pointPadding: 0.2,         
      }, {
          name: 'Jane',
          data: [{{$mytime0dfred}} ], //[Ayer,Hoy]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime0dfyellow}}], //[Ayer,Hoy]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime0dfgreen}}], //[Ayer,Hoy]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: "Total rutas", //rutas
          data: [2], //[Ayer,Hoy]
           stack: 'ruta',
           color:'#FBFBFB',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'rutaCentro', //rutas
          data: [{{$mytime0d}}], //[Ayer,Hoy]
           stack: 'ruta',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'rutaNofiab', //rutas
          data: [{{$mytime0d}}], //[Ayer,Hoy]
           stack: 'ruta',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'rutaOtrodia', //rutas
          data: [{{$mytime0d}}], //[Ayer,Hoy]
           stack: 'ruta',
           color:'#D50D20',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [2], //[Ayer,Hoy]
           stack: 'pedidos',
           color:'#FBFBFB',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: "RST4321", // nºpedidos
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime0dpedmat}}], //[Hoy, Mañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [2], //[Ayer,Hoy]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#FBFBFB',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime0dpedmat}}], //[Ayer, Hoy]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime0dpedmat}}], //[Ayer,Hoy, Mañana, PasadoMañana, Siguiente, PostSiguiente, ElOtro, ElOtroSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });           
  Highcharts.chart('container2', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300, 
          width:150,        
          marginLeft: 10,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:green">' + Hoy +'</p><br><br><div>'+ mytime0djped +' pedidos | 51%</div>'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {             

                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [3], //[Hoy]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime1d}}], //[Hoy]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime1d}}], //[Hoy]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime1d}}], //[Hoy]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [3], //[Hoy]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime1d}}], //[Hoy]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime1d}}], //[Hoy]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime1d}}], //[Hoy]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [3], //[Ayer,Hoy]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime1d}}], //[Ayer,Hoy]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime1d}}], //[Ayer,Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [3], //[Hoy]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime1d}}], //[Hoy]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  Highcharts.chart('container3', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300,
          width:150,
          marginLeft: 0,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:red">' + Mañana +'</p><br><br><div>'+ mytime0djped +' pedidos | 82%</div>'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            style: { 
              formatter: function() {
                if((this.stack == "fiabilidad"))
                {
                  color: 'red'
                }
              },
              
            },
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {
                
                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [ 5], //[Mañana]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [ 4], //[Mañana]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [4], //[Mañana]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime2d}}], //[Mañana]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [4], //[Mañana]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime2d}}], //[Mañana]
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          stack:'matrícula',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime2d}}], //[Mañana]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  Highcharts.chart('container4', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300,
          width:150,
          marginLeft: 0,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:red">' +PasadoMañana +'</p><br><br><div>'+ mytime0djped +' pedidos | 71%'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            style: { 
              formatter: function() {
                if((this.stack == "fiabilidad"))
                {
                  color: 'red'
                }
              },
              
            },
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {
                
                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [4], //[Mañana, PasadoMañana]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [4], //[PasadoMañana]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [4], //[PasadoMañana]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime3d}}], //[PasadoMañana]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [4], //[PasadoMañana]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime3d}}], //[PasadoMañana]
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          stack:'matrícula',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime3d}}], //[PasadoMañana]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  Highcharts.chart('container5', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300,
          width:150,
          marginLeft: 0,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:red">' + Siguiente +'</p><br><br><div>'+ mytime0djped +' pedidos | 80%</div>'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            style: { 
              formatter: function() {
                if((this.stack == "fiabilidad"))
                {
                  color: 'red'
                }
              },
              
            },
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {
                
                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [7], //[Siguiente]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [2], //[Siguiente]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [2], //[Siguiente]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime4d}}], //[Siguiente]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [2], //[Siguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime4d}}], //[Siguiente]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  Highcharts.chart('container6', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300,
          width:150,
          marginLeft: 0,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:red">' + PostSiguiente +'</p><br><br><div>'+ mytime0djped +' pedidos | 51%</div>'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            style: { 
              formatter: function() {
                if((this.stack == "fiabilidad"))
                {
                  color: 'red'
                }
              },
              
            },
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {
                
                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [ 2], //PostSiguiente]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime5d}}], //[ PostSiguiente]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime5d}}], //[PostSiguiente]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime5d}}], //[PostSiguiente]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [3], //[PostSiguiente]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime5d}}], //[PostSiguiente]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime5d}}], //[PostSiguiente]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime5d}}], //[PostSiguiente]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [5], //[PostSiguiente]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime5d}}], //[PostSiguiente]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [5], //[PostSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime5d}}], //[PostSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  Highcharts.chart('container7', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300,
          width:150,         
          marginLeft: 0,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<div><p style="color:red">' + ElOtro +'</p><br><br><div>'+ mytime0djped +' pedidos | 51%</div>'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            style: { 
              formatter: function() {
                if((this.stack == "fiabilidad"))
                {
                  color: 'red'
                }
              },
              
            },
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {
                
                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [3], //[ElOtro]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime6d}} ], //[ElOtro]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime6d}}], //[ElOtro]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime6d}}], //[ElOtro]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [3], //[ElOtro]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime6d}}], //[ElOtro]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime6d}}], //[ElOtro]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime6d}}], //[ElOtro]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [5], //[ElOtro]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime6d}}], //[ElOtro]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [5], //[ElOtro]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime6d}}], //[ElOtro]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  Highcharts.chart('container8', {
      legend:{
       enabled:false,
      },
      chart: {
          type: 'column',
          height:300,
          width:150,         
          marginLeft: 1,
          events: {
            load() {
              let chart = this,
                spaceBetweenColumns = 0,
                numberOfPoints = chart.series[0].points.length,
                width = (numberOfPoints - 1) * spaceBetweenColumns + (numberOfPoints * chart.series[0].points[0].pointWidth)
            }
          },
      },
      title: {
          text: ''
      },
      xAxis: {
           categories: ['<p style="color:red">' + ElOtroSiguiente +'</p><br><br><div>'+ mytime0djped +' pedidos | 51%</div>'
              ],
              crosshair: true
      },
      yAxis: {
          gridLineWidth: 0,
          stackLabels: {
            enabled: true,
            style: { 
              formatter: function() {
                if((this.stack == "fiabilidad"))
                {
                  color: 'red'
                }
              },
              
            },
            formatter: function () {
              if((this.stack == "fiabilidad"))
              {
                
                return {{$mytime0d}} ;
              }
              else
              {
                return this.total;
              }
              
            }
          },
          title: {
              text: '',
          }
      },
      tooltip: {
           pointFormat:'<span style="color:{series.color}">{series.stack}{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
          
      },
      plotOptions: {
          column: {
            stacking: 'percent',

          },        
          series: {
            borderWidth: 0,
            groupPadding : 0.1,
            trackByArea: true,
            events: {

              click: function(event) {
                  if(document.getElementById("table").style.display === "none" )
                  {
                    document.getElementById("table").style.display = "flex";

                  }
                  else
                  {
                    document.getElementById("table").style.display = "none";
                  }
                }
              }
          }
      }, 
      credits: {
            enabled: false
          },
      series: [{
          name: 'Total fiabilidad',//jornada laboral 8 horas
          data: [mytime7djfiat], //[ElOtroSiguiente]
          linewidth:5,
          stack: 'fiabilidad',
          color:'#F2F2F2',
          
          pointPadding: 0.2,
           
      }, {
          name: 'Jane',
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'fiabilidad',
           color:'#D50D20',
           pointPadding: 0.2,
            dataLabels: {
                enabled: true,
                align: 'top',
                style:{
                  textOutline: false
                }
            },
      }, {
          name: 'Joe',
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'fiabilidad',
           color:'#FFC107',
           pointPadding: 0.2,
      },{
          name: 'Jordi',
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'fiabilidad',
           color:'#289AA7',
           pointPadding: 0.2,
      },{
          name: 'Total rutas', //rutas
          data: [{{$mytime7djornada}}], //[ElOtroSiguiente]
           stack: 'fiat',
           color:'#F2F2F2',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'fiat',
           color:'purple',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Joe', //rutas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'fiat',
           color:'#CCCCCC',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Ruta 1', //rutas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'fiat',
           color:'#DC3545',
           pointPadding: 0.2,
           borderWidth:1,
      },{
          name: 'Total pedidos', // nºpedidos
          data: [{{$mytime7djornada}}], //[ElOtroSiguiente]
           stack: 'pedidos',
           color:'#F2F2F2',
           pointPadding: 0.2
      },{
          name: 'CKW1234', // nºpedidos
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
           stack: 'pedidos',
           pointPadding: 0.2,
           borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
              enabled: true,
              style: {
                fontSize: '10px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                color: '#FBFBFB',
                textOutline: false
              },
          }
      },{
          name: 'TRG2021', // nºpedidos
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'RST4321', // nºpedidos
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'MLS2345', // nºpedidos
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
           dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'HVK2154', // nºpedidos
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'pedidos',
          pointPadding: 0.2,
          borderWidth:1,
          borderColor:'white',
          color:'#737373',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '10px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
          }
      },{
          name: 'Matrícula', // matrículas
          data: [{{$mytime7djornada}}], //[ElOtroSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#F2F2F2',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
      },{
          name: 'CKW1234', // matrículas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'TRG2021', // matrículas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'matrícula',
          pointPadding: -0.3,
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
            }
      },{
          name: 'RST4321', // matrículas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#CCCCCC',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },{
          name: 'MLS2345', // matrículas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          borderColor:'white',
          color:'#A8A8A8',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
               },{
          name: 'HVK2154', // matrículas
          data: [{{$mytime7d}}], //[ElOtroSiguiente]
          stack: 'matrícula',
          borderWidth:1,
          color:'#737373',
          borderColor:'white',
          pointPadding: -0.3,
          dataLabels: {
                enabled: true,
                style: {
                  fontSize: '9px',
                  fontFamily: 'Helvetica, Arial, sans-serif',
                  color: '#FBFBFB',
                  textOutline: false
                },
                format: '{series.name}'
          }
      },],
       exporting: {
        enabled:false
       },
       responsive: {
              rules: [{
                  condition: {
                     maxWidth: 400
                  },
                  chartOptions: {
                      chart: {
                          height: 300,
                          width: 450,
                          marginLeft: 0,
                      },
                      subtitle: {
                          text: null
                      },
                      navigator: {
                          enabled: false     
                      }
                  }
              }]
          }
      });
  </script>

  <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
  </script>

  <script type="text/javascript"> 
    var css_file=document.createElement("link"); 
    var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); 
    css_file.setAttribute("type","text/css"); 
    css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-prime.css?v=0.0.1'); 
    document.getElementsByTagName("head")[0].appendChild(css_file); 
    function setWidgetData_90758(data) 
    { 
      if(typeof(data) != 'undefined' && data.results.length > 0) 
        { 
          for(var i = 0; i < data.results.length; ++i) 
          { 
            var objMainBlock = document.getElementById('m-booked-prime-90758');
            if(objMainBlock !== null) 
              { 
                var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); 
                objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); 
              } 
          } 
      } 
      else 
      {
        alert('data=undefined||data.results is empty');
      }
    } 
      var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=848;type=5;scode=124;ltid=3457;domid=582;anc_id=8837;countday=undefined;cmetric=1;wlangID=4;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
      widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=90758';
      var weatherBookedScript = document.createElement("script"); 
      weatherBookedScript.setAttribute("type", "text/javascript"); 
      weatherBookedScript.src = widgetSrc; 
      document.body.appendChild(weatherBookedScript) 
  </script>
  <!-- weather widget end -->




  </html>