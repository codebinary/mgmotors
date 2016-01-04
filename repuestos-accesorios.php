<?php

//Sesión para comunicarse con el archivo PHP de envio de formularios: contacto_datos.php
session_start();
$_SESSION['estado']="activo";

require_once 'class/class_list.php';
$listas = new Listas();
$listDepartamentos = $listas->showListDepartamentos();
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

        <meta property="og:title" content=".:: MG PERU | SITIO OFICIAL ::." />
        <meta property="og:description" content="MG es una marca inglesa con 90 años de historia, perteneciente a una de las corporaciones de automóviles más grande del mundo; SAIC GROUP. Con un centro de diseño y de control en Birgminham, Inglaterra nuestros autos están regidos por la legislación de calidad europea.  En el Perú, está respaldado por el grupo SKBergé, uno de los grupos automotores más grande de Latinoamérica. Visita este sitio web y conoce más de MG!" />
        <meta property="og:image" content="http://www.mgmotors.com.pe/images/common/logoMG_web.jpg" />

        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/slide.css">
        <link rel="stylesheet" href="css/validacion-mantenimiento.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mediaqueries.css">
        

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <!-- Google Analytics -->
        <?php include "modulos/analytics.php" ?>
        <!-- //Google Analytics -->

    </head>
    <body>

        <!-- Facebook Pixel -->
        <?php include "modulos/fb-pixel.php" ?>
        <!-- //Facebook Pixel -->
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!--Menu principal-->

        <?php include "modulos/common/menu.php" ?>


        <!-- Descripcion Modelo -->
        <div class="container">
        <div class="row">

        <div class="col-lg-12 col-sm-12 col-sx-12 cotizar">
        <div class="col-lg-1 col-sm-1 col-sxm-1"></div>
        <div class="col-lg-10 col-sm-10 col-sx-10 fix-padding">
            <div id="titulo"><h1>POSVENTA <span>]</span></h1><div id="linea-titulo-cotizar"></div></div>

                <nav class="menu-postventa">
                    <ul>
                        <li><a href="servicio.php">SERVICIO</a></li>
                        <li class="linea">|</li>
                        <li class="activado"><a href="repuestos-accesorios.php">REPUESTOS Y ACCESORIOS</a><div><img class="centrar" src="images/historia/arrow-menu.png" /></div></li>
                        <li class="linea">|</li>
                        <li><a href="talleres.php">TALLERES AUTORIZADOS</a></li>
                    </ul>
                </nav>

                <!-- Manteimiento-Content -->
                <div id="accesorios-content">

                  <div id="imagen-accesorios">
                    
                  </div>

                    <h2>SOLICITA TU ACCESORIO / REPUESTOS</h2>
                    <div id="form-mantenimiento-mg">
                        <form role="form" id="formulario-mantenimiento" method="post" action="accesorios-datos.php">
                            <div><input type="text" id="nombres" name="nombres" placeholder="Ingresa tu nombre"></div>
                            <div><input type="text" id="telefono" name="telefono"  placeholder="Ingresa tu telefono de contacto"></div>
                            <div><input type="text" id="email" name="email" placeholder="Ingresa tu correo"></div>

                            <!-- Elije un Modelo -->
                            <div>
                              <select class="accesorios-input" name="modelo" id="modelo">
                                <option value="">- Elige tu MG -</option>
                                <option value="MG TF">MG TF</option>
                                <option value="MG 750">MG 750</option>
                                <option value="MG 350">MG 350</option>
                                <option value="MG 3">MG 3</option>
                                <option value="MG 3 Xross">MG 3 Xross</option>
                                <option value="MG 5">MG 5</option>
                                <option value="MG 6">MG 6</option>
                                <!--<option value="MG 6">MG 6</option>-->
                              </select>
                            </div>
                            <!--<div class="fecha-bloque">
                              <select class="accesorios-input" name="solicitud" id="solicitud">
                                <option value="">- Elige tu solicitud -</option>
                                <option value="Comprar">Comprar</option>
                                <option value="Catálogo">Catálogo</option>
                                <option value="Cotización">Cotización</option>
                                <!--<option value="MG 6">MG 6</option>
                              </select>
                            </div>-->
                            <div class="fecha-bloque">
                              <input class="placa" type="text" name="placa" id="placa" placeholder="Ingresa tu Nº de placa">
                            </div>
                            <div>
                              
                              <div>
                                <select class="mantenimiento-input" name="departamento" id="departamento">
                                  <option value="">- Elige un Departamento-</option>
                                  <?php for($n=1; $n<count($listDepartamentos); $n++): ?>
                                    <option value="<?= $listDepartamentos[$n]->depart_id; ?>"><?= $listDepartamentos[$n]->depart_name; ?></option>
                                  <?php endfor; ?>
                                </select>
                              </div> 

                            <div><input type="text" id="accesorios" name="accesorios" placeholder="Ingresa el nombre del repuesto"></div>

                            </div>

                            <div class="boton-enviar">
                            <input type="image" src="images/common/enviar-btn.jpg" id="btnSubmit" name="btnSubmit"/>
                            <input name="origen" value="formulario" type="hidden" />
                            </div>
                        </form>
                    </div>
                    <span class="legal-referenciales">Fotos referenciales</span>
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
        <script defer src="js/validacion_repuesto.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script src="js/getList.js"></script>

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

      /**************************************/
      $('#taller').prop('disabled', true);
    
      $('#departamento').on('change', function() {
        console.log('Llego a hacer el cambio');

        var getDepartamento = $('#departamento option:selected').val();
        $.ajax({
          url     : "ajax.php?page=listRSocial",
          type    : "GET",
          dataType: 'json',
          data    : {
            idDepart  : getDepartamento
          },
          beforeSend: function(){
            console.log('Envio de datos');
          },
          success : function(data) {
            console.log('---');
            console.dir(data);
            console.log('---');

            $('#taller').prop('disabled', false);

            var cboHtml =  '<option value="">- Elige un Taller Autorizado-</option>';
            for(var x=0; x<data.length; x++){
              cboHtml +=  '<option value="'+ data[x].rsocial_id +'">'+ data[x].rsocial_name +'</option>';
            }
            $('#taller').html(cboHtml);
          },
          error: function(data) {
            console.log('Error :(');
            console.log(data);
          }
        });
      });

    });
  </script>


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

                $('.coti6a').tooltipster({ content: $('<span><img src="images/modelos/mg5-turbo/tooltip/airbags.png" /></span>')});
                $('.coti6b').tooltipster({ content: $('<span><img src="images/modelos/mg5-turbo/tooltip/tactil.png" /></span>')});
                $('.coti6c').tooltipster({ content: $('<span><img src="images/modelos/mg5-turbo/tooltip/paddle.png" /></span>')});
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
                    $(".modelo-mg5-turbo").hide();
                    $(".modelo-mg6").hide();

                    $(".color-mg3").hide();
                    $(".color-mg3xross").show();
                    $(".color-mg350").hide();
                    $(".color-mg5").hide();
                    $(".color-mg5-turbo").hide();
                    $(".color-mg6").hide();
                    break;

                    case "MG 3 Xross":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").show();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg5-turbo").hide();
                    $(".modelo-mg6").hide();

                    $(".color-mg3").hide();
                    $(".color-mg3xross").show();
                    $(".color-mg350").hide();
                    $(".color-mg5").hide();
                    $(".color-mg5-turbo").hide();
                    $(".color-mg6").hide();
                    break;

                    case "MG 350":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").show();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg5-turbo").hide();
                    $(".modelo-mg6").hide();

                    $(".color-mg3").hide();
                    $(".color-mg3xross").hide();
                    $(".color-mg350").show();
                    $(".color-mg5").hide();
                    $(".color-mg5-turbo").hide();
                    $(".color-mg6").hide();
                    break;

                    case "MG 5":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").show();
                    $(".modelo-mg5-turbo").hide();
                    $(".modelo-mg6").hide();

                    $(".color-mg3").hide();
                    $(".color-mg3xross").hide();
                    $(".color-mg350").hide();
                    $(".color-mg5").show();
                    $(".color-mg5-turbo").hide();
                    $(".color-mg6").hide();
                    break;

                    case "MG 5 Turbo":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg5-turbo").show();
                    $(".modelo-mg6").hide();

                    $(".color-mg3").hide();
                    $(".color-mg3xross").hide();
                    $(".color-mg350").hide();
                    $(".color-mg5").hide();
                    $(".color-mg5-turbo").show();
                    $(".color-mg6").hide();
                    break;

                    case "MG 6":
                    $(".modelo-mg3").hide();
                    $(".modelo-mg3xross").hide();
                    $(".modelo-mg350").hide();
                    $(".modelo-mg5").hide();
                    $(".modelo-mg5-turbo").hide();
                    $(".modelo-mg6").show();

                    $(".color-mg3").hide();
                    $(".color-mg3xross").hide();
                    $(".color-mg350").hide();
                    $(".color-mg5").hide();
                    $(".color-mg5-turbo").hide();
                    $(".color-mg6").show();
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


  <script>
  $(function() {
    $( "#dia" ).datepicker();
  });
  </script>

    <!-- Pixels Remarketing -->
    <?php include "modulos/remarketing.php" ?>
    <!-- //Pixels Remarketing -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

    </body>
</html>
