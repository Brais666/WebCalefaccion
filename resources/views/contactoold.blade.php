<?php
use App\Oferta;

$ofertas = Oferta::all();	
?>
@extends('layouts.appfaq2')
@section('title', 'SimonGrup')
@section('content')

<div class="ocultar-div ocultar-div-tab bg-faq apartado row pb-1 mb-5">
	<div class="col-sm-2 ocultar-div"></div>
	<div class="  margin-contacto">
		<h3 class="text-white "><b>Contacta con Nosotros</b></h3>
	</div>
</div>

<div class="apartado row bg-faq pt-1 pb-1 fixed-top4">
	<div class="col-sm-2"></div>
	<div class="col-sm-4 columna">
		<div class="card">
  			<div class="card-body">
			   <h3 class="card-title text-white ml-25">Contacta con Nosotros</h3>
			</div>
		</div>
	</div>
</div>



<div class="mt-2 bottom-contacto container text-center">
    <div class="col-lg-1"></div>
  <div class="col-lg-10">
      <div class="row border pt-1 pb-2">
		<div class="col-sm-5 cont pb-2 mg-con-text">
			<div class="card text-left ">
			  <div class="card-body">
			    <h4 class="card-title text-blue title-contacto "><b>¿Tienes alguna duda o sugerencia?</b></h4>
			    <p class="card-text text-blue ">Contacta con nosotros para que podamos solucionar cualquier duda o sugerencia que puedas tener con tu pedido o nuestros productos.</p>
			  </div>
			</div>					
		</div>
		<div class="mg-con-img col-sm-6 pb-2">
			<div class="card">
			  <div class="card-body">
			    
			    <p class="card-text"></p>
			    <p class="card-text"></p>
			  </div>
			  <img src="{{ asset('images/contacto-400x275 .jpg') }}" alt="contacto" class=" img-contacto">
			</div>			 
		</div>
	    <hr class="blue-contacto">
	    
	  <div class="caja-flex">
	    <div class="flex padding-contacto">
	        
		<div class="padding-contacto ancho ancho2 col-sm-2 cont  pb-2">
			<div class="card text-center ">
			  <div class="card-body">
				<p class="card-title text-blue"><i class="fab fa-whatsapp fa-3x"></i></p>
				<div class="col-sm-12 text-blue"><a href="https://api.whatsapp.com/send?phone=34652946533" target="_blank">949 247 034</a></div>
			  </div>
		    </div>
		</div>
		
		<div class="ancho ancho2 col-sm-3 cont  pb-2">
			<div class="card text-center ">
			  <div class="card-body">
			    <p class="card-title text-blue"><i class="fas fa-mobile-alt fa-3x text-ble"></i></p>
			    <div class="col-sm-12 text-blue">949 247 034</div>
			  	<div class="col-sm-12 text-blue">(Madrid)</div>
			  </div>
			</div>			
		</div>
		
		</div>
		
		<div class="flex">
		
		<div class="ancho ancho2 col-sm-3 cont  pb-2">
			<div class="card text-center ">
			  <div class="card-body">
			    <p class="card-title text-blue"><i class="fas fa-mobile-alt fa-3x text-blue"></i></p>
			     <div class="col-sm-12 text-blue">977 773 800</div>
			  	<div class="col-sm-12 text-blue">(Cataluña)</div>
			  </div>
			</div>			
		</div>
		<div class="ancho ancho2 col-sm-4 cont  pb-2">
			<div class="card text-center ">
			  <div class="card-body">
			    <p class="card-title text-blue"><i class="flex fas fa-paper-plane fa-3x text-blue"></i></p>
			    <a class="subrallado-contacto" HREF="https://134.122.70.106/nueva/public/cuenta">pedidos@simongrup.com</a>
			    
			    <!--<button type="button" class="btn buttoncons" data-toggle="modal" data-target="#exampleModal">pedidos@simongrup.com</button>
			    <!-- Modal -->
                        <div class="modal fade" data-backdrop="static" id="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="#exampleModal" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title text-center" id="exampleModalLabel">Gracias por contactarme</h4>
                              </div>
                              <div class="modal-body">
                               <form method="POST" action="contacto.php">
			                        <div class="form-group">
			                            <label for="nombre">Nombre</label>
			                            <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Tu nombre">
			                        </div>
			                        <div class="form-group">
			                            <label for="correo">Correo electrónico</label>
			                            <input name="correo" required type="email" id="correo" class="form-control" placeholder="Tu correo electrónico">
			                        </div>
			                        <div class="form-group">
			                            <label for="mensaje">Mensaje</label>
			                            <textarea required placeholder="Escribe tu mensaje"
			                                class="form-control" name="mensaje" id="mensaje"
			                                cols="30" rows="5"></textarea>
			                        </div>
			                        <div class="form-group">
			                            <button class="btn-success btn" type="submit">
			                                Enviar
			                            </button>
			                        </div>
			                    </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              </div>
                            </div>
                          </div>
                        </div>
			  </div>
			</div>
			<p></p>
		</div>
		
	<!flex--	</div>
	</div>
		
	</div>
  </div>    
	
</div>

</script>
@endsection