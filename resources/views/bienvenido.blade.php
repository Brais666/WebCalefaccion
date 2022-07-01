<script type="text/javascript">
  function SumarAutomatico(valor) {
    const precioLitro = parseFloat(<?php echo json_encode($precioLitro); ?>);
    const comision = parseFloat(<?php echo json_encode($comision); ?>);
    const cantidad = parseFloat(<?php echo json_encode($cantidad); ?>);

    const valorFloat = parseFloat(valor);

    const financiacion = calcularFinanciacion(precioLitro, comision, cantidad, valorFloat);

    document.getElementById('result').innerHTML = financiacion.total.toFixed(2);
    document.getElementById('diferencialitro').innerHTML = financiacion.precioLitroFinaciado.toFixed(2);
    document.getElementById('comi').innerHTML = comision;
    document.getElementById('valor').innerHTML = financiacion.intereses.toFixed(6);

    // This should be clean up
    const urlLink = document.getElementById('pedbtn').href.split('&meses=');
    const newUrlLink = `${urlLink[0]}&meses=${valor}`;
    document.getElementById('pedbtn').href = newUrlLink;
  }
</script>
<script src="{{ asset('js/financiacion.js')}}"></script>
 
 <!--quitar y poner en el controllerRuta-->
<?php
   if(session()->has('provincia'))
    {
        $prov = session('provincia');
       
    }
?>
<!-- end -->

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
                  <p>Entrega prevista</p>
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
                @if(($prov == "Guadalajara") || ($prov == "Madrid"))
                  <div class="col-sm-6 col-xs-7"><p>Precio por litro<span class="text-blue text-muted">*</span></p></div>
                @else
                  <div class="col-sm-6 col-xs-7"><p>Precio por litro</p></div>
                @endif
                <div class="col-sm-4 col-xs-5 float-right" name="preciol">
                  <p class="float-right total" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro">{{ $precioLitro }} €</p>
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
                @if (auth()->check())
                    <button type="submit" class="btn btnheight buttoncons xs-buttons " data-toggle="tooltip" data-placement="top" title="hacer pedido"> <a href="{{ url('pedido') }}" class="btn blue no-margin " style="color:white;">Hacer Pedido</a></button>
                @else
                    <button type="submit" class="btn btnheight buttoncons xs-buttons " data-toggle="tooltip" data-placement="top" title="hacer pedido" > <a href="{{ url('/login?redirect_to='.url()->full())}}" class="btn blue no-margin " style="color:white;">Hacer Pedido</a></button>
                @endif
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
                  <option value=3 selected>3 meses</option>
                  <option value=4>4 meses</option>
                  <option value=5>5 meses</option>
                  <option value=6>6 meses</option>
                  <option value=7>7 meses</option>
                  <option value=8>8 meses</option>
                  <option value=9>9 meses</option>
                  <option value=10>10 meses</option>
                  <option value=11>11 meses</option>
                  <option value=12>12 meses</option>
                </select>
              </div>
            </div>
            <div class="row pt-1">
              <div class="col-sm-1"></div>
              <div class="col-sm-6 col-xs-7">
                <p>Precio por litro</p>
              </div>
              <div class="col-sm-4 col-xs-5 total"><span class=" float-right" id="diferencialitro" >{{$diferencialitro2}} €</span></div>
            </div>
            <div class="row pt-1">
              <div class="col-sm-1"></div>
              <div class="col-sm-6 col-xs-8">
                <p>Total</p>
              </div>
              <div class="col-sm-4 col-xs-4 "><span id="result" class="totalmini float-right">{{ $total }} €</span></div>
            </div>
            <div class="row pedido text-center">
              @if (auth()->check())
              <button type="submit" class="btn buttonfinan mlmov-1"><a href="{{ url('pedido?financiado=true&meses=3')}} " style="color:white;" id="pedbtn">Hacer pedido financiado</a></button>
              @else
              <button type="submit" class="btn buttonfinan mlmov-1" disabled data-toggle="tooltip" data-placement="top" title="Es necesario loguearse o registrarse para activar esta función"><a href="{{ url('/login?redirect_to='.url()->current())}}" style="color:white;" id="pedbtn">Hacer pedido financiado</a></button>
              @endif
            </div>
          </div>
          <div class="row detalles">
            <div class="row" id="jua">
              <div class="col-sm-12 col-xs-12 text-center" id="detalles2"><span class="material-icons text-vivo toggle"><b>arrow_drop_down</b></span></div>
            </div>
            <div class="row" tabindex=" -1">
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
                    <div class="col-sm-5 col-xs-4 "><small class="float-left"><span id="comi">{{ $comision }}</span> €</p></small></div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5 col-xs-8 text-vivo"><small>
                        <p>Coeficiente de cálculo para cuota mensual</p>
                      </small></div>
                    <div class="col-sm-5 col-xs-4"><small class="float-left">
                        <p name="interes"><span id="valor">{{$valor}}</span></p>
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