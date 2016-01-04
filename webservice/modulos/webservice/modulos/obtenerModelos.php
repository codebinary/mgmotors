<?php
  $wsdl = 'http://crm.skberge.com.pe/ws/InsertaCotizacionQCS.asmx?WSDL';
  $client = new SoapClient($wsdl);

  # seteamos los parametros
  $parametros = array(
      '_user' => 'skbpwebcot',
      '_pass' => '-32198*P',
      '_marca' => 'MG'
  );

  # llamamos al método getProvincias del web service, enviadole los parametros
  $resultado = $client->getModelos($parametros);

  $xml = simplexml_load_string($resultado->getModelosResult);


  # recorremos el xml para formar las opciones del combobox
  foreach ($xml->ModeloVehiculo as $item):
      echo "<option value='" . $item->idmodelo . "'>" . $item->modelo . "</option>";
  endforeach;
