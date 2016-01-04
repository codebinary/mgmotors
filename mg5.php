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

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>


    <!--Menu principal-->

    <?php include "modulos/common/menu.php" ?>

        <!-- Descripcion Modelo -->
        <div class="container fix-padding">
            <div class="row">
                <div class="col-lg-12 mg5-landing">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 fix-padding">
                        <div id="logo-auto" class="logo-mg5">
                        <img src="images/modelos/mg5/logomg5.png" />
                        <div id="enlace-turbo">CONOCE LA VERSIÓN <a href="mg5-turbo.php"><span>TURBO</span><img src="images/modelos/mg5-turbo/flecha.jpg"></a></div>
                        </div>
                        <?php include "modulos/colores/mg5.php" ?>
                        
                        <div id="modelo">

                        <div class="point4a"><a><img class="tooltip" src="images/modelos/mg5/plus.png" /></a></div>
                        <div class="point4b"><a><img class="tooltip" src="images/modelos/mg5/plus.png" /></a></div>
                        <div class="point4c"><a><img class="tooltip" src="images/modelos/mg5/plus.png" /></a></div>

                        <div id="color-auto">
                        <img src="images/modelos/mg5/colores/001.png" />
                        <img src="images/modelos/mg5/colores/002.png" />
                        <!--<img src="images/modelos/mg5/colores/003.png" />-->
                        <img src="images/modelos/mg5/colores/004.png" />
                        <img src="images/modelos/mg5/colores/005.png" />
                        <img src="images/modelos/mg5/colores/006.png" />
                        </div>

                        </div>
                        
                    </div>

                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 fix-padding">
                        <div id="descripcion">
                            <p>Deportivo, agresivo e imponente. El MG5 está diseñado para impresionar incluso al más exigente de los clientes. Déjate encantar por su belleza externa e interna.</p>
                        </div>
                        <div id="social">
                            <ul>
                                <li><div class="fb-like" data-href="http://www.mgmotors.com.pe/mg5.php" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
                                <li><a href="#" class="twitter-share-button" data-lang="en">Tweet</a></li>
                            </ul>
                        </div>
                        <div id="menu-derecha">
                            <ul class="link-modelos">
                                <li><a href="#form-cotizar" class="nav-button"><img src="images/modelos/mg5/cotizar-btn.png" /></a></li>
                                <li><a href="pdf-files/mg5.pdf"><img src="images/modelos/mg5/ficha-btn.png" /></a></li>
                                <li><a href="#slide" class="nav-button"><img src="images/modelos/mg5/galeria-btn.png" /></a></li>
                                <li><a id="inline" href="#data-precio"><img src="images/modelos/mg5/precios-btn.jpg" /></a></li>
                                <li><a href="http://www.santanderconsumer.com.pe/SimuladordeCredito.aspx" target="_blank"><img src="images/bannerpromocion/santander-btn.png" /></a></li>
                            </ul>

                        <div style="display:none"><div id="data-precio">
                                <?php include "modulos/precios/mg5.php" ?>
                        </div></div>

                        <!-- Colores -->
                        <div id="colores-modelo">
                        <h2>COLORES</h2>
                           <!-- <ul id="nom-colores">
                                <li class="nom-selected">Scotish Silver</li>
                                <li>Black Opal</li>
                                <li>Windsor Purple</li>
                                <li>Summit White</li>
                                <li>British Red</li>
                                <li>Misty Grey</li>
                            </ul>-->
                            <div id= "print-colorname" class= "nom-selected">Scotish Silver</div>

                            <div id="paleta-colores">
                            <img class="selected" src="images/modelos/mg5/colores/thumbs/001.png" colorname="Scotish Silver" />
                            <img src="images/modelos/mg5/colores/thumbs/002.png" colorname="Black Opal" />
                            <!--<img src="images/modelos/mg5/colores/thumbs/003.png" colorname="Windsor Purple"/>-->
                            <img src="images/modelos/mg5/colores/thumbs/004.png" colorname="Summit White"/>
                            <img src="images/modelos/mg5/colores/thumbs/005.png" colorname="British Red"/>
                            <img src="images/modelos/mg5/colores/thumbs/006.png" colorname="Misty Grey"/>
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
                            <li><a id="inline" href="#data1"><img src="images/modelos/mg5/videoThumb-1.jpg" /></a></li>
                            <li><a id="inline" href="#data2"><img src="images/modelos/mg5/videoThumb-2.jpg" /></a></li>
                        </ul>
                            <div style="display:none"><div id="data1"><iframe width="600" height="338" src="//www.youtube.com/embed/rdjSNQGFIe4?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data2"><iframe width="600" height="338" src="//www.youtube.com/embed/8tSG5Pygp5g?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                    </div>
                </div>
            <div class="col-lg-1"></div>
            </div>
            <!-- //Banners Modelo -->

            <!-- Galería -->

            <div class="row banners-modelos-fix" id="slide">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div id="galeria-modelo-mg5">
                        <h3>GALERÍA<img class="h3-ico" src="images/modelos/mg5/arrow.png" /></h3>

                    <!-- Slider -->

                    <div class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="images/modelos/mg5/galeria/item-01.jpg" />
                        </li>
                        <li>
                          <img src="images/modelos/mg5/galeria/item-02.jpg" />
                        </li>
                        <li>
                          <img src="images/modelos/mg5/galeria/item-03.jpg" />
                        </li>
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
                            <img class="pestana-arrow-mg5" src="images/modelos/mg5/_arrow.jpg" />
                        </div>

                        <!-- Diseño -->
                        <div id="diseno-content">
                            <div id="disenomg5-left">
                                <img src="images/modelos/mg5/diseno/mg5-left.jpg" />
                            </div>
                            <div id="disenomg5-right">
                                <div id="texto-mg5">
                                <h2>EL DIAMANTE DE LA FAMILIA</h2>
                                <p>Diseñado en Longbridge por Anthony Williams-Kenny y Carl Gotham, el MG5 incorpora un alto nivel de accesorios y líneas deportivas de gran distinción.</p>
                                <p>Intenso y cargado de energía, el MG5 parte del diseño del clásico europeo hatchback coupé y es delineado desde el capot y por los laterales, como si fuera un diamante. </p>
                                <img src="images/modelos/mg5/diseno/mg5-right.jpg" />
                                </div>
                            </div>
                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/diseno/large_001.jpg"><img src="images/modelos/mg5/diseno/diseno-btn1.png" alt="Elegante diseño interior (próximamente disponible en la versión Sport)" /></a>
                                    <p>ELEGANTE DISEÑO INTERIOR</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/diseno/large_002.jpg"><img src="images/modelos/mg5/diseno/diseno-btn2.png" alt="Tablero tipo Jet" /></a>
                                    <p>TABLERO TIPO JET</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/diseno/large_003.jpg"><img src="images/modelos/mg5/diseno/diseno-btn3.png" alt="Espacio de Almacenamiento" /></a>
                                    <p>ESPACIO DE ALMACENAMIENTO</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/diseno/large_004.jpg"><img src="images/modelos/mg5/diseno/diseno-btn4.png" alt="Caja Automática" /></a>
                                    <p>CAJA AUTOMÁTICA</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Diseño -->
                        <div id="equipamiento">
                            <h3>EQUIPAMIENTO</h3>
                            <img class="pestana-arrow-mg5" src="images/modelos/mg5/_arrow.jpg" />
                        </div>
                        <div id="equipamiento-content" style="display:none;">
                            <div id="eq-destacado-mg5">
                                <div class="eq-texto-mg5">
                                    <h2>ESTILO AL INTERIOR Y EXTERIOR</h2>
                                    <p>El MG5 tiene todo el equipamiento que buscas. Sin dejar de lado el diseño deportivo de la marca. </p>
                                </div>
                            </div>

                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/equipamiento/large_001.jpg"><img src="images/modelos/mg5/equipamiento/eq-btn1.png" alt="Sistema de Bluetooth y manos libres" /></a>
                                    <p>SISTEMA DE BLUETOOTH Y MANOS LIBRES</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/equipamiento/large_002.jpg"><img src="images/modelos/mg5/equipamiento/eq-btn2.png" alt="Completo sistema de audio" /></a>
                                    <p>SISTEMA DE AUDIO</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/equipamiento/large_003.jpg"><img src="images/modelos/mg5/equipamiento/eq-btn3.png" alt="Computadora de viaje" /></a>
                                    <p>COMPUTADORA DE VIAJE</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg5/equipamiento/large_004.jpg"><img src="images/modelos/mg5/equipamiento/eq-btn4.png" alt="Elegantes faros neblineros" /></a>
                                    <p>FAROS NEBLINEROS</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- Seguridad -->

                        <div id="seguridad">
                            <h3>SEGURIDAD</h3>
                            <img class="pestana-arrow-mg5" src="images/modelos/mg5/_arrow.jpg" />
                        </div>
                        <div id="seguridad-content" style="display:none;">
                            <div id="seguridad-bloque1-mg5">
                                <div class="texto-bloque1-mg5">
                                    <div id="abs-texto">
                                    <div class="abs"><span>TODOS LOS MG CUENTAN CON</span></div>
                                        <ul class="abs-lista">
                                            <li><div class="abs1"><img src="images/modelos/mg5/seguridad/abs-ico.png"></div></li>
                                            <li><div class="abs2"><img src="images/modelos/mg5/seguridad/ebd-ico.png"></div></li>
                                            <li><div class="abs3"><img src="images/modelos/mg5/seguridad/cbc.png"></div></li>
                                            <li><div class="abs4"><img src="images/modelos/mg5/seguridad/ba-ico.png"></div></li>

                                        </ul>
                                    </div>
                                    <h2>CARROCERÍA CON DEFORMACIÓN PROGRAMADA</h2>
                                    <p>Este modelo ha sido diseñado y puesto a prueba para asegurar la seguridad de sus pasajeros, es por eso que al momento de la colisión la carrocería tiene una deformación programada que absorbe la fuerza del impacto, logrando que el habitáculo permanezca con el menor daño posible.</p>

                                    <h2>SISTEMAS DE FRENADO EBD</h2>
                                    <p>EBD (Electronic Brake Distribution) o Distribución electrónica del frenado: Este sistema determina cuánta potencia aplicar a cada neumático, tomando en consideración la distribución del peso dentro del auto, para detenerlo en la menor distancia y sin perder el control.</p>
                                </div>
                                <div class="imagen-bloque1-mg5"><img src="images/modelos/mg5/seguridad/seg-2.jpg" /></div>
                            </div>
                            <div id="seguridad-bloque2-mg5">
                                <div class="imagen-bloque2"><img src="images/modelos/mg5/seguridad/carroceria.png" /></div>
                                <div class="texto-bloque2-mg5">
                                    <h2>4 AIRBAGS</h2>
                                    <p>Sea en versión mecánica como en versión automática, el MG5 cuenta con 4 airbags (piloto, copiloto y dos laterales), asegurando la máxima protección al conductor y su pasajero al momento de una colisión.</p>

                                    <h2>SENSOR DE RETROCESO</h2>
                                    <p>Una alarma sonora se activa cuando se coloca la palanca de cambios en retroceso, esta alarma avisa cuando el vehículo se está acercando a un objeto por la parte posterior para que el conductor pueda maniobrar con mayor seguridad. La alarma va incrementando la frecuencia para indicar una mayor proximidad al objeto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-1"></div>
                </div>
            </div>

            <!-- Cotizar -->
            <div class="container-cotizar-mg5">

            <div class="container">
                <div class="row">
                <div id="background-cotizar-mg5">
                <div class="col-lg-5 fix-padding">
                    <div id="texto-cotizar">
                        <h4>COTIZAR</h4>
                        <p>¡Felicidades! Estás más cerca de tener tu nuevo MG5 y probar la increíble experiencia de manejarlo. </p>
                    </div>
                </div>
                <div class="col-lg-7 fix-padding">
                    <div id="form-cotizar">
                        <form role="form" id="cotizar-mg5" method="post" action="cotizar-datos.php">
                            <div><input type="text" id="nombres" name="nombres" placeholder="Ingresa tu nombre"></div>
                            <div><input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tu apellido"></div>
                            <div><input type="text" id="telefono" name="telefono"  placeholder="Ingresa tu telefono"></div>
                            <div><input type="text" id="email" name="email" placeholder="Ingresa tu correo"></div>
                            <div><input type="text" id="dni" name="dni" placeholder="Ingresa tu DNI"></div>

                            <div>
                            <select class="mg5-input" name="modelo" id="modelo">
                              <option value="MG 5">MG 5</option>
                            </select>
                            </div>

                            <div>
                            <select class="mg5-input" name="color" id="color">
                              <option value="Scotish Silver">Scotish Silver</option>
                              <option value="Black Opal">Black Opal</option>
                              <option value="Windsor Purple">Windsor Purple</option>
                              <option value="Summit White">Summit White</option>
                              <option value="British Red">British Red</option>
                              <option value="Misty Grey">Misty Grey</option>
                            </select>
                            </div>

                            <div>
                            <select class="mg5-input" name="tienda" id="tienda">
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
                            <input type="image" src="images/modelos/mg5/enviar-btn.png" id="btnSubmit" name="btnSubmit"/>
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

        <!-- Add fancyBox -->
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!-- // Fancybox -->

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
                $('.point4a').tooltipster({ content: $('<span><img src="images/modelos/mg5/tooltip/airbags.png" /></span>')});
                $('.point4b').tooltipster({ content: $('<span><img src="images/modelos/mg5/tooltip/capot.png" /></span>')});
                $('.point4c').tooltipster({ content: $('<span><img src="images/modelos/mg5/tooltip/abs.png" /></span>')});

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
