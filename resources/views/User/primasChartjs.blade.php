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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <!-- CSS-->
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
<aside>
    
 @include('layouts/menuhor')
    
</aside>
<section class="container">   
    
    @include('layouts/logout')

    <div class="titulo p-3"><h1>Primas Chart</h1></div>
    <hr><nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="bienvenido" class="text-light">Home</a></li>
          <li class="breadcrumb-item"><a href="bienvenido" class="text-light">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Primas Chart</li>
        </ol>
    </nav>
      <div class="row">



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-heading text-center">Primas</div>
                <div class="card-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script>
   

    var ctx = document.getElementById('canvas').getContext('2d');
    
    var data_click = {{$primas}};
    var data_viewer = {{$logistica}};
    var data_dolar ={{$dolar}};
    
    var primas = {
                              label: 'Nuevos usuarios',
                              backgroundColor: [
                                '#12C9E5',
                              ],
                              maxBarThickness: 30,
                              borderColor: 'rgb(255, 99, 132)',
                              data: data_click 
                          };
    var viewer = {
                              label: 'Logistica',
                              backgroundColor: [
                                '#111b54'
                              ],
                              maxBarThickness: 30,
                              borderColor: 'rgb(255, 99, 132)',
                              data: data_viewer
                          };
    var dolar = {
                              label: 'Dolar',
                              backgroundColor: [
                                '#E10600'
                              ],
                              maxBarThickness: 30,
                              borderColor: 'rgb(255, 99, 132)',
                              data: data_dolar
                          };

    var ndata ={
                            labels: ['Jun 2020', 'Jul 2020', 'Ago 2020', 'Sep 2020'],
                            datasets: [primas,viewer,dolar],
        }

      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'bar',

          // The data for our dataset
         
             data: ndata, 
             
                  

			        



          // Configuration options go here
          options:{
          	scales: {         
          		yAxes: [{             
          			display: true,             
          			ticks: {                 
          				beginAtZero: true,                 
          				max: 200,                 
          				min: 0             
          			}         
          		}]     
          	},
          	title: {
                    display: true,
                    text:  'Gráfico de prueba'
                }
          }			

                  
      });

</script>
   
</body>
</html>
