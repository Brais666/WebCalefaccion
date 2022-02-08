<?php
$texto="";
$rowperpage="";
?> 
<section class="containerCuenta">
<div class="content">
    <div class="row">
        <div class="col-lg-11"></div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('rutas.create') }}">+ Nuevo</a>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-11">
                <h2>Rutas de Catalunya</h2>
        </div>
        
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-4">
            
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-5 buscar">
            <form action="{{url('rutas')}}" method="get">
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
            <th data-sortable="true" data-field="id">Id</th>
            <th data-field="id">Id zona</th>
            <th data-field="nombre" data-field="id">Población</th>
            <th data-field="fechaini">C.P.</th>
            <th data-field="fechafin">Nombre de Ruta</th>
            <th data-field="tipo">Día</th>
            <th data-field="accion" width="280px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($rutacats as $rutacat)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $rutacat->idzona }}</td>
                <td>{{ $rutacat->poblacion }}</td>
                <td>{{ $rutacat->codigopost }}</td>
                <td>{{ $rutacat->nombreruta }}</td>
                <td>{{ $rutacat->dia }}</td>
                <td>
                    <form action="{{ route('rutas.destroy',$rutacat->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('rutas.show',$rutacat->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('rutas.edit',$rutacat->id) }}"><i class="fas fa-edit"></i></a>
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
            <form action="{{url('rutas')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-2">
                        <select name="rowperpage" class="form-select-lg mb-3" >
                          <option value="5">5</option>
                          <option value="10" >10</option>
                          <option value="15" selected>15</option>
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
           
        </div>
    </div>
    
   </div>
   
  </section>
 
 