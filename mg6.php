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

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/galeria.css">
        <link rel="stylesheet" type="text/css" href="css/tooltip/tooltipster.css" />
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/validacion.css">


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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mg6-landing">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 fix-padding">
                        <div id="logo-auto"><img src="images/modelos/mg6/logomg6.png" /></div>
                        <div id="modelo">


                        <div class="point5a"><a><img class="tooltip" src="images/modelos/mg6/plus.png" /></a></div>
                        <div class="point5b"><a><img class="tooltip" src="images/modelos/mg6/plus.png" /></a></div>
                        <div class="point5c"><a><img class="tooltip" src="images/modelos/mg6/plus.png" /></a></div>

                        <div id="color-auto">
                        <img src="images/modelos/mg6/colores/001.png" />
                        <img src="images/modelos/mg6/colores/002.png" />
                        <img src="images/modelos/mg6/colores/003.png" />
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 fix-padding">
                        <div id="descripcion">
                            <p>El deportivo por excelencia de la marca. Su diseño dinámico y su atractivo interior te aseguran un viaje placentero.</p>
                        </div>
                        <div id="social">
                            <ul>
                                <li><div class="fb-like" data-href="http://www.mgmotors.com.pe/mg6.php" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
                                <li><a href="http://www.mgmotors.com.pe/mg6.php" class="twitter-share-button" data-lang="en">Tweet</a></li>
                            </ul>
                        </div>
                        <div id="menu-derecha">
                            <ul>
                                <li><a href="#form-cotizar" class="nav-button"><img src="images/modelos/mg6/cotizar-btn.png" /></a></li>
                                <li><a href="pdf-files/mg6.pdf"><img src="images/modelos/mg6/ficha-btn.png" /></a></li>
                                <li><a href="#slide" class="nav-button"><img src="images/modelos/mg6/galeria-btn.png" /></a></li>
                                <li><a href="http://www.santanderconsumer.com.pe/SimuladordeCredito.aspx" target="_blank"><img src="images/bannerpromocion/santander-btn.png" /></a></li>
                            </ul>

                        <!-- Colores -->
                        <div id="colores-modelo">
                        <h2>COLORES</h2>
                            <ul id="nom-colores">
                                <li class="nom-selected">Manchester Red</li>
                                <li >Black Opal</li>
                                <li>Summit White</li>
                            </ul>
                            <div id= "print-colorname" class= "nom-selected">Scotish Silver</div>

                            <div id="paleta-colores">
                            <img class="selected" src="images/modelos/mg6/colores/thumbs/001.png" colorname="Manchester Red"  />
                            <img src="images/modelos/mg6/colores/thumbs/002.png" colorname="Black Opal"  />
                            <img src="images/modelos/mg6/colores/thumbs/003.png" colorname="Summit White" />
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
                            <li><a href="http://on.fb.me/1dthAX8" target="_blank"><img src="images/modelos/mg3/tunea-btn.png" /></a></li>
                            <li><a id="inline" href="#data1"><img src="images/modelos/mg6/videoThumb-1.jpg" /></a></li>
                            <li><a id="inline" href="#data2"><img src="images/modelos/mg6/videoThumb-2.jpg" /></a></li>
                        </ul>
                            <div style="display:none"><div id="data1"><iframe width="600" height="338" src="//www.youtube.com/embed/vu9rRFSG7Gw?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data2"><iframe width="600" height="338" src="//www.youtube.com/embed/-lYWBIAHgo4?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                    </div>
                </div>
            <div class="col-lg-1"></div>
            </div>
            <!-- //Banners Modelo -->

            <!-- Galería -->

            <div class="row banners-modelos-fix">
            <div class="col-lg-1"></div>
                <div class="col-lg-10" id="slide">
                    <div id="galeria-modelo-mg6">
                        <h3>GALERÍA<img class="h3-ico" src="images/modelos/mg6/arrow.png" /></h3>

                    <!-- Slider -->

                    <div class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="images/modelos/mg6/galeria/item-01.jpg" />
                        </li>
                        <li>
                          <img src="images/modelos/mg6/galeria/item-02.jpg" />
                        </li>
                        <li>
                          <img src="images/modelos/mg6/galeria/item-03.jpg" />
                        </li>
                        <li>
                          <img src="images/modelos/mg6/galeria/item-04.jpg" />
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
                            <img class="pestana-arrow-mg6" src="images/modelos/mg6/_arrow.jpg" />
                        </div>

                        <!-- Diseño -->
                        <div id="diseno-content">
                            <div id="disenomg6-left">
                                <img src="images/modelos/mg6/diseno/mg6-left.jpg" />
                            </div>
                            <div id="disenomg6-right">
                                <div id="texto-mg6">
                                <h2>LOOK DEPORTIVO</h2>
                                <p>El MG6 tiene una apariencia deportiva, la cual remite al pasado legendario de la marca. Tiene, además, unas líneas laterales que parten desde los faros alargados, los cuales otorgan mayor agilidad al vehículo. </p>
                                <img src="images/modelos/mg6/diseno/mg6-right.jpg" />
                                </div>
                            </div>

                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/diseno/large_001.jpg"><img src="images/modelos/mg6/diseno/diseno-btn1.png" alt="Líneas que otorgan agilidad" /></a>
                                    <p>LINEAS QUE OTORGAN AGILIDAD</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/diseno/large_002.jpg"><img src="images/modelos/mg6/diseno/diseno-btn2.png" alt="Elegante y sobrio" /></a>
                                    <p>ELEGANTE Y SOBRIO</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/diseno/large_003.jpg"><img src="images/modelos/mg6/diseno/diseno-btn3.png" alt="Liftback" /></a>
                                    <p>LIFTBACK</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/diseno/large_004.jpg"><img src="images/modelos/mg6/diseno/diseno-btn4.png" alt="Aros de Aleación de 17" /></a>
                                    <p>AROS DE ALEACIÓN DE 17"</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Equipamiento -->
                        <div id="equipamiento">
                            <h3>EQUIPAMIENTO</h3>
                            <img class="pestana-arrow-mg6" src="images/modelos/mg6/_arrow.jpg" />
                        </div>

                        <div id="equipamiento-content" style="display:none;">
                            <div id="eq-destacado-mg6">
                                <div class="eq-texto-mg6">
                                    <h2>COMODIDAD EN TODOS LOS DETALLES</h2>
                                    <p>El equipamiento del MG6 está pensado en brindar comodidad a sus usuarios. Su look deportivo se percibe tanto en el exterior como en el interior. El MG6 cuenta con spolier, aros de aleación de 17”, detalles en cromo y paddle shift.El equipamiento del MG6 está pensado en brindar comodidad a sus usuarios. Su look deportivo se percibe tanto en el exterior como en el interior. El MG6 cuenta con spolier, aros de aleación de 17”, detalles en cromo y paddle shift.</p>
                                </div>
                            </div>

                            <div id="slide-botones">
                                <ul>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/equipamiento/large_001.jpg"><img src="images/modelos/mg6/equipamiento/eq-btn1.png" alt="Caja automática" /></a>
                                    <p>CAJA AUTOMÁTICA</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/equipamiento/large_002.jpg"><img src="images/modelos/mg6/equipamiento/eq-btn2.png" alt="Motor 1.8 Turbo" /></a>
                                    <p>MOTOR 1.8 TURBO</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/equipamiento/large_003.jpg"><img src="images/modelos/mg6/equipamiento/eq-btn3.png" alt="Infocenter" /></a>
                                    <p>INFOCENTER</p>
                                    </li>
                                    <li>
                                    <a class="fancybox" rel="group" href="images/modelos/mg6/equipamiento/large_004.jpg"><img src="images/modelos/mg6/equipamiento/eq-btn4.png" alt="Timón tipo cuero" /></a>
                                    <p>TIMÓN TIPO CUERO</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- Seguridad -->

                        <div id="seguridad">
                            <h3>SEGURIDAD</h3>
                            <img class="pestana-arrow-mg6" src="images/modelos/mg6/_arrow.jpg" />
                        </div>
                        <div id="seguridad-content" style="display:none;">
                            <div id="seguridad-bloque1">
                                <div class="imagen-bloque1"><img src="images/modelos/mg6/seguridad/segu-1.jpg" /></div>
                                <div class="texto-bloque1-mg6">
                                    <div id="abs-texto">
                                    <div class="abs"><span>TODOS LOS MG CUENTAN CON</span></div>
                                        <ul class="abs-lista">
                                            <li><div class="abs1"><img src="images/modelos/mg6/seguridad/abs-ico.png"></div></li>
                                            <li><div class="abs2"><img src="images/modelos/mg6/seguridad/ebd-ico.png"></div></li>
                                            <li><div class="abs3"><img src="images/modelos/mg6/seguridad/cbc-ico.png"></div></li>
                                            <li><div class="abs4"><img src="images/modelos/mg6/seguridad/ba-ico.png"></div></li>

                                        </ul>
                                    </div>
                                    <h2>INMOVILIZER</h2>
                                    <p>El Inmobilizer o Inmovilizador es un sistema avanzado de seguridad antirrobo. La llave cuenta con un transponder que envía el código de seguridad a la computadora, antes del arranque, ésta lo confirma y recién después de esto, se procede a la ignición o encendido.</p>

                                    <h2>ALERTA AUDITIVA DE VELOCIDAD</h2>
                                    <p>Este modelo cuenta con una opción en la computadora de viaje para configurar una alerta de velocidad que, al ser alcanzada notificará con un sonido, así como en la pantalla. Esta alerta permite sobrepasar esa velocidad pero la alerta se mantiene encendida.</p>
                                </div>
                            </div>
                            <div id="seguridad-bloque2">
                                <div class="imagen-bloque2"><img src="images/modelos/mg6/seguridad/segu-2.jpg" /></div>
                                <div class="texto-bloque2-mg6">
                                    <h2>CIERRE CENTRALIZADO AUTOMÁTICO</h2>
                                    <p>El sistema se activa al iniciar la marcha cerrando los pestillos de las puertas de forma automática. Éste se puede desactivar con los botones de seguro de las puertas. También se desactiva de forma automática al apagar el motor y quitar el contacto.</p>

                                    <h2>SISTEMAS DE FRENADO EBD</h2>
                                    <p>EBD (Electronic Brake Distribution) o Distribución electrónica del frenado: Este sistema determina cuánta potencia aplicar a cada neumático, tomando en consideración la distribución del peso dentro del auto, para detenerlo en la menor distancia y sin perder el control.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-1"></div>
                </div>
            </div>

            <!-- Cotizar -->
            <div class="container-cotizar-mg6">

            <div class="container">
                <div class="row">
                <div id="background-cotizar-mg6">
                <div class="col-lg-5 fix-padding">
                    <div id="texto-cotizar">
                        <h4>COTIZAR</h4>
                        <p>¡Felicidades! Estás más cerca de tener tu nuevo MG6 y probar la increíble experiencia de manejarlo.</p>
                    </div>
                </div>
                <div class="col-lg-7 fix-padding">
                    <div id="form-cotizar">
                        <form role="form" id="cotizar-mg6" method="post" action="cotizar-datos.php">
                            <div><input type="text" id="nombres" name="nombres" placeholder="Ingresa tu nombre"></div>
                            <div><input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tu apellido"></div>
                            <div><input type="text" id="telefono" name="telefono"  placeholder="Ingresa tu telefono"></div>
                            <div><input type="text" id="email" name="email" placeholder="Ingresa tu correo"></div>
                            <div><input type="text" id="dni" name="dni" placeholder="Ingresa tu DNI"></div>

                            <div>
                            <select class="mg6-input" name="modelo" id="modelo">
                              <option value="MG 6">MG 6</option>
                            </select>
                            </div>

                            <div>
                            <select class="mg6-input" name="color" id="color">
                              <option value="Manchester Red">Manchester Red</option>
                              <option value="Black Opal">Black Opal</option>
                              <option value="Summit White">Summit White</option>
                            </select>
                            </div>

                            <div>
                            <select class="mg6-input" name="tienda" id="tienda">
                              <option value="">- Elige una tienda -</option>
                              <option value="surquillo">Surquillo (Tomás Marsano 139)</option>
                              <option value="sanmiguel">San Miguel (Elmer Faucett 149)</option>
                              <option value="santaanita">Santa Anita (Mall Aventura Plaza)</option>
                              <option value="independencia">Independencia (CC Lima Plaza Norte)</option>
                              <option value="sanborja">San Borja (Av. San Luis 2441)</option>
                              <option value="chorrillos">Chorrillos (Av. Prolongación Huaylas km. 22.5 Pantanos de Villa)</option>
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
                            <input type="image" src="images/modelos/mg6/enviar-btn.png" id="btnSubmit" name="btnSubmit"/>
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
                $('.point5a').tooltipster({ content: $('<span><img src="images/modelos/mg6/tooltip/interior.png" /></span>')});
                $('.point5b').tooltipster({ content: $('<span><img src="images/modelos/mg6/tooltip/motor.png" /></span>')});
                $('.point5c').tooltipster({ content: $('<span><img src="images/modelos/mg6/tooltip/aros.png" /></span>')});


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

<!-- Google Analytics -->
<?php include "modulos/analytics.php" ?>
<!-- //Google Analytics -->


    </body>
</html>
