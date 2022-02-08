<?php
	$img = '../images/'.$oferta->nombre.'';
	//dd($img);
	?>
<section class="containerCuenta">
	<div class="content">
	    <div class="row">
	        <div class="col-lg-11">
	                <h2>Oferta</h2>
	        </div>
	        <div class="col-lg-1">
	            <a class="btn btn-primary" href="{{ url('ofertas') }}"> Back</a>
	        </div>
	    </div>
	    <table class="table table-bordered table-striped table-hover">
	        <tr>
	            <th>Id:</th>
	            <td>{{ $oferta->id }}</td>
	        </tr>
	        <tr>
	            <th>Nombre:</th>
	            <td>{{ $oferta->oferta }}</td>
	        </tr>
	        <tr>
	            <th>Fecha inicio:</th>
	            <td>{{ $oferta->fecha_ini }}</td>
	        </tr>
	        <tr>
	            <th>Fecha fin:</th>
	            <td>{{ $oferta->fecha_fin }}</td>
	        </tr>
	        <tr>
	            <th>Tipo:</th>
	            <td>{{ $oferta->tipo }}</td>
	        </tr>
	        <tr>
	            <th>Cantidad:</th>
	            <td>{{ $oferta->cantidad }}</td>
	        </tr>
	        <tr>
	            <th>Descripción:</th>
	            <td>{{ $oferta->desc_oferta }}</td>
	        </tr>
	        <tr>
	            <th>Rango:</th>
	            <td>{{ $oferta->rang }}</td>
	        </tr>  
	        <tr>
	            <th>Imagen:</th>
	            <td><img src="{{$img}}"></td>
	        </tr>      
	 
	    </table>
	</div>
</section>