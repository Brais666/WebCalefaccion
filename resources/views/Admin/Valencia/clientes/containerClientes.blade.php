<section class="containerCuenta">
<div class="row">
        <div class="col-lg-11">
                <h1>Clientes</h1>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary clientes" href="{{ route('clientes.create') }}">+ Nuevo</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered table-striped table-hover clientes" data-page-list="[10, 25, 50, 100, all]" data-toggle="table" data-search="true" data-pagination="true" id="data-container">
        <tr>
            <th>Código</th>
            <th>DNI NIF</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Localidad</th>
            <th>Provincia</th>
            <th>Código postal</th>
            <th>Telefono</th>
            
            
            <th width="270px">Acción</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->dni }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->localidad }}</td>
                <td>{{ $user->provincia }}</td>
                <td>{{ $user->CP}}</td>
                <td>{{ $user->telefono }}</td>
                
                
                <td>
                    <form action="{{ route('clientes.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-info clientes" href="{{ route('clientes.show',$user->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-primary clientes" href="{{ route('clientes.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger clientes"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-sm-4">
            
        </div>
        <div class="col-sm-5">
            
        </div>
        <div class="col-sm-3">
            {!! $users ->links() !!}
        </div>
    </div>
</section>