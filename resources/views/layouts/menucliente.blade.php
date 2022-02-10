<div class="menuv">
	<ul class='nav'>
		<div class="logo w-100">
				<h4 class="text-light font-weight-bold p-3">SimonGrup</h4>
		</div>
		<li tabindex='1' class="p-2 mt-5 mr-2">{{Auth::user()->name}}
			<div class="menu p-5 mt-3 text-left">							
				<a href="{{route('cliente.pedidos',Auth::user()->id)}}" class="d-block text-light p-1"><i class="fas fa-truck mr-2"></i>Mis pedidos</a>
				<a href="{{route('cliente.edit',Auth::user()->id)}}" class="d-block text-light p-1"><i class="fab fa-centos mr-2"></i>Perfil</a>
				<a href="https://www.nascorenergias.com/" class="d-block text-light p-1"><i class="fas fa-euro-sign mr-2"></i>Precios</a>
			</div>
		</li>
				
	</ul>
</div>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class=" p-4">
    
    </div>
  </div>

 <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    	<div>
				<h1 class="text-light font-weight-bold">S. Grup</h1>
		</div>
      <ul class='nav'>	
		<li tabindex='1'>{{Auth::user()->name}}
			<div class="menu  border-top border-light">
				<a href="{{route('cliente.pedidos',Auth::user()->id)}}" class="d-block text-light p-1"><i class="fas fa-truck mr-2"></i>Mis pedidos</a>
				<a href="{{route('cliente.edit',Auth::user()->id)}}" class="d-block text-light p-1"><i class="fab fa-centos mr-2"></i>Perfil</a>
				<a href="https://www.nascorenergias.com/" class="d-block text-light p-1"><i class="fas fa-euro-sign mr-2"></i>Precios</a>
			 </div>
		</li>
	  </ul>		 
	</div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

	