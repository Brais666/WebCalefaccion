<?php
   $prev= url()->previous();
?>
@extends('layouts.appfaqfinan')
@section('title', 'SimonGrup')
@section('content')

<div class="container pt-2">         
        <div class="row border pt-2 ">
             @if ($errors->any())
                <div class="col-lg-11 alert alert-danger">
                    <strong>Whoops!</strong> Hay algún error en tu introducción de datos.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
             @if (\Session::has('success'))
                <div class=" col-lg-11 alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            
            @if(!empty($danger))
              <div class=" col-lg-11 alert alert-danger"> {{ $danger }}</div>
            @endif
            @if(!empty($success))
                <div class="row ml-2 text-center pt-2 pb-1">
                    <div class="col-sm-12 col-xs-10">  
                        <div class="card">
                          <div class="card-body mlmov-4">
                            <h3 class="card-title">{{auth()->user()->name}} tu pedido se ha registrado con éxito!</h3>
                            <h4 class="card-subtitle mb-2 text-muted">En breve recibirás un correo electrónico con la información detallada.</h4>
                          </div>
                        </div>
                    </div>
                </div>
               
                <!--<div class="row ml-2 text-center text-vivo pb-1">
                    <div class="col-sm-12 col-xs-10">
                        <div class="card">
                          <div class="card-body mlmov-4">
                            <h3 class="card-title">Sigue el estado de tu pedido desde nuestra APP</h3>
                            <h4 class="card-subtitle mb-2">Descárgala aquí para tu móvil Android o iOS.</h4>
                          </div>
                        </div>
                    </div>
                </div>!-->
            <!--<div class="row pt-2 pb-1">
                <div class="col-sm-2 col-xs-1"></div>
                <div class="col-sm-3 col-xs-11">
                    <img src="images/googleplay.png">
                </div>
                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-3 col-xs-10 pt-1">
                    <img src="images/apple.png">
                </div>
                <div class="col-sm-2"></div>
                
            </div>!-->
            @endif
            <form action="#" method="POST">
                @csrf
                
 				<div class="row col-sm-12 text-center">
                    @if($prev == 'http://134.122.70.106/nueva/public/pedidos.unclick')
                        <button type="submit" class="btn btn-default"><a href="pedidos.pedidosunclick">Mostrar pedido</a></button>
                    @else
 					<!--<button type="submit" class="btn btn-default"><a href="pedidofinanciado.view">Mostrar pedido</a></button>-->
                    @endif
 				</div>
                
            </form>
        
        
             
            <div class="row col-sm-12 pt-2 pb-1 text-center">
            	<button type="submit" class="btn buttonfinan"><a href="bienvenido" style="color:white">Volver a inicio</a></button>
            </div>
        </div>
</div>
@endsection