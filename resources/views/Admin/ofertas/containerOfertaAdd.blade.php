<section class="containerCuenta">

<div class="content">
            <div class="row">
                <div class="col-lg-11">
                    <h2>Añade nueva oferta</h2>
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
            <form action="{{ route('ofertas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <input type="text" name="nombre" id="nombre" placeholder="ingrese nombre:">
                    <input type="file" name="imagen">
                    <div class="form-group col-sm-1">
                        <label for="txtId">Id:</label>
                        <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtOferta">Nombre:</label>
                        <input type="text" class="form-control" id="txtOferta" placeholder="Introduce nombre de la oferta" name="txtOferta">
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtHREF">Hipervínculo:</label>
                        <input type="text" class="form-control" id="txtHREF" name="txtHREF" placeholder="Introduce link"></textarea>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtFecha_ini">Fecha inicio:</label>
                        <input type="date" class="form-control" id="txtFecha_ini" name="txtFecha_ini" placeholder="Introduce fecha de inicio"></input>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtFecha_fin">Fecha fin:</label>
                        <input type="date" class="form-control" id="txtFecha_fin" name="txtFecha_fin" placeholder="Introduce fecha fin"></input>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtTipo">Tipo:</label>
                        <select class="form-control" id="txtTipo" name="txtTipo" placeholder="Introduce tipo">
                            <option>€</option>
                            <option>%</option>
                        </select>
                    </div>
                     <div class="form-group col-sm-1">
                        <label for="txtCantidad">Cantidad:</label>
                        <input type="text" class="form-control" id="txtCantidad" placeholder="Introduce cantidad de la oferta" name="txtCantidad">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtDesc_oferta">Descripción:</label>
                        <input type="text" class="form-control" id="txtDesc_oferta" name="txtDesc_oferta" placeholder="Introduce descripción"></input>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtRang">Rango1:</label>
                        <input type="text" class="form-control" id="txtRang" name="txtRang" placeholder="Introduce rango"></textarea>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txt2Rang">Rango2:</label>
                        <input type="text" class="form-control" id="txt2Rang" name="txt2Rang" placeholder="Introduce rango"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
 </section>