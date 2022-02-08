@extends('layouts.error404')

@section('title', __('Página no encontrada'))
@section('code', '403')
@section('message', __('No hemos encontrado la página que buscas.'))

@section('content')

<div class="contenedor-error">


<div 
<style="background-color: #0075c9;" class=" width-error text-left absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center ">
    
    <h2>ERROR 403</h2> 
    
    <p class="quienes cont"></p>
    
    <h3 style="line-height: 1.4;">Vaya, no hemos podido<br>
encontrar la página que buscas.</h3>


<p class="quienes cont"></p>

    <a  class="toggle-error btn" style="color:#0075c9; background-color:#fff;" href="/">Volver al inicio</a>
        

    
 
</div>

<div class="img-error imagen-error">
    <img style="width:110%" src="images/error.png">
    
    
</div>

</div>
@endsection

