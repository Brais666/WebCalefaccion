<?php
   $prev= url()->previous();
?>
@extends('layouts.appfaq2')
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
                            <h2 class="card-title">{{auth()->user()->name}}, tu pedido se ha registrado con éxito!</h2>
                            <h4 class="card-subtitle mb-2 text-muted">En breve recibirás un correo electrónico con la información detallada.</h4>
                            
                          </div>
                        </div>
                    </div>
                </div>
               
                <!--<div class="row ml-2 text-center text-blue pb-1">
                    <div class="col-sm-12 col-xs-10">
                        <div class="card">
                          <div class="card-body mlmov-4">
                            <h3 class="card-title">Sigue el estado de tu pedido desde nuestra APP</h3>
                            <h4 class="card-subtitle mb-2">Descárgala aquí para tu móvil Android o iOS.</h4>
                          </div>
                        </div>
                    </div>
                </div>!-->
                <form action="#" method="POST">
                @csrf
                
 				<div class="row col-sm-12 text-center">
                    @if($prev == 'http://134.422.70.106/nueva/public/pedidos.unclick')
                        <button type="submit" class="btn btn-default"><a href="pedidos.pedidosunclick">Mostrar pedido</a></button>
                    @else
 					<button type="submit" class="btn btn-default"><a href="pedidos.view">Mostrar pedido</a></button>
                    @endif
 				</div>
 				<div class="row col-sm-12 text-center pt-3">
 				    <small><p class="text-muted">Recuerda que desde tu cuenta puedes gestionar tus pedidos</p></small>
 				</div>
                
            </form>
            <!--<div class="row pt-1 pb-1 text-center">
                
                    <img src="images/googleplay.png">
                
                    <img src="images/apple.png">
                
                
            </div>!-->
            @endif
            
        
        
             
            <div class="row col-sm-12 pt-2 pb-1 text-center">
            	<button type="submit" class="btn buttoncons"><a href="bienvenido" style="color:white">Volver a inicio</a></button>
            </div>
        </div>
</div>
@endsection