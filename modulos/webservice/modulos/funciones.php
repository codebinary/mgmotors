<?php

$wsdl = 'http://crm.skberge.com.pe/WS/InsertaCotizacionQCS.asmx?WSDL';

function getVersion($modelo) {
  global $wsdl;
  $client = new SoapClient($wsdl);

  # seteamos los parametros
  $parametros = array(
      '_user' => 'skbpwebcot',
      '_pass' => '-32198*P',
      '_modelo' => $modelo
  );

  $resultado = $client->getVersiones($parametros);

  $xml = simplexml_load_string($resultado->getVersionesResult);

  return $version = $xml->VersionVehiculo->idversion;
}

function getLocal($marca, $grupoMarca, $tipo, $zona) {
  global $wsdl;
  $client = new SoapClient($wsdl);

  # seteamos los parametros
  $parametros = array(
      '_user' => 'skbpwebcot',
      '_pass' => '-32198*P',
      '_marca' => $marca,
      '_marca_grupo' => $grupoMarca,
      '_tipo' => $tipo,
      '_zona' => $zona
  );

  $resultado = $client->getLocales($parametros);

  $xml = simplexml_load_string($resultado->getLocalesResult);

  return $local = $xml->Local->entity_local;
}

function getZona($provincia, $distrito) {
  global $wsdl;
  $client = new SoapClient($wsdl);

  $parametros = array(
          '_user' => 'skbpwebcot',
          '_pass' => '-32198*P',
          '_provincia' => $provincia
      );

  $resultado = $client->getDistritos($parametros);
  $xml = simplexml_load_string($resultado->getDistritosResult);

  $zona = 0;
  foreach ($xml->Distrito as $item):
      if ($item->distrito == $distrito):
          $zona = $item->zona;
      endif;
  endforeach;

  return $zona;
}

function getIdSubTipo($subtipo) {
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

  $idsubtipo = 0;
  foreach ($xml->SubTipoSolicitud as $item):
      if ($item->id_option_attribute == $subtipo):
          $idsubtipo = $item->id_entity;
      endif;
  endforeach;

  return $idsubtipo;
}

function getIdMarca($marca) {
  global $wsdl;
  $client = new SoapClient($wsdl);

  # seteamos los parametros
  $parametros = array(
      '_user' => 'skbpwebcot',
      '_pass' => '-32198*P'
  );

  $resultado = $client->getMarcas($parametros);

  $xml = simplexml_load_string($resultado->getMarcasResult);

  $idMarca = 0;
  foreach ($xml->Marca as $item):
      if ($item->descmarca == $marca):
          $idMarca = $item->idmarca;
      endif;
  endforeach;

  return $idMarca;
}   

function getIdEntityDistrito( $departamento, $provincia, $distrito ){

  global $wsdl;
  $client = new SoapClient($wsdl);
  $data = array(); //array data
  $idEntity = 0;

  if($provincia != ""):

    #seteamos los parametros
    $parametros = array(
      '_user' => 'skbpwebcot',
      '_pass' => '-32198*P',
      '_provincia' => $provincia,
      '_departamento' => $departamento
    );

    #llamamos al método getProvincias del webService, enviadole los parámetros
    $resultado = $client->getDistritos($parametros);

    #leemos el string xml
    $xml = simplexml_load_string($resultado->getDistritosResult);

    foreach ( $xml->Distrito as $item ):

      if( $item->distrito == $distrito):
        $idEntity = $item->id_entity;
        $refDistrito = $item->refdistrito;
        array_push($data, $idEntity, $refDistrito);
      endif;

    endforeach;

  endif;

  return $data;

}

function getXML($marca = '', $grupoMarca = '', $tipoSolicitud) {
  # obtenemos todos los datos del formulario

  $anio = $_POST['anio'];
  $mes  = $_POST['mes'];
  $dia  = $_POST['dia'];

  $segundoNombre    = isset($_POST['segundoNombre']) ? $_POST['segundoNombre'] : '';
  $nombre           = $_POST['primerNombre'] . ' ' . $segundoNombre;
  $apellidoMaterno  = isset($_POST['apellidoMaterno']) ? $_POST['apellidoMaterno'] : '';
  $apellido         = $_POST['apellidoPaterno'] . ' ' . $apellidoMaterno;
  //$edad             = $_POST['anio'] .'-'.$_POST['mes'].'-'.$_POST['dia'];


  if ( strlen($dia) == 1 ) {
    $diaF = '0' . $dia;
  } else {
    $diaF = $dia;
  }
  
  if ( strlen($mes) == 1 ) {
    $mesF = '0' . $mes;
  } else {
    $mesF = $mes;
  }
  
  $edad            = $anio . '-' . $mesF . '-' . $diaF;
  $telCasa         = strlen($_POST['telefono']) != 9 ? $_POST['prefijo'] . $_POST['telefono'] : '';
  $telCel          = strlen($_POST['telefono']) == 9 ? $_POST['prefijo'] . $_POST['telefono'] : '';
  
  $telefono         = $telCasa;
  $celular          = $telCel;

  $dni              = $_POST['valorDoc'];
  $email            = $_POST['email'];
  $departamento     = $_POST['departamento'];
  $provincia        = $_POST['provincia'];
  $distrito         = $_POST['distrito'];
  $distritoPron     = $_POST['distrito'].'-'.$provincia;
  $direccion        = $_POST['direccion'];
  $modelo           = $_POST['modelo'];
  $solicitud        = $_POST['solicitud'];
  $mensaje          = $_POST['mensaje'];
  $newsletter       = $_POST['newsletter'];

  $dataDistrito = getIdEntityDistrito( $departamento, $provincia, $distrito);

  # construimos el documento xml
  $xml = new DOMDocument('1.0', 'UTF-8');

  # creamos el nodo principal
  $registros = $xml->createElement("registros");
  $xml->appendChild($registros);

  # creamos el elemento registro
  $registro = $xml->createElement("registro");

  # Agregamos el nodo NombreCliente al elemento registro
  $nombreCliente = $xml->createElement("NombreCliente");
  $nombreCliente->appendChild($xml->createTextNode($nombre));

  $registro->appendChild($nombreCliente);

  # Agregamos el nodo ApellidoCliente al elemento registro
  $apellidoCliente = $xml->createElement("ApellidoCliente");
  $apellidoCliente->appendChild($xml->createTextNode($apellido));

  $registro->appendChild($apellidoCliente);

  # Agregamos el nodo FonoCasa al elemento registro
  $RutCliente = $xml->createElement("RutCliente");
  $RutCliente->appendChild($xml->createTextNode($dni));

  $registro->appendChild($RutCliente);

  # Agregamos el nodo EdadCliente al elemento registro
  $edadCliente = $xml->createElement("FechaNacimiento");
  $edadCliente->appendChild($xml->createTextNode($edad));

  $registro->appendChild($edadCliente);

  # Agregamos el nodo FonoCasa al elemento registro
  $fonoCasa = $xml->createElement("FonoCasa");
  $fonoCasa->appendChild($xml->createTextNode($telefono));

  $registro->appendChild($fonoCasa);

  # Agregamos el nodo FonoCasa al elemento registro
  $Celular = $xml->createElement("Celular");
  $Celular->appendChild($xml->createTextNode($celular));

  $registro->appendChild($Celular);

  # Agregamos el nodo Email al elemento registro
  $Email = $xml->createElement("Email");
  $Email->appendChild($xml->createTextNode($email));

  $registro->appendChild($Email);

  # Agregamos el nodo Departamento al elemento registro
  $Departamento = $xml->createElement("Departamento");
  $Departamento->appendChild($xml->createTextNode($departamento));

  $registro->appendChild($Departamento);

  # Agregamos el nodo Provincia al elemento registro
  $Provincia = $xml->createElement("Provincia");
  $Provincia->appendChild($xml->createTextNode($provincia));

  $registro->appendChild($Provincia);

  # Agregamos el nodo Distrito al elemento registro
  $Distrito = $xml->createElement("Distrito");
  $Distrito->appendChild($xml->createTextNode($dataDistrito[1]));

  $registro->appendChild($Distrito);

  #Agrefamos el nodo Dirección al elemento registro
  $DistritoLK = $xml->createElement("DistritoLK");
  $DistritoLK->appendChild( $xml->createTextNode($dataDistrito[0]));

  $registro->appendChild($DistritoLK);

  # Agregamos el nodo Direccion al elemento registro
  $Direccion = $xml->createElement("Direccion");
  $Direccion->appendChild($xml->createTextNode($direccion));

  $registro->appendChild($Direccion);

  # Agregamos el nodo Marca al elemento registro
  $Marca = $xml->createElement("Marca");
  $Marca->appendChild($xml->createTextNode(getIdMarca($marca)));

  $registro->appendChild($Marca);

  # Agregamos el nodo Modelo al elemento registro
  $Modelo = $xml->createElement("Modelo");
  $Modelo->appendChild($xml->createTextNode($modelo));

  $registro->appendChild($Modelo);

  # Agregamos el nodo Version al elemento registro
  $Version = $xml->createElement("Version");
  $version = getVersion((int)$modelo);
  $Version->appendChild($xml->createTextNode($version));

  $registro->appendChild($Version);

   # Agregamos el nodo Tipo al elemento registro
  $Tipo = $xml->createElement("Tipo");
  if ($tipoSolicitud == 'VENTAS'):
      $idtipoSolicitud = 117812;
  endif;
  $Tipo->appendChild($xml->createTextNode($idtipoSolicitud));

  $registro->appendChild($Tipo);

  # Agregamos el nodo SubTipo al elemento registro
  $Solicitud = $xml->createElement("SubTipo");
  $Solicitud->appendChild($xml->createTextNode($solicitud));

  $registro->appendChild($Solicitud);

  # Agregamos el nodo IdSubTipo al elemento registro
  $SubTipoLK = $xml->createElement("SubTipoLk");
  $SubTipoLK->appendChild($xml->createTextNode(getIdSubTipo($solicitud)));

  $registro->appendChild($SubTipoLK);

  # Agregamos el nodo Comentario al elemento registro
  $Comentario = $xml->createElement("Comentario");
  $Comentario->appendChild($xml->createTextNode($mensaje));

  $registro->appendChild($Comentario);

  # Agregamos el nodo Newsletter al elemento registro
  $InfoNewlt = $xml->createElement("Info");
  $InfoNewlt->appendChild($xml->createTextNode($newsletter));

  $registro->appendChild($InfoNewlt);

  # Agregamos el nodo Comentario al elemento registro
  $Local = $xml->createElement("Local");
  $zona = getZona($provincia, $distrito);
  $idlocal = getLocal($marca, $grupoMarca, $tipoSolicitud, $zona);

  $Local->appendChild($xml->createTextNode($idlocal));

  $registro->appendChild($Local);

  $registros->appendChild($registro);

  $xml->formatOutput = true;

  return $textoxml = $xml->saveXML();
}

