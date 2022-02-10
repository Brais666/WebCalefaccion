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

   <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
   
     <!--<script type="text/javascript">
        $(document).ready(function() {
            $('#btnShow').click(function() {
                $('td:nth-child(3)').show();
                $('td:nth-child(4)').show();
                $('td:nth-child(5)').show();
                $('td:nth-child(6)').show();
                $('td:nth-child(7)').show();
                $('#inlineCheckbox1').prop('checked', false);
                $('#inlineCheckbox2').prop('checked', false);
                $('#inlineCheckbox3').prop('checked', false);
                $('#inlineCheckbox4').prop('checked', false);
                $('#inlineCheckbox5').prop('checked', false);

            });
        });
    </script>-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function(){
            	if($('#inlineCheckbox1').is(":checked")){
            		$('td:nth-child(3)').show();
            	}
            	else if($('#inlineCheckbox1').is(":not(:checked)")){
                    $('td:nth-child(3)').hide();
                }
                if($('#inlineCheckbox2').is(":checked")){
            		$('td:nth-child(4)').show();
            	}
            	else if($('#inlineCheckbox2').is(":not(:checked)")){
                    $('td:nth-child(4)').hide();
                }
                if($('#inlineCheckbox3').is(":checked")){
            		$('td:nth-child(5)').show();
            	}
            	else if($('#inlineCheckbox3').is(":not(:checked)")){
                    $('td:nth-child(5)').hide();
                }
                if($('#inlineCheckbox4').is(":checked")){
            		$('td:nth-child(6)').show();
            	}
            	else if($('#inlineCheckbox4').is(":not(:checked)")){
                    $('td:nth-child(6)').hide();
                }
                if($('#inlineCheckbox5').is(":checked")){
            		$('td:nth-child(7)').show();
            	}
            	else if($('#inlineCheckbox5').is(":not(:checked)")){
                    $('td:nth-child(7)').hide();
                } 
                if($('#inlineCheckbox1').is(":not(:checked)") && $('#inlineCheckbox2').is(":not(:checked)") && $('#inlineCheckbox3').is(":not(:checked)") && $('#inlineCheckbox4').is(":not(:checked)") && $('#inlineCheckbox5').is(":not(:checked)")) {
                $('td:nth-child(3)').show();
                $('td:nth-child(4)').show();
                $('td:nth-child(5)').show();
                $('td:nth-child(6)').show();
                $('td:nth-child(7)').show();
                }     
           });
        });
    </script>
   

</head>
<body>
<aside>
		@include('layouts/menuadmin')
</aside>
<section class="container">	
  @include('layouts/logout')
		<div class="titulo p-3"><h1>prueba tabla</h1></div>
    <hr><nav aria-label="breadcrumb" id="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="bienvenido" class="text-light">Home</a></li>
          <li class="breadcrumb-item active"><a href="bienvenidoadmin" class="text-light">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gerencia</li>
        </ol>
    </nav>
	<div class="row ml-2 mt-5 mb-3" >
           	<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
			  <label class="form-check-label" for="inlineCheckbox1">GOA</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			  <label class="form-check-label" for="inlineCheckbox2">GOB</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
			  <label class="form-check-label" for="inlineCheckbox3">GOC</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
			  <label class="form-check-label" for="inlineCheckbox4">SP95</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
			  <label class="form-check-label" for="inlineCheckbox5">SP98</label>
			</div>

          <!--	<a class="btn btn-danger ml-5 mr-2" id="btnShow" type="button" value="Mostrar"/><small>Mostrar todo</small></a> -->


    </div>
	
    	<div class="card ">
		  <div class="card-header bg-dark text-light">
		  	<div >
		  		Fecha:  07/12/2020
		  		
		  	</div>
		  	<div>
		  		<span class="col-lg-11">Hora:  10:41</span><span class="col-lg-1">€/S</span>
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
		  					<th class="bg-info text-light"><small> CLH Albuixech </small></th>
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> NW</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  					<td class="bg-info text-light text-center"><small> MED</small></td>
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
		  			<table class="m-2 col align-sef-center">
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