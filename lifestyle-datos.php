<?php
//importamos la clase de PHPMailer (Version 5.2.1)
require_once('phpmailer/class.phpmailer.php');

//Sesión para comunicarse con el formulario de contacto
session_start();

//Verificamos que coincida la variable de session

if ($_SESSION['estado'] == "activo" and $_POST['origen']=='formulario'){//Si es correcto, procede al envio de datos y guardado en la base de datos

	$nombres		=	$_POST['nombres'];
	$email			=	$_POST['email'];
	$url			=	$_POST['url'];
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
	
	mysql_query("INSERT INTO recomendaciones (nombres,email,url,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .$email."','"
	  .$url."','"  
	  .$fecha."' ) ");
	
	mysql_close($conexion);

	/************************************************** Envio de Correo con PHPMailer **********************************************/
	$mail             = new PHPMailer(); // defaults to using php "mail()"
	$mail->IsSendmail(); // telling the class to use SendMail transport
	
	$mensaje = "Este mensaje fue enviado por : ". $nombres." ".$apellidos."<br />";
	$mensaje .= '
	
	<table width="500" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="184">&nbsp;</td>
		<td width="498">&nbsp;</td>
	  </tr>
	  <tr>
		<td>Nombres:</td>
		<td>'. $nombres.'</td>
	  </tr>
	  <tr>
		<td>E-mail:</td>
		<td>'. $email .'</td>
	  </tr>
	  <tr>
		<td>E-mail:</td>
		<td>'. $url .'</td>
	  </tr>
	  <tr>
		<td>Enviado el:</td>
		<td>'. date('d/m/Y', time());'</td>
	  </tr>
	</table>';

	$mail->SetFrom('servicios@mgmotors.com.pe', 'Solicitud newsletters');

	//Destinatarios
	//$mail->AddAddress("epadilla@skbergeperu.com.pe");
	//$mail->AddAddress("gruju@skbergeperu.com.pe");
	$mail->AddAddress("mgmorrisgarages@gmail.com");

	/*if($tienda=="sanborja"){
	$mail->AddAddress("gruju@skbergeperu.com.pe");
	$mail->AddAddress("amedina@skbergepr.com.pe");

	}

	if($tienda=="surquillo"){	
	$mail->AddAddress("rroncal@limautos.pe");

	}


	if($tienda=="chorrillos"){	
	$mail->AddAddress("jcespedes@schettiniperformance.com");
	$mail->AddAddress("mgianella@schettiniperformance.com");


	}


	if($tienda=="plazanorte"){	
	$mail->AddAddress("jcoral@limautos.pe");

	}

	if($tienda=="sanmiguel"){	
	$mail->AddAddress("jfinocchiaro@limautos.pe");

	}

	if($tienda=="cusco"){	
	$mail->AddAddress("fgilmora@autodisacusco.com");
	$mail->AddAddress("emedina@autodisacusco.com");
	$mail->AddAddress("fiapaza@autodisacusco.com");
	$mail->AddAddress("bzagal@skbergeperu.com.pe");

	}

	if($tienda=="chiclayo"){	
	$mail->AddAddress("bzagal@skbergeperu.com.pe");
	//$mail->AddAddress("drodriguez@interamericananorte.com");
	$mail->AddAddress("nllontop@interamericananorte.com");
	$mail->AddAddress("fvenegas@interamericananorte.com");

	}

	if($tienda=="trujillo"){	
	$mail->AddAddress("gchichizola@interamericanatrujillo.com");
	$mail->AddAddress("bzagal@skbergeperu.com.pe");

	}

	if($tienda=="piura"){	
	$mail->AddAddress("fhuaman@interamericananorte.com");
	$mail->AddAddress("drodriguez@interamericananorte.com");
	$mail->AddAddress("bzagal@skbergeperu.com.pe");

	}

	if($tienda=="arequipa"){	
	$mail->AddAddress("jchavez@motorsur.com.pe");
	$mail->AddAddress("bzagal@skbergeperu.com.pe");

	}

	if($tienda=="santaanita"){
	$mail->AddAddress("gruju@skbergeperu.com.pe");
	$mail->AddAddress("amedina@skbergepr.com.pe");

	}*/



	
	$mail->Subject    = utf8_decode("Solicitud newsletters MG");

	$mail->MsgHTML(utf8_decode($mensaje));

	if(!$mail->Send()) {
	  	echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		header("Location: recomendacion-enviada.php");	
	}

} else{ //Si no existe variable de session, redireccion a la página principal
	
	header("Location: index.php");
}

?>