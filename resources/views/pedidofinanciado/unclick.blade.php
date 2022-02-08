<?php
$datehoy = Carbon\Carbon::now();
$session = Session::get('_token');
?>
@extends('layouts.app')
@section('title', 'SimonGrup')
@section('content')

<div class="container">         
           @include('layouts.hoyCuenta')
           <section class="separacion"></section>
           <section class="separacion"></section>
           <section class="separacion"></section>
           <section class="gris">
           <h2>Este es tu último pedido</h2>
            
            <form action="{{ route('pedidos.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-1">
                        <label for="txtId">ID</label>
                        <input type="text" class="form-control" id="txtId" name="txtId" readonly="true" value="{{$pedidos->id}}">
                        <input type="hidden" class="form-control" id="txtSession" value="{{$session}}" name="txtSession">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre"  name="txtNombre" value="{{$pedidos->nombre}}" readonly="true">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtFecha_ini">Fecha</label>
                        <input type="text" class="form-control" id="txtFecha_ini" name="txtFecha_ini" value="{{$datehoy}}" readonly="true">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtDni">DNI / NIF</label>
                        <input type="text" class="form-control" id="txtDni" name="txtDni" value="{{$pedidos->dni}}" placeholder="">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtAddress">Dirección</label>
                        <input type="text" class="form-control" id="txtAddress" name="txtAddress" value="{{$pedidos->address}}">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtPoblacion">Población</label>
                        <input type="text" class="form-control" id="txtPoblacion" value="{{$pedidos->poblacion}}" name="txtPoblacion">
                    </div>
                </div>
                <div class="form-row">
                	<div class="form-group col-sm-2">
                        <label for="txtProvincia">Provincia</label>
                        <input type="text" class="form-control" id="txtProvincia" value="{{$pedidos->provincia}}" name="txtProvincia">
                    </div>
                	<div class="form-group col-sm-2">
                        <label for="txtCP">Código Postal</label>
                        <input type="text" class="form-control" id="txtCP" value="{{$pedidos->CP}}" name="txtCP">
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtCanal">Canal</label>
                        <input type="text" class="form-control" id="txtCanal" value="WEB" name="txtCanal" readonly="true">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtEstado">Estado</label>
                        <input type="text" class="form-control" id="txtEstado" value="Pendiente" name="txtEstado" readonly="true">
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="txtProducto">Producto</label>
                        <input type="text" class="form-control" id="txtProducto" name="txtProducto" value="{{$pedidos->producto}}" readonly="true">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="txtCantidad">Cantidad</label>
                        <input type="text" class="form-control" id="txtCantidad" name="txtCantidad" value="{{$pedidos->cantidad}}" >
                    </div>
                     <div class="form-group col-sm-2">
                        <label for="txtTotal">Total</label>
                        <input type="text" class="form-control" id="txtTotal" value="{{$pedidos->total}}" name="txtTotal">
                    </div>
                    <div class="form-row">
                        <div class="form-check col-sm-2">
                    @if($pedidos->seleccionado == 'no')
                        <p><label for="txtSeleccionado" class="form-check-label text-center">Seleccionado</label></p>
                        <p class="text-center"><input type="checkbox" class="form-check-input" id="txtSeleccionado" value="{{$pedidos->seleccionado}}" name="txtSeleccionado" readonly="true"></p>
                    @else
                        <p><label for="txtSeleccionado" class="form-check-label text-center">Seleccionado</label></p>
                        <p class="text-center"><input type="checkbox" class="form-check-input" id="txtSeleccionado" value="{{$pedidos->seleccionado}}" name="txtSeleccionado" readonly="true"></p>
                    @endif
                        </div>
	                </div>
	                <div class="form-row">
	                	<div class="form-group col-sm-2">
                            <label for="txtCodCli">Código Cliente</label>
	                        <input type="text" class="form-control" id="txtCodCli" value="{{$pedidos->codigocliente}}" name="txtCodCli" readonly="true">
	                    </div>	
	                </div>
	                <div class="form-row">
	                	<div class="form-group col-sm-2">
                            <label for="txtCodPro">Código Proconsi</label>
	                        <input type="text" class="form-control" id="txtCodPro" value="RRRRRRRR" name="txtCodPro" readonly="true">
	                    </div>	
	                </div>
 				<div class="row col-sm-12">
 					<button type="submit" class="btn btn-info">Confirmar</button>
                    
 				</div>
              </div>  
            </form>
            
        	<div class="row col-sm-12 regresar">
                <button type="submit" class="btn btn-danger"><a href="welcome" style="color:white">Regresar</a></button>
            </div>
        </section>   
</div>
@endsection