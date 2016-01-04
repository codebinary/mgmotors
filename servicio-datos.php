<?php
require_once 'class/class_list.php';
$listas = new Listas();

//importamos la clase de PHPMailer (Version 5.2.1)
require_once('phpmailer/class.phpmailer.php');

//Sesión para comunicarse con el formulario de contacto
session_start();

//Verificamos que coincida la variable de session

if ($_SESSION['estado'] == "activo" and $_POST['origen']=='formulario'){//Si es correcto, procede al envio de datos y guardado en la base de datos

	$nombres			=	$_POST['nombres'];
	$telefono			=	$_POST['telefono'];
	$revision			=	$_POST['revision'];
	$email				=	$_POST['email'];
	$modelo				=	$_POST['modelo'];
	$dia				=	$_POST['dia'];
	$hora				=	$_POST['hora'];
	$departamento		=	$_POST['departamento'];
	$taller				=	$_POST['taller'];
	$placa				=	$_POST['placa'];
	$comentarios		=	$_POST['comentarios'];
	$fecha				= date('Y-m-d');
	
	$conexion 		= mysql_connect("localhost","mgmotors_dbadmin","Q6]0P#+{6;6{");//Servidor en Internet
	//$conexion = mysql_connect("localhost","root","");
	
	if(!conexion){
		die('No se pudo conectar por :'.mysql_error());
	}
	
	//Nombre de base datos en servidor en internet
	mysql_select_db("mgmotors_db", $conexion);
	
	//Nombre base datos local
	//mysql_select_db("mgmotors_db", $conexion);
	
	mysql_query("INSERT INTO mantenimiento (nombres,telefono,revision,email,modelo,dia,hora,departamento,taller,placa, comentarios,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .$telefono."','"
	  .$revision."','"
	  .$email."','"
	  .$modelo."','"
	  .$dia."','"
	  .$hora."','"   
	  .utf8_decode($departamento)."','"  
	  .utf8_decode($taller)."','"
	  .$placa."','"
	  .utf8_decode($comentarios)."','"   
	  .$fecha."' ) ");
	
	mysql_close($conexion);

	/************************************************** Envio de Correo con PHPMailer **********************************************/
	$mensaje = "Este mensaje fue enviado por : ". $nombres." ".$apellidos."<br />";
	$mensaje .= '<table width="500" border="0" cellspacing="0" cellpadding="0">
							  <tr>
								<td width="184">&nbsp;</td>
								<td width="498">&nbsp;</td>
							  </tr>
							  <tr>
								<td>Nombres:</td>
								<td>'. $nombres.'</td>
							  </tr>
							  <tr>
								<td>Telefonos:</td>
								<td>'. $telefono.'</td>
							  </tr>
							  <tr>
								<td>E-mail:</td>
								<td>'. $email .'</td>
							  </tr>
							  <tr>
							  <tr>
								<td>Modelo:</td>
								<td>'. $modelo .'</td>
							  </tr>
							  <tr>
								<td>Fecha de Cita:</td>
								<td>Día de la cita: '. $dia .'</td>
							  </tr>
							  <tr>
								<td>Hora de Cita:</td>
								<td>Hora de la cita: '. $hora .'</td>
							  </tr>
							  <tr>
								<td>Departamento:</td>
								<td>'. $listas->getDepartamento($departamento) .'</td>
							  </tr>
							  <tr>
								<td>Razon Social:</td>
								<td>'. $listas->getTaller($taller) .'</td>
							  </tr>
							  <tr>
								<td>Nª de Placa:</td>
								<td>'. $placa .'</td>
							  </tr>
							  <tr>
								<td>Comentario:</td>
								<td>'. $comentarios .'</td>
							  </tr>
							  <tr>
								<td>Enviado el:</td>
								<td>'. date('d/m/Y', time());'</td>
							  </tr>
							</table>';

	$mail = new PHPMailer(); // defaults to using php "mail()"
	$mail->IsSendmail(); // telling the class to use SendMail transport
	$mail->SetFrom('servicios@mgmotors.com.pe', 'Cotizacion '.$modelo);
	//Destinatarios
	//$mail->AddAddress("epadilla@skbergeperu.com.pe");
	//$mail->AddAddress("fsoriano@skbergeperu.com.pe");
	$mail->AddAddress("jdemiguel@skbergeperu.com.pe");
	//$mail->AddAddress("esnider@vertice.pe");
	// $mail->AddAddress("antony.exe@gmail.com");

	$mail->Subject    = utf8_decode("Cotización ".$modelo);
	$mail->MsgHTML(utf8_decode($mensaje));
	/*******************************************************/
	/*******************************************************/
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		//Redireccionar a la pagina correspondiente
		header('location:servicio-enviado.php');	
	}
} else{ //Si no existe variable de session, redireccion a la página principal
	header("Location: index.php");
}

?>