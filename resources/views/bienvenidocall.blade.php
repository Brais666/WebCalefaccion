<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CallCenter-SimonGrup</title>
    <!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-----------------BootstrapCDN------------------------------>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- CSS-->
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "9b7bbdaf-687d-4c8d-afa6-1565ef2c6567",
    });
  });
</script>
</head>
<body>
<aside>
        
    @include('layouts/menucall')
        
</aside>
<section class="container"> 
    @include('layouts/logout')
    <div class="titulo p-3"><h1>Bienvenid@ Call Center {{ Auth::user()->name }} </h1></div>

   <hr><nav aria-label="breadcrumb" id="breadcrumb" class="w-25">
        <ol class="breadcrumb  bg-dark">
          <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Call</li>
        </ol>
    </nav>
     <section class="bg-grey">
          <div>
            <div class="row p-4">
                <div class="col-lg-2 bg-dark my-3 text-light p-3">
                   <p center><i class="fas fa-headset center"></i></p>
                   <p>LLamadas</p>
                   <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="col-lg-10 my-3">
                    <canvas class="bg-light" id="myChart"></canvas>
                </div>
            </div>
          </div>
     </section>
 <!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>   
    <!-- chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'line',

          // The data for our dataset
          data: {
              labels: ['Jun 2020', 'Jul 2020', 'Ago 2020', 'Sep 2020','Oct 2020'],
              datasets: [{
                  label: 'Llamadas usuarios',
                  borderColor: 'blue',
                  data: [50, 75, 150, 100,225]
              }]
          },

          // Configuration options go here
          options: {}
      });
    </script>
</body>
</html>

