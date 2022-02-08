<?php
//dd($user);
?>
<section class="containerCuenta">
    
        <div class="row">
            <div class="col-lg-11">
                    <h2>Cliente</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-primary clientes" href="{{ url('clientes') }}"> Back</a>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover clientes">
            <tr>
                <th>Id:</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>DNI:</th>
                <td>{{ $user->dni }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td>{{ $user->telefono }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
     
        </table>
       
    
</section>