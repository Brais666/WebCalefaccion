<?php
$texto="";
$rowperpage="";
?> 
<section class="containerCuenta">
<div class="content">

    <div class="row">
        <div class="col-lg-11">
                <h1>Ofertas/Descuentos</h1>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('ofertas.create') }}">+ Nuevo</a>
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
            <form action="{{url('ofertas')}}" method="get">
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
            <th  >Id</th>
            <th >Id oferta</th>
            <th id="nombre" name="nombre">Nombre</th>
            <th>Fecha inicio</th>
            <th >Fecha fin</th>
            <th >Tipo</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Rango</th>
            <th width="280px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($ofertas as $oferta)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $oferta->id }}</td>
                <td>{{ $oferta->oferta }}</td>
                <td>{{ $oferta->fecha_ini }}</td>
                <td>{{ $oferta->fecha_fin }}</td>
                <td>{{ $oferta->tipo }}</td>
                <td>{{ $oferta->cantidad }}</td>
                <td>{{ $oferta->desc_oferta }}</td>
                <td>{{ $oferta->rang }}</td>
                <td>
                    <form action="{{ route('ofertas.destroy',$oferta->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('ofertas.show',$oferta->id) }}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('ofertas.edit',$oferta->id) }}">Editar</a>
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
            <form action="{{url('ofertas')}}" method="get">
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

            
            {{ $ofertas->links() }}
           
        </div>
    </div>
    
   </div>
   
</section>

 
 