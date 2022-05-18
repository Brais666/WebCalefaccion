@extends('layouts.appreset')
@section('title', 'Iniciar sesi&oacute;n en Simon Grup gasóleo de calefacción')
@section('content')
           
<div class="padding-top-general container pt-2">
    <div class="row">
       
        <div class="col-sm-10 col-xs-12 ml-6 margin-left-register">
            
            <div class="card text-center border">
                <div class="titulo-registro card-header text-white bg-login"><h1 style="font-size:18px;">Modifica tu contrase&ntilde;a</h1>
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form class="form-horizontal card-body pt-2" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <label for="email" class="col-sm-6 margin-centrar">Direcci贸n E-Mail</label>
                                <h2 class="text-muted" style="font-size:14px;" >Indica tu correo electr&oacute;nico y te enviaremos un enlace para que puedas cambiarla.</h2>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control col-sm-12 ml-11 margin-login" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4 flex-columnas width-btn">
                                <button type="submit" class="btn btn-primary">
                                    Enviar link
                                </button>
                            </div>
                        </div>

                        <a href="{{ url()->previous() }}" class="">Regresar</a>

                        <p class="pt-1"></p>

                    </form>
                </div>

                

            </div>
        </div>
    </div>
</div>



<p class="pt-11"></p>



@endsection
