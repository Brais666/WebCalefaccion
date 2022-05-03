
            <?php
use App\Oferta;

$ofertas = Oferta::all();   
?>

@extends('layouts.appfaq')
@section('title', 'Cuenta de usuario Simon Grup')
@section('content')
<div class="row bg-faq pt-1 pb-1 fixed-top4">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
               <h3 class="card-title text-white mlmov-6 ml-25">Cuenta de usuario</h3>
               <h4 class="card-subtitle mb-2 text-white text-muted subtitlefaq mlmov-4 ml-3">Observa tu perfil de usuario</h4>
            </div>
        </div>
    </div>
</div>  
<div class="container pb-13">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3 border mt-2 pt-2 pl-2 pb-1 menufaq ml-2">
            <ul>
                <li class="licuenta"><a href="#misdatos">Mis datos</a></li>
                <!--<li class="licuenta"><a href="#misdirecciones">Mis direcciones</a></li>-->
                <li class="licuenta"><a href="#mispedidos">Mis pedidos</a></li>
                <!--<li class="licuenta"><a href="#miconsumo">Mi consumo</a></li>
                <li class="licuenta"><a href="#migasto">Mi gasto</a></li>
                <li class="licuenta"><a href="#miagente">Mi agente</a></li>-->
                
            </ul>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7 border mt-2 pt-2 pl-2 containerfaq ">
            @include('layouts.containerCuenta')
        </div>
    </div>
    
</div>



@endsection