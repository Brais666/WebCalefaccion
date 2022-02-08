<section class="containerCuenta">
	<div class="content">
	    <div class="row">
	        <div class="col-lg-11">
	                <h2>Pedido</h2>
	        </div>
	        <div class="col-lg-1">
	            <a class="btn btn-primary" href="{{ url('pedidos') }}"> Back</a>
	        </div>
	    </div>
	    <table class="table table-bordered table-striped table-hover">
	        <tr>
	            <th>Id:</th>
	            <td>{{ $pedido->id }}</td>
	        </tr>
	        <tr>
	            <th>Nombre:</th>
	            <td>{{ $pedido->nombre }}</td>
	        </tr>
	        <tr>
	            <th>Fecha entrada:</th>
	            <td>{{ $pedido->fechaentrada }}</td>
	        </tr>
	        <tr>
	            <th>Canal:</th>
	            <td>{{ $pedido->canal }}</td>
	        </tr>
	        <tr>
	            <th>Estado:</th>
	            <td>{{ $pedido->estado }}</td>
	        </tr>
	        <tr>
	            <th>Producto:</th>
	            <td>{{ $pedido->producto }}</td>
	        </tr>
	         <tr>
	            <th>Cantidad:</th>
	            <td>{{ $pedido->cantidad }}</td>
	        </tr>
	        <tr>
	            <th>Total:</th>
	            <td>{{ $pedido->total }}</td>
	        </tr>
	        <tr>
	            <th>Seleccionado:</th>
	            <td>{{ $pedido->seleccionado }}</td>
	        </tr>
	                
	 
	    </table>
	</div>
</section>