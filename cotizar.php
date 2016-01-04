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
  
  <meta property="og:title" content=".:: MG PERU | SITIO OFICIAL ::." />
  <meta property="og:description" content="MG es una marca inglesa con 90 años de historia, perteneciente a una de las corporaciones de automóviles más grande del mundo; SAIC GROUP. Con un centro de diseño y de control en Birgminham, Inglaterra nuestros autos están regidos por la legislación de calidad europea.  En el Perú, está respaldado por el grupo SKBergé, uno de los grupos automotores más grande de Latinoamérica. Visita este sitio web y conoce más de MG!" />
  <meta property="og:image" content="http://www.mgmotors.com.pe/images/common/logoMG_web.jpg" />

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" type="text/css" href="css/tooltip/tooltipster.css" />
  <link rel="stylesheet" href="css/validacion.css">
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
          <div id="titulo"><h1>COTIZA AQUÍ  <span>]</span></h1><div id="linea-titulo-cotizar"></div></div>
          <!-- DBanner UK Design -->
          <div id="cotizar-content">
            <div class="titulo-cotizar"><h2>SOLICITA TU COTIZACIÓN</h2> <span>Llena los datos en el siguiente formulario</span></div>
            <div id="form-cotizar-mg">
              <form role="form" id="formulario-cotizar" method="post" action="cotizar-datos-general.php">
                <div><input type="text" id="nombres" name="nombres" placeholder="Ingresa tu nombre"></div>
                <div><input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tu apellido"></div>
                <div><input type="text" id="dni" name="dni" placeholder="Ingresa tu dni"></div>
                <!-- Elije un día -->
                <div><input type="text" id="telefono" name="telefono" placeholder="Ingresa tu teléfono"></div>
                <div><input class="email-input" type="text" id="email" name="email"  placeholder="Ingresa tu email"></div>
                <!-- Modelos -->
                <div class="modelo-bloque">
                  <select class="cotizar-input modelo-nombre" name="modelo" id="modelo">
                    <option value="">- Elige tu MG -</option>
                    <option value="MG 3">MG 3</option>
                    <option value="MG 3 Xross">MG 3 Xross</option>
                    <option value="MG 350">MG 350</option>
                    <option value="MG 5">MG 5</option>
                    <option value="MG 5 Turbo">MG 5 Turbo</option>
                    <!--<option value="MG 6">MG 6</option>-->
                  </select>
                </div>
                <div class="colores-bloque">
                  <select class="cotizar-input color-mg3" name="color" id="color-cotizar">
                    <option value="Black / Yellow Tudor">Black / Yellow Tudor</option>
                    <option value="Black / Manchester Red">Black / Manchester Red</option>
                    <option value="Black / Blue Thames">Black / Blue Thames</option>
                    <option value="Black Opal">Black Opal</option>
                    <option value="Manchester Red">Manchester Red</option>
                    <option value="Scotish Silver">Scotish Silver</option>
                    <option value="Summit White">Summit White</option>
                  </select>
                  <select class="cotizar-input color-mg3xross" name="color" id="color">
                    <option value="Birgmingham orange">Birgmingham orange</option>
                    <option value="Manchester Red">Manchester Red</option>
                    <option value="Misty Gray">Misty Gray</option>
                    <option value="Summit white">Summit white</option>
                    <option value="Black Opal">Black Opal</option>
                  </select>
                  <select class="cotizar-input color-mg350" name="color" id="color">
                    <option value="Black Opal">Black Opal</option>
                    <option value="Manchester Red">Manchester Red</option>
                    <option value="Titan Grey">Titan Grey</option>
                    <option value="Scotish Silver">Scotish Silver</option>
                    <option value="Summit White">Summit White</option>
                  </select>
                  <select class="cotizar-input color-mg5" name="color" id="color">
                    <option value="Scotish Silver">Scotish Silver</option>
                    <option value="Black Opal">Black Opal</option>
                    <option value="Windsor Purple">Windsor Purple</option>
                    <option value="Summit White">Summit White</option>
                    <option value="British Red">British Red</option>
                    <option value="Misty Grey">Misty Grey</option>
                  </select>
                  <select class="cotizar-input color-mg5-turbo" name="color" id="color">
                    <option value="Black Opal">Black Opal</option>
                    <option value="Summit White">Summit White</option>
                  </select>
                  <select class="cotizar-input color-mg6" name="color" id="color">
                    <option value="Manchester Red">Manchester Red</option>
                    <option value="Black Opal">Black Opal</option>
                    <option value="Summit White">Summit White</option>
                  </select>
                </div>
                <div style="clear:both;">
                  <select class="cotizar-input" name="tienda" id="tienda">
                    <option value="">- Elige una tienda -</option>
                    <option value="surquillo">Surquillo (Tomás Marsano 139)</option>
                    <option value="sanmiguel">San Miguel (Elmer Faucett 149)</option>
                    <option value="santaanita">Santa Anita (Mall Aventura Plaza)</option>
                    <option value="independencia">Independencia (CC Lima Plaza Norte)</option>
                    <option value="bellavista">Av. Oscar R. Benavides (ex colonial) 3866, Mall Aventura Plaza</option>
                    <option value="naranjal">Naranjal (Av. Alfredo Mendiola 5118, Los Olivos)</option>
                    <option value="piura">Piura (Av. Sanchez Cerro Mz. 228 Lt.04 Zona Industrial)</option>
                    <option value="chiclayo">Chiclayo (Av. José Leonardo Ortiz N° 450)</option>
                    <option value="cusco">Cusco (Av. De la Cultura 543)</option>
                    <option value="arequipa">Arequipa (Vía Evitamiento Km. 3.9 Irrigación Zamácola Lateral F)</option>
                    <option value="trujillo">Trujillo (Av. Húsares de Junín 990 Urb. La Merced)</option>
                  </select>
                </div>
                <div class="comentarios">
                  <textarea name="comentarios" id="comentarios"></textarea>
                </div>
                <div class="boton-enviar">
                  <input type="image" src="images/common/enviar-btn.jpg" id="btnSubmit" name="btnSubmit" class="btnSubmit"/>
                  <input name="origen" value="formulario" type="hidden" />
                </div>
              </div>
              
              
              <div class="modelo-cotizar">
                <div class="modelo-mg3"><?php include "modulos/cotizar/mg3.php" ?></div>
                <div class="modelo-mg3xross"><?php include "modulos/cotizar/mg3xross.php" ?></div>
                <div class="modelo-mg350"><?php include "modulos/cotizar/mg350.php" ?></div>
                <div class="modelo-mg5"><?php include "modulos/cotizar/mg5.php" ?></div>
                <div class="modelo-mg5-turbo"><?php include "modulos/cotizar/mg5-turbo.php" ?></div>
                <div class="modelo-mg6"><?php include "modulos/cotizar/mg6.php" ?></div>
                <!--<span>(*)Imagen referencial con accesorios opcionales.</span>-->
                <div class="financia"><fo id="financia"><img src="images/cotizar/financia-btn.png"></a></div>
              </div>
            </div>
            <!-- Formulario Financiar Santander -->
            <div id="form-financia">
              <div class="cuotas-data">
                <div class="cuota-item"><input class="dni-input-2" type="text" id="dni" name="dni" placeholder="Ingresa tu DNI"></div>
                <div class="cuota-item">
                  <span>Valor Inicial:</span>
                  <ul>
                    <li>
                      <input type="radio" name="inicial" id="radio_01_02" value="20%" class="primero">
                      <label for="radio_01_02">20%</label>
                      
                      <input type="radio" name="inicial" id="radio_02_02" value="30%" class="segundo">
                      <label for="radio_02_02">30%</label>
                      <input type="radio" name="inicial" id="radio_03_02" value="50%" class="tercero">
                      <label for="radio_03_02">50%</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="plazos-data">
                <div class="plazos-combo">
                  <span>Plazos:</span>
                  <select class="cotizar-input modelo-nombre" name="plazos" id="plazos">
                    <option value="12 Meses">12 Meses</option>
                    <option value="24 Meses">24 Meses</option>
                    <option value="36 Meses">36 Meses</option>
                    <option value="48 Meses">48 Meses</option>
                    <option value="60 Meses">60 Meses</option>
                  </select>
                </div>
                <div>
                  <span>Cuota doble:</span>
                  <ul>
                    <li>
                      <input type="radio" name="doblecuota" id="radio_08_02" value="SI" class="primero" checked="checked">
                      <label for="radio_08_02">SI</label>
                      <input type="radio" name="doblecuota" id="radio_09_02" value="NO" class="segundo">
                      <label for="radio_09_02">NO</label>
                    </li>
                  </ul>
                </div>
                <div class="boton-enviar">
                  <input type="image" src="images/common/enviar-btn.jpg" id="btnSubmit" name="btnSubmit" class="btnSubmit"/>
                  <input name="origen" value="formulario" type="hidden" />
                </div>
              </div>
            </div>
          </form>
          <!-- // Formulario Financiar Santander -->
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
  <script defer src="js/validacion_cotizar.js"></script>
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
  $("#financia").click(function(e){
    $("#form-financia").slideToggle(500, function(){

      if($("#form-financia").is(':visible')){
       $("input[name=btnSubmit]").eq(0).hide(); 
      } else {
        $("input[name=btnSubmit]").eq(0).show();
      }
      
    });
    
    
    e.preventDefault();
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
  <!-- Pixels Remarketing -->
  <?php include "modulos/remarketing.php" ?>
  <!-- //Pixels Remarketing -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>