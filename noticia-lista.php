<?php
  require_once 'class/class_noticias.php';
  $start = 0;
  $limit = 5;
  $id = 1;
  /****************************************/
  /****************************************/
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $start = ($id-1)*$limit;
  }
  /****************************************/
  /****************************************/
  $noticias = new noticias();
  $listNoticias = $noticias->listNoticias($start, $limit);
  $totalNoticia = $noticias->totalNoticias();
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
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
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- Twitter Follw Bottom -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <!--Menu principal-->
  <?php include "modulos/common/menu.php" ?>
  <!-- Descripcion Modelo -->
  <div class="container fix-padding">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-sx-12 noticias-landing">
        <div class="col-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
        <div class="col-lg-10 col-sm-10 col-sx-10 fix-padding">
          <div id="titulo"><h1>NOTICIAS  <span>]</span></h1><div id="linea-titulo-noticias"></div></div>
        </div>
        <div class="col-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
      </div>
    </div>
    <!-- Descripcion Noticia -->
    <div class="row">
      <div class="ol-lg-1 col-sm-1 col-sx-1 fix-padding"></div>
      <!-- Columna izquierda-->
      <div class="col-lg-10 col-sm-10 col-sx-10 fix-padding">
        <div id="lista-noticias-completa">
          <ul>
            <?php foreach($listNoticias as $noticiaList): ?>
            <li>
              <div class="foto-thumb-lista"><img src="<?= cutText($noticiaList->descripcion, 0, false); ?>" /></div>
              <div class="detalle-noticia-lista">
                <h3><?= $noticiaList->title; ?></h3>
                <p><?= cutText($noticiaList->descripcion, 460); ?></p>
                <ul class="social-lista">
                  <li><div class="fb-like" data-href="http://mgmotors.com.pe/noticia-detalle.php?id=<?= $id; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
                  <li><a href="http://mgmotors.com.pe/noticia-detalle.php?id=<?= $id; ?>" class="twitter-share-button" data-lang="en">Tweet</a></li>
                </ul>
                <span class="vermas-lista"><a href="noticia-detalle.php?id=<?= $noticiaList->id; ?>">VER MÁS ></a></span>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div id="paginado-footer">
          <div id="paginado-noticias">
            <ul>
            <?php
              $total = ceil($totalNoticia[0]->TOTAL/$limit);
              if( $id > 1 ){ echo "<li><a href='?id=".($id-1)."' class='button'>Anterior</a></li>"; }
              for($i=1;$i<=$total;$i++){
                if($i==$id) { echo "<li class='current'>".$i."</li>"; }
                else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
              }
              if( $id != $total){ echo "<li><a href='?id=".($id+1)."' class='button'>Siguiente</a></li>"; }
            ?>
            </ul>
          </div>
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

    $('.point1a').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
    $('.point1b').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});
    $('.point1c').tooltipster({ content: $('<span><img src="images/modelos/mg3/tooltip/capot.png" /></span>')});

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
    });
  });

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
  </script>
  <!-- Google Analytics -->
  <?php include "modulos/analytics.php" ?>
  <!-- //Google Analytics -->
</body>
</html>