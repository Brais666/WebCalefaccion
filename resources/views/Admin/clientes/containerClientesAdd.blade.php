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
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" required>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtDni">DNI / NIF / CIF:</label>
                        <input type="text" class="form-control" id="txtDni" name="txtDni" pattern="[0-9AZ-a-z]{1}[0-9]{7}[A-Za-z]{1}" required>
                    </div>                   
                    <div class="form-group col-sm-1">
                        <label for="txtPoblacion">Población:</label>
                        <input class="form-control" id="txtPoblacion" name="txtPoblacion" required>
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtCp">Código postal:</label>
                        <input class="form-control" id="txtCp" name="txtCp" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtProvincia">Provincia:</label>
                        <input class="form-control" id="txtProvincia" name="txtProvincia" required>
                    </div>                  
                    <div class="form-group col-sm-1">
                        <label for="txtTel1">Teléfono:</label>
                        <input class="form-control" id="txtTel1" name="txtTel1" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtEmail">Email:</label>
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
                    </div>

                
                <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
</section>