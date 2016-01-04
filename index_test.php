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
        <link rel="stylesheet" href="css/slide.css">
        <link rel="stylesheet" href="css/validacionHome.css">


        <!-- Fancybox -->
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />


        <link rel="stylesheet" href="js/fancyboxhelpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

        <!-- //Fancybox -->


        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body class="body-black">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <!--Menu principal-->
      <?php include "modulos/common/menu.php" ?>

        <div class="container">

          <div id="bannerhome-content">
              <section>
                  <div id="bannerhome">
                      <a href="mg3.php"><img src="images/bannerhome/slide/banner01.jpg" /></a>
                      <a href="mg3xross.php"><img src="images/bannerhome/slide/banner02.jpg" /></a>
                      <a href="mg350.php"><img src="images/bannerhome/slide/banner03.jpg" /></a>
                      <a href="mg5.php"><img src="images/bannerhome/slide/banner04.jpg" /></a>
                      <!--<a href="mg6.php"><img src="images/bannerhome/slide/banner05.jpg" /></a>-->
                  </div>
              </section>
                <!--<div id="banner-tienda">
                <a href="concesionarios.php"><img src="images/bannerpromocion/tiendas.png" /></a>
                </div>-->
                <div id="social-home">
                <ul>
                  <li><a href="concesionarios.php"><img src="images/bannerpromocion/tienda.png" /></a></li>
                  <li><a href="https://www.facebook.com/MGPeruOficial" target="_blank"><img src="images/bannerpromocion/fb.png" /></a></li>
                  <li><a href="https://twitter.com/MGPeruOficial" target="_blank"><img src="images/bannerpromocion/tt.png" /></a></li>
                  <li><a href="https://www.youtube.com/user/MGPeruoficial" target="_blank"><img src="images/bannerpromocion/yt.png" /></a></li>
                  <li><a href="http://instagram.com/mgperuoficial" target="_blank"><img src="images/bannerpromocion/ig.png" /></a></li>
                </ul>
                </div>
                <div id="promocion-banner">
                  <a href="http://www.santanderconsumer.com.pe/SimuladordeCredito.aspx" target="_blank"><img src="images/bannerpromocion/santander-btn-home.png" /></a>
                </div>
          </div>

            <div class="row">
                    <section>
                    <div id="banners">
                        <section>
                            <div class="banner-modelos">
                              <a href="modelos.php"><img class="modelosOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-ukdesign">
                              <a href="ukdesign.php"><img class="ukdesignOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-historia">
                              <a href="historia-mg.php"><img class="historiaOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-form">
                              <form id="newsletter-form" method="post" action="newsletter-datos.php">
                                <div>
                                  <h3>[ RECIBE NOVEDADES MG ]</h3>
                                  <p>Entérate de lo último de la comunidad MG</p>
                                    <div><input type="text" id="nombre" placeholder="Ingresa tu nombre completo" name="nombres"></div>
                                    <div><input type="text" id="email" placeholder="Ingresa tu correo" name="email"></div>
                                    <div class="boton-enviar">
                                    <input type="image" src="images/common/enviar-btn.jpg" id="btnSubmit" name="btnSubmit"/>
                                    <input name="origen" value="formulario" type="hidden" />
                                    </div>
                                </div>


                              </form>
                            </div>
                            <div class="banner-lifestyle">
                              <a href="lifestyle.php"><img class="lifestyleOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-promociones">
                              <a href="promociones.php"><img class="promocionesOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-cotizar">
                              <a href="cotizar.php"><img class="cotizarOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-testimoniales">
                              <a href="testimoniales.php" ><img class="testimonialesOff" src="" ></a>
                              <div><img src="" ></div>
                            </div>
                            <div class="banner-noticias">
                              <a href="noticias.php"><img class="noticiasOff" src="" ></a>
                              <div><img src="" ></div>

                            </div>
                            <!--<div class="banner-botton"><img src="images/bannerhome/historia.jpg" /></div>
                            <div class="banner-botton"><img src="images/bannerhome/form.jpg" /></div>
                            <div class="banner-botton"><img src="images/bannerhome/lifestyle.jpg" /></div>
                            <div class="banner-botton"><img src="images/bannerhome/promociones.jpg" /></div>
                            <div class="banner-botton"><img src="images/bannerhome/cotizar.jpg" /></div>
                            <div class="banner-botton"><img src="images/bannerhome/testimoniales.jpg" /></div>
                            <div class="banner-noticias"><a href="noticias.php"><img src="images/bannerhome/noticias.jpg" /></a></div>-->
                        </section>
                    </div>
            </div>


            <!-- Footer -->

            <?php include "modulos/common/footer.php" ?>
  
            <!-- //Footer -->

            <!-- Pop-up -->
            <div id="hidden_link">

              <iframe width="640" height="360" src="//www.youtube.com/embed/--TDk3VAKGU?list=PLqFRVH6sILx9enHwqeV9jB8dWfLh-7iMe" frameborder="0" allowfullscreen></iframe>

            </div>
            <!-- //Pop-up -->
        </div>


        


        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
        <script type="js/vendor/bootstrap.js"></script>
        <script type="js/slide/jquery.slides.min.js"></script>
        <script src="js/slide/jquery.slides.min.js"></script>
        <script src="js/bannerFunctions.js"></script>
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
        </script>

  <script>
$(function(){
  $("#bannerhome").slidesjs({
    start:1,
    play: {
      active: true,
      effect: "fade",
      interval:5000,
      auto: false,
      swap: false,
      pauseOnHover: false,
      restartDelay: 2500
    },
    pagination: {
      active: true,
      effect: "fade"
    },
    navigation: {
      active: false,
        // [boolean] Generates next and previous buttons.
        // You can set to false and use your own buttons.
        // User defined buttons must have the following:
        // previous button: class="slidesjs-previous slidesjs-navigation"
        // next button: class="slidesjs-next slidesjs-navigation"
      effect: "fade"
        // [string] Can be either "slide" or "fade".
    },
    play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: false,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500,
        // [number] restart delay on inactive slideshow
    }

  });
});

  </script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#hidden_link").fancybox().trigger('click');
    });
</script>



<!-- Google Analytics -->
<?php include "modulos/analytics.php" ?>
<!-- //Google Analytics -->

    </body>
</html>
