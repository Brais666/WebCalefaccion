@extends('layouts.app')
@section('title', 'SimonGrup')
@section('content')
<div class="container border">
    <div class="row "> 
        @if ($message = Session::get('success'))
           <div class="row pt-1">
               <div class="col-md-4 col-xs-4"></div>
            <div class="col-md-4 col-xs-4 alert alert-success text-center">
                <p autofocus>{{ $message }}</p>
                <button class="btn bg-primary"><a href="bienvenido" style="color:white;">Inicio</a></button>
            </div>
            <div class="col-md-auto col-xs-auto"></div>
           </div>
            
        @endif
        <form class="pt-5" id="formulario " method="POST" action="{{action('CasirutaController@store')}}">
          @csrf
          <div class="form-group text-center" >
                <div class="col-sm-2">                  
                </div>
                <div class="col-sm-9 col-xs-10">
                  <div class="row formcons">
                      <div>
                        
                            <div class="row">
                                <p class="col-xs-11 text-danger">
                                    En breve se pondrá en ruta y podrás realizar pedidos!</p>
                            </div
                            <p><b>Lo sentimos pero aún no distribuimos en esta población.<br>
                        Si lo deseas, déjanos tus datos de contacto y te avisaremos cuando este servicio esté disponible en tu zona.</b></p>
                      </div>
                  </div>
                  <div class="row formcons2">
                      <div class="col-sm-3">
                      </div>
                      <div class="col-sm-6">
                      	<label for="txtNombre">Nombre y apellidos:</label>
                        <input type="text" class="form-control input" id="txtNombre" name="txtNombre" placeholder="Nombre y apellidos">
                      </div>
                      <div class="col-sm-3">  
                      </div>
                  </div>
                  <div class="row formcons2">
                      <div class="col-sm-3">
                      </div>
                      <div class="col-sm-6">
                      	<label for="txtEmail">E-mail:</label>
                        <input type="email" class="form-control input" id="txtEmail" name="txtEmail" placeholder="E-mail" >
                      </div>
                      <div class="col-sm-3">       
                      </div>
                  </div>
                  <div class="row formcons2">
                      <div class="col-sm-3">
                      </div>
                      <div class="col-sm-6">
                      	<label for="txtTelefono">Teléfono de contacto:</label>
                        <input type="text" class="form-control input" id="txtTelefono" name="txtTelefono" placeholder="Teléfono de contacto">
                        </div>
                      <div class="col-sm-3">       
                      </div>
                  </div>
                  <div class="row formcons2 ">
                      <div class="col-sm-3">
                      </div>
                      <div class="col-sm-6">
                      	<label for="txtPoblacion">Población:</label>
                        <input type="text" class="form-control input" id="txtPoblacion" name="txtPoblacion" placeholder="Población">
                      </div>
                      <div class="col-sm-3">                      
                      </div> 
                    </div>
                    <div class="row pt-2">
                        <div class="form-check">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-6">
                            <div class="col-sm-1">
                              <input type="checkbox" class="form-check-input" value="1" id="exampleCheck1" onclick="btTutorial.disabled = !this.checked">
                            </div>
                            <div class="col-sm-11">
                              <label class="form-check-label" for="exampleCheck1">Deseo ser notificado cuando el servicio del reparto esté disponible en mi población.</label>
                            </div>
                              
                          </div>                                                
                      </div>
                  <div class="row formcons pb-2">
                      <div class="col-sm-5 col-xs-5"></div>
                      <div class="col-sm-4 col-xs-4"><button type="submit" class="btn btn-primary" name="btTutorial" disabled autofocus>Enviar</button></div>
                      <div class="col-sm-3"></div>
                      
                  </div>       
                  </div>                    
                
                <div class="col-sm-2">
                </div>
              </div>  
          </div>        
        </form>
      </section> 
      @include('layouts/cookies')
@endsection
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

  function validarFormulario(evento) {
  evento.preventDefault();
  var nombre = document.getElementById('txtNombre').value;
  var email = document.getElementById('txtEmail').value;
  var tel = document.getElementById('txtTelefono').value;
  var pobl =document.getElementById('txtPoblacion').value;

  if((nombre.length == 0) || (email.length == 0) || (tel.length == 0) || (pobl.length == 0))
  {
    
      swal('Debes completar todos los campos',);
      return;
  }
  
  
  this.submit();
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $(‘input[type="submit"]’).attr(‘disabled’,’disabled’);
  $(‘input[type="text"]’).keypress(function(){
  if($(this).val() != »){
  $(‘input[type="submit"]’).removeAttr(‘disabled’);
  }
  });
  });
</script>