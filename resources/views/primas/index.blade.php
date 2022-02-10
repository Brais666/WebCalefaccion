@extends('layout')

@section('content')
<section class="container">   
  @include('layouts/logout')
  <div class="titulo p-3"><h1>Primas</h1></div>
  <nav aria-label="breadcrumb">
        <nav aria-label="breadcrumb" id="breadcrumb">
        <ol class="breadcrumb bg-dark w-25">
          <li class="breadcrumb-item ml-2"><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item"><a href="bienvenido" class="text-light">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Primas</li>
        </ol>
    </nav>
    </nav>
      <div >
          <div class="panel-body">            
            <div class="table-container">
              <table id="mytable" class="table table-bordred table-striped">
               <thead>
                 <th>ID_Terminal</th>
                 <th>Terminal</th>
                 <th>Producto</th>
                 <th>Zona</th>
                 <th>Platts</th>
                 <th>Logística</th>
                 <th>Prima_$Tn</th>
                 <th>Dolar_Euro</th>
                 <th>ICE</th>
                 <th>Densidad_Def</th>
                 <th>Prima-€</th>
                 <th>Total</th>
               </thead>
               <tbody>
                @if($primas->count())  
                @foreach($primas as $prima)  
                <tr>
                    <td>{{$prima->ID_Terminal}}</td>
                    <td>{{$prima->Terminal}}</td>
                    <td>{{$prima->Producto}}</td>
                    <td>{{$prima->Zona}}</td>
                    <td>{{$prima->Platts}}</td>
                    <td>{{$prima->Logistica}}</td>
                    <td>{{$prima->PrimaDolarTn}}</td>
                    <td>{{$prima->Dolar_Euro}}</td>
                    <td>{{$prima->ICE}}</td>
                    <td>{{$prima->Densidad_Def}}</td>
                    <td>{{$prima->Prima_Eur}}</td>
                    <td>{{$prima->Total}}</td>
                  </tr>
                @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
                 
               </tbody>

              </table>
           </div>
      
      </div>
    </div>
  </section>
@endsection