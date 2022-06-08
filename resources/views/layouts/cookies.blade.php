<?php

// Si han aceptado la política
if(isset($_REQUEST['politica-cookies'])) {
    $caducidad = time() + (60 * 60 * 24 * 365);
    setcookie('politica', '1', $caducidad);
}
 if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
    <head>
    <link rel="canonical"href="https://www.gasoleodecalefaccion.com/info" />
</head>
    <div class="row cookies ocultar-div oclutar-div-tab navfont">
        <div class="row">
            <div class="col-sm-8 col-xs-12">¿Aceptas nuestra <a href="info" style="color: white;text-decoration:underline;">política de Cookies</a>? Si continúas navegando entendemos que aceptas nuestras cookies.</div>
            <div class="col-sm-4 col-xs-12">
                <button type="button" class="btn buttoncookies">
                    <a href="?politica-cookies=1" >Aceptar</a>
                </button>
                <!--<button type="button" class="btn btn-danger">
                            <a href="https://www.google.com" style="color: white;">Declinar</a>
                        </button>-->
            </div>
        </div>
    </div>
    
    <div class="row cookies-mov ocultar-div-desk ocultar-div-tab navfont">
        <div class="row">
            <div class="row">
                <div class="col-xs-8">
                    <p class="mlmov-6">¿Aceptas nuestra <a href="info" style="color: white;text-decoration:underline;">política de Cookies</a>?</p>
                    <p class="mlmov-2">Si continúas navegando entendemos que aceptas nuestras cookies.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 text-center">
                    <button type="button" class="btn buttoncookies-mov">
                        <a href="?politica-cookies=1" >Aceptar</a>
                    </button>
                    <!--<button type="button" class="btn btn-danger">
                                <a href="https://www.google.com" style="color: white;">Declinar</a>
                            </button>-->
                </div>
            </div>
        </div>
    </div>
    
    <div class="row cookies ocultar-div oclutar-div-desk navfont">
        <div class="row">
            <div class="col-sm-6">¿Aceptas nuestra <a href="info" style="color: white;text-decoration:underline;">política de Cookies</a>? Si continúas navegando entendemos que aceptas nuestras cookies.</div>
            <div class="col-sm-2">
                <button type="button" class="btn buttoncookies">
                    <a href="?politica-cookies=1" >Aceptar</a>
                </button>
                <!--<button type="button" class="btn btn-danger">
                            <a href="https://www.google.com" style="color: white;">Declinar</a>
                        </button>-->
            </div>
        </div>
    </div>
<?php endif; ?>
