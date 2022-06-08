<?php
  $datehoy = Carbon\Carbon::now()->format('l');
  $meshoy = Carbon\Carbon::now()->format('F');
  $dathoyrest =Carbon\Carbon::now()->format('j');
  $anohoy = Carbon\Carbon::now()->format('Y');
  $hora = Carbon\Carbon::now()->isoFormat('H:mm a');
?>
<nav class="pt-1 navbar navbar-default bg-white navfont" role="navigation" >
  <div class="navbar-header col-md-6 plr-8 ">
    <div class="col-md-3 movillogo2">
      <a class="align-middle" href="{{ url("") }}">
        <img src="{{asset('images/logosg.png')}}" alt="logo simongrup" height="56px" width="95px"></a></div>
    
  </div>
  <div class="col-md-6 prr-5">
   <ul class="nav navbar-nav navbar-right nav-flex" style="display: flex;align-items: center;height: 9vh;">
    <li><form class="navbar-form navbar-left" role="search" style="margin-top: 0px;">     
     @if (Route::has('login'))
                <div class="top-right links" style="width: max-content";>
                    @auth
                      <div class="row" style="display: flex; justify-content: space-between;">
                        
                        <div class=" pt-1 mlmov-3 movillogo text-center"><a style="display: flex;align-items: flex-end;padding-bottom: 20px;padding-right: 20px;" href="cuenta"><b><br>{{ Auth::user()->name }}</b><span class="material-icons"style="padding-inline: 10px;">account_circle</span></a></div>

                        <div class=" pt-1 movillogo text-center"><a style="display: flex; align-items: flex-end; padding-bottom: 20px;" href="{{ route('logout') }}"><b><br>Cerrar sesi&oacute;n</b><span class="material-icons"style="padding-inline: 10px;">logout</span></a></div>

                      </div>
                    @else
                    <div class="text-vivo row">
                        <div class="col-md-12pt-1 movillogo text-center"><a class="text-blue" style="display: flex; align-items: flex-end;" href="{{ route('login') }}"><b><br>Iniciar Sesi&oacute;n</b><span class="text-blue material-icons" style="padding-inline: 10px;">login</span></a></div>
                        <!--<div class="col-lg-4 col-sm-5 col-xs-1 pt-1 mlmov-3 movillogo text-center"><a href="{{ route('register') }}" ><b><span class="material-icons">app_registration</span><br>Registrarse</b></a></div>-->
                    </div>


                        
                    @endauth
                </div>
     @endif
    </form></li>
       <li>
                <div class="col-md-6 ocultar-div ocultar-div-tab">
                  
<a class="weatherwidget-io" href="https://forecast7.com/es/40d42n3d70/madrid/" data-font="Roboto" data-mode="Current" data-days="3" data-theme="original" data-basecolor="#fff" data-textcolor="#0075c9" data-highcolor="#0075c9" data-lowcolor="#0075c9" data-suncolor="#0075c9" data-mooncolor="#0075c9" data-cloudcolor="#0075c9" data-cloudfill="#0075c9" data-raincolor="#0075c9" data-snowcolor="#0075c9" style="text-indent: -299rem;display: block;position: relative;height: 98px;padding: 0px;overflow: hidden;text-align: left;width: 44vw;max-width: 22.75rem;margin-right: 8rem;background-color: none;">Madrid, Spain<iframe id="weatherwidget-io-0" class="weatherwidget-io-frame" title="Weather Widget" scrolling="no" frameborder="0" width="100%" src="https://weatherwidget.io/w/" style="display: block; position: absolute; top: 0px; height: 98px;"></iframe></a>

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

                </div> 
        </div>
        
      </li>
      
      
    </ul></div>
  
</nav>