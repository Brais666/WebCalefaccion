<section class="containerCuenta">

<div class="content">
            <div class="row">
                <div class="col-lg-11">
                    <h2>Añade nuevo pedido</h2>
                </div>
                <div class="col-lg-1">
                    <a class="btn btn-primary" href="{{ url('rutas') }}"> Back</a>
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
            <form action="{{ route('rutas.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-1">
                        <label for="txtId">Id zona:</label>
                        <input type="text" class="form-control" id="txtId" required name="txtId">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="txtOferta">Población:</label>
                        <input type="text" class="form-control" id="txtOferta" required name="txtOferta">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtFecha_ini">C.P.:</label>
                        <input type="text" class="form-control" id="txtFecha_ini" name="txtFecha_ini" required>
                    <div class="form-group col-sm-3">
                        <label for="txtCanal">Nombre de la ruta:</label>
                        <input type="text" class="form-control" id="txtCanal" name="txtCanal" required>
                    </div>
                    
                    <div class="form-group col-sm-3">
                        <label for="txtProducto">Día:</label>
                        <input type="text" class="form-control" id="txtProducto" required name="txtProducto">
                    </div>
                </div>               
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
 </section>