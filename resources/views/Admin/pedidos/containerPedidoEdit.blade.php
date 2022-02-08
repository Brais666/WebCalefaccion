<section class="containerCuenta">
  <div class="content">
   <div class="row">
        <div class="col-lg-11">
            <h2>Update Pedido</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('pedidos') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('pedidos.update',$pedido->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-row">
        	<div class="form-group">
                    <div class="form-group col-sm-1">
	                    <label for="txtId">Id:</label>
	                    <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId" value="{{ $pedido->id }}" readonly="true">
	                </div>
	                <div class="form-group col-sm-2">
	                    <label for="txtNombre">Nombre:</label>
	                    <input type="text" class="form-control" id="txtNombre" placeholder="Introduce nombre del Nombre" name="txtNombre" value="{{ $pedido->nombre }}" readonly="true">
	                </div>
	                <div class="form-group col-sm-2">
	                    <label for="txtFechaentrada">Fecha Entrada:</label>
	                    <input type="date" class="form-control" id="txtFechaentrada" name="txtFechaentrada" placeholder="Introduce fecha de entrada" readonly="true" value={{ $pedido->fechaentrada }} ></input>
	                </div>
	                <div class="form-group col-sm-1">
	                    <label for="txtCanal">Canal:</label>
	                    <input type="text" class="form-control" id="txtCanal" name="txtCanal" placeholder="Introduce canal" value="{{ $pedido->canal }}" readonly="true"></input>
	                </div>
	                <div class="form-group col-sm-1">
	                    <label for="txtEstado">Estado:</label>
	                    <input type="text" class="form-control" id="txtEstado" name="txtEstado" placeholder="Introduce estado" value="{{ $pedido->estado }}">
	                        
	                </div>
	                <div class="form-group col-sm-2">
	                    <label for="txtProducto">Producto:</label>
	                    <input type="text" class="form-control" id="txtProducto" placeholder="Introduce producto" name="txtProducto" value="{{ $pedido->producto }}" readonly="true">
	                </div>
	                 <div class="form-group col-sm-1">
	                    <label for="txtCantidad">Cantidad:</label>
	                    <input type="text" class="form-control" id="txtCantidad" placeholder="Introduce cantidad de la oferta" name="txtCantidad" value="{{ $pedido->cantidad }}" readonly="true">
	                </div>
	                <div class="form-group col-sm-1">
	                    <label for="txtTotal">Total:</label>
	                    <input type="text" class="form-control" id="txtTotal" name="txtTotal" placeholder="Introduce total" value="{{ $pedido->total }}" readonly="true"></input>
	                </div>
	                <div class="form-group col-sm-1">
	                    <label for="txtSeleccionado">Seleccionado:</label>
	                    <input type="text" class="form-control" id="txtSeleccionado" name="txtSeleccionado" placeholder="Seleccionado" value={{ $pedido->seleccionado }}></textarea>
	                </div>
        </div>
        		
                <button type="submit" class="btn btn-info">Submit</button>
    </form>
   </div> 
</section>