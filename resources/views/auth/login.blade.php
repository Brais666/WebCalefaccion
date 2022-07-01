@extends('../layouts.appfaq2')
@section('title', 'Registro de cuenta en Simon Grup gasóleo de calefacción')
@section('content')
            @include('layouts.headerlogin')
<div class="padding-top-general container pt-2 login-caja2">
    <div class="row">
        <a href="prueba">Prueba</a>
        <div class="col-sm-10 col-xs-12 ml-6 margin-left-register">
            <div class="card text-center border">
                <div class="titulo-registro card-header bg-login">Te damos la bienvenida</div>
                <div class="card-body pt-2">
                        @isset($url)
                        <form class="form-horizontal" method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                        @else
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @endisset
                        {{ csrf_field() }}

                        <div class="flex-columnas form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-sm-1"></div>
                            <label for="email" class="col-sm-6 margin-centrar">Dirección E-Mail</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <input id="email" type="email" class="form-control col-sm-12 ml-11 margin-login" name="email" aria-describedby="emailHelp" placeholder="Introduce email" value="{{ old('email') }}" required autofocus>
                                <small id="emailHelp" style="padding-left: 5%; padding-top:2%; " class="form-text text-success">Nunca entregamos tus datos a nadie.</small>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-sm-1"></div>
                            <label for="password" class="col-md-6 margin-centrar">Contraseña</label>

                            <div class="col-sm-8">
                                <input id="password" type="password" class="form-control col-sm-12 ml-11 margin-login " name="password" placeholder="Introduce contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group " autofocus>
                            <div class="col-md-4 col-md-offset-4 flex-columnas width-btn">
                                <button type="submit" class="btn btn-primary" autofocus>
                                    Iniciar sesión
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <small class="text-muted">¿Olvidaste tu contraseña?</small>
                                </a>
                            </div>
                        </div>
                    </form>
                    <hr class="blue ">
                    
                <div class="titulo-registro card-header bg-login2">Soy nuevo/a</div>
                
                    <p class="pt-1"></p> 
                    <p><button type="text" style="outline-style: solid; outline-width: 2px; outline-color: #0075c9; background-color: #fff;" class="btn btn-secondary"><a href="{{ route('register') }}">Regístrate</a></button></p>
                </div>
                
                                    <p class="pt-1"></p> 
            </div>          
        </div>
    </div>
</div>
  
@include('layouts/cookies')
@endsection
