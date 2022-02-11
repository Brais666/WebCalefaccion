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
      <a class="navbar-brand align-middle" href="https://calefaccion.store">
        <img src="images/logosg.png" alt=""></a></div>
    
  </div>
  <div class="col-md-6 col-sm-7 col-xs-8">
   <ul class="nav navbar-nav navbar-right ">
    <li><form class="navbar-form navbar-left" role="search">     
     @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      <div class="row">
                        <div class="col-lg-9 col-sm-5 col-xs-1 pt-1 movillogo text-center"><a href="{{ route('logout') }}"><b><span class="material-icons">logout</span><br>Cerrar sesi&oacute;n</b></a></div>
                        <div class="col-lg-3 col-sm-5 col-xs-1 pt-1 mlmov-3 movillogo text-center"><a href="cuenta"><b><span class="material-icons">account_circle</span><br>{{ Auth::user()->name }}</b></a></div>
                      </div>
                              
                        <!-- Modal -->
                        <!--<div class="modal fade" data-backdrop="static" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title text-center" id="exampleModalLabel">Mi Cuenta</h4>
                                
                              </div>
                              <div class="modal-body">
                                <ul class="ulnd">
                                  <li><a href="cuenta">Mis datos</a></li>
                                  <li><a href="#">Mis direcciones</a></li>
                                  <li><a href="#">Mis pedidos</a></li>
                                  <li><a href="#">Mi consumo</a></li>
                                  <li><a href="#">Mi gasto</a></li>
                                  <li><a href="#">Mi agente</a></li>
                                  <li><a href="#">Mis tickets</a></li>
                                  
                                </ul>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                    @else
                    <div class="row">
                        <div class="col-lg-12 col-sm-5 col-xs-1 pt-1 movillogo text-center"><a href="{{ route('login') }}"><b><span class="material-icons">login</span><br>Iniciar Sesi&oacute;n</b></a></div>
                        <!--<div class="col-lg-4 col-sm-5 col-xs-1 pt-1 mlmov-3 movillogo text-center"><a href="{{ route('register') }}" ><b><span class="material-icons">app_registration</span><br>Registrarse</b></a></div>-->
                    </div>
                        
                    @endauth
                </div>
     @endif
    </form></li>
      <li class="pl-1">
        <div class="navbar-form navbar-left pt-1 ocultar-div ocultar-div-tab">
          <div>

            <small>
            Tarragona, España
            </small>
          </div>
          <div class="hora float-right d-none d-lg-block "><h5><small>{{$hora}}</small></h5></div>
          </div>                   
                <div class="row float-right col-lg-2 ocultar-div ocultar-div-tab">
                  <!-- weather widget start --><img src="https://w.bookcdn.com/weather/picture/5_848_1_4_137AE9_250_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=582&anc_id=17768"  alt="booked.net"/><!-- weather widget end -->
                </div> 
        </div>
        
      </li>
      
      
    </ul></div>
  
</nav>