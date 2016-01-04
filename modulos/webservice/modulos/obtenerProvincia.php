<?php

  $wsdl = 'http://crm.skberge.com.pe/ws/InsertaCotizacionQCS.asmx?WSDL';
  $client = new SoapClient($wsdl);
  
  # comprobamos si existe una variable POST llamada departamento
  $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';

  if ($departamento != ""):

    # seteamos los parametros
    $parametros = array(
        '_user' => 'skbpwebcot',
        '_pass' => '-32198*P',
        '_departamento' => $departamento
    );
    
    # llamamos al método getProvincias del web service, enviadole los parametros
    $resultado = $client->getProvincias($parametros);
    
    # leemos el string xml
    $xml = simplexml_load_string($resultado->getProvinciasResult);

    # recorremos el xml para formar las opciones del combobox
    echo "<option value=''>- Provincia -</option>";
    foreach ($xml->Provincia as $item):
        echo "<option value='" . $item->nombreprovincia . "'>" . $item->nombreprovincia . "</option>";
    endforeach;

  else:
      echo "1";
  endif;
?>