<section class="containerCuenta">
  <div class="content">
   <div class="row">
        <div class="col-lg-11">
            <h2>Update Oferta</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('ofertas') }}"> Back</a>
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
    <form method="post" action="{{ route('ofertas.update',$oferta->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-row">
            <div class="form-group col-sm-1">
                    <label for="txtId">Id:</label>
                    <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId" value={{ $oferta->id }}>
                </div>
                <div class="form-group col-sm-3">
                    <label for="txtOferta">Nombre:</label>
                    <input type="text" class="form-control" id="txtOferta" placeholder="Introduce nombre de la oferta" name="txtOferta" value={{ $oferta->oferta }}>
                </div>
                <div class="form-group col-sm-1">
                    <label for="txtFecha_ini">Fecha inicio:</label>
                    <input type="date" class="form-control" id="txtFecha_ini" name="txtFecha_ini" placeholder="Introduce fecha de inicio" value={{ $oferta->fecha_ini }}></input>
                </div>
                <div class="form-group col-sm-1">
                    <label for="txtFecha_fin">Fecha fin:</label>
                    <input type="date" class="form-control" id="txtFecha_fin" name="txtFecha_fin" placeholder="Introduce fecha fin" value={{ $oferta->fecha_fin }}></input>
                </div>
                <div class="form-group col-sm-1">
                    <label for="txtTipo">Tipo:</label>
                    <select class="form-control" id="txtTipo" name="txtTipo" placeholder="Introduce tipo" value={{ $oferta->id }}>
                        <option>€</option>
                        <option>%</option>
                    </select>
                </div>
                 <div class="form-group col-sm-1">
                    <label for="txtCantidad">Cantidad:</label>
                    <input type="text" class="form-control" id="txtCantidad" placeholder="Introduce cantidad de la oferta" name="txtCantidad" value={{ $oferta->cantidad }}>
                </div>
                <div class="form-group col-sm-3">
                    <label for="txtDesc_oferta">Descripción:</label>
                    <input type="text" class="form-control" id="txtDesc_oferta" name="txtDesc_oferta" placeholder="Introduce descripción" value={{ $oferta->desc_oferta }}></input>
                </div>
                <div class="form-group col-sm-1">
                    <label for="txtRang">Rango:</label>
                    <input type="text" class="form-control" id="txtRang" name="txtRang" placeholder="Introduce rango" value={{ $oferta->rang }}></input>
                </div>
        </div>
                
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
   </div> 
</section>