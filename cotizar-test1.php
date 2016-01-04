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
  <link rel="stylesheet" href="webservice/css/main.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" type="text/css" href="css/tooltip/tooltipster.css" />
  <!-- <link rel="stylesheet" href="css/validacion.css"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mediaqueries.css">
  
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>

  <!-- Google Analytics -->
  <?php include "modulos/analytics.php" ?>
  <!-- //Google Analytics -->
  
  <!-- Webservices -->
  <?php include 'webservice/modulos/webservice/modulos/getFunciones.php'; ?>
        
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
      <div class="col-lg-12 col-sm-12 col-sx-12 cotizar">
        <div class="col-lg-1 col-sm-1 col-sxm-1"></div>
        <div class="col-lg-10 col-sm-10 col-sx-10 fix-padding">
          <div id="titulo"><h1>COTIZA AQUÍ  <span>]</span></h1><div id="linea-titulo-cotizar"></div></div>
          <!-- DBanner UK Design -->
          <div id="cotizar-content">
            <div class="titulo-cotizar">
                <h2>SOLICITA TU COTIZACIÓN</h2><span>Llena los datos en el siguiente formulario</span>
            </div>
            <div id="form-cotizar-mg">
            <!-- INICIO DEL FORMULARIO DE COTIZAR - CONTACTO -->
              <form role="form" id="formulario-cotizar" method="post" action="">
                <div class="col-lg-6 col-md-8">
                    <select class="cotizar-input" name="tipoDoc" id="tipoDoc">
                        <option value="">-- Seleccione tipo documento --</option>
                        <option value="dni">DNI</option>
                        <option value="extranjeria">Carnet de Extranjer&iacute;a</option>
                        <option value="pasaporte">Pasaporte</option>
                    </select>
                    <input type="text" name="valorDoc" placeholder="Número de documento">
                    <input type="text" name="primerNombre" placeholder="Primer nombre">
                    <input type="text" name="segundoNombre" placeholder="Segundo nombre">
                    <input type="text" name="apellidoPaterno" placeholder="Primer apellido">
                    <input type="text" name="apellidoMaterno" placeholder="Segundo apellido">
                    <label for="fNacimiento">Fecha de nacimiento:</label>
                    <div>
                        <select class="cotizar-input fechaNac" name="dia" id="diaList" class="fechaForm">
                            <option value="-1">- Dia -</option>
                            <?php getDia(); ?>
                        </select>
                        <select class="cotizar-input fechaNac" name="mes" id="mesList" class="fechaForm">
                            <option value="-1">- Mes -</option>
                            <?php getMes(); ?>
                        </select>
                        <select class="cotizar-input fechaNac" name="anio" id="yearList" class="fechaForm">
                            <option value="-1">- A&ntilde;o -</option>
                            <?php getAnios(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <input type="text" name="email" placeholder="email">
                    <div class="ubicacion">
                      <select class="cotizar-input" name="departamento" id="departamento" class="lugar">
                          <?= obtenerDepartamentos(); ?>
                      </select>
                      <select class="cotizar-input" name="provincia" id="provincia" class="lugar">
                          <option value="-1">- Selecccione un provincia</option>
                      </select>
                      <select class="cotizar-input" name="distrito" id="distrito" class="lugar">
                          <option value="-1">- Selecccione un Distrito -</option>
                      </select>
                    </div>
                    <select class="cotizar-input" name="prefijo" id="prefijo" class="nFono">
                        <option value="041">041</option>
                        <option value="043">043</option>
                        <option value="073">073</option>
                        <option value="054">054</option>
                        <option value="066">066</option>
                        <option value="076">076</option>
                        <option value="001" selected="selected">01</option>
                        <option value="084">084</option>
                        <option value="067">067</option>
                        <option value="062">062</option>
                        <option value="056">056</option>
                        <option value="064">064</option>
                        <option value="044">044</option>
                        <option value="074">074</option>
                        <option value="065">065</option>
                        <option value="082">082</option>
                        <option value="053">053</option>
                        <option value="063">063</option>
                        <option value="073">073</option>
                        <option value="051">051</option>
                        <option value="042">042</option>
                        <option value="052">052</option>
                        <option value="072">072</option>
                        <option value="061">061</option>
                    </select>
                    <input type="text" name="telefono" placeholder="telefono" class="txtFono">
                    <select class="cotizar-input" name="modelo" id="modelo" class="opciones">
                        <?= obtenerModelos(); ?>
                    </select>
                    <select class="cotizar-input" name="solicitud" id="solicitud" class="opciones">
                        <?= obtenerSubTiposSolicitudes() ?>
                    </select>
                    <textarea name="mensaje" placeholder="Escribe aquí tu comentario..."></textarea>
                    <div class="recibir-informacion">
                      <input type="checkbox" value="si" name="newsletter" checked="true"> Acepto recibir informaciones comerciales y novedades de MG MOTORS
                    </div>
                      <div class="boton-enviar">
                        <input type="submit" class="boton-form"  id="btnSubmit" name="enviarCotizacion" value="Enviar" />
                      </div>
                </div>
                <!-- IMAGENES DE LOS MODELOS -->
               <div class="modelo-mg">
                   <span class="modelo mg3"><img src="images/cotizar/mg3.png" /></span>
                   <span class="modelo mg3xross"><img src="images/cotizar/mg3xross.png" /></span>
                   <span class="modelo mg350"><img src="images/cotizar/mg350.png" /></span>
                   <span class="modelo mg5"><img src="images/cotizar/mg5.png" /></span>
                   <span class="modelo mg5-turbo"><img src="images/cotizar/mg5-turbo.png" /></span>
               </div>
              </form>
              <!-- // Formulario Financiar Santander -->
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cotizar -->
  <!-- Footer -->
  <?php include "modulos/common/footer.php" ?>
  <!-- //Footer -->
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
  
  <script src="js/main.js"></script>
  <script type="js/vendor/bootstrap.js"></script>
  <script type="text/javascript" src="js/tooltip/jquery.tooltipster.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="webservice/js/webservice/funciones.js"></script>
  <script src="webservice/js/webservice/jquery.validate.min.js"></script>
  <!-- Pixels Remarketing -->
  <?php include "modulos/remarketing.php" ?>
  <!-- //Pixels Remarketing -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("span[class^=modelo]").hide();
            $(".mg3").show();

            $("#modelo").change(function(){
              var valor = $(this).val();
              console.log(valor);

              switch(valor){
                case 9080875: 
                  $("span[class^=modelo]").hide();
                  $(".modelo mg3").fadeIn();
                  break;
                case 9080883: 
                  $("span[class^=modelo]").hide();
                  $(".modelo mg3xross").fadeIn();
                  break;
                case 9080884: 
                  $("span[class^=modelo]").hide();
                  $(".modelo mg350").fadeIn();
                  break;
                case 9080885: 
                  $("span[class^=modelo]").hide();
                  $(".modelo mg5").fadeIn();
                  break;
                case 9080888: 
                  $("span[class^=modelo]").hide();
                  $(".modelo mg5").fadeIn();
                  break;
                case 9080890: 
                  $("span[class^=modelo]").hide();
                  $(".modelo mg5").fadeIn();
                  break;

              }
            })

        });


    </script>

</body>
</html>
