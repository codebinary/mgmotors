<?php

//Sesión para comunicarse con el archivo PHP de envio de formularios: contacto_datos.php
session_start();
$_SESSION['estado']="activo";

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>.:: MG PERU | SITIO OFICIAL ::.</title>
        <meta name="keywords" content="MG, autos ingleses, Morris Garages autos, concesionarios MG, MG3, MG5, MG 350, MG3 XROSS, Morris Garages Perú, MG Perú, MG motors Perú, tiendas MG, talleres MG.">
        <meta name="description" content="MG es una marca inglesa con 90 años de historia, perteneciente a una de las corporaciones de automóviles más grande del mundo; SAIC GROUP. Con un centro de diseño y de control en Birgminham, Inglaterra nuestros autos están regidos por la legislación de calidad europea.  En el Perú, está respaldado por el grupo SKBergé, uno de los grupos automotores más grande de Latinoamérica. Visita este sitio web y conoce más de MG!">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/galeria.css">
        <link rel="stylesheet" type="text/css" href="css/tooltip/tooltipster.css" />
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <!-- <link rel="stylesheet" href="css/validacion.css"> -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="webservice/css/main.css">
        <link rel="stylesheet" href="css/mediaqueries.css">


        <!-- Fancybox -->

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />


        <link rel="stylesheet" href="js/fancyboxhelpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

        <!-- //Fancybox -->

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>


        <!-- efecto-->

        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.scrollTo-1.4.3.1.min.js"></script>
        <script src="js/jquery.scrollorama.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.scrolldeck.js"></script>

        <!-- Google Analytics -->
        <?php include "modulos/analytics.php" ?>
        <!-- //Google Analytics -->


        <!-- Webservices -->
        <?php include 'webservice/modulos/webservice/modulos/getFunciones.php'; ?>
        <!--// Webservices -->

        <style>
            .mg350 form#formulario-cotizar input[type="text"]{font-family: Arial, sans-serif;
                font-size: 12px;
                color: #2c2c2c;
                background: #136296;
                border: #eeeeee solid 1px;
                border-top: #876d00 solid 1px;
                border-left: #876d00 solid 1px;
            }

            .mg350 form#formulario-cotizar select{font-family: Arial, sans-serif;
                font-size: 12px;
                color: #2c2c2c;
                background: #136296;
                border: #eeeeee solid 1px;
                border-top: #876d00 solid 1px;
                border-left: #876d00 solid 1px;
            }
            .mg350 form#formulario-cotizar textarea{font-family: Arial, sans-serif;
                font-family: Arial, sans-serif;
                font-size: 12px;
                color: #2c2c2c;
                background: #136296;
                border: #eeeeee solid 1px;
                border-top: #876d00 solid 1px;
                border-left: #876d00 solid 1px;
                -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
                -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
                box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
                resize: none;
                margin-bottom: 10px;
            }
            #diaList{width: 80px;}
            #mesList, #yearList{width: 80px;margin-left: 11px;}
            #form-cotizar{width: 640px; margin:auto;}
            form#formulario-cotizar input[type="text"], #tipoDoc, .cotizar-input{width: 267px;}
            #prefijo{width: 50px;}
            form#formulario-cotizar textarea{height: 109px;width: 267px;}
            .txtFono{width: 214px!important;}
            
            @media (max-width: 1024px){
                #form-cotizar{width: 598px!important;}

            }
            @media (max-width: 800px){
                #form1,#form2{margin-top: 0px!important;}
                #form-cotizar {width: 459px!important;}
            }
                
            @media (max-width: 768px){
                #form1,#form2{margin-top: 0px!important;}
                #diaList{width: 100%!important;}
                #mesList, #yearList{width: 100%!important;margin-left: 0px!important;}
                
                form#formulario-cotizar input[type="text"], #tipoDoc, .cotizar-input{width: 100%;}
                #prefijo{width: 100%;}
                form#formulario-cotizar textarea{height: 109px;width: 100%;}
                .txtFono{width: 100%!important;}
                #form-cotizar{width: 456px!important;}
            }

            @media(max-width: 600px){
                #form-cotizar{width: 400px!important;}
            }
            @media(max-width: 320px){
                #form-cotizar{width: 328px!important;}
            }
            
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


<!-- Facebook like Bottom -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=215733971966687";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Twitter Follw Bottom -->

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>


    <!--Menu principal-->

    <?php include "modulos/common/menu.php" ?>

        <!-- Descripcion Modelo -->
        <div class="container fix-padding">
            <div class="row">
                <div class="col-lg-12 mg350-landing">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 fix-padding">
                        <div id="logo-auto" class="logo-mg350"><img src="images/modelos/mg350/logomg350.png" /></div>
                        <?php include "modulos/colores/mg350.php" ?>
                        <div id="modelo">


                        <div class="point3a"><a><img class="tooltip" src="images/modelos/mg350/plus.png" /></a></div>
                        <div class="point3b"><a><img class="tooltip" src="images/modelos/mg350/plus.png" /></a></div>
                        <div class="point3c"><a><img class="tooltip" src="images/modelos/mg350/plus.png" /></a></div>

                        <div id="color-auto">
                        <img src="images/modelos/mg350/colores/001.png" />
                        <img src="images/modelos/mg350/colores/002.png" />
                        <img src="images/modelos/mg350/colores/003.png" />
                        <img src="images/modelos/mg350/colores/004.png" />
                        <img src="images/modelos/mg350/colores/005.png" />
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 fix-padding">
                        <div id="descripcion">
                            <p>Elegante, unico y, sobretodo, muy seguro. El MG350 es el sedan que buscas. Cuenta con todos los sistemas de asistencia al frenado, lo que confirma la seguridad del conductor y sus acompañantes.</p>
                        </div>
                        <div id="social">
                            <ul>
                                <li><div class="fb-like" data-href="http://www.mgmotors.com.pe/mg3xross.php" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
                                <li><a href="http://www.mgmotors.com.pe/mg350.php" class="twitter-share-button" data-lang="en">Tweet</a></li>
                            </ul>
                        </div>
                        <div id="menu-derecha">
                            <ul class="link-modelos">
                                <li><a href="#form-cotizar" class="nav-button"><img src="images/modelos/mg350/cotizar-btn.png" /></a></li>
                                <li><a href="pdf-files/mg350.pdf"><img src="images/modelos/mg350/ficha-btn.png" /></a></li>
                                <li><a href="#slide" class="nav-button"><img src="images/modelos/mg350/galeria-btn.png" /></a></li>
                                <li><a id="inline" href="#data-precio"><img src="images/modelos/mg350/precios-btn.jpg" /></a></li>
                                <li><a href="http://www.santanderconsumer.com.pe/SimuladordeCredito.aspx" target="_blank"><img src="images/bannerpromocion/santander-btn.png" /></a></li>
                            </ul>

                            <div style="display:none"><div id="data-precio">
                                <?php include "modulos/precios/mg350.php" ?>
                            </div></div>

                        <!-- Colores -->
                        <div id="colores-modelo">
                        <h2>COLORES</h2>
                            <!-- <ul id="nom-colores">
                                <li class="nom-selected">Black Opal</li>
                                <li >Manchester Red</li>
                                <li>Titan Grey</li>
                                <li>Scotish Silver</li>
                                <li>Summit White</li>
                            </ul>-->
                            <div id= "print-colorname" class= "nom-selected">Scotish Silver</div>

                            <div id="paleta-colores">
                            <img class="selected" src="images/modelos/mg350/colores/thumbs/001.png" colorname="Black Opal" />
                            <img src="images/modelos/mg350/colores/thumbs/002.png" colorname="Manchester Red"/>
                            <img src="images/modelos/mg350/colores/thumbs/003.png" colorname="Titan Grey"/>
                            <img src="images/modelos/mg350/colores/thumbs/004.png" colorname="Scotish Silver"/>
                            <img src="images/modelos/mg350/colores/thumbs/005.png" colorname="Summit White"/>
                            </div>
                        </div>


                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>


            <!-- Banners Modelo -->
            <div class="row banners-modelos-fix">
            <div class="col-lg-1"></div>
                <div class="col-lg-10 fix-padding">
                    <div id="botones-modelo">
                        <ul>
                            <li><a href="http://on.fb.me/1dthAX8" target="_blank"><img src="images/modelos/mg3/tunea-btn.jpg" /></a></li>
                            <li><a id="inline" href="#data1"><img src="images/modelos/mg350/videoThumb-1.jpg" /></a></li>
                            <li><a id="inline" href="#data2"><img src="images/modelos/mg350/videoThumb-2.jpg" /></a></li>
                        </ul>
                            <div style="display:none"><div id="data1"><iframe width="600" height="338" src="//www.youtube.com/embed/rdjSNQGFIe4?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data2"><iframe width="600" height="338" src="//www.youtube.com/embed/8tSG5Pygp5g?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                    </div>
                </div>
            <div class="col-lg-1"></div>
            </div>
            <!-- //Banners Modelo -->

            <!-- Galería -->

            <div class="row banners-modelos-fix">
            <div class="col-lg-1"></div>
                <div class="col-lg-10" id="slide">
                    <div id="galeria-modelo-mg350">
                        <h3>GALERÍA<img class="h3-ico" src="images/modelos/mg350/arrow.png" /></h3>

                    <!-- Slider -->

                    <div class="flexslider">
                      <ul class="slides">
                        <li><img src="images/modelos/mg350/galeria/item-01.jpg" /></li>
                        <li><img src="images/modelos/mg350/galeria/item-02.jpg" /></li>
                        <li><img src="images/modelos/mg350/galeria/item-03.jpg" /></li>
                        <li><img src="images/modelos/mg350/galeria/item-04.jpg" /></li>
                      </ul>
                    </div>


                        <!--<img src="images/modelos/mg3/galeria-template.png" />-->
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>

            <!-- //Galeria -->

            <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10 fix-padding">

                    <!-- Diseño -->


                        <div id="diseno">
                            <h3>DISEÑO</h3>
                            <img class="pestana-arrow-mg350" src="images/modelos/mg350/_arrow.jpg" />
                        </div>
                        <div id="diseno-content">
                            <div id="disenomg350-left">
                                <img src="images/modelos/mg350/diseno/mg350-left.jpg" />
                            </div>
                            <div id="disenomg350-right">
                                <div id="texto-mg350">
                                <h2>DISEÑANDO LA ELEGANCIA</h2>
                                <p>Desde su inicio  el MG350 se distinguió por sus líneas que comparten lo elegante con lo deportivo. El MG350 tiene un equipamiento que lo convierte en el auto más seguro de su segmento. Con un facelift realizado el 2012, su renovado look lo acerca más a la familia MG y se puede apreciar la máscara característica de lots modelos de la marca y unas líneas más agresivas.</p>
                                <img src="images/modelos/mg350/diseno/mg350-right.jpg" />
                                </div>
                            </div>
                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/diseno/large_001.jpg"><img src="images/modelos/mg350/diseno/diseno-btn1.png" alt="Faros delanteros" /></a>
                                    <p>FAROS DELANTEROS</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/diseno/large_002.jpg"><img src="images/modelos/mg350/diseno/diseno-btn2.png" alt="Espaciosa  maletera" /></a>
                                    <p>ESPACIOSA MALETERA</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/diseno/large_003.jpg"><img src="images/modelos/mg350/diseno/diseno-btn3.png" alt="Parrilla deportiva" /></a>
                                    <p>PARRILLA DEPORTIVA</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/diseno/large_004.jpg"><img src="images/modelos/mg350/diseno/diseno-btn4.png" alt="Elegantes prestaciones" /></a>
                                    <p>ELEGANTES PRESTACIONES</p>
                                    </li>
                                </ul>
                            </div>
                        </div>



                        <!-- Equipamiento-->
                        <div id="equipamiento">
                            <h3>EQUIPAMIENTO</h3>
                            <img class="pestana-arrow-mg350" src="images/modelos/mg350/_arrow.jpg" />
                        </div>
                        <div id="equipamiento-content" style="display:none;">
                            <div id="eq-destacado-mg350">
                                <div class="eq-texto-mg350">
                                    <h2>ELEGANCIA Y CONFORT, SIEMPRE</h2>
                                    <p>El MG350 tiene todas las prestaciones que buscas en un sedán. La comodidad en cabina es primordial y gracias a sus accesorios y elementos, se consigue facilmente.</p>
                                </div>
                            </div>
                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/equipamiento/large_001.jpg"><img src="images/modelos/mg350/equipamiento/eq-btn1.png" alt="radio con pantalla Touchscreen (de venta como accesorio extra)" /></a>
                                    <p>RADIO CON PANTALLA TOUCH SCREEN</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/equipamiento/large_002.jpg"><img src="images/modelos/mg350/equipamiento/eq-btn2.png" alt="Sistema de audio" /></a>
                                    <p>SISTEMA DE AUDIO</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/equipamiento/large_003.jpg"><img src="images/modelos/mg350/equipamiento/eq-btn3.png" alt="Radio CD + Mp3" /></a>
                                    <p>RADIO CD + MP3</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg350/equipamiento/large_004.jpg"><img src="images/modelos/mg350/equipamiento/eq-btn4.png" alt="Sistema Bluetooth y manos libres" /></a>
                                    <p>SISTEMA BLUETOOTH Y MANOS LIBRES</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Seguridad -->
                        <div id="seguridad">
                            <h3>SEGURIDAD</h3>
                            <img class="pestana-arrow-mg350" src="images/modelos/mg350/_arrow.jpg" />
                        </div>
                        <div id="seguridad-content" style="display:none;">
                            <div id="seguridad-bloque1-MG350">
                                <div class="imagen-bloque1"><img src="images/modelos/mg350/seguridad/anclaje.jpg" /></div>
                                <div class="texto-bloque1-mg350">
                                    <div id="abs-texto">
                                    <div class="abs"><span>TODOS LOS MG CUENTAN CON</span></div>
                                        <ul class="abs-lista">
                                            <li><div class="abs1"><img src="images/modelos/mg350/seguridad/abs-ico.png"></div></li>
                                            <li><div class="abs2"><img src="images/modelos/mg350/seguridad/ebd-ico.png"></div></li>
                                            <li><div class="abs3"><img src="images/modelos/mg350/seguridad/cbc-ico.png"></div></li>
                                            <li><div class="abs4"><img src="images/modelos/mg350/seguridad/ba-ico.png"></div></li>

                                        </ul>
                                    </div>
                                    <h2>SISTEMA DE ANCLAJE DE SILLAS DE BEBÉS ISOFIX</h2>
                                    <p>El sistema de anclaje para sillas de bebé ISOFIX forma parte del chasis, de modo que al momento de asegurar la silla, ésta pasa a formar parte de la estructura, evitando movimientos de latigazo que son los que más daño pueden generar en los bebés.</p>

                                    <h2>SISTEMAS DE FRENADO BA</h2>
                                    <p>BA (Brake assistance): Este sistema se activa al realizar un cambio brusco de la aceleración hacia el freno, se reconoce un frenado de emergencia y se le incrementa la potencia aplicada manteniéndola por 2 segundos, de ésta manera se puede reducir la distancia de frenado significativamente.</p>
                                </div>
                            </div>
                            <div id="seguridad-bloque2-mg350" style="display:inline-block;">
                                <div class="imagen-bloque2"><img src="images/modelos/mg350/seguridad/segu-2.jpg" /></div>
                                <div class="texto-bloque2-mg350">
                                    <h2>DOBLE AIRBAG</h2>
                                    <p>Piloto y copiloto cuentan con bolsas de aire que se van a activar al momento de la colisión, evitando mayores lesiones y disminuyendo los daños que puedan ocurrir por los impactos.</p>

                                    <h2>BARRAS LATERALES EXTRA DE PROTECCIÓN ANTICOLISIÓN</h2>
                                    <p>Una de las principales razones por la cuál este modelo es el más seguro de su segmento, es porque cuenta con barras laterales que protegen en caso de choque lateral. Es en ésta prueba donde obtuvo el mejor puntaje con 99.25% de protección.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-1"></div>
                </div>
            </div>

            <!-- Cotizar -->
            <div class="container-cotizar-mg350">

            <div class="container">
                <div class="row">
                <div id="background-cotizar-mg350">
                <div class="col-lg-5 fix-padding">
                    <div id="texto-cotizar">
                        <h4>COTIZAR</h4>
                        <p>¡Felicidades! Estás más cerca de tener tu nuevo MG350 y probar la increíble experiencia de manejarlo.</p>
                    </div>
                </div>
                <div class="col-lg-7 fix-padding">
                    <div id="form-cotizar" class="mg350">
                        <!-- INICIO DEL FORMULARIO-->
                        <?php include('modulos/formWS.php'); ?>
                      <!-- FIN DEL FORMULARIO-->
                    </div>
                </div>

            </div>
                </div>
            </div>

            </div>


            <div class="backtop">
            <ul>
                <li><a href="#form-cotizar" class="nav-button"><img src="images/common/cotizar-btn.jpg"></a></li>
                <li><a href="#" class="back-to-top"><img src="images/common/top-btn.png"></a></li>
            </ul>

            </div>

            <!-- Footer -->

            <?php include "modulos/common/footer.php" ?>

            <!-- //Footer -->

        </div>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>


        <script src="js/main.js"></script>
        <script type="js/vendor/bootstrap.js"></script>
        <script type="text/javascript" src="js/tooltip/jquery.tooltipster.min.js"></script>
        <script defer src="js/jquery.flexslider.js"></script>
        <!-- <script defer src="js/validacion_modelo.js"></script> -->

        <!-- Webservices -->
        <script src="webservice/js/webservice/funciones.js"></script>
        <script src="webservice/js/webservice/jquery.validate.min.js"></script>
        <!-- //Webservices -->

        <!-- Fancybox -->

        <!-- Add mousewheel plugin (this is optional) -->
        <!--<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>-->

        <!-- Add fancyBox -->
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


        <script>
        $(document).ready(function(){
            $("#modelos").click(function(){
                $("#menu-modelos").slideToggle("fast");
                //alert( "Handler for .click() called." );
            });

            $("#diseno").click(function(){
                $("#diseno-content").slideToggle("fast");
                $("#equipamiento-content").slideUp("fast");
                $("#seguridad-content").slideUp("fast");
            })
            $("#equipamiento").click(function(){
                $("#diseno-content").slideUp("fast");
                $("#equipamiento-content").slideToggle("fast");
                $("#seguridad-content").slideUp("fast");
            })
            $("#seguridad").click(function(){
                $("#diseno-content").slideUp("fast");
                $("#equipamiento-content").slideUp("fast");
                $("#seguridad-content").slideToggle("fast");
            });

        });

            $(document).ready(function() {
                $('.point3a').tooltipster({ content: $('<span><img src="images/modelos/mg350/tooltip/abs.png" /></span>')});
                $('.point3b').tooltipster({ content: $('<span><img src="images/modelos/mg350/tooltip/anclaje.png" /></span>')});
                $('.point3c').tooltipster({ content: $('<span><img src="images/modelos/mg350/tooltip/neblineros.png" /></span>')});

                $('.abs1').tooltipster({ content: $('<div class="tooltip-texto"><h4>SISTEMAS DE FRENADO ABS</h4><p>ABS (Anti-block system) o Sistema Anti bloqueo de Frenos: Es el sistema que durante un frenado de emergencia, suelta y vuelve a frenar las llantas de forma repetitiva en fracciones de segundo, lo que permite que las llantas no se traben y se puedan controlar, de modo que se consigue reducir la distancia de frenado y permite maniobra.</p></div>')});
                $('.abs2').tooltipster({ content: $('<div class="tooltip-texto"><h4>SISTEMAS DE FRENADO EBD</h4><p>EBD (Electronic Brake Distribution) o Distribución electrónica del frenado: Este sistema determina cuánta potencia aplicar a cada neumático, tomando en consideración la distribución del peso dentro del auto, para detenerlo en la menor distancia y sin perder el control.</p></div>')});
                $('.abs3').tooltipster({ content: $('<div class="tooltip-texto"><h4>SISTEMAS DE FRENADO CBC</h4><p>CBC (Cornering Brake Control) o Control de Frenado en Curvas: envía mayor presión de frenado a las ruedas individualmente, consiguiendo una mejora sustancial de la estabilidad y seguridad del vehículo en las curvas.</p></div>')});
                $('.abs4').tooltipster({ content: $('<div class="tooltip-texto"><h4>SISTEMAS DE FRENADO BA</h4><p>BA (Brake assistance): Este sistema se activa al realizar un cambio brusco de la aceleración hacia el freno, se reconoce un frenado de emergencia y se le incrementa la potencia aplicada manteniéndola por 2 segundos, de ésta manera se puede reducir la distancia de frenado significativamente.</p></div>')});
            });

            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide"
              });
            });


            $(function(){
                $("#color-auto img:eq(0)").nextAll().hide();
                $("#nom-colores li:eq(0)").nextAll().hide();
                $("#paleta-colores img:eq(0)").addClass('selected');
                $("#paleta-colores img").click(function(e){
                    var index = $(this).index();
                    var getname = $(this).attr('colorname');
                    $("#print-colorname").html(getname);
                    $("#color-auto img").eq(index).fadeTo(400,1).siblings().hide();
                    $(this).addClass('selected').siblings().removeClass('selected');
                    $("#nom-colores li").eq(index).addClass('nom-selected').siblings().removeClass('nom-selected');
                });
            });


            $(document).ready(function() {
                $(".fancybox").fancybox({
                    beforeShow : function() {
                        var alt = this.element.find('img').attr('alt');

                        this.inner.find('img').attr('alt', alt);

                        this.title = alt;
                    }
                });

                $("a#inline").fancybox({
                    'hideOnContentClick': true
                });

            });

            $(document).ready(function() {
              var deck = new $.scrolldeck({
                buttons: '.nav-button',
                slides: '.slide',
                duration: 600,
                easing: 'easeInOutExpo',
                offset: 0
              });
            });

        /*----------Back to TOP -----------------*/


            jQuery(document).ready(function() {
                var offset = 220;
                var duration = 500;
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.backtop').fadeIn(duration);
                    } else {
                        jQuery('.backtop').fadeOut(duration);
                    }
                });

                jQuery('.back-to-top').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })
            });

        </script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


    <!-- Google Analytics -->
    <?php include "modulos/remarketing.php" ?>
    <!-- //Google Analytics -->
    
    

    </body>
</html>
