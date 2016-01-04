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
        <meta name="viewport" content="width=device-width, maximum-scale=1.0" />

        <link rel="stylesheet" href="css/galeria.css">
        <link rel="stylesheet" type="text/css" href="css/tooltip/tooltipster.css" />
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/validacion.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
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

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Facebook Pixel -->
        <?php include "modulos/fb-pixel.php" ?>
        <!-- //Facebook Pixel -->

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

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <!--Menu principal-->

        <?php include "modulos/common/menu.php" ?>


        <!-- Descripcion Modelo -->
        <div class="container fix-padding">


            <div class="row">
                <div class="col-lg-12 mg3-landing">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 fix-padding modelo-interior">
                        <div id="logo-auto" class="logo-mg3xross"><img src="images/modelos/mg3/logomg3.png" /></div>
                        <?php include "modulos/colores/mg3.php" ?>
                        <div id="modelo">


                        <div class="point1a"><a><img class="tooltip" src="images/modelos/mg3/plus.png" /></a></div>
                        <div class="point1b"><a><img class="tooltip" src="images/modelos/mg3/plus.png" /></a></div>
                        <div class="point1c"><a><img class="tooltip" src="images/modelos/mg3/plus.png" /></a></div>

                        <div id="color-auto">
                        <img src="images/modelos/mg3/colores/001.png" />
                        <img src="images/modelos/mg3/colores/002.png" />
                        <img src="images/modelos/mg3/colores/003.png" />
                        <img src="images/modelos/mg3/colores/004.png" />
                        <img src="images/modelos/mg3/colores/005.png" />
                        <img src="images/modelos/mg3/colores/006.png" />
                        <img src="images/modelos/mg3/colores/007.png" />
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 fix-padding">
                        <div id="descripcion">
                            <p>El nuevo MG3 es un hatchback de diseño inglés. En su versión 2014, no solo viene totalmente renovado, si no que tiene un reto: bájate si puedes.</p>
                        </div>
                        <div id="social">
                            <ul>
                                <li><div class="fb-like" data-href="http://www.mgmotors.com.pe/mg3.php" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
                                <li><a href="http://www.mgmotors.com.pe/mg3.php" class="twitter-share-button" data-lang="en">Tweet</a></li>
                            </ul>


                        </div>
                        <div id="menu-derecha">
                            <ul class="link-modelos">
                                <li><a href="#form-cotizar" class="nav-button"><img src="images/modelos/mg3/cotizar-btn.png" /></a></li>
                                <li><a href="pdf-files/mg3.pdf"><img src="images/modelos/mg3/ficha-btn.png" /></a></li>
                                <li><a href="#slide" class="nav-button"><img src="images/modelos/mg3/galeria-btn.png" /></a></li>
                                <li><a id="inline" href="#data-precio"><img src="images/modelos/mg3/precios-btn.png" /></a></li>
                                <li><a href="http://www.santanderconsumer.com.pe/SimuladordeCredito.aspx" target="_blank"><img src="images/bannerpromocion/santander-btn.png" /></a></li>
                            </ul>

                             <div style="display:none"><div id="data-precio">
                                <?php include "modulos/precios/mg3.php" ?>
                            </div></div>

                        <!-- Colores -->
                        <div id="colores-modelo">
                        <h2>COLORES</h2>
                            <!-- <ul id="nom-colores">
                                <li class="nom-selected">Black / Yellow Tudor</li>
                                <li>Black / Manchester Red</li>
                                <li>Black / Blue Thames</li>
                                <li>Black opal</li>
                                <li>Manchester Red</li>
                                <li>Scotish Silver</li>
                                <li>Summit White</li>
                            </ul>-->
                            <div id= "print-colorname" class= "nom-selected">Scotish Silver</div>

                            <div id="paleta-colores">
                            <img class="selected" src="images/modelos/mg3/colores/thumbs/001.png" colorname="Black / Yellow Tudor"/>
                            <img src="images/modelos/mg3/colores/thumbs/002.png" colorname="Black / Manchester Red"/>
                            <img src="images/modelos/mg3/colores/thumbs/003.png" colorname="Black / Blue Thames"/>
                            <img src="images/modelos/mg3/colores/thumbs/004.png" colorname="Black opal"/>
                            <img src="images/modelos/mg3/colores/thumbs/005.png" colorname="Manchester Red"/>
                            <img src="images/modelos/mg3/colores/thumbs/006.png" colorname="Scotish Silver"/>
                            <img src="images/modelos/mg3/colores/thumbs/007.png" colorname="Summit White"/>
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
                            <li><a id="inline" href="#data1"><img src="images/modelos/mg3/videoThumb-1.jpg" /></a></li>
                            <li><a id="inline" href="#data2"><img src="images/modelos/mg3/videoThumb-2.jpg" /></a></li>
                        </ul>
                            <div style="display:none"><div id="data1"><iframe width="600" height="338" src="//www.youtube.com/embed/ZvSSAxT7eps?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data2"><iframe width="600" height="338" src="//www.youtube.com/embed/DxM6g9QQNiY?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                    </div>
                </div>
            <div class="col-lg-1"></div>
            </div>
            <!-- //Banners Modelo -->

            <!-- Galería -->

            <div class="row banners-modelos-fix">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 fix-padding" id="slide">
                    <div id="galeria-modelo-mg3">
                        <h3>GALERÍA<img class="h3-ico" src="images/modelos/mg3/arrow.png" /></h3>

                    <!-- Slider -->

                    <div class="flexslider">
                      <ul class="slides">
                        <li><img src="images/modelos/mg3/galeria/item-01.jpg" /></li>
                        <li><img src="images/modelos/mg3/galeria/item-02.jpg" /></li>
                        <li><img src="images/modelos/mg3/galeria/item-03.jpg" /></li>
                        <li><img src="images/modelos/mg3/galeria/item-04.jpg" /></li>
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
                        <div id="diseno">
                            <h3>DISEÑO</h3>
                            <img class="pestana-arrow-mg3" src="images/modelos/mg3/_arrow.jpg" />
                        </div>

                        <!-- Diseño -->
                        <div id="diseno-content">
                                <div class="diseno-left"><img src="images/modelos/mg3/diseno/mg3-front.jpg" /></div>
                                <div class="diseno-right">
                                    <div class="diseno-right-text">
                                        <h2>REDISEÑO CON ESTILO</h2>
                                        <p>Creado en Longbridge por el inglés Anthony Williams-Kenny, director de diseño de MG, el innovador MG3 cuenta con la característica parrilla que define a la familia MG y a sus lados, encontramos los faros en forma de ojo de águila que lo distingue del resto de hatchbacks. El MG3 fue inspirado en el clásico MG ZR, modelo al que reemplazó en el segmento de los supermini.</p>
                                    </div>
                                    <div><img src="images/modelos/mg3/diseno/mg3-side.jpg" /></div>
                                </div>

                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/diseno/large_001.jpg"><img src="images/modelos/mg3/diseno/diseno-btn1.png" alt="Interior iStyle" /></a>
                                    <p>INTERIOR iSTYLE</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/diseno/large_002.jpg"><img src="images/modelos/mg3/diseno/diseno-btn2.png" alt="Pantalla Multifunción" /></a>
                                    <p>PANTALLA MULTIFUNCIÓN</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/diseno/large_003.jpg"><img src="images/modelos/mg3/diseno/diseno-btn3.png" alt="Consola moderna" /></a>
                                    <p>CONSOLA MODERNA</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/diseno/large_004.jpg"><img src="images/modelos/mg3/diseno/diseno-btn4.png" alt="Ergonomía" /></a>
                                    <p>ERGONOMÍA</p>
                                    </li>
                                </ul>
                            </div>

                        </div>


                        <!-- // Diseño -->

                        <div id="equipamiento">
                            <h3>EQUIPAMIENTO</h3>
                            <img class="pestana-arrow-mg3" src="images/modelos/mg3/_arrow.jpg" />
                        </div>

                        <!-- Equipamiento -->


                        <div id="equipamiento-content" style="display:none;">
                            <div id="eq-destacado">
                                <div class="eq-texto">
                                    <h2>TODO LO QUE NECESITAS</h2>
                                    <p>El MG3 2014 viene equipado con todos los accesorios que harán más cómodo  y divertido tu viaje. Cuenta con un sistema integrado de USB y AUX, mandos al timón, sistema Follow Me Home y sunroof (versión Sport)</p>
                                </div>
                            </div>

                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/equipamiento/large_001.jpg"><img src="images/modelos/mg3/equipamiento/eq-btn1.png" alt="Luces LED diurnas" /></a>
                                    <p>LUCES LED DIURNAS</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/equipamiento/large_002.jpg"><img src="images/modelos/mg3/equipamiento/eq-btn2.png" alt="Aros de 16" /></a>
                                    <p>AROS DE 16"</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/equipamiento/large_003.jpg"><img src="images/modelos/mg3/equipamiento/eq-btn3.png" alt="Alerón deportivo (Version Sport)" /></a>
                                    <p>ALERÓN DEPORTIVO</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg3/equipamiento/large_004.jpg"><img src="images/modelos/mg3/equipamiento/eq-btn4.png" alt="Faldones laterales deportivos (Version Sport)" /></a>
                                    <p>FALDONES LATERALES DEPORTIVOS</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- // Equipamiento -->

                        <div id="seguridad">
                            <h3>SEGURIDAD</h3>
                            <img class="pestana-arrow-mg3" src="images/modelos/mg3/_arrow.jpg" />
                        </div>

                        <!-- Equipamiento -->


                        <div id="seguridad-content" style="display:none;">
                            <div id="seguridad-bloque1">
                                <div class="imagen-bloque1"><img src="images/modelos/mg3/seguridad/abs.jpg" /></div>
                                <div class="texto-bloque1">
                                    <div id="abs-texto">
                                    <div class="abs"><span>TODOS LOS MG CUENTAN CON</span></div>
                                        <ul class="abs-lista">
                                            <li><div class="abs1"><img src="images/modelos/mg3/seguridad/abs-ico.png"></div></li>
                                            <li><div class="abs2"><img src="images/modelos/mg3/seguridad/ebd-ico.png"></div></li>
                                            <li><div class="abs3"><img src="images/modelos/mg3/seguridad/cbc-ico.png"></div></li>
                                            <li><div class="abs4"><img src="images/modelos/mg3/seguridad/ba-ico.png"></div></li>

                                        </ul>
                                    </div>
                                    <h2>COLUMNA DE DIRECCIÓN COLAPSABLE</h2>
                                    <p>Siempre pensando en proteger al usuario, MG ha incluido en su sistema de seguridad activa, la columna de dirección colapsable, la cual en el momento del impacto se parte en sí misma evitando que se dirija al conductor.</p>

                                    <h2>SISTEMAS DE FRENADO ABS</h2>
                                    <p>ABS (Anti-block system) o Sistema Anti bloqueo de Frenos: Es el sistema que durante un frenado de emergencia, suelta y vuelve a frenar las llantas de forma repetitiva en fracciones de segundo, lo que permite que las llantas no se traben y se puedan controlar, de modo que se consigue reducir la distancia de frenado y permite maniobra.</p>
                                </div>
                            </div>
                            <div id="seguridad-bloque2">
                                <div class="imagen-bloque2"><img src="images/modelos/mg3/seguridad/segu-2.jpg" /></div>
                                <div class="texto-bloque2">
                                    <h2>PUNTOS DE ANCLAJES PARA SILLAS DE BEBÉ ISOFIX</h2>
                                    <p>El Nuevo MG3 cuenta ahora con dos puntos de anclaje para la silla del bebé. Esta es la forma más segura para poder llevar a los niños. (Disponible en la versión Sport)</p>

                                    <h2>4 AIRBAGS</h2>
                                    <p>Como sabes, para MG es prioridad ofrecerle seguridad a sus usuarios es por eso que el Nuevo MG3 viene con 4 airbags: piloto, copiloto y dos laterales en la versión Sport y dos airbags en la version Estándar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-1"></div>
                </div>
            </div>

            <!-- Cotizar -->
            <div class="container-cotizar-mg3">

            <div class="container">
                <div class="row">
                <div id="background-cotizar-mg3">
                <div class="col-lg-5 fix-padding">
                    <div id="texto-cotizar">
                        <h4>COTIZAR</h4>
                        <p>¡Felicidades! Estás más cerca de tener tu nuevo MG3 y probar la increíble experiencia de manejarlo.</p>
                    </div>
                </div>
                <div class="col-lg-7 fix-padding">
                    <div id="form-cotizar">
                        <form role="form" id="cotizar-mg3" method="post" action="cotizar-datos.php">
                            <div><input type="text" id="nombres" name="nombres" placeholder="Ingresa tu nombre"></div>
                            <div><input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tu apellido"></div>
                            <div><input type="text" id="telefono" name="telefono"  placeholder="Ingresa tu telefono"></div>
                            <div><input type="text" id="email" name="email" placeholder="Ingresa tu correo"></div>
                            <div><input type="text" id="dni" name="dni" placeholder="Ingresa tu DNI"></div>

                            <div>
                            <select class="mg3-input" name="modelo" id="modelo">
                              <option value="MG 3">MG 3</option>
                            </select>
                            </div>

                            <div>
                            <select class="mg3-input" name="color" id="color">
                              <option value="Black / Yellow Tudor">Black / Yellow Tudor</option>
                              <option value="Black / Manchester Red">Black / Manchester Red</option>
                              <option value="Black / Blue Thames">Black / Blue Thames</option>
                              <option value="Black Opal">Black Opal</option>
                              <option value="Manchester Red">Manchester Red</option>
                              <option value="Scotish Silver">Scotish Silver</option>
                              <option value="Summit White">Summit White</option>
                            </select>
                            </div>

                            <div>
                            <select class="mg3-input" name="tienda" id="tienda">
                              <option value="">- Elige una tienda -</option>
                              <option value="surquillo">Surquillo (Tomás Marsano 139)</option>
                              <option value="sanmiguel">San Miguel (Elmer Faucett 149)</option>
                              <option value="santaanita">Santa Anita (Mall Aventura Plaza)</option>
                              <option value="independencia">Independencia (CC Lima Plaza Norte)</option>
                              <option value="bellavista">Bellavista (Av. Oscar R. Benavides (ex colonial) 3866, Mall Aventura Plaza)</option>
                              <option value="naranjal">Naranjal (Av. Alfredo Mendiola 5118, Los Olivos)</option>
                              <option value="piura">Piura (Av. Sanchez Cerro Mz. 228 Lt.04 Zona Industrial)</option>
                              <option value="chiclayo">Chiclayo (Av. José Leonardo Ortiz N° 450)</option>
                              <option value="cusco">Cusco (Av. De la Cultura 543)</option>
                              <option value="arequipa">Arequipa (Vía Evitamiento Km. 3.9 Irrigación Zamácola Lateral F)</option>
                              <option value="trujillo">Trujillo (Av. Húsares de Junín 990 Urb. La Merced)</option>
                            </select>
                            </div>

                            <div>
                            <textarea name="comentarios" id="comentarios"></textarea>
                            </div>

                            <div>
                            <input type="image" src="images/modelos/mg3/enviar-btn.png" id="btnSubmit" name="btnSubmit"/>
                            <input name="origen" value="formulario" type="hidden" />
                            </div>
                        </form>
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
        <script defer src="js/validacion_modelo.js"></script>

        <!-- Fancybox -->

        <!-- Add mousewheel plugin (this is optional) -->
        <!--<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>-->

        <!-- Add fancyBox -->
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!-- // Fancybox -->

        <!-- Stellar -->


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
        </script>

        <script>
            $(document).ready(function() {
                $('.point1a').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/airbag.png" /></span>')});
                $('.point1b').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/motor.png" /></span>')});
                $('.point1c').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/abs.png" /></span>')});

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
