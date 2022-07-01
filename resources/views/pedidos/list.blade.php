@extends('layouts.app2')
@section('title', 'SimonGrup')
@section('content')
@if ($pedidoFinanciado)
<link href="{{ asset('css/financiado.css') }}" rel="stylesheet">
@endif
<div class="col-sm-2"></div>
<div class="container-fluid border col-sm-8 col-xs-11 mt-2 mlmov-1 mb-2 pb-2">
    <div class="row pt-2 ml-2 mlmov-2">
        <div class="col-lg-11">
            <h2>Resumen del Pedido</h2>
        </div>
    </div>
    <div class="row ml-2 mlmov-3">
        <h5 class="ml-2">Datos de contacto</h5>
    </div>
    <div class="row pb-1 ml-2 mlmov-3">
        <p class="ml-2">Rellene los campos o modifique los que considere necesario.</p>
    </div>
    @if(count($errors) > 0)
    <div class="errors bg-danger text-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form id="formulario" action="{{ url('pedido') }}" method="POST">
        @csrf
        <div class="form-row ml-2 mr-2">
            <div class="col-lg-6 pb-2">
                <div class="row">
                    <div class="form-group col-lg-7">
                        <label for="Direccion">Dirección:</label>


                        @if(session()->has('address'))
                        <input type="text" class="form-control input input-financiado" id="Direccion" name="Direccion" value="{{session('address')}}">
                        @else
                        <input type="text" class="form-control input input-financiado" id="Direccion" name="Direccion" value="{{Auth::user()->address}}">
                        @endif
                    </div>
                    <div class="form-group col-lg-5">

                        <label for="tel">Teléfono contacto:</label>

                        <input type="tel" class="form-control input input-financiado" id="tel" value="{{$telefono}}" name="tel" pattern="[0-9]{9}">
                    </div>
                </div>
                <div class="row">
                    @if(isset(Auth::user()->dni))
                    <div class="form-group col-lg-4">
                        <label for="Dni">DNI / CIF:</label>
                        <input type="text" class="form-control input input-financiado" id="Dni" name="Dni" value="{{Auth::user()->dni}}" readonly="true"></input>
                    </div>
                    @else
                    @if(session()->has('dni'))

                    <div class="form-group col-lg-4">
                        <label for="Dni">DNI / CIF:</label>
                        <input type="text" class="form-control input" id="Dni" name="Dni" pattern="{9-10}" value="{{session('dni')}}"></input>
                    </div>
                    @else
                    <div class="form-group col-lg-4">
                        <label for="Dni">DNI / CIF:</label>
                        <input type="text" class="form-control input" id="Dni" name="Dni" placeholder="" pattern="{9-10}"></input>
                    </div>
                    @endif
                    @endif

                    <div class="form-group col-lg-8">
                        <label for="txtEmail">Email:</label>
                        <input type="text" class="form-control input input-financiado" id="txtEmail" name="txtEmail" value="{{$email}}" readonly="true">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <label for="observaciones">¿Tienes alguna indicación? Escríbela aquí</label>
                    <textarea class="form-control input input-financiado" id="observaciones" name="observaciones" rows="5"></textarea>
                </div>
            </div>
            <input type="hidden" class="form-control" id="txtPoblacion" value="{{ $poblacion }}" name="txtPoblacion">
        </div>

        <hr class="blue2 line-separation">
        <div class="row pt-2">
            <h5 class="ml-4">Resumen del Pedido</h5>
            <div class="col-sm-6 col-xs-12">
                <div class="row col-sm-12 pt-2 pb-1">
                    @if ($pedidoFinanciado)
                    <div class="row pt-1">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 col-xs-7 text-financiado">
                            <p>Financiado a</p>
                        </div>
                        <div class="col-sm-4 col-xs-5">
                        <p class="float-right" data-toggle="tooltip" data-placement="top" title="Messes financiación"> {{ $meses }} meses</p>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <hr class="red2">
                    @endif
                    <div class="row pt-1">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 col-xs-7 text-financiado">
                            <p>Entrega prevista</p>
                        </div>
                        <div class="col-sm-4 col-xs-5">
                            <p class="float-right" data-toggle="tooltip" data-placement="top" title="Día de reparto"> {{session('entregadia')}} {{session('entregadianum')}}</p>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <hr class="blue line-separation">
                    <div class="row pt-1">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-7 col-xs-8 text-financiado">
                            <p>Días hasta entrega</p>
                        </div>
                        <div class="col-sm-3 col-xs-4">
                            <p class="float-right">{{session('diasentrega')}} Días</p>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <hr class="blue ">
                    <div class="row pt-1 mb-5 ">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 text-financiado col-xs-8">
                            <p>Población</p>
                        </div>
                        <div class="col-sm-5 col-xs-4">
                            <p class="float-right">{{ $poblacion }}</p>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="regresar text-center pb-2">
                        <button type="submit" class="btn buttoncons button-financiado"><a href="bienvenido" style="color:white;">Volver atrás</a></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="form-row">
                    <div class="form-group col-sm-8  nopl" id="codprom">
                        @if(empty($success))
                        <small><input type="text" class="form-control inputv" id="txtPromocion" name="txtPromocion" placeholder="¿Tienes un código promocional? Introdúcelo!"></small>
                        @if(!empty($danger))<i class="fas fa-times text-danger"></i>
                        <br>
                        <div class=" col-sm-10 text-danger"> {{ $danger }}</div>
                        @endif
                        @endif
                        @if(!empty($success))
                        <div class=" col-lg-11 success alert-success"> {{ $success }}</div>
                        @endif
                    </div>
                </div>
                <div class="row col-sm-12 pb-1">
                    <div class="row ">
                        <div class="col-sm-8 col-xs-7">
                            <p>Precio por litro</p>
                        </div>
                        <div class="col-sm-4 col-xs-5" name="preciol">
                            <p class="float-right totalmini" data-toggle="tooltip" data-placement="top" title="Precio que cuesta cada litro" id="precioLitro">{{ round($precioLitro, 3) }} €</p>
                        </div>
                    </div>

                    @if(session('codigopromo') > 0)
                    <div class="row pt-1">
                        <div class="col-sm-8 col-xs-7">
                            <p>Total (IVA incl.)</p>
                        </div>
                        <div class="col-sm-4 col-xs-5 float-right text-muted"><small><span class="float-right total offer" id="pedido" data-toggle="tooltip" data-placement="top" title="Precio a pagar total">{{ round($total, 2) }} € </span></small></div>
                    </div>
                    <div class="row pb-2 pt-1">
                        <div class="col-sm-8 col-xs-7">
                            <p>Total con cupón aplicado</p>
                        </div>
                        <div class="col-sm-4 col-xs-5 "><span class="float-right total" id="result" name="result" value="€"> {{ round($precioCuponAplicado, 2) }}€</span></div>
                    </div>
                    @else
                    <div class="row pt-1 pb-3">
                        <div class="col-sm-8 col-xs-7">
                            <p>Total (IVA incl.)</p>
                        </div>
                        <div class="col-sm-4 col-xs-5 float-right "><span class="float-right total" id="result" data-toggle="tooltip" data-placement="top" title="Precio a pagar total">{{ round($total, 2)  }} € </span></small></div>
                    </div>
                    @endif

                    <div class="row mlmov-4">
                        <div class="form-check">
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-8 col-xs-12">
                                <div class="col-sm-1 col-xs-1">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="btTutorial.disabled = !this.checked">
                                </div>
                                <div class="col-sm-10 col-xs-10">
                                    <a href="condiciones" class="condiciones">
                                        <p class="form-check-label text-muted" for="exampleCheck1"><small>Acepto las condiciones de servico.<small></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 regresar mlmov-6">
                            <button type="submit" name="btTutorial" DISABLED class="btn buttoncons button-financiado" data-toggle="tooltip" data-placement="top" title="Acepta las condiciones de servicio">Validar pedido</button>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $("#txtPromocion").keydown(function() {
        $("#simon").hide();
    });
</script>
<script>
    $("#simon").keydown(function() {
        $("#codprom").hide();
    });
</script>

<script type="text/javascript">
    window.onload = function() {
        document.getElementById("txtPromocion").focus();
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="submit"]').attr('disabled', 'disabled');
        $('input[type="text"]').keypress(function() {
            if ($(this).val() != '') {
                $('input[type="submit"]').removeAttr('disabled');
            }
        });
    });
</script>

@endsection