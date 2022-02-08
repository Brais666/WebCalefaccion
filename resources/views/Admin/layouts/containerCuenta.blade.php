<section class="containerCuenta">
	<section class="misdatos" id="misdatos">
		<div class="row titlecuenta">
		  	<label >Mis datos </label>
		</div>
		<div class="row titlecuenta">
		  	<a href="{{ url()->previous() }}" class="float-right">Regresar</a>
		</div>
		  		
		<div class="row titlecuenta">
			<form class="cuentaForm">

		  <div class="form-group">
		  	<div class="col-sm-5">
		    	<div class="row icuenta">
		    		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
		    	</div>
		    	<div class="row icuenta">
		    		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nick">

		    	</div>
		    	<div class="row icuenta">
		    		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Teléfono">
		    	</div>
		    	<div class="row icuenta">
		    		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
		    	</div>
		  	</div>
		  	<div class="col-sm-7"></div>
		  	<div class="row">
		  		<div class="col-sm-8"></div>
				 <div class="col-sm-2">
				  	<button type="submit" class="btn btn-primary">Guardar</button>
				 </div>
		    </div>	
		  </div>
		  
		  
		</form>
		</div>
		
        
          <div class="form-group">
                
                <div class="col-sm-4">
                  </div>              
          </div>          
    </form>
	</section>	
	<section class="separacionCuenta"></section>
	<section class="misdirecciones" id="misdirecciones">
		<div class="row titlecuenta">
		  		<label >Mis direcciones </label>
		</div>
		<div class="row titlecuenta">
		  	<a href="{{ url()->previous() }}" class="float-right">Regresar</a>
		</div>
		<table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Calle</th>
		      <th scope="col">Número</th>
		      <th scope="col">CP</th>
		      <th scope="col">Población</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col">Prioridad</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td scope="row">C/bjhbbh</th>
		      <td>2</td>
		      <td>43005</td>
		      <td>Tarragona</td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td>Principal</td>
		    </tr>
		    <tr>
		      <td scope="row">C/bjhbbh</th>
		      <td>2</td>
		      <td>43201</td>
		      <td>Reus</td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td>PS001</td>
		    </tr>	    
		  </tbody>
		</table>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 text-center toggle"><p class="dir">Añadir dirección</p><i class="fas fa-caret-down"></i></div>
			<div class="col-sm-4"></div>
		</div>	
		<div class="direccion">
        <div class="row titlecuenta">
					<form class="cuentaForm">

				  <div class="form-group">
				  	<div class="col-sm-5">
				    	<div class="row icuenta">
				    		<input type="text" class="form-control" id="calle" placeholder="Calle">
				    	</div>
				    	<div class="row icuenta">
				    		<input type="text" class="form-control" id="numero" placeholder="Número">

				    	</div>
				    	<div class="row icuenta">
				    		<input type="text" class="form-control" id="cp" placeholder="CP">
				    	</div>
				    	<div class="row icuenta">
				    		<input type="text" class="form-control" id="poblacion" placeholder="Población">
				    	</div>
				  	</div>
				  	<div class="col-sm-7"></div>
				  		
				  </div>
				  <div class="row">
				  		<div class="col-sm-6"></div>
						  <div class="col-sm-6">
						 		<button class="btn btn-primary" type="reset" value="cancelar">Cancelar</button>
						  	<button type="submit" class="btn btn-primary">Añadir</button>
						 </div>
				    </div>		  
				</form>
		</div>
      </div>
	</section>	
	<section class="separacionCuenta"></section>
	<section class="mispedidos" id="mispedidos">
		<div class="row titlecuenta">
		  		<label >Mis pedidos </label>
		</div>
		<div class="row titlecuenta">
		  	<a href="{{ url()->previous() }}" class="float-right">Regresar</a>
		</div>
		<table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Nº de pedido</th>
		      <th scope="col">Número</th>
		      <th scope="col">CP</th>
		      <th scope="col">eee</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		      <th scope="col">Estado</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td scope="row">1001</th>
		      <td>2</td>
		      <td>43005</td>
		      <td>Tarragona</td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td>entregado</td>
		    </tr>
		    <tr>
		      <td scope="row">1002</th>
		      <td>2</td>
		      <td>43201</td>
		      <td>Reus</td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td>servido</td>
		    </tr>	    
		  </tbody>
		</table>
	</section>	
	<section class="separacionCuenta"></section>
	<section class="miconsumo" id="miconsumo">
		<div class="row titlecuenta">
		  		<label >Mi consumo </label>
		</div>
		<div class="row titlecuenta">
		  	<a href="{{ url()->previous() }}" class="float-right">Regresar</a>
		</div>
		<section class="separacionCuenta"></section>
		<div class="row">
			<div class="col-sm-8">
				<figure class="highcharts-figure">
    		<div id="container"></div>
			</div>
			<div class="col-sm-4">
				<figure class="highcharts-figure">
    		<div id="container3"></div>
			</div>
		</div>
	</section>	
	<section class="separacionCuenta"></section>
	<section class="migasto" id="migasto">
		<div class="row titlecuenta">
		  		<label >Mi gasto </label>
		</div>
		<div class="col-sm-8">
				<figure class="highcharts-figure">
    		<div id="container2"></div>
			</div>
			<div class="col-sm-4">
				<figure class="highcharts-figure">
    		<div id="container4"></div>
			</div>
		<div class="row titlecuenta">
		  	<a href="#navbar">top</a>
		</div>
	</section>	
	<section class="separacionCuenta"></section>
	<section class="miagente">
		<div class="row titlecuenta">
		  		<label >Mi Agente </label>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">Operador13</div>
			<div class="col-sm-2">Contacto</div>
			<div class="col-sm-2">678 885 651</div>
			<div class="col-sm-2">Whatsapp</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row titlecuenta">
		  	<a href="#navbar">top</a>
		</div>
	</section>	
	<section class="separacionCuenta"></section>
		
	<section class="separacionCuenta"></section>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<script>

$( ".toggle" ).click(function() {

  $( ".direccion" ).slideToggle( "slow" );
});


Highcharts.chart('container', {
	legend:{
       enabled:false,
      },
    chart: {
    	  backgroundColor:'#FBFBFB',
        type: 'column',
        height:200,
        width:500,
        marginLeft: 2,

    },
    title: {
        text: 'litros'
    },
    xAxis: {
        categories: [
            'Ene',
            'Feb',
            'Mar',
            'Abr',
            'May',
            'Jun',
            'Jul',
            'Ago',
            'Sept',
            'Oct',
            'Nov',
            'Dic'
        ],
    },
    yAxis: {
        min: 0,
        gridLineWidth: 0
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
     credits: {
            enabled: false
    },
    series: [{
        name: 'User',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }],
       exporting: {
        enabled:false
       }
});
Highcharts.chart('container2', {
	legend:{
       enabled:false,
      },
    chart: {
    	backgroundColor:'#FBFBFB',
        type: 'column',
        height:200,
        width:500,
        marginLeft: 2,
    },
    title: {
        text: 'consumo'
    },
    xAxis: {
        categories: [
            'Ene',
            'Feb',
            'Mar',
            'Abr',
            'May',
            'Jun',
            'Jul',
            'Ago',
            'Sept',
            'Oct',
            'Nov',
            'Dic'
        ],
    },
    yAxis: {
        min: 0,
        gridLineWidth: 0
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
     credits: {
            enabled: false
    },
    series: [{
        name: 'User',
        data: [49.9, 148.5, 106.4, 129.2, 144.0, 176.0, 135.6, 71.5, 216.4, 194.1, 95.6, 54.4],
        color: 'orange'

    }],
       exporting: {
        enabled:false
       }
});
Highcharts.chart('container3', {
	legend:{
       enabled:false,
      },
    chart: {
    	backgroundColor:'#FBFBFB',
        type: 'column',
        height:200,
        width:200,
        marginLeft: 2,
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: [
            '2019',
            '2020',
            '2021',
        ],
        crosshair: false,

    },
    yAxis: {
        min: 0,
        gridLineWidth: 0
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
     credits: {
            enabled: false
    },
    series: [{
        name: 'User',
        data: [106.4, 148.5, 49.9],

    }],
       exporting: {
        enabled:false
       }
});
Highcharts.chart('container4', {
	legend:{
       enabled:false,
      },
    chart: {
    	backgroundColor:'#FBFBFB',
        type: 'column',
        height:200,
        width:200,
        marginLeft: 2,
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: [
            '2019',
            '2020',
            '2021',
        ],
        crosshair: false
    },
    yAxis: {
        min: 0,
        gridLineWidth: 0
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
     credits: {
            enabled: false
    },
    series: [{
        name: 'User',
        data: [49.9, 148.5, 106.4],
        color: 'orange'

    }],
       exporting: {
        enabled:false
       }
});

</script>
</section>
