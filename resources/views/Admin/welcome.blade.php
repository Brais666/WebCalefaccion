
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
    <!-- Styles -->
        <style>
            html, body {
                background-image: url('images/fondo.jpg');
                color: #fff;
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
                font-size: 5rem;
            }

            .links > a {
                color: #fff;
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

            .cookies{
             position: fixed;
             bottom: 0px;
             left: 0px;
             width: 100%;
             background-color: black;
             box-shadow: 0px -5px 15px gray;
             padding: 7px;
             text-align: center;
             z-index: 99;
             color: white;
            }
            a{
                color: white;
            }
        </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/bienvenido') }}">Welcome</a>
                    @else
                        <a href="{{ route('loginAdmin') }}">Login</a>
                        <!--<a href="{{ route('register') }}">Registrarse</a>-->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Simon Grup
                </div>
                <div class="links">
                    <h5>Panel de Administración</h5>
                </div>
            </div>
        </div>
        @include('layouts/cookies')
 </body>
</html>
