<?php
      $datehoy = Carbon\Carbon::now()->format('l');
      $meshoy = Carbon\Carbon::now()->format('F');
      $dathoyrest =Carbon\Carbon::now()->format('j');
      $anohoy = Carbon\Carbon::now()->format('Y');
      $hora = Carbon\Carbon::now()->isoFormat('H:mm a');

      switch($datehoy) {
        case 'Monday':
            $datehoy ='Lunes';
            break;
        case 'Tuesday':
            $datehoy ='Martes';
            break;
        case 'Wednesday':
            $datehoy ='Miércoles';
            break;
        case 'Thursday':
            $datehoy ='Jueves';
            break;
        case 'Friday':
            $datehoy = 'Viernes';
            break;
        case 'Saturday':
            $datehoy = 'Sábado';
            break;
        default:
            $datehoy = 'Domingo';

      }

      switch($meshoy) {
        case 'January':
            $meshoy ='Enero';
            break;
        case 'February':
            $meshoy ='Febrero';
            break;
        case 'March':
            $meshoy ='Marzo';
            break;
        case 'April':
            $meshoy ='Abril';
            break;
        case 'May':
            $meshoy = 'Mayo';
            break;
        case 'June':
            $meshoy = 'Junio';
            break;
        case 'July':
            $meshoy = 'Julio';
            break;
        case 'August':
            $meshoy = 'Agosto';
            break;
        case 'September':
            $meshoy = 'Septiembre';
            break;
        case 'October':
            $meshoy = 'Octubre';
            break;
        case 'November':
            $meshoy = 'Noviembre';
            break;
        default:
            $meshoy = 'Diciembre';

      }


?>
<div class="row mb-5 ml-5 mr-2 bg-white hoy">
    <div class="col-lg-2 border-right d-none d-lg-block"><h3><small>Hoy es</small></h3></div>
    <div class="col-lg-7 vertical-line">
        <div class="row pl-3  fecha"><h3><small>{{$datehoy}}, {{$dathoyrest}} de {{$meshoy}} de {{$anohoy}}</small></h3></div>
    </div>
    <div class="col-lg-2 d-none d-lg-block vertical-line">
        <div class="float-right">
           <div ><small>         
             <!--@auth
                @include('layouts.localizacion')
            @else
             Tarragona, España
            @endauth-->

             Tarragona, España
            
        </small></div>
            <div class="hora float-right d-none d-lg-block"><h5><small>{{$hora}}</small></h5></div>
        </div>                   
    </div>
    <div class="row float-right col-lg-2">
     
    </div> 
</div> 
<div class="row">
    
</div>

            
    