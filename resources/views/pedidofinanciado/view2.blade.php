
@extends('layouts.app')
@section('title', 'SimonGrup')
@section('content')

<div class="container">  
		     
           @include('layouts.hoyCuenta')
           <section class="separacion"></section>
           <section class="separacion"></section>
           <section class="separacion"></section>
           <section class="gris">
           <h1>Este es su pedido</h1>
             <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Dirección</th>
                    <th>Localidad</th>
                    <th>Provincia</th>
                    <th>Código Postal</th>
                    <th>Fecha de creación</th>
                    <th>Estado</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr> 
                <tr>
                    <td>{{$pedidos->nombre}}</td>
                    <td>{{$pedidos->dni}}</td>
                    <td>{{$pedidos->address}}</td>
                    <td>{{$pedidos->poblacion}}</td>
                    <td>{{$pedidos->provincia}}</td>
                    <td>{{$pedidos->CP}}</td>
                    <td>{{$pedidos->fechaentrada}}</td>
                    @if($pedidos->estado == 'Pendiente')
                            <td class="text-warning">{{$pedidos->estado}}</td>
                    @elseif($pedidos->estado == 'Confirmado')
                            <td class="text-success">{{$pedidos->estado}}</td>
                    @endif
                    
                    <td>{{$pedidos->producto}}</td>
                    <td>{{$pedidos->cantidad}} Lts.</td>
                    <td>{{$pedidos->total}} €</td>
                </tr> 
           </table>
            
        <div class="row col-sm-12">
                <button type="submit" class="btn btn-danger"><a href="bienvenido" style="color:white">Salir</a></button>
            </div>   		
    </section>   
</div>
@endsection