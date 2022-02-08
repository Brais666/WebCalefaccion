<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../public/images/9998Simon Grup.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SimonGrup</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../public/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../public/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../public/images/sidebar-5.jpg" >
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                       <h3><b> SimonGrup </h3>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active text-center">
                        
                            
                            <p><h5><b>USER</b></h5></p>
                        
                    </li>
                    <li>
                        <a class="nav-link" href="power">
                            <i class="fab fa-bimobject mr-2" aria-hidden="true"></i>
                            <p>PowerBi</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="mundopetroleos">
                            <i class="fas fa-poll mr-2" aria-hidden="true"></i>
                            <p>Mundopetróleo</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="fas fa-poll mr-2" aria-hidden="true"></i>
                            <p>Primas2</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="primasChart">
                            <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                            <p>Chart</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="fas fa-server mr-2" aria-hidden="true"></i>
                            <p>Datos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="fas fa-database mr-2" aria-hidden="true"></i>
                            <p>BBDD</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Bienvenid@ {{ Auth::user()->name }} </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    
                                    <span class="d-lg-none">Bienvenid@ {{ Auth::user()->name }}</span>
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
              <nav aria-label="breadcrumb" id="breadcrumb" >
           <ol class="breadcrumb bg-dark w-25">
             <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">User</li>
           </ol>
       </nav>
    <div class="titulo p-3"><h1>  {{ Auth::user()->name }} edita tu perfil </h1></div>

   
          <div>
            <div class="row ml-3 p-4">               
                    <form action="{{route('perfil.edit',$usuario->id)}}" method="POST">
                  		{{csrf_field() }}
                  		<div class="row p-2 mb-5">
                  				<div class="form-group ml-1">
								    <div class="input-group">
							          <div class="input-group-text"><i class="fas fa-at"></i></div>
							          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$usuario->email}}">
							        </div>
								</div>
								<div class="form-group w-50 ml-5">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Apellidos</div>
							          <input type="text" class="form-control" placeholder="{{$usuario->apellidos}}">
							        </div>
								</div>							
								<div class="form-group w-50 w-50 ml-1">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Dirección</div>
							          <input type="email" class="form-control" placeholder="{{$usuario->address}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-4">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Localidad</div>
							          <input type="email" class="form-control" placeholder="{{$usuario->localidad}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-1">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">Provincia</div>
							          <input type="email" class="form-control" placeholder="{{$usuario->localidad}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-3">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold">C.P.</div>
							          <input type="email" class="form-control" placeholder="{{$usuario->CP}}">
							        </div>
								</div>
								<div class="form-group w-25 ml-3">
								    <div class="input-group">
							          <div class="input-group-text font-weight-bold"><i class="fas fa-phone"></i></div>
							          <input type="email" class="form-control" placeholder="{{$usuario->telefono}}">
							        </div>
								</div>
      
                  		</div>
                  		<div class="row float-left">
	                       <button type="submit" class="btn btn-primary"><small>Modificar</small></a>
	                       </button>
	                    </div>
                  		
  					 </form>               
            </div>
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
                            <a href="http://www.creative-tim.com">SimonGrup</a>, el poder del gasóleo
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
	</body>
<!--   Core JS Files   -->
<script src="../public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../public/js/core/popper.min.js" type="text/javascript"></script>
<script src="../public/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../public/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../public/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../public/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../public/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../public/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();

         //demo.showNotification();

    });
</script>

</html>
