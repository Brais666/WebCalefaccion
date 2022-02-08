<?php

// Si han aceptado la política
if(isset($_REQUEST['politica-cookies'])) {
    // Calculamos la caducidad, en este caso un año
    $caducidad = time() + (60 * 60 * 24 * 365);
    // Crea una cookie con la caducidad
    setcookie('politica', '1', $caducidad);
}

?>
    <div>
        <?php if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
            <!-- Mensaje de cookies -->
            <div class="row cookies">
                <div class="col-sm-4">¿Aceptas nuestra maligna <a href="/info">política de Cookies</a>?</div>
                <div class="col-sm-4"><button type="button" class="btn btn-primary"><a href="?politica-cookies=1">Aceptar</a></button></div><p>
                </p>
            </div>
        <?php endif; ?>
    </div>
