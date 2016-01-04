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



        <script src="js/vendor/modernizr-2.6.2.min.js"></script>


        <!-- Google Analytics -->
        <?php include "modulos/analytics.php" ?>
        <!-- //Google Analytics -->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Facebook Pixel -->
        <?php include "modulos/fb-pixel-tp.php" ?>
        <!-- //Facebook Pixel -->
        
    <!--Menu principal-->

        <?php include "modulos/common/menu.php" ?>


        <!-- Descripcion Modelo -->
        <div class="container">
        <div class="row">

        <div class="col-lg-12 cotizar">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 fix-padding">
            <div id="titulo"><h1>COTIZA AQUÍ  <span>]</span></h1><div id="linea-titulo-cotizar"></div></div>

                <!-- DBanner UK Design -->
                <div id="cotizar-content">
                <img src="images/cotizar/enviado.jpg">
                </div>
        </div>
        <div class="col-lg-1"></div>
        </div>
            
        </div>
            
        </div>

        <!-- Cotizar -->

            <div class="backtop">
            <ul>
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
        </script>

        <script>
            $(document).ready(function() {
                $('.coti1a').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/airbag.png" /></span>')});
                $('.coti1b').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/motor.png" /></span>')});
                $('.coti1c').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/abs.png" /></span>')});

                $('.coti2a').tooltipster({ content: $('<span><img src="images/modelos/mg3xross/tooltip/airbags.png" /></span>')});
                $('.coti2b').tooltipster({ content: $('<span><img src="images/modelos/mg3xross/tooltip/molduras.png" /></span>')});
                $('.coti2c').tooltipster({ content: $('<span><img src="images/modelos/mg3xross/tooltip/aros.png" /></span>')});

                $('.coti3a').tooltipster({ content: $('<span><img src="images/modelos/mg350/tooltip/abs.png" /></span>')});
                $('.coti3b').tooltipster({ content: $('<span><img src="images/modelos/mg350/tooltip/anclaje.png" /></span>')});
                $('.coti3c').tooltipster({ content: $('<span><img src="images/modelos/mg350/tooltip/neblineros.png" /></span>')});

                $('.coti4a').tooltipster({ content: $('<span><img src="images/modelos/mg5/tooltip/airbags.png" /></span>')});
                $('.coti4b').tooltipster({ content: $('<span><img src="images/modelos/mg5/tooltip/capot.png" /></span>')});
                $('.coti4c').tooltipster({ content: $('<span><img src="images/modelos/mg5/tooltip/abs.png" /></span>')});

                $('.coti5a').tooltipster({ content: $('<span><img src="images/modelos/mg6/tooltip/interior.png" /></span>')});
                $('.coti5b').tooltipster({ content: $('<span><img src="images/modelos/mg6/tooltip/motor.png" /></span>')});
                $('.coti5c').tooltipster({ content: $('<span><img src="images/modelos/mg6/tooltip/aros.png" /></span>')});
            });

            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide"
              });
            });

            $(document).ready(function(){
                $( "#modelo" ).change(function() {
                  var valor = $(this).val();
                  //alert(valor);
                  console.log(valor);
                  switch(valor){
                    case "MG 3":
                    $(".modelo-mg3").show();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg6").hide();
                    break;

                    case "MG 3 Xross":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").show();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg6").hide();
                    break;

                    case "MG 350":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").show();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg6").hide();
                    break;

                    case "MG 5":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").show();
                    $(".modelo-mg6").hide();
                    break;

                    case "MG 6":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg6").show();
                    break;
                  }

                });
                //$( ".target" ).show();
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


<!-- Google Code for NUEVA WEB: Contacto General Conversion Page -->        
<script type="text/javascript">     
/* <![CDATA[ */     
var google_conversion_id = 999351017;       
var google_conversion_language = "en";      
var google_conversion_format = "2";     
var google_conversion_color = "ffffff";     
var google_conversion_label = "wIieCNe-4AgQ6cXD3AM";        
var google_remarketing_only = false;        
/* ]]> */       
</script>       
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">       
</script>       
<noscript>      
<div style="display:inline;">       
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/999351017/?label=wIieCNe-4AgQ6cXD3AM&amp;guid=ON&amp;script=0"/>      
</div>      
</noscript>     


<!-- Google Analytics -->
<?php include "modulos/remarketing.php" ?>
<!-- //Google Analytics -->

<!-- Pixel MG3Xross -->
<iframe src="http://www2.balao.de/SLIH3" scrolling="no" frameborder="0" width="1" height="1"></iframe>
<!--// Pixel MG3Xross-->

    </body>
</html>
