<?php

use Carbon\Carbon;
//dd(session());


$cantidad2 = $cantidad;

if ($cantidad2 <= 200) {
  $comision = 0.03;
} else if ($cantidad2 >= 200) {
  $comision = 0.03;
} else if ($cantidad2 >= 300) {
  $comision = 0.02;
} else if ($cantidad2 >= 400) {
  $comision = 0.015;
} else if ($cantidad2 >= 500) {
  $comision = 0.01;
}

$interes = 0.341447;

if (isset($precioLitro)) {
  $precioLitro = $precioLitro;
} else {
  $precioLitro = 0;
}

$result = (($precioLitro + $comision) * ($cantidad2)) * ($interes);

$result = round($result * 100) / 100;

$meses = 3;

$diferencia = ($result * $meses) - $total;

if ($precioLitro == 0) {
  $diferencialitro = 0;
  $diferencialitro2 = 0;
} else {
  $diferencialitro = ($diferencia / $precioLitro) / $cantidad;
  $diferencialitro = round($diferencialitro * 1000) / 1000;
  $diferencialitro2 = $diferencialitro + $precioLitro;
  $diferencialitro2 = round($diferencialitro2 * 1000) / 1000;
  session()->put(['preciol' => $diferencialitro2]);
  session()->put(['totalfinan' => $result * $meses]);
}


?>
<script type="text/javascript">
  /* Funcion suma. */
  function SumarAutomatico(valor) {
    var cantidad = "<?php echo $cantidad2 ?>";
    var precioLitro = "<?php echo $precioLitro ?>";
    var comision = "<?php echo $comision ?>";
    var total = "<?php echo $total ?>";

    $comision = parseFloat(comision);
    $precioLitro = parseFloat(precioLitro);
    $cantidad = parseFloat(cantidad);
    $total = parseFloat(total);


    $valor = parseFloat(valor); // Convertir a numero decimal (número).

    switch ($valor) {
      case 0.341447:
      default:
        $meses = 3;
        break;
      case 0.256987:
        $meses = 4;
        break;
      case 0.206313:
        $meses = 5;
        break;
      case 0.172531:
        $meses = 6;
        break;
      case 0.148403:
        $meses = 7;
        break;
      case 0.130307:
        $meses = 8;
        break;
      case 0.116234:
        $meses = 9;
        break;
      case 0.104976:
        $meses = 10;
        break;
      case 0.095766:
        $meses = 11;
        break;
      case 0.088092:
        $meses = 12;
        break;
    }

    /* Variable generando la suma. */
    //$result= (($preciol+$comision)*($cantidad2))*($valor);

    $1result = $precioLitro + $comision;
    $2result = $1result * $cantidad;
    $result = $2result * $valor;
    $valor = Math.round($valor * 1000) / 1000;
    $result2 = $result;
    $result = Math.round($result * 100) / 100;
    $diferencia = (($result2 * $meses) - $total);

    $diferencia = Math.round($diferencia * 100) / 100;

    $diferencia2 = $diferencia / $precioLitro

    $diferencialitro = $diferencia2 / $cantidad;
    $diferencialitro2 = $diferencialitro + $precioLitro;

    $diferencialitro2 = Math.round($diferencialitro2 * 100) / 100;
    $totalfinan = $result2 * $meses;
    $totalfinan = Math.round($totalfinan * 100) / 100;
    // Escribir el resultado en una etiqueta "span".
    document.getElementById('result').innerHTML = $totalfinan;
    //document.getElementById('diferencia').innerHTML = $diferencia;
    //document.getElementById('diferencialitro2').innerHTML = $diferencialitro2;
    document.getElementById('valor').innerHTML = $valor;
    document.getElementById('comi').innerHTML = $comision;
  }
</script>


@extends('layouts.app')
@section('title', 'SimonGrup')
@section('content')
<div class="container">
<form class="pt-1">
  <div class="form-group">
    @csrf
    <div class="col-sm-12 pb-1 mb-bienv col-xs-12 ">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <div class="col-sm-12 border pt-2 pb-1">
            <div class="row pt-1">
              <div class="col-sm-1"></div>
              <div class="col-sm-5 text-blue col-xs-7 text-blue">
                <p>Fecha de entrega</p>
              </div>
              <div class="col-sm-5 col-xs-5">
                <p class="float-left" data-toggle="tooltip" data-placement="top" title="Día de reparto"> {{$entregadia}} {{$entregadianum}}</p>
              </div>
              <div class="col-sm-1"></div>
            </div>
            <hr class="blue">
            <div class="row pt-1">
              <div class="col-sm-1"></div>
              <div class="col-sm-5 text-blue col-xs-7 text-blue">
                <p>Días hasta entrega</p>
              </div>
              <div class="col-sm-5 col-xs-5">
                <p class="float-left">{{$diasentrega}} Días</p>
              </div>

            </div>
            <hr class="blue">
            <div class="row pt-1 mb-5">
              <div class="col-sm-1"></div>
              <div class="col-sm-5 text-blue col-xs-7 text-blue">
                <p>Población</p>
              </div>
              <div class="col-sm-5 col-xs-5">
                <p class="float-left">{{$nombrePoblacion}}</p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 pt-mov">
          <div class="col-sm-12 border">
            <div class="row pt-2 mr-3">
              <div class="col-sm-1"></div>
              <div class="col-sm-6 col-xs-7">
                <p>Precio por litro</p>
              </div>
              <div class="col-sm-4 col-xs-5 float-right" name="preciol">
                <p class="float-right total" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro">{{$precioLitro}} €</p>
              </div>
              <div class="col-sm-1"></div>
            </div>
            <div class="row mr-3">
              <div class="col-sm-1"></div>
              <div class="col-sm-6 col-xs-8">
                <p>Total</p>
              </div>
              <div class="col-sm-4 col-xs-4 float-right"><span class="float-right totalmini" id="pedido" data-toggle="tooltip" data-placement="top" title="Precio a pagar total">{{$total}} € </span></div>
              <div class="col-sm-1"></div>
            </div>
            <div class="row mb-3 pt-2 pb-2 text-center">
              <button type="submit" class="btn btnheight buttoncons xs-buttons " data-toggle="tooltip" data-placement="top" title="hacer pedido"> <a href="{{ route('pedidos.store') }}" class="btn blue no-margin " style="color:white;">Hacer Pedido</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<input type="hidden" class="row " tabindex="-1" id="foc"></input>
<div class="form-group bg-info">
  <div class="col-sm-12 col-xs-12 mb-5 pt-1 ">
    <div class="col-sm-12">
      <div class="row pt-2 border ">
        <div class="col-sm-6">
          <div class="row ">
            <div class="col-sm-12 ">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-5 text-center ">
                <img height="65em" src="images/Vivo.png">
              </div>
              <div class="col-sm-4">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11 text-center pt-1 ">
              <p class="pt-1 pr-2 lfinan2">Financia tu gasóleo calefacción con el plan dinámico de crédito Vivo.</p>
              <p class="pt-1 pr-2 lfinan">Cada cuota liquidada vuelve a estar inmediatamente a tu disposición sin necesidad de realizar nuevos trámites ni liquidar la totalidad de los plazos</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 vertical-line">
          <div class="row pt-1">
            <div class="col-sm-1"></div>
            <div class="col-sm-6 text-vivo">
              <p class="lfinan3"><small>Quiero mis cutoas financiadas a</small></p>
            </div>
            <div class="col-sm-4">
              <select name="term" onchange="SumarAutomatico(this.value);" class="form-control selectfinan" id="term">
                <option value="0.341447" selected>3 meses</option>
                <option value="0.256987">4 meses</option>
                <option value="0.206313">5 meses</option>
                <option value="0.172531">6 meses</option>
                <option value="0.148403">7 meses</option>
                <option value="0.130307">8 meses</option>
                <option value="0.116234">9 meses</option>
                <option value="0.104976">10 meses</option>
                <option value="0.095766">11 meses</option>
                <option value="0.088092">12 meses</option>
              </select>
            </div>
          </div>
          <div class="row pt-1">
          <div class="col-sm-1"></div>
            <div class="col-sm-6 col-xs-7">
              <p>Precio por litro</p>
            </div>
            <div class="col-sm-4 col-xs-5 total"><span class=" float-right" id="diferencialitro">{{$diferencialitro2}} €</span></div>
          </div>
          <div class="row pt-1">
            <div class="col-sm-1"></div>
            <div class="col-sm-6 col-xs-8">
              <p>Total</p>
            </div>
            <div class="col-sm-4 col-xs-4 "><span id="result" class="totalmini float-right">{{$result*$meses}} €</span></div>
          </div>
          <div class="row pedido text-center">
            @if (auth()->check())
            @if($total == 0)
            <button type="submit" class="btn buttonfinan mlmov-1"><a href="# " style="color:white;" id="pedbtn" disabled>Hacer pedido financiado</a></button>
            @else
            <button type="submit" class="btn buttonfinan mlmov-1"><a href="{{route('pedidofinanciado.store')}} " style="color:white;" id="pedbtn">Hacer pedido financiado</a></button>
            @endif
            @else
            <button type="submit" class="btn buttonfinan mlmov-1" disabled data-toggle="tooltip" data-placement="top" title="Es necesario loguearse o registrarse para activar esta función"><a href="{{route('pedidofinanciado.store')}} " style="color:white;" id="pedbtn">Hacer pedido financiado</a></button>
            @endif
          </div>
        </div>
        <div class="row detalles">
          <div class="row" id="jua">
            <div class="col-sm-12 col-xs-12 text-center" id="detalles2"><span class="material-icons text-vivo toggle"><b>arrow_drop_down</b></span></div>
          </div>
          <div class="row tabindex=" -1"">
            <a href="#jua" onclick="myFunction()">
              <p class="text-center toggle">Detalles</p>
            </a>
          </div>
        </div>
        <div class="showpanel text-center pt-1" id="hola">
          <div class="row">
            <span class="material-icons text-vivo toggle "><b>arrow_drop_up</b></span>
          </div>
          <div class="col-sm-12">
            <div class="row formcons bg-white">
              <div class="col-sm-6 col-xs-12">
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5 col-xs-8 text-vivo"><small>
                      <p>Comisión aplicada</p>
                    </small></div>
                  <div class="col-sm-5 col-xs-4 "><small class="float-left"><span id="comi">{{$comision}}</span> €</p></small></div>
                  <div class="col-sm-1"></div>
                </div>
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5 col-xs-8 text-vivo"><small>
                      <p>Coeficiente de cálculo para cuota mensual</p>
                    </small></div>
                  <div class="col-sm-5 col-xs-4"><small class="float-left">
                      <p name="interes"><span id="valor">{{$valor}}</span> € </p>
                    </small></div>
                  <div class="col-sm-1"></div>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10 col-xs-12">
                    <p class="peq">*coeficiente calculado en base a un tipo de interés fijo del 8'50% + TAE + la comisión de apertura.</p>
                  </div>
                  <div class="col-sm-1"></div>
                </div>
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10 col-xs-12">
                    <p class="peq">Nota: Este simulador de cuotas es meramente orientativo por lo que puede que no se ajuste con total exactitud a la cuota real y por lo tanto carece de valor contractual.</p>
                  </div>
                  <div class="col-sm-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>

  <script>
    $("p.toggle").click(function() {
      $(".showpanel").slideToggle("slow");
    });
  </script>

  <script>
    $("p.toggle").click(function() {
      $(".swipe-promo").slideToggle("slow");
    });
  </script>



  <script>
    function myFunction() {
      document.getElementById('detalles2').style.display = "none";
    }
  </script>

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
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementById("pedido").addEventListener('submit', validarFormulario);
    });

    function validarFormulario(evento) {
      evento.preventDefault();

      var pedido = document.getElementById('pedido')

      if (pedido.length == 0) {
        swal("no se puede realizar el pedido de 0", );
      }
      this.submit();
    }
  </script>

  <script type="text/javascript">
    window.onload = function() {
      document.getElementById("foc").focus();
    }
  </script>

  @endsection