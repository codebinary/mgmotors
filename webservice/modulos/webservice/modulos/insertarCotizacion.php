<?php

  session_start();

  include('funciones.php');



  $wsdl = 'http://crm.skberge.com.pe/WS/InsertaCotizacionQCS.asmx?WSDL';

  $client = new SoapClient($wsdl);



  $datosXML = getXML('MG','KP','VENTAS');



  /*var_dump("<pre>", $_POST);
  echo "---------------------";
  echo "---------------------";
  var_dump("<pre>", $datosXML);
  exit();*/

  $parametros = array(

      '_user' => 'skbpwebcot',

      '_pass' => '-32198*P',

      '_xmlData' => $datosXML

  );



  $resultado = $client->InsertaCotizacion($parametros);



  $xml = simplexml_load_string($resultado->InsertaCotizacionResult);



  // echo "<p>Gracias por contactarse con nosotros. Estaremos atendiendo su requerimiento a la brevedad. Tome nota de el Nro. de solicitud:</p>";

  $_SESSION["seccCodCotiza"] = (string)$xml->CodigoCotizacion;



  echo $_SESSION["seccCodCotiza"];





