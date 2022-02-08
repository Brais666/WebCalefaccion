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
            <td>{{ $cliente->id }}</td>
        </tr>
        <tr>
            <th>DNI:</th>
            <td>{{ $cliente->dni }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $cliente->nombre }}</td>
        </tr>
        <tr>
            <th>1º Apellido:</th>
            <td>{{ $cliente->apellido }}</td>
        </tr>
        <tr>
            <th>2º Apellido:</th>
            <td>{{ $cliente->apellidoseg }}</td>
        </tr>
         <tr>
            <th>Calle:</th>
            <td>{{ $cliente->calle }}</td>
        </tr>
        <tr>
            <th>Número:</th>
            <td>{{ $cliente->numero }}</td>
        </tr>
        <tr>
            <th>Población:</th>
            <td>{{ $cliente->poblacion }}</td>
        </tr>
        <tr>
            <th>C.P.:</th>
            <td>{{ $cliente->cp }}</td>
        </tr>
        <tr>
            <th>Provincia:</th>
            <td>{{ $cliente->provincia }}</td>
        </tr>
        <tr>
            <th>Contacto:</th>
            <td>{{ $cliente->perscontacto }}</td>
        </tr>
        <tr>
            <th>Teléfono1:</th>
            <td>{{ $cliente->tel1 }}</td>
        </tr>
        <tr>
            <th>Teléfono2:</th>
            <td>{{ $cliente->tel2 }}</td>
        </tr>
        <tr>
            <th>Teléfono3:</th>
            <td>{{ $cliente->tel3 }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $cliente->tel3 }}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento:</th>
            <td>{{ $cliente->fecha_nacimiento }}</td>
        </tr>
        <tr>
            <th>Forma de pago:</th>
            <td>{{ $cliente->form_pago }}</td>
        </tr>
 
    </table>
</section>