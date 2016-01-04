  <!DOCTYPE html>          
  <html lang="es">         
  <head>
      <meta charset="utf-8">
      <title>Tunea tu MG</title>
      <meta name="description" content="">

      <link rel="stylesheet" type="text/css" href="css/armado.css">

  </head>
  <body>

  <!--Facebook Code Auto Size-->

  <div id="fb-root"></div>
      <script src="https://connect.facebook.net/en_US/all.js"></script>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId : '211565258985587', //Your facebook APP here
            cookie : true, // enable cookies to allow the server to access the session
          });
        }

        window.onload = function() {
          FB.Canvas.setAutoGrow(91);
        }
      </script>

  <!--Facebook Code Size-->

    <div id="wrapper">
       <div id="home">
        <div id="menu">
          <ul>
            <li><a href="mg3.php"><img src="images/mg3_btn.png" /></a></li>
            <li><a href="mg3xross.php"><img src="images/mg3xross_btn.png" /></a></li>
            <li><a href="mg350.php"><img src="images/mg350_btn.png" /></a></li>
            <li><a href="mg5.php"><img src="images/mg5_btn.png" /></a></li>
            <li id="last"><a href="mg6.php"><img src="images/mg6_btn.png" /></a></li>
          </ul>
        </div>
       
        <div id="creditos">
          <img src="images/creditos.png" />
        </div>

       </div>
    </div>
  </body>
  </html> 