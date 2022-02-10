<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Layout</title>
	<!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">

	<!-- CSS-->
    <link rel="stylesheet" href="../../../public/css/sidebarstyles.css"/>


</head>
<body>
				<div class="d-flex">
					<div id="sidebar-container" class="bg-primary">
						<div class="logo">
							<h4 class="text-light font-weight-bold">SimonGrup</h4>
						</div>
						<div class="menu">
							<a href="power" class="d-block text-light p-3"><i class="fab fa-bimobject mr-2" aria-hidden="true"></i>PowerBi</a>
							<a href="#" class="d-block text-light p-3"><i class="fas fa-poll mr-2" aria-hidden="true"></i>Primas</a>
							<a href="#" class="d-block text-light p-3"><i class="fas fa-poll mr-2" aria-hidden="true"></i>Primas2</a>
							<a href="#" class="d-block text-light p-3"><i class="fas fa-server mr-2" aria-hidden="true"></i>Datos</a>
							<a href="#" class="d-block text-light p-3"><i class="fas fa-users mr-2" aria-hidden="true"></i>Usuarios</a>
						</div>
					</div>
					<div class="w-100">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
						 <div class="container">
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          <i class="fas fa-user-circle mr-2"></i> Brais Busqué
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Cerrar sesión</a>
						        </div>
						      </li>
						    </ul>
						  </div>
						  </div>
						</nav>
					</div>
				</div>
 <!-- Scripts -->
    <script src="../../../public/js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="../../../public/js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>