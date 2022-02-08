<?php
$texto="";
$rowperpage="";
?> 
<section class="containerCuenta">
<div class="content">

    <div class="row">
        <div class="col-lg-11">
                <h1>Pedidos</h1>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('pedidos.create') }}">+ Nuevo</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-4">
            <div class="col-lg-11">
                <h4>Pedidos Pendientes</h4>
        </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-5 buscar">
            <form action="{{url('pedidos')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" value="buscar">
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    <table class="table table-bordered table-striped table-hover clientes">
        <tr>
            <th data-field="id">Ped.</th>
            <th data-field="codigocliente">Cliente</th>
            <th data-field="codigoproconsi">Proconsi</th>
            <th data-field="nombre" data-field="id">Nombre</th>
            <th data-field="dni">DNI/CIF</th>
            <th data-field="address">Dirección</th>
            <th data-field="poblacion">Población</th>
            <th data-field="provincia">Provincia</th>
            <th data-field="CP">C.P.</th>
            <th data-field="fechaini">Fecha entrada</th>
            <th data-field="fechafin">Canal</th>
            <th data-field="tipo">Estado</th>
            <th data-field="cantidad">Producto</th>
            <th data-field="descripcion">Cantidad</th>
            <th data-field="rango">Total</th>
            <th data-field="rango">Selec.</th>
            <th data-field="accion" width="200px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->codigocliente }}</td>
                <td>{{ $pedido->codigoproconsi }}</td>
                <td>{{ $pedido->nombre }}</td>
                <td>{{ $pedido->dni }}</td>
                <td>{{ $pedido->address }}</td>
                <td>{{ $pedido->poblacion }}</td>
                <td>{{ $pedido->provincia }}</td>
                <td>{{ $pedido->CP }}</td>
                <td>{{ $pedido->fechaentrada }}</td>
                <td>{{ $pedido->canal }}</td>
                <td>{{ $pedido->estado }}</td>
                <td>{{ $pedido->producto }}</td>
                <td>{{ $pedido->cantidad }}</td>
                <td>{{ $pedido->total }}</td>
                <td>{{ $pedido->seleccionado }}</td>
                <td>
                    <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('pedidos.show',$pedido->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('pedidos.edit',$pedido->id) }}"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-sm-4">
            <form action="{{url('pedidos')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-2">
                        <select name="rowperpage" class="form-select-lg mb-3" >
                          <option value="5">5</option>
                          <option value="10" selected>10</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary btn-xs" value="mostrar">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-5">
            
        </div>
        <div class="col-sm-3">
            {!! $pedidos->links() !!}
        </div>
    </div>
    
   </div>
   
  </section>
 
 