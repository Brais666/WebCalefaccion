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
    <form method="post" action="{{ route('clientes.update',$user->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-row">
               <div class="form-group col-sm-1">
                    <label for="txtId">Id:</label>
                    <input type="text" class="form-control" id="txtId" placeholder="Id" name="txtId" value={{ $user->id }}>
                </div>
                <div class="form-group col-sm-1">
                    <label for="txtCodigo">Código:</label>
                    <input type="text" class="form-control" id="txtCodigo" placeholder="Empresa" name="txtCodigo" value={{ $user->codigoempresa }}>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtDni">DNI/NIF:</label>
                    <input type="text" class="form-control" id="txtDni" placeholder="Id" name="txtDni" value={{ $user->dni }}>
                </div>user
                <div class="form-group col-sm-2">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" id="txtNombre" placeholder="Introduce nombre de producto" name="txtNombre" value={{ $user->name }}>
                </div>
                <
        </div>
        
        <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="txtTel1">Teléfono1:</label>
                    <input class="form-control" id="txtTel1" name="txtTel1" placeholder="Introduce empresa" value={{ $user->telefono }}></input>
                </div>
                <div class="form-group col-sm-2">
                    <label for="txtEmail">Email:</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Introduce email" value={{ $user->email }}></input>
                </div>
        </div> 
                
                
                <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</section>