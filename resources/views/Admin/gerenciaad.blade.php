<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerencia-SimonGrup</title>
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
		<div class="titulo p-3"><h1>{{$title}}</h1></div>
    <hr><nav aria-label="breadcrumb" id="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="bienvenido" class="text-light">Home</a></li>
          <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gerencia</li>
        </ol>
    </nav>
	
    	<div class="card ">
		  <div class="card-header bg-dark text-light">
		  	<div >
		  		Fecha:  {{$now->format('d/m/y')}}
		  	</div>
		  	<div>
		  		<span class="col-lg-11">Hora:  {{$now->format('H:i')}}</span><span class="col-lg-1">€/S</span>
		  	</div>
		  </div>
		  <div class="card-body">
		  	<table class="table table-responsive ">
		  				<td class="bg-primary text-light p-4"> Terminales</td>
		  				<td class="bg-primary text-light p-4"> Mercado</td>
		  				<td class="bg-info text-center"> 
		  					GOA
		  					<table>
		  						<tr>
			  						<th class="bg-info text-light"><small> MENA </small></th>
				  					<th class="bg-info text-light"><small> DISA </small></th>
				  					<th class="bg-info text-light"><small> Q8 </small></th>
				  					<th class="bg-info text-light"><small> BURAN </small></th>
			  					</tr>
		  					</table>
		  					
		  				</td>
		  				<td class="bg-info text-center">
		  				 GOB
		  				 	<table>
		  						<tr>
			  						<th class="bg-info text-light "><small> MENA </small></th>
				  					<th class="bg-info text-light "><small> DISA </small></th>
				  					<th class="bg-info text-light "><small> Q8 </small></th>
				  					<th class="bg-info text-light "><small> BURAN </small></th>
				  				</tr>
		  					</table>
		  				</td>
		  				<td class="bg-info text-center "> 
		  					GOC
		  					 <table>
		  						<tr>
			  						<th class="bg-info text-light "><small> MENA </small></th>
				  					<th class="bg-info text-light "><small> DISA </small></th>
				  					<th class="bg-info text-light "><small> Q8 </small></th>
				  					<th class="bg-info text-light "><small> BURAN </small></th>
				  				</tr>
		  					</table>
		  				</td>
		  				<td class="bg-success text-center ">
		  					SP95
		  					 <table>
		  						<tr>
			  						<th class="bg-success text-light "><small> MENA </small></th>
				  					<th class="bg-success text-light "><small> DISA </small></th>
				  					<th class="bg-success text-light "><small> Q8 </small></th>
				  					<th class="bg-success text-light "><small> BURAN </small></th>
				  				</tr>
		  					</table>
		  				</td>
		  				<td class="bg-success text-center ">
		  					SP98
		  					<table>
		  						<tr>
			  						<th class="bg-success text-light "><small> MENA </small></th>
				  					<th class="bg-success text-light "><small> DISA </small></th>
				  					<th class="bg-success text-light "><small> Q8 </small></th>
				  					<th class="bg-success text-light "><small> BURAN </small></th>
				  				</tr>
		  					</table>
		  				</td>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Albuixech </small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>		  		  					
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Alcazar</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Alicante</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr id="margen">
		  					<th class="bg-info text-light"><small> CLH Barcelona</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Bens</small></th>
		  					<td class="bg-info text-light"><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Cartagena</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Córdoba</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH El Calero</small></th>
		  					<td class="bg-info text-light"><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Gijón</small></th>
		  					<td class="bg-info text-light"><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Huelva</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH León</small></th>
		  					<td class="bg-info text-light"><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Lérida</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Mérida</small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Motril</small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Navarra</small></th>
		  					<td class="bg-info text-light"><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Salamanca</small></th>
		  					<td class="bg-info text-light "><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH San Roque</small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Santovenia</small></th>
		  					<td class="bg-info text-light "><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Sevilla</small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Tarragona</small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Torrejón</small></th>
		  					<td class="bg-info text-light "><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light "><small> CLH Vigo</small></th>
		  					<td class="bg-info text-light "><small> NW</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Villaverde</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		  				<tr>
		  					<th class="bg-info text-light"><small> CLH Zaragoza</small></th>
		  					<td class="bg-info text-light"><small> MED</small></td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
						  					<th class="text-center">25</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
						  					<th class="text-center">32</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  					<td class="bg-grey">
		  						<table>
				  						<tr>
					  						<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
						  					<th class="text-center">12</th>
					  					</tr>
				  				</table> 	
		  					</td>
		  				</tr>
		    </table>
		  </div>
		  <div class="card-footer bg-secondary">
		  	<small>I.V.A no incluido</small>
		  	<div class="bg-grey">
		  		<small class="text-muted p-2">Precios con IEE incluidos</small>
		  		<div class="p-2">		  			
		  			<table class="m-2">
		  				<tr>
		  					<th class="bg-dark text-light p-2"><small> BIO GOA</small></th>
		  					<td class="bg-primary text-light p-2"><small> 32.00€</small></td>
		  				</tr>
		  				<tr>
		  					<th class="bg-dark text-light p-2"><small> BIO GNAS</small></th>
		  					<td class="bg-primary text-light p-2"><small> 21.00€</small></td>
		  				</tr>
		  				<tr>
		  					<th class="bg-dark text-light p-2"><small> CORES+EST</small></th>
		  					<td class="bg-primary text-light p-2"><small> 16.00€</small></td>
		  				</tr>
		  				<tr id="margen">
		  					<th class="bg-secondary text-light p-2"><small> MARGEN</small></th>
		  					<td class="bg-primary text-light p-2"><small> 5.00€</small></td>
		  				</tr>
		  				
		  			</table>
		  		</div>
		  	</div>
		  </div>
		</div>
	
	<!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
	
</body>
</html>