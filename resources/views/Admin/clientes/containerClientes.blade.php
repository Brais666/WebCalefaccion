<?php
    $diahoy = Carbon\Carbon::now()->format('d-m-Y');

?>
<section class="containerCuenta">
    
    <a href="bienvenido"><i class="fas fa-home"></i></a>

    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>

    <div class="row">
        <div class="col-lg-11">
                <h4>Nuevos usuarios del día {{ $diahoy }}</h4>
        </div>
        <div class="col-lg-1"></div>
    </div>

    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>DNI / CIF</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>   
                </tr>
                @foreach ($newusers as $newuser)
                    <tr>
                        <td>{{ $newuser->id }}
                        <td>{{ $newuser->codigoempresa }}</td>
                        <td>{{ $newuser->dni }}</td>
                        <td>{{ $newuser->name }}</td>
                        <td>{{ $newuser->telefono }}</td>
                        <td>{{ $newuser->email }}</td>      
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-5">
        </div>
        <div class="col-sm-3">
            {!! $newusers ->links() !!}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-11">
                <h4>Listado de clientes</h4>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary clientes" href="{{ route('clientes.create') }}">+ Nuevo</a>
        </div>
    </div>

    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>DNI / CIF</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Código Postal</th>
                    <th>Acción</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}
                        <td>{{ $user->codigoempresa }}</td>
                        <td>{{ $user->dni }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->telefono }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->CP }}</td>      
                        <td>
                            <form action="{{ route('clientes.destroy',$user->id) }}" method="POST">
                                <a class="btn btn-info " href="{{ route('clientes.show',$user->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary " href="{{ route('clientes.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger clientes"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-5">
        </div>
        <div class="col-sm-3">
            {!! $users ->links() !!}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-11">
            <h4>Usuarios conectados</h4>
        </div>
        <div class="col-auto"></div>
    </div>
    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>
    <section class="separaciontrans"></section>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Cliente</th>
                    <th>Email</th>
                </tr>
                @foreach ($lastlog as $last)
                    <tr>
                        <td>{{ $last->name }}
                        <td>{{ $last->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-9"></div>
    </div>
</section>