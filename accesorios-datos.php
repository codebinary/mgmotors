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
	$email				=	$_POST['email'];
	$modelo				=	$_POST['modelo'];
	$placa				=	$_POST['placa'];
	$departamento		=	$_POST['departamento'];
	$accesorios			=	$_POST['accesorios'];
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
	
	mysql_query("INSERT INTO accesorios (nombres,telefono,email,modelo,placa,departamento,accesorios,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .$telefono."','"
	  .$email."','"
	  .$modelo."','"
	  .$placa."','"
	  .utf8_decode($departamento)."','"  
	  .utf8_decode($accesorios)."','"
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
								<td>Teléfono:</td>
								<td>'. $telefono.'</td>
							  </tr>
							  <tr>
								<td>E-mail:</td>
								<td>'. $email.'</td>
							  </tr>
							  <tr>
								<td>Modelo:</td>
								<td>'. $modelo .'</td>
							  </tr>
							  <tr>
							  <tr>
								<td>Departamento:</td>
								<td>'. $listas->getDepartamento($departamento) .'</td>
							  </tr>
							  <tr>
								<td>Nombre del Accesorio:</td>
								<td>'. $accesorios .'</td>
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
	$mail->AddAddress("jdemiguel@skbergeperu.com.pe");
	//$mail->AddAddress("esnider@vertice.pe");
	//$mail->AddAddress("antony.exe@gmail.com");

	$mail->Subject    = utf8_decode("Accesorios ".$modelo);
	$mail->MsgHTML(utf8_decode($mensaje));
	/*******************************************************/
	/*******************************************************/
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		//Redireccionar a la pagina correspondiente
		header('location:accesorios-enviado.php');	
	}
} else{ //Si no existe variable de session, redireccion a la página principal
	header("Location: index.php");
}

?>