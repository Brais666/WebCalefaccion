<?php
  $datehoy = Carbon\Carbon::now()->format('l');
  $meshoy = Carbon\Carbon::now()->format('F');
  $dathoyrest =Carbon\Carbon::now()->format('j');
  $anohoy = Carbon\Carbon::now()->format('Y');
  $hora = Carbon\Carbon::now()->isoFormat('H:mm a');
?>
<nav class="navbar navbar-default bg-white col-xs-12 navfont" role="navigation" >
  <div class="col-md-2 col-xs-12"></div>
  <div class="navbar-header col-sm-5 col-md-3 col-xs-3">
    <div class="col-md-3 movillogo2">
      <a class="navbar-brand align-middle" href="https://134.122.70.106/nueva/public">
        <img src="../images/logosg.png"></a></div>
    
  </div>
  <div class="col-md-6 col-sm-7 col-xs-8">
   <ul class="nav navbar-nav navbar-right ">
    <li><form class="navbar-form navbar-left" role="search">     
     @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      <div class="row">
                        <div class="col-lg-8 col-sm-5 col-xs-1 pt-1 movillogo text-center"><a href="{{ route('logout') }}"><b><span class="material-icons">logout</span><br>Cerrar sesi&oacute;n</b></a></div>
                        <div class="col-lg-4 col-sm-5 col-xs-1 pt-1 mlmov-3 movillogo text-center"><a href="cuenta"><b><span class="material-icons">account_circle</span><br>Cuenta</b></a></div>
                      </div>
                              
                    @else
                    <div class="row">
                        <div class="col-lg-8 col-sm-5 col-xs-1 pt-1 movillogo text-center"><a href="{{ route('login') }}"><b><span class="material-icons">login</span><br>Iniciar Sesi&oacute;n</b></a></div>
                        <div class="col-lg-4 col-sm-5 col-xs-1 pt-1 mlmov-3 movillogo text-center"><a href="{{ route('register') }}" ><b><span class="material-icons">app_registration</span><br>Registrarse</b></a></div>
                    </div>
                        
                    @endauth
                </div>
     @endif
    </form></li>
      <li class="pl-1">
        <div class="navbar-form navbar-left pt-1 ocultar-div ocultar-div-tab">
          <div>

            <small>
            Tarragona, Espa…ga
            </small>
          </div>
          <div class="hora float-right d-none d-lg-block "><h5><small>{{$hora}}</small></h5></div>
          </div>                   
                <div class="row float-right col-lg-2 ocultar-div ocultar-div-tab">
                  <!-- weather widget start --><img src="http://w.bookcdn.com/weather/picture/5_848_1_4_137AE9_250_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=582&anc_id=17768"  alt="booked.net"/><!-- weather widget end -->
                </div> 
        </div>
        
      </li>
      
      
    </ul></div>
  
</nav>