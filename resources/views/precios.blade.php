
@extends('layouts.appsin')
@section('title', 'SimonGrup')
@section('content')
            @include('layouts.headerlogin')
        
        <br>
  
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
  if(usuario.length == 0) {
    if(usuario2.length == 0) {
    swal('No has escrito nada ni en la poblaci贸n, ni en la cantidad',);
    return;
  }
  else
  {
    swal('No has escrito nada en la poblaci贸n',);
    return;
  }
    
  }
  if(usuario2.length == 0) {
     if(usuario.length == 0) {
      swal('No has escrito nada ni en la poblaci贸n, ni en la cantidad',);
      return;
    }
    else
    {
      swal('No has escrito nada en la cantidad',);
      return;
    }
  }
  
  this.submit();
}
</script>
 