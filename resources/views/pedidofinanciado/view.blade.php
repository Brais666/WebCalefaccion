<?php
    //dd($temporal);
    ?>
@extends('layouts.appfinan')
@section('title', 'SimonGrup')
@section('content')

<div class="container pt-2">         
        <div class="row border pt-2 ">
                <h3 class="ml-2">Este es tu pedido {{auth()->user()->name}}</h3>
                <div class="row pt-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <small><table class="table table-bordered table-striped table-hover clientes">
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
                                 @if($prev == "https://134.122.70.106/nueva/public/pedidos")
                                    <td>{{$pedidos->total}} €</td>
                                @elseif($prev == "https://134.122.70.106/nueva/public/pedidofinanciado")
                                    <td>{{$pedidos->totalfinan}} €</td>
                                @endif
                            </tr> 
                       </table></small>
                    </div>
                </div>
             
            <div class="row pt-2 pb-1">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <img src="images/googleplay.png">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3 pt-1">
                    <img src="images/apple.png">
                </div>
                <div class="col-sm-2"></div>
                
            </div>       
        
            <div class="row col-sm-12 pt-2 pb-1 text-center">
                <button type="submit" class="btn buttoncons"><a href="bienvenido" style="color:white">Volver a inicio</a></button>
            </div>
        </div>
</div>
@endsection