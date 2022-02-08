@extends('layouts.appfaq2')
@section('title', 'SimonGrup')
@section('content')
            @include('layouts.headerlogin')
<div class="container pt-2 pb-13">
    <div class="row">
        <div class="col-sm-10 col-xs-12 ml-9 margin-left-register">
            <div class="card text-center border">
                <div class="titulo-registro card-header text-white bg-login">Registro</div>

                <div class="card-body pt-2">
                    <form class="form-horizontal" method="POST" action='{{ url("register") }}' aria-label="{{ __('Register') }}">
                    
                        {{ csrf_field() }}

                        <div class="form-row">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                                <div class="col-sm-2"></div>
                                <label for="name" class=" control-label">Nombre</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control input" name="name" value="{{ old('name') }}" placeholder="Introduce Nombre" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                <div class="col-sm-2"></div>
                                <label for="email" class="col-md-8 control-label">Dirección E-Mail</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control input" name="email" value="{{ old('email') }}" placeholder="Introduce email" required>

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
                                <label for="password" class=" control-label">Contraseña</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control input" name="password" placeholder="Introduce contraseña" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password-confirm" class="col-md-10 control-label">Confirma Contraseña</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" placeholder="Confirma contraseña" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4 pb-1">
                                <button type="submit" class="btn btn-primary">
                                    Registro
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts/cookies')
@endsection
