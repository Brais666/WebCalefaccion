<section class="containerCuenta">
<div class="content">
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Cliente</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('clientes') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())cliente
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('clientes.update',$cliente->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-row">
               <div class="form-group col-sm-1">
                    <label for="txtId">Id:</label>
                    <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId" value={{ $cliente->id }}>
                </div>
                <div class="form-group col-sm-1">
                    <label for="txtCodigo">Código:</label>
                    <input type="text" class="form-control" id="txtCodigo" placeholder="Empresa" name="txtCodigo" value={{ $cliente->codigoempresa }}>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtDni">DNI/NIF:</label>
                    <input type="text" class="form-control" id="txtDni" placeholder="Id" name="txtDni" value={{ $cliente->dni }}>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" id="txtNombre" placeholder="Introduce nombre de producto" name="txtNombre" value={{ $cliente->nombre }}>
                </div>
                <div class="form-group col-sm-3">
                    <label for="txtApellido">1º Apellido:</label>
                    <input class="form-control" id="txtApellido" name="txtApellido" placeholder="Introduce pvp" value={{ $cliente->apellido }}></input>
                </div>
                <div class="form-group col-sm-3">
                    <label for="txtApellidoseg">2º Apellido:</label>
                    <input class="form-control" id="txtApellidoseg" name="txtApellidoseg" placeholder="Introduce el rango" value={{ $cliente->apellidoseg }}></input>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="txtCalle">Calle:</label>
                    <input class="form-control" id="txtCalle" name="txtCalle" placeholder="Introduce calle" value={{ $cliente->calle }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtNumero">Número:</label>
                    <input class="form-control" id="txtNumero" name="txtNumero" placeholder="Introduce numero" value={{ $cliente->numero }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtPoblacion">Población:</label>
                    <input class="form-control" id="txtPoblacion" name="txtPoblacion" placeholder="Introduce poblacion" value={{ $cliente->poblacion }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtCp">Código postal:</label>
                    <input class="form-control" id="txtCp" name="txtCp" placeholder="Introduce código postal" value={{ $cliente->cp }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtProvincia">Provincia:</label>
                    <input class="form-control" id="txtProvincia" name="txtProvincia" placeholder="Introduce provincia" value={{ $cliente->provincia }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtPerscontacto">Persona de contacto:</label>
                    <input class="form-control" id="txtPerscontacto" name="txtPerscontacto" placeholder="Introduce empresa" value={{ $cliente->perscontacto }}></input>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="txtTel1">Teléfono1:</label>
                    <input class="form-control" id="txtTel1" name="txtTel1" placeholder="Introduce empresa" value={{ $cliente->tel1 }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtTel2">Teléfono2:</label>
                    <input class="form-control" id="txtTel2" name="txtTel2" placeholder="Introduce empresa" value={{ $cliente->tel2 }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtTel3">Teléfono3:</label>
                    <input class="form-control" id="txtTel3" name="txtTel3" placeholder="Introduce empresa" value={{ $cliente->tel3 }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtEmail">Email:</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Introduce email" value={{ $cliente->email }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtFechanacimiento">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="txtFechanacimiento" name="txtFechanacimiento" placeholder="Introduce fecha de nacimiento" value={{ $cliente->fecha_nacimiento }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtFormapago">Forma de pago:</label>
                    <input type="text" class="form-control" id="txtFormapago" name="txtFormapago" placeholder="Introduce empresa" value={{ $cliente->forma_pago }}></input>
                </div>
        </div> 
                
                
                <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</section>