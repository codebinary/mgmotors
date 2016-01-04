<?php
  # instanciamos un cliente de nusoap
  $wsdl = 'http://crm.skberge.com.pe/ws/InsertaCotizacionQCS.asmx?WSDL';
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
  
  echo "<option value=''>- Departamento -</option>";
  for ($i = 0; $i < count($aDepartamento); $i++):
      echo "<option value='" . $aDepartamento[$i] . "'>" . $aDepartamento[$i] . "</option>";
  endfor;
  
    

