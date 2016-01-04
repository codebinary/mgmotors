<?php
  # instanciamos un cliente de nusoap
  $wsdl = 'http://crm.skberge.com.pe/ws/InsertaCotizacionQCS.asmx?WSDL';

  function getAnios() {
    $anioActual = date('Y');
    $anioLimite = date('Y') - 90;
    for ($i = $anioActual; $i >= $anioLimite   ; $i--) {
      echo '<option value="'. $i .'">'. $i .'</option>';
    }
  }

  function getMes() {
    $meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    for ($i = 1; $i <= 12 ; $i++) {
      echo '<option value="'. $i .'">'. $meses[$i] .'</option>';
    }
  }

  function getDia() {
    for ($i = 1; $i <= 31 ; $i++) {
      echo '<option value="'. $i .'">'. $i .'</option>';
    }
  }

  function obtenerDepartamentos(){
    global $wsdl;
    $cliente = new SoapClient($wsdl);

    # seteamos los parametros
    $parametros = array(
        '_user' => 'skbpwebcot',
        '_pass' => '-32198*P'
    );

    # llamamos al metodo getDepartamentos del web service, enviandole los parametros
    $resultado = $cliente->getDepartamentos($parametros);

    $xml = simplexml_load_string($resultado->getDepartamentosResult);

    $aDepartamento = array();

    foreach ($xml->Departamento as $item):
        $aDepartamento[] = (string)$item->nombredepartamento;
    endforeach;

    sort($aDepartamento);

    $deparHtml = "<option value='' selected='selected'>- Departamento -</option>";
    for ($i = 0; $i < count($aDepartamento); $i++):
      if($i != 0){
        $deparHtml .= "<option value='" . $aDepartamento[$i] . "'>" . $aDepartamento[$i] . "</option>";
      }
    endfor;

    return $deparHtml;
  } 

  function obtenerModelos(){
    global $wsdl;
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

    $modelHtml = "<option value='' selected='selected'>- Seleccione un modelo -</option>";
    # recorremos el xml para formar las opciones del combobox
    foreach ($xml->ModeloVehiculo as $item):
        $modelHtml .= "<option value='" . $item->idmodelo . "'>" . $item->modelo . "</option>";
    endforeach;

    return $modelHtml;
  } 

  function obtenerSubTiposSolicitudes(){
    global $wsdl;
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

    $solidtHtml = "<option value='' selected='selected'>- Seleccione una consulta -</option>";
    foreach ($xml->SubTipoSolicitud as $item):
        $solidtHtml .= "<option value='" . $item->id_option_attribute . "'>" . $item->subtipo . "</option>";
    endforeach;

    return $solidtHtml;
  }



