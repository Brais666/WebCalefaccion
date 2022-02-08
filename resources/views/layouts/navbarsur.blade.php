<nav class="navbar navbar-default bg-white text-center navfont " id="navbarsur" role="navigation" >
  <hr class="blue2 ocultar-div">
  <div class="col-md-2">
    
  </div>
  <div class="navbar-header col-sm-2 lista">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <!--<a class="navbar-brand align-middle" href="http://www.simongrup.com">SimonGrup</a>-->
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse col-sm-auto text-primary mltab-10">
    <ul class="nav navbar-nav">
      <!--<li class="nav-item" id="tab-unclick"><a href="pedidos.unclick">Pedido 1-Click</a></li>-->
      @if (auth()->check())
        <li class="nav-item movil hazpedmov" id="tab-precios"><a href="precios"> Pedidos</a></li>
      @else
        <li class="nav-item movil hazpedmov" id="tab-precios"><a href="precios"> Pedidos</a></li>
      @endif
      <li class="nav-item movil hazpedmov" id="tab-financiacion"><a href="financiacion">Financiación</a></li>
      <li class="nav-item movil hazpedmov" id="tab-promociones"><a href="promociones">Promociones</a></li>
      <!--<li class="nav-item" id="tab-simon"><a href="#">Simon Coins</a></li>-->
      <!--<li class="nav-item movil hazpedmov" id="tab-app"><a href="#">App</a></li>-->
      <li class="nav-item movil hazpedmov" id="tab-blog"><a href="blog">Blog</a></li>
      <li class="nav-item movil hazpedmov" id="tab-faq"><a href="faq1">Preguntas frecuentes</a></li>
      <li class="nav-item movil hazpedmov" id="tab-contacto"><a href="contacto">Contacto</a></li>
      <!--<li class="nav-item movil hazpedmov" id="tab-quienessomos"><a href="quienessomos">Nosotros</a></li>-->
      
      
      
      
    </ul>
  </div>
</nav>

<script type='text/javascript'>
  /// Url actual
var url = window.location.href;
//document.write(url);

/// Elementos de li
var tabs = ["precios","unclick","welcome", /*"simon",*/ "financiacion", "quienessomos", "faq", "promociones", "contacto","blog"];

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