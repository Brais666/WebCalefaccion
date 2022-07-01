<?php
use App\Pedidos;
use App\User;
use Carbon\Carbon;

  $now = Carbon::now();
  $hoy = $now->format('Y-m-d H:i:s');
  $yesterday = $now->subDay(1);
  $ayer = $yesterday->format('Y-m-d H:i:s');
  $nombre=auth()->user()->name;
  $email = auth()->user()->email;
  $direccion = auth()->user()->address;
  $telefono = auth()->user()->telefono;
  $created = auth()->user()->created_at;
  $codpost = auth()->user()->CP;
  $provincia = auth()->user()->provincia;
  $localidad = auth()->user()->localidad;
  $dni = auth()->user()->dni;
  $id = auth()->user()->id;
  $codcli = auth()->user()->codigoempresa;
  
  $user = User::all()->where('name','like',$nombre)->where('email','like',$email);
  //$user = User::where('name','like',$nombre)->where('email','like',$email);
  
  //dd($user);

  $pedidos = Pedidos::where('nombre','like',$nombre)->where('email','like',$email)->latest('created_at','asc')->simplePaginate(10);
  
?>
 <script>
    function ponerReadOnly(id)
    {
        if($("#"+id).attr("readonly"))
        {
            // Eliminamos el atributo de solo lectura
            $("#"+id).removeAttr("readonly");
        }else{
           // Ponemos el atributo de solo lectura
            $("#"+id).attr("readonly","readonly");
        }
        
        
        // Ponemos una clase para cambiar el color del texto y mostrar que
        // esta deshabilitado
        $("#"+id).addClass("readOnly");
    }
 
    </script>
	<section class="misdatos" id="misdatos">
	    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
		<div class="row titlecuenta">
		  	<label >Mis datos </label>
		</div>
		<div class="row titlecuenta">
			<form ethod="GET" action="{{ action('UserController@update') }}" >
        	
        	@csrf
			  <div class="form-group">
			  	<div class="col-sm-5 col-xs-12">
			    	<div class="row icuenta">
			    		<label for="txtNombre" class="ml-2">Nombre</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtNombre" placeholder="{{$nombre}}" readonly="true">
			    		</div>
			    		<!--<input type="hidden" class="form-control" id="txtId" placeholder="{{$id}}" readonly="true">-->
			    		<div class="col-md-auto col-xs-auto">
			    		    <span class="material-icons">edit_off</span>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    		<label for="txtEmail" class="ml-2">Email</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtEmail" placeholder="{{$email}}" readonly="true">
			    		</div>
                        <div class="col-md-auto col-xs-auto">
			    		    <span class="material-icons">edit_off</span>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    	        <label for="txtTelefono" class="ml-2">Teléfono</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="{{$telefono}}" readonly="true" pattern="[0-9]{9}">
			    		</div>
			    		<div class="col-md-auto col-xs-auto">
			    		    <a href="#" onclick="ponerReadOnly('txtTelefono')"><span class="material-icons">edit</span></a>
			    		</div>
			    		<div class="col-md-12">
			    		    <p class="text-success formato">Ej. 123456789</p>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    		<label for="txtCreated" class="ml-2">Fecha de creación</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtCreated" placeholder="{{$created}}" readonly="true">
			    		</div>
			    		
			    		<div class="col-md-auto col-xs-auto">
			    		    <span class="material-icons">edit_off</span>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    		<label for="txtDni" class="ml-2">DNI / NIF</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtDni" placeholder="{{$dni}}" readonly="true">
			    		</div>
			    		<div class="col-md-auto col-xs-auto">
			    		    <span class="material-icons">edit_off</span>
			    		</div>
			    		
			    	</div>
			  	</div>
			  	<div class="col-sm-1"></div>
			  	<div class="col-sm-5 col-xs-12">
			    	<div class="row icuenta">
			    	    
    			    		<label for="txtDireccion" class="ml-2">Dirección	</label>
    			    	
    			    	<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="{{$direccion}}" readonly="true">
			    		</div>
			    	    <div class="col-md-auto col-xs-auto">
			    		    <a href="#" onclick="ponerReadOnly('txtDireccion')"<span class="material-icons">edit</span></a>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    		<label for="txtCodigopost" class="ml-2">Código Postal</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtCodigopost" name="txtCodigopost" placeholder="{{$codpost}}" readonly="true" pattern="[0-9]{5}">
			    		</div>
                        <div class="col-md-auto col-xs-auto">
			    		    <a href="#" onclick="ponerReadOnly('txtCodigopost')"<span class="material-icons">edit</span></a>
			    		</div>
			    		<div class="col-md-12">
			    		    <p class="text-success formato">Ej. 12345</p>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    	    
			    		<label for="txtLocalidad" class="ml-2">Localidad</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtLocalidad" name="txtLocalidad" placeholder="{{$localidad}}" readonly="true">
			    		 </div>
			    		 <div class="col-md-auto col-xs-auto">
			    		    <a href="#" onclick="ponerReadOnly('txtLocalidad')"<span class="material-icons">edit</span></a>
			    		</div>
			    	</div>
			    	<div class="row icuenta">
			    		<label for="txtProvincia" class="ml-2">Provincia</label>
			    		<div class="col-md-11 col-xs-11">
			    		    <input type="text" class="form-control" id="txtProvincia" name="txtProvincia"placeholder="{{$provincia}}" readonly="true">
			    		</div>
			    		<div class="col-md-auto col-xs-auto">
			    		    <a href="#" onclick="ponerReadOnly('txtProvincia')"<span class="material-icons">edit</span></a>
			    		</div>
			    	</div>
			  	</div>
			  	<div class="col-sm-1"></div>
			  	<div class="row text-center">
			  		<div class="col-sm-8"></div>
					<div class="col-sm-2">
					  	<button type="submit" class="btn btn-primary modificar ">Guardar cambios</button>
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
	<!--<section class="separacionCuenta"></section>
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
	</section>	-->
	<section class="separacionCuenta"></section>
	<section class="mispedidos" id="mispedidos">
		<div class="row titlecuenta">
		  		<label >Mis pedidos </label>
		</div>
		<table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th >Nº de pedido</th>
		      <th>Fecha</th>
		      <th>Canal</th>
		      <th>Estado</th>
		      <th>Producto</th>
		      <th>Cantidad</th>
		      <th>Total</th>
		      <th>Selec.</th>
		      <!--<th scope="col">Acción</th>-->
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($pedidos as $pedido)
		    <tr>
		      <td>{{$pedido->id}}</th>
		      <td>{{ $pedido->fechaentrada }}</td>
		      <td>{{ $pedido->canal }}</td>
		      @if($pedido->estado == 'Anulado')<td class="text-warning">{{ $pedido->estado }}</td>@elseif($pedido->estado == 'Pendiente')<td class="text-info">{{ $pedido->estado }}</td>@elseif($pedido->estado == 'Procesado')<td class="text-success">{{ $pedido->estado }}</td>@elseif($pedido->estado == 'Cancelado')<td class="text-danger">{{ $pedido->estado }}</td>@endif
		      <td>{{ $pedido->producto }}</td>
		      <td>{{ $pedido->cantidad }} l</td>
		      <td>{{ $pedido->total }} €</td>
		      <td>{{ $pedido->seleccionado }}</td>
		      @if(($pedido->fechaentrada < $hoy) && ($pedido->fechaentrada > $ayer))	      
		      <td>
		      	<form action="{{ route('pedido.destroy',$pedido->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pedido.show',$pedido->id) }}"><i class="fas fa-eye"></i></a>
                    <!--<a class="btn btn-primary" href="{{ route('pedido.edit',$pedido->id) }}"><i class="fas fa-edit"></i></a>-->
                   <!-- @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>-->            
                </form>
                
		      </td>
		      @endif
		    </tr>

		   @endforeach 
		  </tbody>
		</table>
		{{ $pedidos->links() }}
	</section>	
	<!--<section class="separacionCuenta"></section>
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
	</section>	-->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<script>

$( ".toggle" ).click(function() {

  $( ".direccion" ).slideToggle( "slow" );
});


/*Highcharts.chart('container', {
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
});*/

 </script>

