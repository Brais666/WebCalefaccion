
<section class="containerCuenta">

<div class="content">
            <div class="row">
                <div class="col-lg-11">
                    <h2>Añade nueva tarifa</h2>
                </div>
                <div class="col-lg-1">
                    <a class="btn btn-primary" href="{{ url('tarifas') }}"> Back</a>
                </div>
            </div>
         
            @if ($errors->any())required
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('tarifas.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    
                    <div class="form-group col-sm-2">
                        <label for="txtProducto">Producto:</label>
                        <input type="text" class="form-control" id="txtProducto" required name="txtProducto">
                        @if ($errors->has('producto'))
                            <small  class="form-text text-danger">Error de producto.</small>
                        @endif
                    </div>
                    
                
                    <div class="form-group col-sm-2">
                        <label for="txtRango1">Rango1:</label>
                        <input type="text" class="form-control" id="txtRango1" name="txtRango1" required>
                        @if ($errors->has('rango1'))
                            <small  class="form-text text-danger">Error de Rango.</small>
                        @endif
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtRango2">Rango2:</label>
                        <input type="text" class="form-control" id="txtRango2" name="txtRango2" required>
                        @if ($errors->has('rango2'))
                            <small  class="form-text text-danger">Error de Rango.</small>
                        @endif
                    </div>
                     <div class="form-group col-sm-2">
                        <label for="txtPrecio">Precio:</label>
                        <input type="text" class="form-control" id="txtPrecio" required name="txtPrecio">
                        @if ($errors->has('precio'))
                            <small  class="form-text text-danger">Error de precio.</small>
                        @endif
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtZonadesc">Descripción(zona):</label>
                        <input type="text" class="form-control" id="txtZonadesc" name="txtZonadesc" required>
                        @if ($errors->has('zonadesc'))
                            <small  class="form-text text-danger">Error de descripción.</small>
                        @endif
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtIdzona">ID ZONA:</label>
                        <input type="text" class="form-control" id="txtIdzona" name="txtIdzona" required>
                        @if ($errors->has('idzona'))
                            <small  class="form-text text-danger">Error de idzona.</small>
                        @endif
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtZona">Zona:</label>
                        <input type="text" class="form-control" id="txtZona" name="txtZona" required>
                        @if ($errors->has('zona'))
                            <small  class="form-text text-danger">Error de zona.</small>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
 </section>