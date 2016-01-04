<?php
  $wsdl = 'http://crm.skberge.com.pe/ws/InsertaCotizacionQCS.asmx?WSDL';
  $client = new SoapClient($wsdl);

  # seteamos los parametros
  $parametros = array(
      '_user' => 'skbpwebcot',
      '_pass' => '-32198*P',
      '_tipo' => 'VENTAS'
  );

  # llamamos al método getSubTiposSolicitudes del web service, enviadole los parametros
  $resultado = $client->getSubTiposSolicitudes($parametros);
  
  $xml = simplexml_load_string($resultado->getSubTiposSolicitudesResult);
  
  foreach ($xml->SubTipoSolicitud as $item):
      echo "<option value='" . $item->id_option_attribute . "'>" . $item->subtipo . "</option>";
  endforeach;