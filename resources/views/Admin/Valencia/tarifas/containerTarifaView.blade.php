<section class="containerCuenta">
	<div class="content">
	    <div class="row">
	        <div class="col-lg-11">
	                <h2>Tarifa</h2>
	        </div>
	        <div class="col-lg-1">
	            <a class="btn btn-primary" href="{{ url('tarifas') }}"> Back</a>
	        </div>
	    </div>
	    <table class="table table-bordered table-striped table-hover">
	        <tr>
	            <th>Id:</th>
	            <td>{{ $tarifa->id }}</td>
	        </tr>
	        <tr>
	            <th>Producto:</th>
	            <td>{{ $tarifa->producto }}</td>
	        </tr>
	        <tr>
	            <th>Fecha modificación:</th>
	            <td>{{ $tarifa->fecha_modificacion }}</td>
	        </tr>
	        <tr>
	            <th>Rango1:</th>
	            <td>{{ $tarifa->rango1 }}</td>
	        </tr>
	        <tr>
	            <th>Rango2:</th>
	            <td>{{ $tarifa->rango2 }}</td>
	        </tr>
	        <tr>
	            <th>Precio:</th>
	            <td>{{ $tarifa->precio }}</td>
	        </tr>
	        <tr>
	            <th>Descripción(zona):</th>
	            <td>{{ $tarifa->zonadesc }}</td>
	        </tr>
	        <tr>
	            <th>ID ZONA:</th>
	            <td>{{ $tarifa->idzona }}</td>
	        </tr> 
	        <tr>
	            <th>Zona:</th>
	            <td>{{ $tarifa->zona }}</td>
	        </tr>        
	 
	    </table>
	</div>
</section>