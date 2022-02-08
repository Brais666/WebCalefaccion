           <div class="row">
                <div class="col-lg-11">
                    <h2>Añade nuevo pedido</h2>
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
            <form action="{{ route('pedidos.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-1">
                        <label for="txtId">Id:</label>
                        <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="txtOferta">Nombre:</label>
                        <input type="text" class="form-control" id="txtOferta" placeholder="Introduce nombre de la oferta" name="txtOferta">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtFecha_ini">Fecha Entrada:</label>
                        <input type="date" class="form-control" id="txtFecha_ini" name="txtFecha_ini" placeholder="Introduce fecha de inicio"></input>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtCanal">Canal:</label>
                        <input type="text" class="form-control" id="txtCanal" name="txtCanal" placeholder="Introduce canal"></input>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtEstado">Estado:</label>
                        <select class="form-control" id="txtEstado" name="txtEstado" placeholder="Introduce estado">
                            <option>€</option>
                            <option>%</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtProducto">Producto:</label>
                        <input type="text" class="form-control" id="txtProducto" placeholder="Introduce producto" name="txtProducto">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="txtCantidad">Cantidad:</label>
                        <input type="text" class="form-control" id="txtCantidad" placeholder="Introduce cantidad de la oferta" name="txtCantidad">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="txtTotal">Total:</label>
                        <input type="text" class="form-control" id="txtTotal" name="txtTotal" placeholder="Introduce total"></input>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="txtSeleccionado">Seleccionado:</label>
                        <input type="text" class="form-control" id="txtSeleccionado" name="txtSeleccionado" placeholder="Seleccionado"></textarea>
                    </div>
                </div>
 
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
 