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
        <link rel="stylesheet" href="css/validacionHome.css">
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
        <div class="container fix-padding">
        <div class="row">

        <div class="col-lg-12 col-sm-12 col-sx-12 cotizar">
        <div class="col-lg-1 col-sm-1 col-sxm-1"></div>
        <div class="col-lg-10 col-sm-10 col-sx-10 fix-padding">
            <div id="titulo"><h1>POSVENTA <span>]</span></h1><div id="linea-titulo-cotizar"></div></div>

                <nav class="menu-postventa">
                    <ul>
                        <li><a href="servicio.php">SERVICIO</a></li>
                        <li class="linea">|</li>
                        <li><a href="repuestos-accesorios.php">REPUESTOS Y ACCESORIOS</a></li>
                        <li class="linea">|</li>
                        <li class="activado"><a href="talleres.php">TALLERES AUTORIZADOS</a><div><img class="centrar" src="images/historia/arrow-menu.png" /></div></li>
                    </ul>
                </nav>

                <!-- Manteimiento-Content -->
                <div id="talleres-content">
                <div id="mapa-talleres-content">
                <!-- <iframe src="https://www.google.com/maps/d/embed?mid=zAecceUFkeeU.kXe-Q87EnzaA" width="1000" height="400"></iframe>
                </div> -->
                <iframe src="https://www.google.com/maps/d/embed?mid=zAecceUFkeeU.kHcRnEp9TtFk" width="1000" height="400"></iframe>
                <div id="direcciones-talleres">
                  <div class="titulo-mapa">
                  <img class="map-ico" src="images/talleres/map-ico.png">
                  <span>TALLERES<br>AUTORIZADOS</span>
                  </div>
                  <div class="combo-departamento">
                      <p>Elije un departamento</p>
                      <form id="departamento-talleres" name="departamento">
                        <select class="talleres-input" name="departamento" id="departamento">
                          <option value="">- Elige un Departamento-</option>
                          <?php for($n=0; $n<count($listDepartamentos); $n++): ?>
                            <option value="<?= $listDepartamentos[$n]->depart_id; ?>"><?= $listDepartamentos[$n]->depart_name; ?></option>
                          <?php endfor; ?>
                        </select>
                      </form>
                  </div>
                  <div class="direcciones-lista">
                      <h4>HORARIOS DE ATENCIÓN Y CENTRAL DE CITAS:</h4>
                      <?php include "modulos/talleres.php" ?>
                  </div>
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
        <script src="js/getList.js"></script>



        <script>
        $(document).ready(function(){
            $("#modelos").click(function(){
                $("#menu-modelos").slideToggle("fast");
                //alert( "Handler for .click() called." );
            });
        });



        $(document).ready(function(){
            $( "#departamento" ).change(function() {
              var valor = $(this).val();
              //alert(valor);
              console.log(valor);
              switch(valor){
                case "1":
                $(".arequipa").show();
                $(".chiclayo").hide();
                $(".cusco").hide();
                $(".lima").hide();
                $(".piura").hide();
                $(".trujillo").hide();
                break;

                case "2":
                $(".arequipa").hide();
                $(".chiclayo").show();
                $(".cusco").hide();
                $(".lima").hide();
                $(".piura").hide();
                $(".trujillo").hide();
                break;

                case "3":
                $(".arequipa").hide();
                $(".chiclayo").hide();
                $(".cusco").show();
                $(".lima").hide();
                $(".piura").hide();
                $(".trujillo").hide();
                break;

                case "4":
                $(".arequipa").hide();
                $(".chiclayo").hide();
                $(".cusco").hide();
                $(".lima").show();
                $(".piura").hide();
                $(".trujillo").hide();
                break;

                case "5":
                $(".arequipa").hide();
                $(".chiclayo").hide();
                $(".cusco").hide();
                $(".lima").hide();
                $(".piura").show();
                $(".trujillo").hide();
                break;

                case "6":
                $(".arequipa").hide();
                $(".chiclayo").hide();
                $(".cusco").hide();
                $(".lima").hide();
                $(".piura").hide();
                $(".trujillo").show();
                break;
              }

            });
            //$( ".target" ).show();
        });

        </script>



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Pixels Remarketing -->
    <?php include "modulos/remarketing.php" ?>
    <!-- //Pixels Remarketing -->
    
    </body>
</html>
