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
        <link rel="stylesheet" type="text/css" href="css/tooltip/tooltipster.css" />
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/validacionHome.css">

        <!-- Fancybox -->
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />


        <link rel="stylesheet" href="js/fancyboxhelpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

        <!-- //Fancybox -->

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <!-- Google Analytics -->
        <?php include "modulos/analytics.php" ?>
        <!-- //Google Analytics -->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!--Menu principal-->

        <?php include "modulos/common/menu.php" ?>


        <!-- Descripcion Modelo -->
        <div class="container">
            <div class="row">

            <div class="col-lg-12 lifestyle">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 fix-padding">

                <div id="titulo"><h1>LIFESTYLE <span>]</span></h1><div id="linea-titulo-lifestyle"></div></div>

                    <div id="slide-lifestyle">
                    <!-- Slider -->
                        <div class="flexslider lifestyle-slider">
                          <ul class="slides">
                          
                          
                          <li><a href="lifestyle-content.php"><img src="images/lifestyle/banner/002.jpg"></a></li>
                          <li><a href="lifestyle-content.php"><img src="images/lifestyle/banner/003.jpg"></a></li>
                          <li><a href="lifestyle-content.php"><img src="images/lifestyle/banner/004.jpg"></a></li>
                          <li><a lifestyle-content.php><img src="images/lifestyle/banner/005.jpg"></a></li>
                          <li><a href="https://www.facebook.com/MGPeruOficial" target="_blank"><img src="images/lifestyle/banner/006.jpg"></a></li>
                          <li><a class="videoCliente" data-fancybox-type="iframe" href="cliente1000.php"><img src="images/lifestyle/banner/001.jpg"></a></li>
                          <li><a href="lifestyle-content.php"><img src="images/lifestyle/banner/008.jpg"></a></li>
                          <li><a href="lifestyle-content.php"><img src="images/lifestyle/banner/007.jpg"></a></li>
                          </ul>
                        </div>
                        <div style="display:none"><div id="dataVideo"><iframe width="560" height="315" src="//www.youtube.com/embed/a5uQMwRMHcs?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                    </div>


                <div id="social-lifestyle">
                <ul>
                  <li><span>Síguenos en nuestras redes sociales</span></li>
                  <li><a href="https://www.facebook.com/MGPeruOficial" target="_blank"><img src="images/bannerpromocion/fb.png" /></a></li>
                  <li><a href="https://twitter.com/MGPeruOficial" target="_blank"><img src="images/bannerpromocion/tt.png" /></a></li>
                  <li><a href="https://www.youtube.com/user/MGPeruoficial" target="_blank"><img src="images/bannerpromocion/yt.png" /></a></li>
                  <li><a href="http://instagram.com/mgperuoficial" target="_blank"><img src="images/bannerpromocion/ig.png" /></a></li>
                </ul>
                </div>


            </div>

            <div class="col-lg-1"></div>
            </div>

            <!-- Comparte Life Style MG -->


            <div class="col-lg-1"></div>
            <div class="col-lg-10 lifestyle-content">
            
            <div id="lifestyle-comparte">COMPARTE</div>

            <!-- Form -->
            <div id="recomiendanos-form">

                <form id="form-lifestyle" method="post" action="lifestyle-datos.php">
                    <h2>“RECOMIENDANOS TU <span>video favorito</span>, los más divertidos serán <br> <span>publicados cada semana</span>”</h2>
                    <div>
                        <div><input type="text" id="nombre" name="nombres" placeholder="Ingresa tu nombre"></div>
                        <div><input type="text" id="email" name="email" placeholder="Ingresa tu correo"></div>
                        <div><input type="text" id="url" name="url" placeholder="Ingresa URL del video"></div>
                        <div class="boton-enviar-lifestyle"><input type="image" src="images/common/enviar-btn.jpg" id="btnSubmit" name="btnSubmit"/>
                        <input name="origen" value="formulario" type="hidden" /></div>
                    </div>
                </form>

                <div id="form-social">
                    <ul>
                        <li><img src="images/lifestyle/fb.png"></li>
                        <li><img src="images/lifestyle/yt.png"></li>
                        <li><img src="images/lifestyle/tt.png"></li>
                    </ul>
                </div>

            </div>

            <!-- imagen de concurso killer weerk 2015-->
            <div id="lifestyle-videos" class="concursos">
                <h2>CONCURSOS <img class="arrow-lifestyle" src="images/lifestyle/arrow.png" /></h2>
                <a href="doc/base-del-concurso-mg-rock-stars-final.doc"><div id="concursos"></div></a>
                <p>*Promoción válida del 15 de Setiembre al 31 de Octubre de 2015. Fecha de sorteo: 02 de Noviembre. Promoción válida en Lima y provincias. Válidos todos los concesionarios MG (Limautos Automotriz, SKBergé Perú Retail, Interamericana Norte, Interamericana Trujillo, Motorsur y Autodisa). Una oportunidad de participar en el sorteo por cada cotización. Cinco oportunidades de participar en el sorteo por la separación. Veinte oportunidades de participar en el sorteo por la compra. Válido una cotización, separación y/o venta por cliente. Guitarra: Fender Squier</p>
            </div>
            <!-- imagen de concurso killer weerk 2015-->

            <!-- Lista de videos -->

            <div id="lifestyle-videos">
                <!-- Videos Fila 1 -->
                <div>

                    <div>
                        <h2>MAS SOBRE LOS MODELOS MG<img class="arrow-lifestyle" src="images/lifestyle/arrow.png" /></h2>
                        <ul class="videos-lifestyle">
                            <li><a id="inline" href="#data1"><img src="images/lifestyle/videos/modelos-mg/thumb1.jpg"></a></li>
                            <li><a id="inline" href="#data2"><img src="images/lifestyle/videos/modelos-mg/thumb2.jpg"></a></li>
                            <li><a id="inline" href="#data3"><img src="images/lifestyle/videos/modelos-mg/thumb3.jpg"></a></li>
                            <div style="display:none"><div id="data1"><iframe width="560" height="315" src="//www.youtube.com/embed/KTgVP82K72k?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data2"><iframe width="560" height="315" src="//www.youtube.com/embed/rdjSNQGFIe4?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data3"><iframe width="560" height="315" src="//www.youtube.com/embed/8tSG5Pygp5g?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <!--<li><iframe width="184" height="114" src="//www.youtube.com/embed/KTgVP82K72k?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>
                            <li><iframe width="184" height="114" src="//www.youtube.com/embed/rdjSNQGFIe4?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>
                            <li><iframe width="184" height="114" src="//www.youtube.com/embed/8tSG5Pygp5g?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>-->
                        </ul>
                    </div>
                    <div>
                        <ul class="descripcion-videos-lifestyle">
                        <li>NUEVO MG3 2013</li>
                        <li>NUEVO MG5 2013</li>
                        <li>MG5 CHIEF DESIGNER</li>
                        </ul>
                    </div>

                </div>

                <!-- // Videos fila 1 -->

                <!-- Videos Fila 2 -->
                <div id="fila-video-lifestyle">

                    <div>
                        <h2>RECOMENDACIONES MUSICALES<img class="arrow-lifestyle" src="images/lifestyle/arrow.png" /></h2>
                        <ul class="videos-lifestyle">
                            <li><a id="inline" href="#data4"><img src="images/lifestyle/videos/videomusic/thumb1.jpg"></a></li>
                            <li><a id="inline" href="#data5"><img src="images/lifestyle/videos/videomusic/thumb2.jpg"></a></li>
                            <li><a id="inline" href="#data6"><img src="images/lifestyle/videos/videomusic/thumb3.jpg"></a></li>
                            <div style="display:none"><div id="data4"><iframe width="560" height="315" src="//www.youtube.com/embed/6JCLY0Rlx6Q?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data5"><iframe width="560" height="315" src="//www.youtube.com/embed/VHrLPs3_1Fs?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data6"><iframe width="560" height="315" src="//www.youtube.com/embed/PVjiKRfKpPI?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <!--<li><iframe width="184" height="114" src="//www.youtube.com/embed/47dtFZ8CFo8?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>
                            <li><iframe width="184" height="114" src="//www.youtube.com/embed/CJinWua98NA?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>
                            <li><iframe width="184" height="114" src="//www.youtube.com/embed/r2xovJyBo-0?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>-->
                        </ul>
                    </div>
                    <div>
                        <ul class="descripcion-videos-lifestyle">
                        <li>Walk the moon - Shut Up and Dance</li>
                        <li>George Ezra - Budapest</li>
                        <li>Hozier - Take Me To Church</li>
                        </ul>
                    </div>


                </div>

                <!-- // Videos fila 2 -->

                <!-- Videos Fila 3 -->
                <div>
                    <div>
                        <h2>TUS RECOMENDACIONES<img class="arrow-lifestyle" src="images/lifestyle/arrow.png" /></h2>
                        <ul class="videos-lifestyle">
                            <li><a id="inline" href="#data7"><img src="images/lifestyle/videos/recomendaciones/thumb1.jpg"></a></li>
                            <li><a id="inline" href="#data8"><img src="images/lifestyle/videos/recomendaciones/thumb2.jpg"></a></li>
                            <li><a id="inline" href="#data9"><img src="images/lifestyle/videos/recomendaciones/thumb3.jpg"></a></li>
                            <div style="display:none"><div id="data7"><iframe width="560" height="315" src="//www.youtube.com/embed/2VTxYQL2SbA?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data8"><iframe width="560" height="315" src="//www.youtube.com/embed/ST6nEvIEY4s?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <div style="display:none"><div id="data9"><iframe width="560" height="315" src="//www.youtube.com/embed/dW6SkvErFEE?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe></div></div>
                            <!--<li><iframe width="184" height="114" src="//www.youtube.com/embed/a5uQMwRMHcs?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>
                            <li><iframe width="184" height="114" src="//www.youtube.com/embed/XFkzRNyygfk?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>
                            <li><iframe width="184" height="114" src="//www.youtube.com/embed/yyDUC1LUXSU?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></li>-->
                        </ul>
                    </div>
                    <div>
                        <ul class="descripcion-videos-lifestyle">
                        <li>Fall Out Boy - Uma Thurman</li>
                        <li>Kasabian - eez-eh</li>
                        <li>Mumford & Sons - Believe</li>
                        </ul>
                    </div>
                </div>

                <!-- // Videos fila 3 -->
            </div>
            </div>
            <div class="col-lg-1"></div>
            </div>
            
        </div>

        <!-- Cotizar -->

            <div class="backtop">
            <ul>
                <!--<li><a href="cotizar.php"><img src="images/common/cotizar-btn.jpg"></a></li>-->
                <li><a href="#" class="back-to-top"><img src="images/common/top-btn.png"></a></li>
            </ul>
            
            </div>

        <!-- Footer -->

        <?php include "modulos/common/footer.php" ?>

        <!-- //Footer -->

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        

        <script src="js/main.js"></script>
        <script type="js/vendor/bootstrap.js"></script>
        <script type="text/javascript" src="js/tooltip/jquery.tooltipster.min.js"></script>
        <script defer src="js/jquery.flexslider.js"></script>
        <script src="js/validacionHome.js"></script>

        <!-- Add fancyBox -->
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

        <script>

        $(document).ready(function(){
            $("#modelos").click(function(){
                $("#menu-modelos").slideToggle("fast");
                //alert( "Handler for .click() called." );
            });

        });

        
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                startAt: 0
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

            $(document).ready(function() {
            /* This is basic - uses default settings */
                
                
                /* Using custom settings */
                
                $("a#inline").fancybox({
                    'hideOnContentClick': true
                });



            });

        </script>

<!-- Google Analytics -->
<?php include "modulos/remarketing.php" ?>
<!-- //Google Analytics -->


    </body>
</html>
