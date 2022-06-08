<?php
use App\Oferta;
$ofertas = Oferta::all();   
?>

@extends('layouts.apppromo')
@section('title', 'Promociones en gasóleo de calefacción')
@section('content')
<div class="row position-relative pt-20 pb-3">
    <div class="imagen-responsive responsive promo-img pb-2">
    <section id="#noparallax" class="promoimg">
        
        <img src="images/fondo.png" id="fondo" alt="banner promociones">
        <img src="images/nubefondo2.png" id="nubefondo2" alt="">
        <img src="images/montanas-fondo.png" id="montanas0" alt="">
        
        <img src="images/rrss.png" id="rrss" alt="">
        <img src="images/nube2.png" id="nube2" alt="">
        <img src="images/mobil.png" id="mobil" alt="">
        <img src="images/1.png" id="parallax1" alt="">
        <img src="images/nubesprimer2.png" id="nubeprimer2" alt="">
         
        <img src="images/3.png" id="parallax3" alt="">
        <img src="images/Estrellas.png" id="estrellas" alt="">

        <img src="images/monedas.png" id="monedas" alt="">
        <img src="images/nube1.png" id="nube1" alt="">
        
        <img src="images/camion.png" id="camion" alt="">
        <img src="images/web.png" id="web" alt="">
        <img src="images/nubenieve.png" id="nubenieve" alt="">

        <img src="images/nubefondo.png" id="nubefondo" alt="">
       

        <img src="images/nubesprimer.png" id="nubeprimer" alt="">
        
    </section>
</div>
</div>
<div class="row position-relative">
    <div class="caja1">
    <div class="row bg-promo">
    <div class="row text-center">
        <div class="col-xs-mobil"></div>
        <div class="">
            <h1>Estar tan cerca nunca te ha llevado tan lejos</h1>
            <div class="row text-center">
               <h3 class="titular-time">Este invierno descubre todo lo que hemos preparado para ti en gasoil calefacci&oacute;n.</h3> 
               
                <div class="timeline row"><img src="images/timeline2.png" class="timeline-mobil" alt="camion a domicilio"></div>
                
                <h3 class="line-time titular-time">S&iacute;guenos hasta el final por estos 8 eventos, y juntos descubriremos nuevas promociones, m&aacute;s ofertas y un servicio lleno de novedades.</h3> 
            </div>
        
            
        </div>
        <div class="col-xs-2"></div>
        
    </div>
    
</div>
</div>

<!--<div class="time-absolute"><img src="images/timeline2.png"></div>-->


<div class="centrar-columnes row pt-5 padding-promo">
    <div class="col-md-2"></div>
    <div class="margin-top color-text bg-caja col-md-8 width-tablet">
        <div class="col-md-5">
            <img src="images/mockup-baja.jpg" class="promo-img2" alt="venta online">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 margin1">
            <div class="width-texto card ml">
              <div class="card-body">
                <h1 class="titulo card-title">&#161;Inauguramos nuestra nueva Web!</h1>
                
                <h2 style="font-size:24px;" class="line-titular card-text">Es el gran momento de presentarte nuestra nueva Web de Simon Grup Gas&oacute;leo de Calefacci&oacute;n.
                </h2>
            
                
              </div>
             
                
            </div>
            
          
            
            
            
        </div>
        

    
    <div class="columnas-texto separador fondo-swipe color-texto ">


                <div class="width-columnas bloque-separador"><div class="swipe-promo1">
                <div class=""></div>
                    
                <h3 class="margen block"></h3>
                
                <h2 style="font-size:24px;" class="line-titular-texto block">Actualizamos nuestra plataforma con un nuevo dise&ntilde;o y muchas funcionalidades.</h2>
                
                 <div class="linea-verde"></div>
                
                
                <h3 style="font-size:1.5rem;" class="line">Descubre todas nuestras novedades en un entorno atractivo, funcional y adaptado a todos los dispositivos m&oacute;viles. Ahora te ser&aacute; mucho m&aacute;s f&aacute;cil hacer tu 
                <a class="subrallado" HREF="precios">pedido de gas&oacute;leo de calefacci&oacute;n</a>
                desde tu smartphone o tablet. &#161;Podr&aacute;s llevarnos a donde quieras!</h3>
                

                <div class="">
                    
                <img src="images/video-azul.gif" loop=infinite class="img-texto">
                </div>
                
                 <div class="ocultar-mobile"><h3 class="line-titular-texto block">Area privada de cliente</h3>
                 
                 <div class="linea-verde"></div>
                 
                <h3 style="font-size:1.5rem;" class="line">Ahora tambi&eacute;n tienes disponible tu 
                
                <a class="subrallado" HREF="cuenta">&aacute;rea privada de cliente</a>
                para que puedas controlar todos tus pedidos que has ido realizando con nosotros.</h3>
                </div>
                
                <h3 class="margen block  ocultar-mobile"></h3>
                
                </div>   
                </div>
                
            <div class="width-columnas rrr"><div class="swipe-promo1">
                <div class="">
                    
                <h3 class="margen block ocultar-mobile"></h3>
                    
                <img src="images/video-vivo-azul.gif" loop=infinite class="img-texto ocultar-mobile" alt="video vivo mobil">
                </div>
                <h2 style="font-size:24px;" class="line-titular-texto block"> Tus pedidos de gas&oacute;leo de calefacci&oacute;n m&aacute;s r&aacute;pidos y c&oacute;modos.</h2>
                <div class="linea-verde"></div>
                
                
                <h3 style="font-size:1.5rem;" class="line">Un espacio donde podr&aacute;s consultar el mejor precio del Gas&oacute;leo de Calefacci&oacute;n de tu d&iacute;a verde y su disponibilidad en tu zona. Y si quieres financiar tu pedido, tienes disponible nuestro mejor plan din&aacute;mico de cr&eacute;dito
                
                <a class="subrallado" HREF="financiacion">Vivo</a>.</h3>
                
                
                
                
                
                <img src="images/video-vivo-azul.gif" loop=infinite class="img-texto ocultar-desktop" alt="video vivo">
                
                <div class="ocultar-desktop"><h2 style="font-size:24px;" class="line-titular-texto block">Area privada de cliente</h2>
                 
                 <div class="linea-verde"></div>
                 
                <h3 style="font-size:1.5rem;"class="line">Ahora tambi&eacute;n tienes disponible tu 
                
                <a class="subrallado" HREF="cuenta">&aacute;rea privada de cliente</a>
                para que puedas controlar todos tus pedidos que has ido realizando con nosotros.</h3>
                </div>
                
                
                
                <h3 class="margen block"></h3>
                
                </div>   
            </div>
                
            </div>
            
            
<!---pedir gasoleo!-->
            
    <div class="pedir-gasoleo  separador fondo-gasoleo color-texto ">


        <div class="pedir-gasoleo swipe-promo1">
            
                    
                
            
                
            <div class="flex-pedido-general">
                
                <div class="flex-pedido">
                    
                    
                <div style="line-height: 1.1;">
                    <h3 class="text-size">&#191;Necesitas gasoil?</h3>
                
                    <h4 class="text-size2 quitar-margin">Haz tu pedido online ahora</h4>
                    
                    </div>
                
                </div>
                
                <a class="alinear-boton-compra" target="_blank"  rel="noopener noreferrer" onclick="myFunction()"  href="precios"><p class="toggle-compra click-me btn-compra" id=" leermenos1">Pedir gas&oacute;leo de calefac&oacute;n</p></a> 
                
                </div>
                
                
    
                
                
            </div>
                
            </div>
    
        

            <div class="swipe-promo1">
                        
            </div>
        </div>
        
                   
      
                
                
    <div class="col-md-2"></div>
               <a class="alinear-boton boton-derecha" href="#jua" onclick="myFunction()" ><p class="click-me toggle-promo1 btn" id="leermenos1">Leer</p></a>     
</div>




<div class="centrar-columnes row pt-5 padding-promo ocultar-div ocultar-div-tab">
    <div class="col-md-2"></div>
    <div class="margin-top color-text bg-caja col-md-8 width-tablet">
        <div class="col-md-5 margin">
        <div class="card">
              <div class="width-texto card-body">
                <h1 class="titulo card-title">&#191;Nos seguimos?</</h1>
               <h2 style="font-size:24px;" class="line-titular card-text">&#161;An&iacute;mate a seguirnos y no te pierdas todas las novedades que te hemos preparado!</h2>
               
                
                
                
              </div>
            </div>
        </div>
        
        
        <div class="col-md-5">
             
            <img src="images/RRSS-baja2.jpg" class="promo-img2 margen-img" alt="redes sociales">
        </div>
        <div class="col-md-2"></div>
   
    
    <div class="separador columnas-texto  fondo-swipe color-texto">

                <div class="width-columnas"><div class="swipe-promo2">
                    
                <h3 class="margen block"></h3>
                
                <h2 style="font-size:24px;"  class="line-titular-texto block">Ponte al d&iacute;a con nuestras redes</h2>
                
                <div class="linea-verde"></div>
                
                <h3 style="font-size:1.5rem" class="line">Simon Grup crece y evoluciona, por esto a partir de ahora vamos a compartir nuestros proyectos y actividades tambi&eacute;n a trav&eacute;s de nuestros canales en 
                 
                <a class="subrallado" target="_blank" rel="noopener noreferrer" HREF="https://www.facebook.com/simongruptrade/">Facebook</a>, 
                 <a class="subrallado" target="_blank" rel="noopener noreferrer" HREF="https://www.instagram.com/simongruptrade/">Instagram</a> y 
                 <a class="subrallado" target="_blank" rel="noopener noreferrer" HREF="https://www.linkedin.com/company/simon-grup/">LinkedIn</a>. Ponte al d&iacute;a a trav&eacute;s de nuestras redes y descubre el mundo Simon Grup.</h3>
                
                
                
                <div class="">
                    
                <img src="images/RRSS3.jpg" class="img-texto">
                </div>
                <h3 class="margen block"></h3>
                
                </div>   
                </div>
                
            <div class="width-columnas"><div class="swipe-promo2">
                <div class="">
                    
                <h3 class="margen block"></h3>
                    
                <video autoplay muted loop src="images/Video1.mp4" class="img-texto"></video>
                </div>
                <h2 style="font-size:24px;" class="line-titular block">Promociones, sorteos y muchas sorpresas</h2>
                
                <div class="linea-verde"></div>
               
                
                <h3 style="font-size:1.5rem;" class="line">Para nuestros clientes m&aacute;s fieles hemos preparado muchas novedades y sorpresas. S&iacute;guenos en nuestras redes y podr&aacute;s beneficiarte de promociones especiales, sorteos y muchas novedades. </h3>
                </div>   
            </div>
                
            </div>
            
            
<!---pedir gasoleo!-->

    <div class="pedir-gasoleo  separador fondo-gasoleo color-texto ">


        <div class="pedir-gasoleo swipe-promo2">
            
                
            <div class="flex-pedido-general">
                
                <div class="flex-pedido">
                    
                    
                <div style="line-height: 1.1;">
                    <h3 class="text-size">&#191;Necesitas gasoil?</h3>
                
                    <h4 class="text-size2 quitar-margin">Haz tu pedido online ahora</h4>
                    
                    </div>
                
                </div>
                
                <a class="alinear-boton-compra" target="_blank"  rel="noopener noreferrer" onclick="myFunction()"  href="precios"><p class="toggle-compra click-me btn-compra" id=" leermenos1">Pedir gas&oacute;leo de calefac&oacute;n</p></a> 
                
                </div>
                
                

            </div>
                
            </div>
            
           

            <div class="swipe-promo1">
                        
            </div>
        </div>
         
                
    <div class="col-md-2"></div>
               <a class="alinear-boton boton-derecha" href="#jua" onclick="myFunction()" ><p class="click-me toggle-promo2 btn" id="leermenos2">Leer</p></a>  
               
               
</div>


<!--Bloque Mobile rrss-->


<div class="centrar-columnes row pt-5 padding-promo ocultar-div-desk">
    <div class="col-md-2"></div>
    <div class="margin-top color-text bg-caja col-md-8 width-tablet">
        <div class="col-md-5">
            <img src="images/RRSS-baja2.jpg" class="promo-img2">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 margin">
            <div class="width-texto card ml">
              <div class="card-body">
                <h1 class="titulo card-title">&#191;Nos seguimos?</h1>
                
                <h2 style="font-size:24px;" class="line-titular card-text">&#161;An&iacute;mate a seguirnos y no te pierdas todas las novedades que te hemos preparado!
                </h2>
                
                
        
                
              </div>
            </div>
        </div>
        

    
    <div class="columnas-texto  fondo-swipe color-texto">

                <div class="width-columnas"><div class="swipe-promo3">
                    
                <h3 class="margen block"></h3>
                
                <h2 style="font-size:24px;" class="line-titular-texto block">Ponte al d&iacute;a con nuestras redes</h2>
                
                <div class="linea-verde"></div>
                
                <h3 style="font-size:1.5rem;" class="line">Simon Grup crece y evoluciona, por esto a partir de ahora vamos a compartir nuestros proyectos y actividades tambi&eacute;n a trav&eacute;s de nuestros canales en 
                 
                <a class="subrallado" target="_blank" rel="noopener noreferrer" HREF="https://www.facebook.com/simongruptrade/">Facebook</a>, 
                 <a class="subrallado" target="_blank" rel="noopener noreferrer" HREF="https://www.instagram.com/simongruptrade/">Instagram</a> y 
                 <a class="subrallado" target="_blank" rel="noopener noreferrer" HREF="https://www.linkedin.com/company/simon-grup/">LinkedIn</a>. Ponte al d&iacute;a a trav&eacute;s de nuestras redes y descubre el mundo Simon Grup.</h3>
                
               
                
                <div class="">
                    
                <img src="images/RRSS3.jpg" class="img-texto">
                </div>
                
                
                </div>   
                </div>
                
            <div class="width-columnas"><div class="swipe-promo3">
                <div class="">
                    

                   
                <img src="images/RRSSBAJA.gif" loop=infinite class="img-texto ocultar-mobile">
                </div>
                
                <h2 style="font-size:24px;" class="line-titular-texto block">Promociones, sorteos y muchas sorpresas</h2>
                
                <div class="linea-verde"></div>
                
                <h3 style="font-size:1.5rem;" class="line">Para nuestros clientes m&aacute;s fieles hemos preparado muchas novedades y sorpresas. S&iacute;guenos en nuestras redes y podr&aacute;s beneficiarte de promociones especiales, sorteos y muchas novedades. </h3>
                
                <video autoplay muted loop playsinline src="images/Video1.mp4" class="img-texto"></video>
                
                <h3 class="margen block"></h3>
                
                </div>   
            </div>
                
            </div>
            
            
            

<!---pedir gasoleo!-->

        <div class="pedir-gasoleo  separador fondo-gasoleo color-texto ">


        <div class="pedir-gasoleo swipe-promo3">
            
                
            <div class="flex-pedido-general">
                
                <div class="flex-pedido">
                    
                    
                <div style="line-height: 1.1;">
                    <h3 class="text-size">&#191;Necesitas gasoil?</h3>
                
                    <h4 class="text-size2 quitar-margin">Haz tu pedido online ahora</h4>
                    
                    </div>
                
                </div>
                
                <a class="alinear-boton-compra" target="_blank"  rel="noopener noreferrer" onclick="myFunction()"  href="precios"><p class="toggle-compra click-me btn-compra" id=" leermenos1">Pedir gas&oacute;leo de calefac&oacute;n</p></a> 
                
                </div>
                
                

            </div>
                
            </div>
                
           
           

            
        </div>
      
                
                
    <div class="col-md-2"></div>
                <a class="alinear-boton boton-derecha" href="#jua" onclick="myFunction()" ><p class="click-me toggle-promo3 btn" id="leermenos3">Leer</p></a>       
</div>


<!--<div class="newsletter" id="newsletter" style="visibility: visible; opacity: 1;">
    <h3>Suscr&iacute;bete a nuestra Nesletter</h3>
    <div class="text-newsletter">Si te gusta el contenido que subo y no quieres perderte nada, s¨ªgueme en <strong>Twitter</strong> y te avisar¨¦ cada vez que cree contenido nuevo 9Ú4
    </div>
    <div class="buttons-newsletter">
        <a href="#" id="close_suscribe" onclick="closeWindow(event, '1')">Luego</a>
        <a href="https://twitter.com/alberrc87" target="_blank" id="suscribe" onclick="closeWindow(event, '0')">03Te sigo!</a>
    </div>
</div>!-->

<!--<button type="submit" class="btn button-sus buttoncookies-mov" HREF="http://eepurl.com/hR_KRT">Suscribirme
                       </button>    
                       
<a href="javascript:ventanaSecundaria('http://eepurl.com/hR_KRT')"> Pincha en este enlace para abrir la ventana secundaria</a>!-->


<!--<div class="centrar-columnes row pt-5 padding-promo">
    <div id="bloque-sus">
<div class="bg-suscribete">
    <div class="text-center padding-sus">
       <h1>Suscribirme a la Newsletter</h1> 
    </div>
    <div class="text-center">
        <div class=""></div>
        <div class="ancho-sus-text">
            <h4 class="line-sus">Suscr&iacute;bete a nuestra Newsletter y recibe promociones &uacute;nicas para tus pedidos en gas&oacute;leo de calefacci&oacute;n.</h4>
        </div>
        
        <a class="alinear-boton boton-derecha" href="#jua" onclick="myFunction()" ><p class=" toggle-sus btn" id="leermenos1">Suscribirme</p></a>     
        <div class="col-xs-2"></div>
    </div>
</div>
</div>
            
          
            
            
            
        </div>!-->
        

    
   <!-- <div class=" columnas-texto color-texto ">


                <div class="width-sus bloque-separador "><div class="swipe-sus">

                    
                <iframe class="sus-medida" src="https://simongrup.us6.list-manage.com/subscribe?u=baa0910438c8ee1af0750308a&id=0f68d42377" width="100%" ></iframe>
                </div>   
            </div>
                
            </div>
            
           

            
        </div>
      
                
                
    <div class="col-md-2"></div>
               
</div>!-->

<!--<div id="bloque-sus">
<div class="bg-suscribete">
    <div class="text-center padding-sus">
       <h1>Suscribirme a la Newsletter</h1> 
    </div>
    <div class="text-center">
        <div class=""></div>
        <div class="ancho-sus-text">
            <h4 class="line-sus">Suscr&iacute;bete a nuestra Newsletter y recibe promociones &uacute;nicas para tus pedidos en gas&oacute;leo de calefacci&oacute;n.</h4>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div>-->

               
                    </div> 
                    
                                        
                       </button>
                </div>
            </div>
        </form>
    </div>     
</div>
</div>

<!--<div id="bloque-sus">
<div class="bg-suscribete">
    
    <div class="nueva-sus padding-sus">
        <div class="img-sus"><img src="images/img-sus.png"></div>
       <h1>Suscribirme a la Newsletter</h1> 
        <a class="" href="http://eepurl.com/hR_KRT" onclick="myFunction()" ><p class="click-me button-sus btn" id="leermenos3">Suscribirme</p></a>  
    </div>
   
    
    <div class="text-center">
        <div class=""></div>
        <div class="ancho-sus-text">
            <h4 class="line-sus">Suscr&iacute;bete a nuestra Newsletter y recibe promociones &uacute;nicas para tus pedidos en gas&oacute;leo de calefacci&oacute;n.</h4>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div>
<div class="bg-suscribete row">
    <div class="ancho-sus">
        <form method="POST">
          
            </div>
        </form>
    </div>     
</div>
</div>!-->


<!--<div class="row bg-promo ">
    <div class="col-md-3 col-xs-2"></div>
    <div class="col-md-5 col-xs-8">
        <div class="card text-center">
          <div class="card-header">
            <h1 class="card-title">Contact Us</h1>
          </div>
          <div class="card-body pt-1">
                <h4 class="card-title">Let your visitors know how to reach out to you, or learn more about a product or service. If you add a button, link it to your preferred email address.</h4>
                <h4 class="card-text pt-1">Email us at contact@yoursite.com</h4>
                <a href="#" class="btn buttoncookies buttoncookies-mov mlmov-halb">Contact Us</a>
            
          </div>
        </div>
    </div>
    <div class="col-md-4 col-xs-2"></div>
</div>
    
</div>-->

<!--script parallax-->
<script type="text/javascript">
        var fondo = document.getElementById("fondo");
        var montanas0 = document.getElementById("montanas0");
        var parallax1 = document.getElementById("parallax1");
        var parallax3 = document.getElementById("parallax3");
        var estrellas = document.getElementById("estrellas");
        var mobil = document.getElementById("mobil");
        var monedas = document.getElementById("monedas");
        var nubenieve = document.getElementById("nubenieve");
        var nube1 = document.getElementById("nube1");
        var nube2 = document.getElementById("nube2");
        var camion = document.getElementById("camion");
        var web = document.getElementById("web");
        var rrss = document.getElementById("rrss");
        var nubefondo = document.getElementById("nubefondo");
        var nubefondo2 = document.getElementById("nubefondo2");
        var nubeprimer = document.getElementById("nubeprimer");
        var nubeprimer2 = document.getElementById("nubeprimer2");

        window.addEventListener('scroll', function() {


            var value = window.scrollY;

            fondo.style.top = value * 0.8 + 'px';

            montanas0.style.top = value * 0.65 + 'px';


            parallax1.style.top = value * 0.4 + 'px';

            parallax3.style.top = value * 0.10 + 'px';

            estrellas.style.top = value * 0.2 + 'px';
            estrellas.style.left = value * -0.05 + 'px';

            mobil.style.top = value * 0.35 + 'px';
            mobil.style.left = value * -0.03 + 'px';
           

            monedas.style.top = value * 0.2 + 'px';
            monedas.style.left = value * 0.1 + 'px';

            nubenieve.style.top = value * 0.15 + 'px';
            nubenieve.style.left = value * 0.03 + 'px';

            nube1.style.top = value * 0.30 + 'px';
            nube1.style.left = value * 0.05 + 'px';
         

            nube2.style.top = value * 0.5 + 'px';
            nube2.style.left = value * -0.1 + 'px';
           


            camion.style.top = value * 0.2 + 'px';

            web.style.top = value * 0.25 + 'px';
            web.style.left = value * 0.05 + 'px';

            rrss.style.top = value * 0.6 + 'px';
            rrss.style.left = value * -0.03 + 'px';

            nubefondo.style.top = value * 0.6 + 'px';
            nubefondo.style.left = value * 0.05 + 'px';
            
            
            nubefondo2.style.top = value * 0.6 + 'px';
            nubefondo2.style.left = value * -0.05 + 'px';

            nubeprimer.style.top = value * 0.3 + 'px';
            nubeprimer.style.left = value * 0.15 + 'px';
            
            
            nubeprimer2.style.top = value * 0.3 + 'px';
            nubeprimer2.style.left = value * -0.15 + 'px';



        })

    </script>

<script>
$( "p.toggle-promo1" ).click(function() {
  $( ".swipe-promo1" ).slideToggle( "slow" );
  
  if(document.getElementById("leermenos1").innerHTML == "Leer")
  {
      document.getElementById("leermenos1").innerHTML = "Leer menos";
  }
  else 
  {
      document.getElementById("leermenos1").innerHTML = "Leer";
  }
});
 
</script>



<script>

$( "p.toggle-promo2" ).click(function() {
  $( ".swipe-promo2" ).slideToggle( "slow" );
  
  if(document.getElementById("leermenos2").innerHTML == "Leer")
  {
      document.getElementById("leermenos2").innerHTML = "Leer menos";
  }
  else 
  {
      document.getElementById("leermenos2").innerHTML = "Leer";
  }
});
</script>


<script>

$( "p.toggle-promo3" ).click(function() {
  $( ".swipe-promo3" ).slideToggle( "slow" );
  
  if(document.getElementById("leermenos3").innerHTML == "Leer")
  {
      document.getElementById("leermenos3").innerHTML = "Leer menos";
  }
  else 
  {
      document.getElementById("leermenos3").innerHTML = "Leer";
  }
});
</script>

<script>

$( "p.toggle-sus" ).click(function() {
  $( ".swipe-sus" ).slideToggle( "slow" );
  
  if(document.getElementById("leermenos1").innerHTML == "Leer")
  {
      document.getElementById("leermenos1").innerHTML = "Leer menos";
  }
  else 
  {
      document.getElementById("leermenos1").innerHTML = "Leer";
  }
});
</script>




<!--<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/baa0910438c8ee1af0750308a/d2962230060b528c654633870.js");</script>!-->



<!--<script type="text/javascript">
$(".click-me").click(function() {
    $("#leermenos").focus();
});
</script>!-->

<!--<script> 
function ventanaSecundaria (URL){ 
   window.open(URL,"ventana1","width=120,height=300,scrollbars=NO") 
} 
</script>!-->



@endsection
