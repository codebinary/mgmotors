<?php
date_default_timezone_set('America/Lima');
class conx{
	public static function conectar(){
		// $con = mysqli_connect("localhost","root","root");
		// mysqli_query("SET NAMES 'utf8'");
		// mysqli_select_db("mg_admin");
		$mysqli = new mysqli("localhost", "mgmotors_dbadmin", "Q6]0P#+{6;6{", "mgmotors_db");
		mysqli_set_charset($mysqli, "utf8");
		/* check connection */
		if ($mysqli->connect_errno) {
		    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		return $mysqli;
	}
}
?>
