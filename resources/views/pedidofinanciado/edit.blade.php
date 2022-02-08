@extends('layouts.app')
@section('title', 'SimonGrup')
@section('content')
@auth
            @include('layouts.headerlogin')
        @else
            @include('layouts.header')
        @endauth<br>
  <section class="separacion"></section>
        @include('layouts.hoy')
   <section class="separacion"></section>
<div class="container">
    <div class="row">
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
     <section class="main">
    
      <section class="article">
        <div class="container">
           @include('layouts.navbar')<br>
           @include('layouts.hoy')
        </div>
                
                
        <div class="row">
          <section class="separacion"></section>
              <section class="griscuenta"></section>
              <section class="separacion"></section>
              <section>
                @include('pedidos.containerPedidoEdit')
             </section>
            </div>
        </section>
    </section>
  @include('layouts/cookies')
@endsection