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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mediaqueries.css">
        <link rel="stylesheet" href="css/promo.css">



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


        <!-- PROMOCION LUCETE CON TU MG -->
    <div id="contenido-lucetumg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-sx-12 cotizar">
            <div class="col-lg-1 col-sm-1 col-sx-1"></div>
              <div class="col-lg-10 col-sm-10 col-sx-10 fix-padding">

                <div id="titulo"><h1>PROMOCIÓN <span>]</span></h1><div id="linea-titulo-promociones"></div></div>

                <div id="promo">
                  <div id="titulo-promo"></div><!-- end of titulo-promo -->
                  <div class="botones" id="botones-mg350">
                    <a href="http://www.mgmotors.com.pe/mg350.php" target="_blank" class="btn-custom btn-conocelo"></a>
                    <a href="http://www.mgmotors.com.pe/cotizar.php" target="_blank" class="btn-custom btn-cotizar"></a>
                  </div><!-- end of botones-mg350 -->
                  <div class="botones" id="botones-mg3">
                    <a href="http://www.mgmotors.com.pe/mg3.php" target="_blank" class="btn-custom btn-conocelo"></a>
                    <a href="http://www.mgmotors.com.pe/cotizar.php" target="_blank" class="btn-custom btn-cotizar"></a>
                  </div><!-- end of botones-mg3 -->
                  <div class="botones" id="botones-mg5">
                    <a href="http://www.mgmotors.com.pe/mg5.php" target="_blank" class="btn-custom btn-conocelo"></a>
                    <a href="http://www.mgmotors.com.pe/cotizar.php" target="_blank" class="btn-custom btn-cotizar"></a>
                  </div><!-- end of botones-mg5 -->
                  <ul id="redes">
                    <li id="fb"><a href="https://www.facebook.com/MGPeruOficial" target="_blank"></a></li>
                    <li id="tw"><a href="https://twitter.com/MGPeruOficial" target="_blank"></a></li>
                    <li id="yt"><a href="https://www.youtube.com/user/MGPeruoficial" target="_blank"></a></li>
                    <li id="ig"><a href="http://instagram.com/mgperuoficial" target="_blank"></a></li>
                    <li id="sf"><a href="https://play.spotify.com/user/#estaciónmg" target="_blank"></a></li>
                    <li id="pt"><a href="https://www.pinterest.com/mgperu/" target="_blank"></a></li>
                  </ul>
                </div><!-- end of promo -->
                <div class="col-lg-1"></div>
              </div>
            </div>
          </div>
        </div><!-- end of .row -->
      </div><!-- end of .container -->
    </div><!-- end of contenido-lucetumg -->
    <!-- FIN PROMOCION LUCETE CON TU MG -->

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
        <script type="text/javascript" src="js/TimeCircles.js"></script>

        <script>
        $(document).ready(function(){
            $("#modelos").click(function(){
                $("#menu-modelos").slideToggle("fast");
                //alert( "Handler for .click() called." );
            });

            $("#diseno").click(function(){
                $("#diseno-content").slideToggle("fast");
            })
            $("#equipamiento").click(function(){
                $("#equipamiento-content").slideToggle("fast");
            })
            $("#seguridad").click(function(){
                $("#seguridad-content").slideToggle("fast");
            });

        });

            $(document).ready(function() {
                $('.point1a').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
                $('.point1b').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
                $('.point1c').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
            });

            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide"
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

            /*----------- CountDown ----------*/

            $("#DateCountdown").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            
            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $("#CountDownTimer").TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $("#CountDownTimer").TimeCircles().stop();
            });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                $("#PageOpenTimer").fadeIn();
            });
            $(".fadeOut").click(function() {
                $("#PageOpenTimer").fadeOut();
            });
        </script>

    <!-- Pixels Remarketing -->
    <?php include "modulos/remarketing.php" ?>
    <!-- //Pixels Remarketing -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>
