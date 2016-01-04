<?php
//importamos la clase de PHPMailer (Version 5.2.1)
require_once('phpmailer/class.phpmailer.php');

//Sesión para comunicarse con el formulario de contacto
session_start();

//Verificamos que coincida la variable de session

if ($_SESSION['estado'] == "activo" and $_POST['origen']=='formulario'){//Si es correcto, procede al envio de datos y guardado en la base de datos

	$nombres			=	$_POST['nombres'];
	$apellidos			=	$_POST['apellidos'];
	$telefono			=	$_POST['telefono'];
	$email				=	$_POST['email'];
	$dni				=	$_POST['dni'];
	$modelo				=	$_POST['modelo'];
	$color				=	$_POST['color'];
	$tienda				=	$_POST['tienda'];
	$comentarios		=	$_POST['comentarios'];
	$fecha				= date('Y-m-d H:i:s');
	
	$conexion 		= mysql_connect("localhost","mgmotors_dbadmin","Q6]0P#+{6;6{");//Servidor en Internet
	//$conexion = mysql_connect("localhost","root","");

	
	if(!conexion){
		die('No se pudo conectar por :'.mysql_error());
	}
	
	//Nombre de base datos en servidor en internet
	mysql_select_db("mgmotors_db", $conexion);
	
	//Nombre base datos local
	//mysql_select_db("mgmotors_db", $conexion);

	/*$busqueda = "select count(*) from cotizacion where dni='".$dni."'";
	$res = mysql_query($busqueda, $conexion);	
	if($res > 0){ 
		header("Location: http://www.mgmotors.com.pe/");
	}*/
	$busqueda = "SELECT * FROM cotizacion WHERE dni ='$dni'";
	$resultado = mysql_query($busqueda,$conexion);
	$fila = mysql_num_rows($resultado);

	if($fila == 0){
		mysql_query("INSERT INTO cotizacion (nombres,apellidos,telefono,email,dni,modelo,color,tienda,comentarios,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .utf8_decode($apellidos)."','"
	  .$telefono."','"
	  .$email."','"
	  .$dni."','"
	  .$modelo."','"   
	  .utf8_decode($color)."','"  
	  .utf8_decode($tienda)."','"   
	  .utf8_decode($comentarios)."','"  
	  .$fecha."' ) ");
	}else{
		header("Location: index.php");
	}


	/*mysql_query("INSERT INTO cotizacion (nombres,apellidos,telefono,email,dni,modelo,color,tienda,comentarios,fecha) 
	   
	     VALUES ('"
	  .utf8_decode($nombres)."','"
	  .utf8_decode($apellidos)."','"
	  .$telefono."','"
	  .$email."','"
	  .$dni."','"
	  .$modelo."','"   
	  .utf8_decode($color)."','"  
	  .utf8_decode($tienda)."','"   
	  .utf8_decode($comentarios)."','"  
	  .$fecha."' ) ");
*/
	
	
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
	//$mail->AddAddress("esnider@vertice.pe");

	if($tienda=="sanborja"){
		//$mail->AddAddress("bzagal@skbergeperu.com.pe");
		//$mail->AddAddress("esnider@vertice.pe");
		$mail->AddAddress("james.ontiveros86@gmail.com");
		
	}

	if($tienda=="surquillo"){	
		//$mail->AddAddress("bzagal@skbergeperu.com.pe");
		$mail->AddAddress("james.ontiveros86@gmail.com");
		// $mail->AddAddress("@limautos.pe");
	}

	if($tienda=="bellavista"){	
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

	if($tienda=="naranjal"){	
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
	}

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
			$cssStyleEndBorder = '#FFCE3D';
			$imgFotos = '';
			$imgFotos1 = '';
			$imgFotos2 = '';
			$imgFotos3 = '';
			$imgDescription = '';
			$imgRedesSociales = '';
			$pdfFile = 'mg3';
			$youtube1 = 'https://www.youtube.com/watch?v=4Vw60rM5dZM';
			$youtube2 = 'https://www.youtube.com/watch?v=SrOlVfbYKg0';
			$youtube3 = 'https://www.youtube.com/watch?v=--TDk3VAKGU';
		break;
		
		case('MG 3 Xross'):
			$urlModelo = 'mg3xross';
			$defaultFolder = "mg3xross";
			$cssStyleEndBorder = '#ff7101';
			$pdfFile = 'mg3xross';
			$youtube1 = 'https://www.youtube.com/watch?v=k9IvqnikqpU';
			$youtube2 = 'https://www.youtube.com/watch?v=SrOlVfbYKg0';
			$youtube3 = 'https://www.youtube.com/watch?v=--TDk3VAKGU';
		break;
		
		case('MG 350'):
			$urlModelo = 'mg350';
			$defaultFolder = "mg350";
			$cssStyleEndBorder = '#1b83cc';
			$pdfFile = 'mg350';
			$youtube1 = 'https://www.youtube.com/watch?v=k9IvqnikqpU';
			$youtube2 = 'https://www.youtube.com/watch?v=SrOlVfbYKg0';
			$youtube3 = 'https://www.youtube.com/watch?v=--TDk3VAKGU';
		break;
		
		case('MG 5'):
			$urlModelo = 'mg5';
			$defaultFolder = "mg5";
			$cssStyleEndBorder = '#C223A1';
			$pdfFile = 'mg5';
			$youtube1 = 'https://www.youtube.com/watch?v=8tSG5Pygp5g';
			$youtube2 = 'https://www.youtube.com/watch?v=rdjSNQGFIe4';
			$youtube3 = 'https://www.youtube.com/watch?v=--TDk3VAKGU';
		break;

		case('MG 5 sedan'):
			$urlModelo = 'mg5-sedan';
			$defaultFolder = "mg5-sedan-turbo";
			$cssStyleEndBorder = '#C12998';
			$pdfFile = 'mg5-sedan';
			$youtube1 = '';
			$youtube2 = '';
			$youtube3 = '';
		break;

		case('MG 5 Turbo'):
			$urlModelo = 'mg5-turbo';
			$defaultFolder = "mg5-turbo";
			$cssStyleEndBorder = '#CA0036';
			$pdfFile = 'mg5-turbo';
			$youtube = '';
		break;

	}
	$ocultar = $youtube1 == '' ? '1px' : 'auto'; 
	$html_clie = '<html>
									<body sytle="margin: 0; padding: 0;">
										<div id="wrapper" style="width: 650px; margin: 0 auto;">
											<div id="modelo-titulo" style=" background: '.$cssStyleEndBorder.';" >
												<a href="http://www.mgmotors.com.pe/mg350.php" target="_blank"><img style=" margin-bottom:-2px;" src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/cabecera.jpg"></a>
											</div>
											<div id="contenido">
												<h2 style="margin:0px auto; background: '.$cssStyleEndBorder.'"><img style="margin-bottom: -5px;" src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video-title1.jpg"></h2>
												<div id="videos-thumb" style=" max-height: '.$ocultar.';overflow: hidden; margin-bottom: 40px; background: '.$cssStyleEndBorder.';">
													<ul style=" padding: 0; list-style: none; width: 570px; margin: 0 auto; margin-top: 20px; padding-bottom: 15px; overflow: hidden;">
														<li style="float: left; margin-right: 12px; margin-left:0;"><a href="'.$youtube1.'"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video-1.jpg"></a></li>
														<li style="float: left; margin-right: 12px; margin-left:0;"><a href="'.$youtube2.'" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video-2.jpg"></a></li>
														<li style="float: left; margin-right: 0; margin-left:0;"><a href="'.$youtube3.'" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/video-3.jpg"></a></li>
													</ul>
												</div>
												<div id="contenido-inferior" style="overflow: hidden; width: 650px; margin: auto; margin-bottom: 30px; margin-left: -12px;">
													<div id="fotos-izquierda" style="width: 220px; float: left;">
													<ul style="list-style: none; margin: 0;">
														<li style=" margin-left:0px;"><img style="border: 9.5px solid #e5e9ec; margin-left:-4px" src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/foto_1.jpg"></li>
														<li style=" margin-left:0px;"><img style="border: 8px solid #e5e9ec; border-right: 9px solid #e5e9ec; border-left: 9px solid #e5e9ec; margin-left: -4px;"src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/foto_2.jpg"></li>
														<li style=" margin-left:0px;"><img style="border:11px solid #e5e9ec; border-right: 11px solid #e5e9ec; border-left: 8px solid #e5e9ec; margin-left: -4px;" src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/foto_3.jpg"></li>
													</ul>
													</div>
													<div id="texto" style="width: 374px; float: right; margin-right: 24px;">
														<div id="texto-intro" style="margin-bottom: 68px;">
															<img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/texto1.jpg" style="margin-bottom: 15px;">
															<img src="http://www.mgmotors.com.pe/respuestas/images/mg3xross/linea.jpg" style="margin-left: 12px;">
															<a href="http://www.mgmotors.com.pe/pdf-files/'.$pdfFile.'.pdf" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3xross/pdf1.jpg" style="margin-left: 5px;"></a>
														</div>
														<div id="footer">
															<div id="social" style="margin-left: 20px; float: left;">
																<img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/llamada.jpg">
																<ul style="list-style: none; margin: 0; overflow: hidden; padding: 0;">
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://www.facebook.com/MGPeruOficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/fb.jpg"></a></li>
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://twitter.com/MGPeruOficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/tt.jpg"></a></li>
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://www.youtube.com/user/MGPeruoficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3/yt.jpg"></a></li>
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="http://instagram.com/mgperuoficial" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3xross/cam.jpg"></a></li>
																	<li style="float: left; margin-right: 10px; margin-left:0;"><a href="https://www.pinterest.com/mgperu/" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/mg3xross/p.jpg"></a></li>
																</ul>
															</div>
															<div id="logo" style="float: right; margin-top: 50px;">
																<a href="http://www.mgmotors.com.pe/" target="_blank"><img src="http://www.mgmotors.com.pe/respuestas/images/'.$defaultFolder.'/logo.jpg"></a>
															</div>
														</div>
													</div>
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