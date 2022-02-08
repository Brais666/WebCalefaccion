
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
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <th >Código</th>
                    <th id="nombre" name="nombre">Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Cantidad01</th>
                    <th>Cantidad02</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Rango1</th>
                    <th>Rango2</th>
                    <th>Usos</th>
                    <th>Imagen</th>
                    <th width="10%">Acción </th>
                </tr>
                @foreach ($ofertas as $oferta)
                <?php
                $img = 'images/'.$oferta->nombre.'';
                $ini= $oferta->fecha_ini;
                $ini = date('d-m-Y', strtotime($ini));
                $fin = $oferta->fecha_fin;
                $fin = date('d-m-Y', strtotime($fin));
                ?>
                    <tr>
                        <td>{{ $oferta->id }}</td>
                        <td>{{ $oferta->oferta }}</td>
                        <td>{{ $oferta->desc_oferta }}</td>
                        <td>{{ $oferta->tipo }}</td>
                        <td>{{ $oferta->cantidad01 }}</td>
                        <td>{{ $oferta->cantidad02 }}</td>
                        <td>{{ $ini }}</td>
                        <td>{{ $fin }}</td>
                        <td>{{ $oferta->rango1 }}</td>
                        <td>{{ $oferta->rango2 }}</td>
                        <td>{{ $oferta->usos }}</td>
                        @if (isset($oferta->nombre))
                        <td><img src="{{$img}}" width="80"></td>
                        @else 
                        <td>No tiene banner</td>
                        @endif
                        <td>
                            <form action="{{ route('ofertas.destroy',$oferta->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('ofertas.show',$oferta->id) }}"><i class="fas fa-eye"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-3"></div>
    </div>
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

 
 