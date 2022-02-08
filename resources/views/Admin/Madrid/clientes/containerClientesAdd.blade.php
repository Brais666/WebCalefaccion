<section class="containerCuenta">
   <div class="content">
            <div class="row">
                <div class="col-lg-11">
                    <h2>Añade nuevo cliente</h2>
                </div>
                <div class="col-lg-1">
                    <a class="btn btn-primary" href="{{ url('clientes') }}"> Back</a>
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
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <label for="txtCodigo">Código de Empresa:</label>
                        <input type="text" class="form-control" id="txtCodigo"  name="txtCodigo" pattern=[0-9]{7} required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtDni">DNI/NIF:</label>
                        <input type="text" class="form-control" id="txtDni" name="txtDni" pattern="[0-9AZ-a-z]{1}[0-9]{7}[A-Za-z]{1}" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" required>
                    </div>
                    
                    <div class="form-group col-sm-3">
                        <label for="txtApellido">1º Apellido:</label>
                        <input class="form-control" id="txtApellido" name="txtApellido" required>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="txtApellidoseg">2º Apellido:</label>
                        <input class="form-control" id="txtApellidoseg" name="txtApellidoseg" required>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <label for="txtCalle">Calle:</label>
                        <input class="form-control" id="txtCalle" name="txtCalle" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtNumero">Número:</label>
                        <input class="form-control" id="txtNumero" name="txtNumero" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtPoblacion">Población:</label>
                        <input class="form-control" id="txtPoblacion" name="txtPoblacion" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtCp">Código postal:</label>
                        <input class="form-control" id="txtCp" name="txtCp" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtProvincia">Provincia:</label>
                        <input class="form-control" id="txtProvincia" name="txtProvincia" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtPerscontacto">Persona de contacto:</label>
                        <input class="form-control" id="txtPerscontacto" name="txtPerscontacto" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <label for="txtTel1">Teléfono1:</label>
                        <input class="form-control" id="txtTel1" name="txtTel1" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtTel2">Teléfono2:</label>
                        <input class="form-control" id="txtTel2" name="txtTel2" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtTel3">Teléfono3:</label>
                        <input class="form-control" id="txtTel3" name="txtTel3" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtEmail">Email:</label>
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" plrequired>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtFechanacimiento">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="txtFechanacimiento" name="txtFechanacimiento" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtFormapago">Forma de pago:</label>
                        <input type="text" class="form-control" id="txtFormapago" name="txtFormapago" prequired>
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
</section>