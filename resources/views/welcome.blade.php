
@extends('layouts.appsin')
@section('title', 'SimonGrup')

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
<script type='text/javascript'>
  
var url = window.location.href;


/// Elementos de li
var tabs = ["precios","unclick","welcome", /*"simon",*/ "financiacion", "quienessomos", "faq", "promociones", "contacto"];

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
 