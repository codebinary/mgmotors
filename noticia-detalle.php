<?php
  require_once 'class/class_noticias.php';
  $noticias = new noticias();
  $listNoticia = $noticias->showNoticia($_GET['id']);
  $listThreeNt = $noticias->listThreeNoticias();
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
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
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <!--Menu principal-->
  <?php include "modulos/common/menu.php" ?>
  <!-- Descripcion Modelo -->
  <div class="container fix-padding">
    <div class="row">
      <div class="col-lg-12 col-sm-1 col-sx-1 noticias-landing">
        <div class="col-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
        <div class="col-lg-10 col-sm-10 col-sx-1 fix-padding">
          <div id="titulo"><h1>NOTICIAS  <span>]</span></h1><div id="linea-titulo-noticias"></div></div>
        </div>
        <div class="col-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
      </div>
    </div>
    <!-- Descripcion Noticia -->
    <div class="row">
      <div class="col-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
      <!-- Columna izquierda-->
      <div class="col-lg-7 col-sm-7 col-sx-7 fix-padding">
        <div id="contenido-noticia">
          <h1><?= $listNoticia[0]->noticias_title; ?></h1>
          <div id="foto-detalle">
            <img src="<?= cutText($listNoticia[0]->noticias_descrip, 0, false); ?>">
          </div>
          <div id="noticia-texto">
            <?= cutText($listNoticia[0]->noticias_descrip, null); ?>
            <div id="social">
              <ul>
                <li><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo "http://mgmotors.com.pe/noticia-detalle.php?id=".$listNoticia[0]->noticias_id; ?>&layout=standard&show_faces=false&width=200&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:200px; height:60px;"></iframe></li>
                <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo "http://mgmotors.com.pe/noticia-detalle.php?id=".$listNoticia[0]->noticias_id; ?>" data-via="your_screen_name" data-lang="en">Tweet</a></li>
              </ul>
            </div>
          </div>
        </div> 
      </div>
      <!-- Columna derecha -->
      <div class="col-lg-3 col-sm-3 col-sx-3 fix-padding">
        <div id="contenido-derecha">
          <ul>
            <?php foreach($listThreeNt as $noticiaRight): ?>
            <li>
              <h3><?= $noticiaRight->title; ?></h3>
              <div id="foto-lateral">
                <img src="<?= cutText($noticiaRight->descripcion, 0, false); ?>">
              </div>
              <p><?= cutText($noticiaRight->descripcion, 460); ?></p>
              <div class="vermas"><a href="noticia-detalle.php?id=<?= $noticiaRight->id; ?>">VER MÁS ></a></div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
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
    /************************/
    $('.point1a').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
    $('.point1b').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
    $('.point1c').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
    /************************/
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
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
  </script>

  <!-- Pixels Remarketing -->
  <?php include "modulos/remarketing.php" ?>
  <!-- //Pixels Remarketing -->

</body>
</html>