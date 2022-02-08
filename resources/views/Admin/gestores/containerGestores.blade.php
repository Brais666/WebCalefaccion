<section class="containerCuenta">
    
        <a href="bienvenido"><i class="fas fa-home"></i></a>
    <div class="row">
            <div class="col-lg-11">
                    <h1>Gestores</h1>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-primary clientes" href="{{ route('gestores.create') }}">+ Nuevo</a>
            </div>
    </div>
    <hr>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <table class="table table-bordered table-striped table-hover clientes" data-page-list="[10, 25, 50, 100, all]" data-toggle="table" data-search="true" data-pagination="true" id="data-container">
                <tr>
                    <!--<th>Código</th>
                    <th>DNI NIF</th>-->
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Gestiona</th>
                    <!--<th>Telefono</th>-->
                    <th>Acción</th>
                </tr>
                @php
                    $i = 0;
                @endphp
                @foreach ($gestores as $gestor)
                    <tr>
                        <!--<td>{{ $gestor->id }}</td>
                        <td>{{ $gestor->dni }}</td>-->
                        <td>{{ $gestor->name }}</td>
                        <td>{{ $gestor->email }}</td>
                        @if($gestor->admin == 0)<td class="bg-info">Administrador</td>@elseif($gestor->admin ==1)<td class="bg-info">Cataluña</td>@elseif($gestor->admin ==2)<td class="bg-info">Madrid</td>@elseif($gestor->admin ==3)<td class="bg-info">Valencia</td>@elseif($gestor->admin ==4)<td class="bg-info">Cataluña y Madrid</td>@endif
                        <!--<td>{{ $gestor->telefono }}</td>-->
                        <td>
                            <form action="{{ route('clientes.destroy',$gestor->id) }}" method="POST">
                                <a class="btn btn-info clientes" href="{{ route('clientes.show',$gestor->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary clientes" href="{{ route('clientes.edit',$gestor->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger clientes"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
       <div class="col-sm-6"></div> 
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            
        </div>
        <div class="col-sm-5">
            
        </div>
        <div class="col-sm-3">
            {!! $gestores ->links() !!}
        </div>
    </div>
</section>