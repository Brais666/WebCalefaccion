<?php
use App\Prueba;

	$proconsiClientes = Prueba::where('poblacion','=','Madrid')->get();
	$count =0;
	?>
@extends('layouts.apppolitica')
@section('title', 'Términos y condiciones Simon Grup')
@section('content')
<head>
    <link rel="canonical" href="https://www.gasoleodecalefaccion.com/condiciones" />
</head>
<div class="row bg-faq pt-1 pb-1 fixed-top4">
	<div class="col-sm-2"></div>
	<div class="col-sm-4 columna">
		<div class="card">
  			<div class="card-body">
			   <h1 style="font-size: 30px;" class="card-title text-white ml-25">Prueba conexión</h1>
			</div>
		</div>
	</div>
</div>
<div class="container pt-11">
	<div class="row pt-11">
		<div class="titulo p-3"><h1>Bienvenid@   edita tu perfil </h1></div>

   <hr>
   <nav aria-label="breadcrumb" class="w-25">
        <ol class="breadcrumb  bg-dark">
          <li class="breadcrumb-item ml-2"><a href="../welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
     </nav>
     <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <th >Id</th>
                    <th >Codigo</th>
                    <th >Empresa</th>
                    <th data-field="nombre" data-field="id">Nombre</th>
                    <th data-field="fechafin">Cif</th>
                    <th data-field="tipo">Direccion</th>
                    <th data-field="cantidad">Poblacion</th>
                    <th data-field="descripcion">Cp</th>
                    <th data-field="rango">provincia</th>
                    <th data-field="rango">telefono1.</th>
                    <th data-field="accion" >upfecha</th>
                </tr>
                @php
                    $i = 0;
                @endphp
                @foreach ($proconsiClientes as $proconsiCliente)
                    <tr>
                        <td>{{ $proconsiCliente->id }}</td>
                        <td>{{ $proconsiCliente->codigo }}</td>
                        <td>{{ $proconsiCliente->empresa }}</td>
                        <td>{{ $proconsiCliente->nombre }}</td>
                        <td>{{ $proconsiCliente->cif }}</td>
                        <td>{{ $proconsiCliente->direccion }}</td>
                        <td>{{ $proconsiCliente->poblacion }}</td>
                        <td>{{ $proconsiCliente->cp }}</td>
                        <td>{{ $proconsiCliente->provincia }}</td>
                        <td>{{ $proconsiCliente->telefono1 }}</td>
                        <td>
                            {{ $proconsiCliente->upfecha }}
                        </td>
                    </tr>
                    <?php
                    $count ++;
                    ?>
                @endforeach
                
            </table>
            {{$count}}
	</div>

</div>
@endsection
