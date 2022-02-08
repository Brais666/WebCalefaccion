<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
	<section class="container">	
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		            <div class="card text-center">
		                <div class="card-header">Login</div>
						<div class="card-body">
		                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
		                        {{ csrf_field() }}
		                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
		                            <div class="col-md-6">
		                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
		                                @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                            <label for="password" class="col-md-4 control-label">Password</label>
		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control" name="password" required>

		                                @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
		                                    </label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-8 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    Login
		                                </button>
		                                <a class="btn btn-link" href="{{ route('password.request') }}">
		                                    Forgot Your Password?
		                                </a>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
    		</div>
	 </section>
 </body>
</html>
