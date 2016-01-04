<?php
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
	$dia				=	$_POST['dia'];
	$hora				=	$_POST['hora'];
	$departamento		=	$_POST['departamento'];
	$taller				=	$_POST['taller'];
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
	
	mysql_query("INSERT INTO testdrive (nombres,telefono,email,modelo,dia,hora,departamento,taller,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .$telefono."','"
	  .$email."','"
	  .$modelo."','"
	  .$dia."','"
	  .$hora."','"   
	  .utf8_decode($departamento)."','"  
	  .utf8_decode($taller)."','"
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
								<td>Apellidos:</td>
								<td>'. $apellidos.'</td>
							  </tr>
							  <tr>
								<td>Teléfono:</td>
								<td>'. $telefono.'</td>
							  </tr>
							  <tr>
								<td>E-mail:</td>
								<td>'. $email .'</td>
							  </tr>
							  <tr>
							  <tr>
								<td>E-mail:</td>
								<td>'. $dni .'</td>
							  </tr>
							  <tr>
								<td>Modelo:</td>
								<td>'. $modelo .'</td>
							  </tr>
							  <tr>
								<td>Modelo:</td>
								<td>'. $color .'</td>
							  </tr>
							  <tr>
								<td>Tienda MG:</td>
								<td>'. $tienda .'</td>
							  </tr>
							  <tr>
								<td>Comentarios:</td>
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
	//$mail->AddAddress("gruju@skbergeperu.com.pe");
	$mail->AddAddress("fsoriano@vertice.pe");

	/*if($tienda=="sanborja"){
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="surquillo"){	
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
		// $mail->AddAddress("@limautos.pe");
	}

	if($tienda=="chorrillos"){	
		$mail->AddAddress("jcespedes@schettiniperformance.com");
		$mail->AddAddress("mgianella@schettiniperformance.com");
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="independencia"){	
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="sanmiguel"){	
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="cusco"){	
		$mail->AddAddress("gugarte@skbergeperu.com.pe");
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="chiclayo"){	
		$mail->AddAddress("gugarte@skbergeperu.com.pe");
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="trujillo"){	
		$mail->AddAddress("gugarte@skbergeperu.com.pe");
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="piura"){	
		$mail->AddAddress("gugarte@skbergeperu.com.pe");
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="arequipa"){	
		$mail->AddAddress("gugarte@skbergeperu.com.pe");
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}

	if($tienda=="santaanita"){
		$mail->AddAddress("bzagal@skbergeperu.com.pe");
	}*/

	$mail->Subject    = utf8_decode("Cotización ".$modelo);
	$mail->MsgHTML(utf8_decode($mensaje));
	/*******************************************************/
	/*******************************************************/
	/*******************************************************/
	switch($modelo){
		case('MG 3'):
			$urlModelo = 'mg3';
			$defaultFolder = "mg3";
			$imgBanner = '';
			$imgVideos = '';
			$imgVideos1 = '';
			$imgVideos1Url = '';
			$imgVideos2 = '';
			$imgVideos2Url = '';
			$imgVideos3 = '';
			$imgVideos3Url = '';
			$cssStyleEndBorder = '#f6d389';
			$imgFotos = '';
			$imgFotos1 = '';
			$imgFotos2 = '';
			$imgFotos3 = '';
			$imgDescription = '';
			$imgRedesSociales = '';
			$pdfFile = 'mg3';
		break;
		
		case('MG 3 Xross'):
			$urlModelo = 'mg3xross';
			$defaultFolder = "mg3xross";
			$cssStyleEndBorder = '#f6a60d';
			$pdfFile = 'mg3xross';
		break;
		
		case('MG 350'):
			$urlModelo = 'mg350';
			$defaultFolder = "mg350";
			$cssStyleEndBorder = '#1a83cc';
			$pdfFile = 'mg350';
		break;
		
		case('MG 5'):
			$urlModelo = 'mg5';
			$defaultFolder = "mg5";
			$cssStyleEndBorder = '#c85eb9';
			$pdfFile = 'mg5';
		break;

		case('MG 5 Turbo'):
			$urlModelo = 'mg5-turbo';
			$defaultFolder = "mg5-turbo";
			$cssStyleEndBorder = '#c85eb9';
			$pdfFile = 'mg5-turbo';
		break;
	}
	$html_clie = '<html>
									<body sytle="margin: 0; padding: 0;">
										<div id="wrapper" style="width: 650px; margin: 0 auto;">
											<div id="modelo-titulo">
												<a href="http://www.mgmotors.com.pe/mg350.php" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/header.jpg"></a>
											</div>
											<div id="contenido">
												<h2 style="width: 570px; margin:0 auto;"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video-title.jpg"></h2>
												<div id="videos-thumb" style="overflow: hidden; margin-bottom: 40px;">
													<ul style="padding: 0; list-style: none; width: 570px; margin: 0 auto; margin-top: 20px; padding-bottom: 15px; overflow: hidden; border-bottom: 1px solid '.$cssStyleEndBorder.';">
														<li style="float: left; margin-right: 15px; margin-left:0;"><a href=""><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video_1.jpg"></a></li>
														<li style="float: left; margin-right: 15px; margin-left:0;"><a href="https://www.youtube.com/watch?v=rdjSNQGFIe4" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video_2.jpg"></a></li>
														<li style="float: left; margin-right: 0; margin-left:0;"><a href="https://www.youtube.com/watch?v=8tSG5Pygp5g" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video_3.jpg"></a></li>
													</ul>
												</div>
												<div id="contenido-inferior" style="overflow: hidden; width: 650px; margin: auto; margin-bottom: 30px;">
													<div id="fotos-izquierda" style="width: 220px; float: left;">
													<ul style="list-style: none; margin: 0;">
														<li style="margin-bottom: 10px; margin-left:0;"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/fotos-titulo.jpg"></li>
														<li style="margin-bottom: 10px; margin-left:0;"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/foto_1.jpg"></li>
														<li style="margin-bottom: 10px; margin-left:0;"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/foto_2.jpg"></li>
														<li style="margin-bottom: 0; margin-left:0;"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/foto_3.jpg"></li>
													</ul>
													</div>
													<div id="texto" style="width: 374px; float: right; margin-right: 40px;">
														<img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/texto.jpg">
														<div id="footer">
															<div id="social" style="margin-left: 20px; float: left;">
																<img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/llamada.jpg">
																<ul style="list-style: none; margin: 0; overflow: hidden; padding: 0;">
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://www.facebook.com/MGPeruOficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/fb.jpg"></a></li>
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://twitter.com/MGPeruOficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/tt.jpg"></a></li>
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://www.youtube.com/user/MGPeruoficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/yt.jpg"></a></li>
																	<li style="float: left; margin-right: 0; margin-left:0;"><a href="http://www.mgmotors.com.pe/pdf-files/'.$pdfFile.'.pdf" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/pdf.jpg"></a></li>
																</ul>
															</div>
															<div id="logo" style="float: right; margin-top: 50px;">
																<a href="http://www.mgmotors.com.pe/" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/logo.jpg"></a>
															</div>
														</div>
													</div>
												</div>
												<div id="legal">
													<p style="font-family: Arial, sans-serif; font-size: 10px; color: #999999; text-align: justify;">Este correo es una respuesta automática al haberse inscrito en la web www.mgmotors.com.pe. Agrega a contacto@mgperu.com.pe a tu lista de contactos para que puedas recibir la información en tu bandeja de entrada. Si ya no deseas recibir mayor información, puedes cancelar tu suscripción escribiendo a contacto@mgperu.com.pe. MG Morris Garages 2014.</p>
												</div>
											</div>
										</div>
									</body>
								</html>';
	$mail_clie = new PHPMailer(); // defaults to using php "mail()"
	$mail_clie->IsSendmail(); // telling the class to use SendMail transport
	$mail_clie->SetFrom('contacto@mgperu.com.pe', 'Contacto MG Peru');
	$mail_clie->AddAddress($email);
	$mail_clie->Subject = utf8_decode("Contacto MG Peru");
	$mail_clie->MsgHTML(utf8_decode($html_clie));
	/*******************************************************/
	/*******************************************************/
	/*******************************************************/
	if(!$mail->Send() || !$mail_clie->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		//Redireccionar a la pagina correspondiente
		header('location:'.$urlModelo.'-enviado.php');	
	}
} else{ //Si no existe variable de session, redireccion a la página principal
	header("Location: index.php");
}

?>