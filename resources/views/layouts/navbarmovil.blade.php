<?php
  $datehoy = Carbon\Carbon::now()->format('l');
  $meshoy = Carbon\Carbon::now()->format('F');
  $dathoyrest =Carbon\Carbon::now()->format('j');
  $anohoy = Carbon\Carbon::now()->format('Y');
  $hora = Carbon\Carbon::now()->isoFormat('H:mm a');
?>
<div class="row navfont">
    <div class="col-xs-2 movillogo2 pt-2">
      <a class="align-middle" href="http://localhost/nueva/public">
        <img src="images/logosg.png">
      </a>
    </div>
    <div class="col-xs-7 pt-1">
        <ul>
            <li>
                <form role="search">     
                     @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <div class="row">
                                      <div class="col-lg-6 col-sm-5 col-xs-1 pt-1 movillogo text-center"><a href="{{ route('logout') }}"><b><span class="material-icons">logout</span><br>Cerrar sesi&oacute;n </b></a>
                                      </div>
                                      <div class="col-lg-6 col-xs-1 pt-1 mlmov-3 movillogo text-center"><a href="cuenta"><b><span class="material-icons">account_circle</span><br>Cuenta</b></a>
                                      </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-lg-6 col-xs-1 pt-1 movillogo text-center"><a href="{{ route('login') }}"><b><span class="material-icons">login</span><br>Iniciar sesi&oacute;n</b></a>
                                        </div>
                                        <div class="col-lg-6 col-xs-1 pt-1 mlmov-2 movillogo text-center"><a href="{{ route('register') }}" ><b><span class="material-icons">app_registration</span><br>Registrar</b></a>
                                        </div>
                                    </div>
                                @endauth
                            </div>
                     @endif
                </form>
            </li>
        </ul>
    </div>
    <div class="col-xs-1 pt-2 mlmov-2">
        <nav class="navbar navbar-default  navbar-left bg-white col-xs-2" id="navbarsur" role="navigation">
      <div class="navbar-header col-xs-2 lista">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target=".navbar-ex1-collapse" aria-expanded="false">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<a class="navbar-brand align-middle" href="http://www.simongrup.com">SimonGrup</a>-->
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse col-xs-12 text-primary nav-stacked menumov">
        <ul class="nav navbar-nav ">
            <hr clas="blue">
          <!--<li class="nav-item" id="tab-unclick"><a href="pedidos.unclick">Pedido 1-Click</a></li>-->
          @if (auth()->check())
            <li class="nav-item hazpedmov" id="tab-welcome"><a href="welcome"> Pedidos</a></li>
          @else
            <li class="nav-item hazpedmov" id="tab-precios"><a href="precios"> Pedidos</a></li>
          @endif
          <li class="nav-item hazpedmov" id="tab-financiacion"><a href="financiacion">Financiación</a></li>
          <li class="nav-item hazpedmov" id="tab-promociones"><a href="promociones">Promociones</a></li>
          <!--<li class="nav-item" id="tab-simon"><a href="#">Simon Coins</a></li>-->
          <!--<li class="nav-item  hazpedmov" id="tab-app"><a href="#">App</a></li>-->
          <li class="nav-item hazpedmov" id="tab-blog"><a href="#">Blog</a></li>
          <li class="nav-item hazpedmov" id="tab-faq"><a href="faq1">Preguntas frecuentes</a></li>
          <li class="nav-item hazpedmov" id="tab-contacto"><a href="contacto">Contacto</a></li>
          <!--<li class="nav-item hazpedmov" id="tab-quienessomos"><a href="quienessomos">Nosotros</a></li>-->
        </ul>
      </div>
    </nav>
    </div>
</div>

<script type='text/javascript'>
  /// Url actual
var url = window.location.href;
//document.write(url);

/// Elementos de li
var tabs = ["precios","unclick","welcome", /*"simon", */"financiacion", "quienessomos", "faq", "promociones", "contacto", /*"blog"*/];

tabs.forEach(e => {
    /// Agregar y ver si lo contiene en la url
    if (url.indexOf(e) !== -1) {
        /// Agregar tab- para hacer que coincida la Id
        setActive("tab-" + e);
    }
});

/// Funcion que asigna la clase active
function setActive(id) {
    document.getElementById(id).setAttribute("class", "active");
}
</script>