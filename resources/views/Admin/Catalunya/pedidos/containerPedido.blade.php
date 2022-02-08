<?php
$texto="";
$rowperpage="";
?> 
<section class="containerCuenta">
<div class="content">
    <a href="bienvenido"><i class="fas fa-home"></i></a>
    <div class="row">
        <div class="col-lg-10">
                
                
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary clientes" href="excel">Exportar CSV</a>
        </div>
        <div class="col-lg-1">
            
            <a class="btn btn-primary" href="#">Proconsi</a>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-lg-11">
                
                
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('pedidos.create') }}">+ Nuevo</a>
        </div>
    </div>-->
 
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
    <div class="row col-sm-10">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
            <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <th data-field="id">Ped.</th>
                    <th data-field="fechaini">Fecha entrada</th>
                    <th data-field="codigocliente">Cliente</th>
                    <th data-field="nombre" data-field="id">Nombre</th>
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
                        <td>{{ $pedido->fechaentrada }}</td>
                        <td>{{ $pedido->codigocliente }}</td>
                        <td>{{ $pedido->nombre }}</td>
                        <td>{{ $pedido->canal }}</td>
                        @if($pedido->estado == 'Pendiente')<td class="text-warning">{{ $pedido->estado }}</td>@else<td>{{ $pedido->estado }}</td>@endif
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
        </div>
        <div class="col-sm-2"></div>  
    </div>
    
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
    <div class="row ">
        <div class="col-lg-11">
                
                
        </div>
        <div class="col-lg-1">
            
        </div>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-sm-4">
            <div class="col-lg-11">
                <h4>Pedidos Procesados o cancelados</h4>
            </div>
        </div>
        
        <div class="col-sm-6"></div>
        <div class="col-sm-2">
                    <a class="btn btn-primary clientes" href="excelcan">Exportar CSV</a>
        </div>   
    </div> 
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-3">
          <form action="{{url('pedidos')}}" method="get">
            <div class="form-row">
                <div class="col-sm-6">
                    <select name="estado" class="form-control">
                        <option value="Estado">Estado</option>
                        <option value="Procesado">Procesado</option>
                        <option value="Cancelado">Cancelado</option>
                    </select>
                </div>
                
                <div class="col-sm-2 estado">
                        <input type="submit" class="btn btn-primary btn-xs " value="estado">
                </div>
                <div class="col-sm-2"></div>
            </div>
          </form>
        </div>
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
    <div class="row col-sm-10">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
            <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <th data-field="id">Ped.</th>
                    <th data-field="fechaini">Fecha entrada</th>
                    <th data-field="codigocliente">Cliente</th>
                    <th data-field="nombre" data-field="id">Nombre</th>
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
                @foreach ($pedidosotros as $pedidosotro)
                    <tr>
                        <td>{{ $pedidosotro->id }}</td>
                        <td>{{ $pedidosotro->fechaentrada }}</td>
                        <td>{{ $pedidosotro->codigocliente }}</td>
                        <td>{{ $pedidosotro->nombre }}</td>
                        <td>{{ $pedidosotro->canal }}</td>
                        @if($pedidosotro->estado == 'Procesado')<td class="text-success">{{ $pedidosotro->estado }}</td>@else<td class="text-danger">{{ $pedidosotro->estado }}</td>@endif
                        <td>{{ $pedidosotro->producto }}</td>
                        <td>{{ $pedidosotro->cantidad }}</td>
                        <td>{{ $pedidosotro->total }}</td>
                        <td>{{ $pedidosotro->seleccionado }}</td>
                        <td>
                            <form action="{{ route('pedidos.destroy',$pedidosotro->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('pedidos.show',$pedidosotro->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('pedidos.edit',$pedidosotro->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
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
            {!! $pedidosotros->links() !!}
          </div>
    </div>
    <div class="row ">
        <div class="col-lg-11">
                
                
        </div>
        <div class="col-lg-1">
            
        </div>
    </div>
</div>
   
  </section>
  