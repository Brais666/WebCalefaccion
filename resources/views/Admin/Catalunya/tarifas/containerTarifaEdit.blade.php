<section class="containerCuenta">
  <div class="content">
   <div class="row">
        <div class="col-lg-11">
            <h2>Update Tarifa</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('tarifas') }}"> Back</a>
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
    <form method="post" action="{{ route('tarifas.update',$tarifa->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-row">
            <div class="form-group col-sm-2">
                <label for="txtId">Id:</label>
                <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId" value="{{$tarifa->id}}">
            </div>
            <div class="form-group col-sm-7">
                <label for="txtProducto">Producto:</label>
                <input type="text" class="form-control" id="txtProducto" placeholder="Introduce nombre del producto" name="txtProducto" value="{{$tarifa->producto}}">
            </div>
                <div class="form-group col-sm-3">
                    <label for="txtFecha_modificacion">Fecha modificacion:</label>
                    <input type="text" class="form-control" id="txtFecha_modificacion" name="txtFecha_modificacion" placeholder="Introduce fecha de modificacion" value="{{$tarifa->fecha_modificacion}}"></input>
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-2">
                    <label for="txtRango1">Rango1:</label>
                    <input type="text" class="form-control" id="txtRango1" name="txtRango1" placeholder="Introduce Rango1" value="{{$tarifa->rango1}}"></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtRango2">Rango2:</label>
                    <input type="text" class="form-control" id="txtRango2" name="txtRango2" placeholder="Introduce Rango2" value="{{$tarifa->rango2}}"></input>
                </div>
                 <div class="form-group col-sm-2">
                    <label for="txtPrecio">Precio:</label>
                    <input type="text" class="form-control" id="txtPrecio" placeholder="Introduce Precio" name="txtPrecio" value="{{$tarifa->precio}}">
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtZonadesc">Descripción(zona):</label>
                    <input type="text" class="form-control" id="txtZonadesc" name="txtZonadesc" placeholder="Introduce descripción Zona" value="{{$tarifa->zonadesc}}"></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtIdzona">ID ZONA:</label>
                    <input type="text" class="form-control" id="txtIdzona" name="txtIdzona" placeholder="Introduce Idzona" value="{{$tarifa->idzona}}"></textarea>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtZona">Zona:</label>
                    <input type="text" class="form-control" id="txtZona" name="txtZona" placeholder="Introduce zona" value="{{$tarifa->zona}}"></textarea>
                </div>
        </div>
                <button type="submit" class="btn btn-default">Submit</button>
    </form>
   </div> 
</section>