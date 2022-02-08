<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-SimonGrup</title>
    <!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-----------------BootstrapCDN------------------------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- CSS-->
    <link rel="stylesheet" href="../css/estilos.css" />
     <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="login">
        <div class="container">
            <div class="card text-center">
                <div class="card-body">
                   <!-- {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}-->
                    <!--@if(Session::has('mensaje_error')) -->
                        <div class="alert alert-danger"><!--{{ Session::get('mensaje_error') }}--></div>
                   <!-- @endif
                    {{ Form::open(array('url' => '/login')) }}-->
                        <legend>Iniciar sesión</legend>
                        <div class="form-group">
                            <!--{{ Form::label('usuario', 'Nombre de usuario') }}
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}-->
                        </div>
                          <div class="form-group{{ $errors->has('login')?'has-error' : '' }}">
                            <label for="login" class="col-md-4 control-label">E-Mail o Usuario</label>
                                <div class="col-md-6">
                                    <input id="login" type="login" class="form-control" name="login" value="{{ old('login') }}" required autofocus placeholder="Introduce tu E-Mail o Nombre de Usuario">
                                    @if ($errors->has('login'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                Recordar contraseña
                                <!--{{ Form::checkbox('rememberme', true) }}-->
                            </label>
                        </div>
                        <!--{{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}-->
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        <!--{{ HTML::script('js/bootstrap.js'); }}-->
    </body>
</html>