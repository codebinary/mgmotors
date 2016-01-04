<?php

	$img = array(
		'image_01.jpg', 
		'image_02.jpg', 
		'image_03.jpg', 
		'image_04.jpg', 
		'image_05.jpg'
		);

	$imgHover = array(
		'imageOver_01.jpg', 
		'imageOver_02.jpg', 
		'imageOver_03.jpg', 
		'imageOver_04.jpg', 
		'imageOver_05.jpg'
		);

	$n = $_GET['nAle'];

	$imagenes = array('img' => $img[$n], 'imghover' => $imgHover[$n]);

	echo json_encode($imagenes);  


?>