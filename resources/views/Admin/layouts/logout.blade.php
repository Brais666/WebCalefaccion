<div class="d-flex">
      <div class="w-100">
          <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-circle mr-2"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" id="show" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item navbar-light logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar sesión
                      </a>
                      
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                      </form>
                      
                    </div>
                  </li>
                  
                </ul>
            </div>
          </nav>
      </div>
</div>