<!-- Navbar -->
<nav class="navbar navbar-default" role="navigation" id="navbar">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://www.simongrup.com">SimonGrup</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    
    <ul class="nav navbar-nav navbar-right ">
      <li><form class="navbar-form navbar-left" role="search">     
     @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}">Logout </a>
                        
                        </div>
                    @else
                        <a href="{{ route('login') }}">Login </a>
                        <!--<a href="{{ route('register') }}"> Registrarse</a>-->
                    @endauth
                </div>
     @endif
    </form></li>
      
    </ul>
  </div>
</nav>
<!-- End Navbar -->