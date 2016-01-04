<?php

  $wsdl = 'http://crm.skberge.com.pe/ws/InsertaCotizacionQCS.asmx?WSDL';
  $client = new SoapClient($wsdl);
  
  # comprobamos si existe una variable POST llamada departamento
  $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : '';
  $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';

  if ($provincia != ""):

    # seteamos los parametros
    $parametros = array(
        '_user' => 'skbpwebcot',
        '_pass' => '-32198*P',
        '_provincia' => $provincia,
        '_departamento' => $departamento
    );
    
    # llamamos al método getProvincias del web service, enviadole los parametros
    $resultado = $client->getDistritos($parametros);
    
    # leemos el string xml
    $xml = simplexml_load_string($resultado->getDistritosResult);

    # recorremos el xml para formar las opciones del combobox
    echo "<option value=''>- Distrito -</option>";
    foreach ($xml->Distrito as $item):
        echo "<option value='" . $item->distrito . "'>" . $item->distrito . "</option>";
    endforeach;

  else:
    echo "1";
  endif;