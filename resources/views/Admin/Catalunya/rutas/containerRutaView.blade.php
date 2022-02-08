<section class="containerCuenta">
	<div class="content">
	    <div class="row">
	        <div class="col-lg-11">
	                <h2>Ruta</h2>
	        </div>
	        <div class="col-lg-1">
	            <a class="btn btn-primary" href="{{ url('rutas') }}"> Back</a>
	        </div>
	    </div>
	    <table class="table table-bordered table-striped table-hover">
	        <tr>
	            <th>Id zona:</th>
	            <td>{{ $ruta->idzona }}</td>
	        </tr>
	        <tr>
	            <th>Población:</th>
	            <td>{{ $ruta->poblacion }}</td>
	        </tr>
	        <tr>
	            <th>C.P.:</th>
	            <td>{{ $ruta->codigopost }}</td>
	        </tr>
	        <tr>
	            <th>Nombre de ruta:</th>
	            <td>{{ $ruta->nombreruta }}</td>
	        </tr>
	        <tr>
	            <th>Día:</th>
	            <td>{{ $ruta->dia }}</td>
	        </tr>
	       
	                
	 
	    </table>
	</div>
</section>