<section class="containerCuenta">
  <div class="content">
   <div class="row">
        <div class="col-lg-11">
            <h2>Update Ruta</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('rutas') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('rutas.update',$ruta->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-row">
        	<div class="form-group">
                    <div class="form-group col-sm-1">
	                    <label for="txtIdZona">Id zona:</label>
	                    <input type="text" class="form-control" id="txtIdZona" placeholder="Id" name="txtIdZona" value={{ $ruta->idzona }}>
	                </div>
	                <div class="form-group col-sm-3">
	                    <label for="txtPoblacion">Población:</label>
	                    <input type="text" class="form-control" id="txtPoblacion" placeholder="Introduce nombre de la población" name="txtPoblacion" value={{ $ruta->poblacion }}>
	                </div>
	                <div class="form-group col-sm-2">
	                    <label for="txtCodigoPost">C.P.:</label>
	                    <input type="text" class="form-control" id="txtCodigoPost" name="txtCodigoPost" placeholder="Introduce código postal" value={{ $ruta->codigopost }}></input>
	                </div>
	                <div class="form-group col-sm-3">
	                    <label for="txtNombreRuta">Nombre de la ruta:</label>
	                    <input type="text" class="form-control" id="txtNombreRuta" name="txtNombreRuta" placeholder="Introduce nombre de la ruta" value={{ $ruta->nombreruta }}></input>
	                </div>
	                <div class="form-group col-sm-3">
	                    <label for="txtDia">Día:</label>
	                    <input type="text" class="form-control" id="txtDia" placeholder="Introduce día" name="txtDia" value={{ $ruta->dia }}>
	                </div>
	                
        </div>
        		
                <button type="submit" class="btn btn-default">Submit</button>
    </form>
   </div> 
</section>