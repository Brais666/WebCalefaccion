
@extends('layouts.appfaq2')
@section('title', 'SimonGrup')
@section('content')
            @include('layouts.headerlogin')
<div class="padding-top-general container pt-11">
    <div class="row">
        <div class="col-sm-10 col-xs-12 ml-6 margin-left-register">
            <div class="card text-center border">
                <div class="titulo-registro card-header text-white bg-login"><h1 style="font-size:18px;">Registro</div></h1>

                <div class="card-body pt-2">
                    <form class="form-horizontal" method="POST" action='{{ url("register") }}' aria-label="{{ __('Register') }}">
                        @csrf
                        {{ csrf_field() }}

                        <div class="form-row">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                                <div class="col-sm-2"></div>
                                <label for="name" class="col-sm-6 margin-centrar">Nombre</label>

                                <div class="col-sm-8">
                                    <input id="name" type="text" class="form-control col-sm-12 ml-11 margin-login" name="name" value="{{ old('name') }}" placeholder="Introduce Nombre" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                <div class="col-sm-2"></div>
                                <label for="email" class="col-sm-6 margin-centrar">Dirección E-Mail</label>

                                <div class="col-sm-8">
                                    <input id="email" type="email" class="form-control col-sm-12 ml-11 margin-login" name="email" value="{{ old('email') }}" placeholder="Introduce email" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>                      
                        <div class="form-row">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-sm-6 margin-centrar">Contraseña</label>

                                <div class="col-sm-8">
                                    <input id="password" type="password" class="form-control col-sm-12 ml-11 margin-login" name="password" placeholder="Introduce contraseña" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password-confirm" class="col-sm-6 margin-centrar">Confirma Contraseña</label>

                                <div class="col-sm-8">
                                    <input id="password-confirm" type="password" class="form-control col-sm-12 ml-11 margin-login" name="password_confirmation" placeholder="Confirma contraseña" required>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 g-recaptcha pb-1" data-sitekey="6LdtL4gfAAAAAKpmljKE0dWq4NaOmAJVC5rPeHMm"></div>
                            <div class="col-sm-4"></div>
                        </div>
                            
                        

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4 flex-columnas width-btn">
                                <button type="submit" class="btn btn-primary">
                                    Registrarme
                                </button>
                                
                            </div>

                             
                        </div>
                        <p class="pt-1"></p> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts/cookies')

@endsection
