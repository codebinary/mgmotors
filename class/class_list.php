<?php
require_once 'conx/config.php';

class Listas{
	
	// -->
	public function showListDepartamentos(){
		$sql = "SELECT * FROM tblDepartamentos";
		if ($ListaDepartamentos = mysqli_query(conx::conectar(), $sql)) {
			while ($row = $ListaDepartamentos->fetch_object()){
			  $departamentos[] = $row;
			}
			mysqli_free_result($ListaDepartamentos);
		}
		mysqli_close(conx::conectar());
		return $departamentos;
	}

	// -->
	public function showListRSocial($idDepart){
		$sql = "SELECT * FROM tblrsocial WHERE rsocial_id_depa = $idDepart ORDER BY rsocial_id ASC";
		if ($ListaRSocial = mysqli_query(conx::conectar(), $sql)) {
			while ($row = $ListaRSocial->fetch_object()){
			  $rsocial[] = $row;
			}
			mysqli_free_result($ListaRSocial);
		}
		mysqli_close(conx::conectar());
		return $rsocial;
	}


	public function getDepartamento($idDepartamento){
		$sql = "SELECT depart_name FROM tblDepartamentos where depart_id = $idDepartamento LIMIT 1";
		if ($getFirstDepartamento = mysqli_query(conx::conectar(), $sql)) {
			$getDepartamento 	= mysqli_fetch_array($getFirstDepartamento);
			$Rdepartamento 		= $getDepartamento['depart_name'];
			mysqli_free_result($getFirstDepartamento);			
		}
		mysqli_close(conx::conectar());
		return $Rdepartamento;
	}

	public function getTaller($idRsocial){
		/* GetRSocial*/
		$sql = "SELECT rsocial_name FROM tblrsocial where rsocial_id = $idRsocial LIMIT 1";
		if ($getFirstRsocial = mysqli_query(conx::conectar(), $sql)) {
			$getRsocial 	= mysqli_fetch_array($getFirstRsocial);
			$RRsocial 		= $getRsocial['rsocial_name'];
			mysqli_free_result($getFirstRsocial);			
		}
		mysqli_close(conx::conectar());
		return $RRsocial;
	}


}
