@extends('layouts.appnoruta')
@section('title', 'SimonGrup')
@section('content')
<div class="container border">
    <?php
    //dd("de");

    ?>

    <div class="row "> 
        @if ($message = Session::get('success'))
           <div class="row pt-1">
               <div class="col-md-4 col-xs-4"></div>
            <div class="col-md-4 col-xs-4 alert alert-success text-center">
                <p autofocus>{{ $message }}</p>
                
            </div>
            <div class="col-md-auto col-xs-auto"></div>
           </div>
            
        @endif
        <form class="pt-5" id="formulario " method="POST" action="{{action('NorutaController@store')}}">
          @csrf
          <div class="form-group text-center" >
                <div class="col-sm-2">                  
                </div>
                <div class="col-sm-9 col-xs-10">
                  <div class="row formcons">
                      <div>
                        <p class="col-xs-11"><b>Lo sentimos pero aún no distribuimos en esta población.<br>
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
                        <input type="text" class="form-control input" id="txtPoblacion" name="txtPoblacion" placeholder="Localidad">
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
        var usuario = document.getElementById('poblacion').value;
        var usuario2 = document.getElementById('cantidad').value;
        var unidad = document.getElementById('unidad').value;
        var total = document.getElementById('pedido');
        if (usuario.length == 0) {
          if (usuario2.length == 0) {
            swal('No has escrito nada ni en la población, ni en la cantidad', );
            return;
          } else {
            swal('No has escrito nada en la población', );
            return;
          }

        }

        if (usuario2.length == 0) {
          if (usuario.length == 0) {
            swal('No has escrito nada ni en la población, ni en la cantidad', );
            return;
          } else {
            swal('No has escrito nada en la cantidad', );
            return;
          }
        }

        if (pedido.length == 0) {
          swal("no se puede realizar el pedido de 0", );
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