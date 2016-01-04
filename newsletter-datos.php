<?php
//importamos la clase de PHPMailer (Version 5.2.1)
require_once('phpmailer/class.phpmailer.php');

//Sesión para comunicarse con el formulario de contacto
session_start();

//Verificamos que coincida la variable de session

if ($_SESSION['estado'] == "activo" and $_POST['origen']=='formulario'){//Si es correcto, procede al envio de datos y guardado en la base de datos

	$nombres		=	$_POST['nombres'];
	$email			=	$_POST['email'];
	$fecha			= 	date('Y-m-d');
	
	$conexion = mysql_connect("localhost","mgmotors_dbadmin","Q6]0P#+{6;6{");//Servidor en Internet
	//$conexion = mysql_connect("localhost","root","");
	
	if(!conexion){
		
		die('No se pudo conectar por :'.mysql_error());
	}
	
	//Nombre de base datos en servidor en internet
	mysql_select_db("mgmotors_db", $conexion);
	
	//Nombre base datos local
	//mysql_select_db("mgmotors_db", $conexion);
	
	mysql_query("INSERT INTO newsletter (nombres,email,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .$email."','"  
	  .$fecha."' ) ");
	
	mysql_close($conexion);

	header("Location: cotizacion-enviada.php");

} else{ //Si no existe variable de session, redireccion a la página principal
	
	header("Location: index.php");
}

?>