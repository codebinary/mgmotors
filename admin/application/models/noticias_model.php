<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias_model extends CI_Model{

	public function __construct(){
		// nos sirve para cargar los modelos :D ....
		parent::__construct();
	}

	public function listarNoticias(){
		$result = $this->db->query('CALL showNoticias();');
		return $result->result_array();
	}

	public function listarNoticia($id){
		$result = $this->db->query('CALL showNoticia(?);', array($id));
		return $result->result_array();
	}

	public function insertNoticia($title, $descripcion, $fecha){
		$this->db->query('CALL insertNoticias(?, ?, ?);', array($title, $descripcion, $fecha));
	} 

	public function updateNoticia($id, $title, $descripcion, $fecha){
		$this->db->query('CALL updateNoticias(?, ?, ?, ?);', array($id, $title, $descripcion, $fecha));
	}

	public function deleteNoticia($idNoticia){
		$this->db->query('CALL deleteNoticias(?);', array($idNoticia));
	}

	public function principalNoticia($idNoticia){
		$this->db->query('CALL principalNoticias(?);', array($idNoticia));
	}
	//
	public function totalNoticias(){
		$result = $this->db->query('CALL totalNoticias();');
		$res = $result->result_array();
		$result->next_result();
		$result->free_result();
		if (count($res) > 0) {
			return $res;
		} else {
			return 0;
		}
	}
	//
	public function limitNoticias($limit, $start){
		$result = $this->db->query('CALL limitNoticias(?, ?);', array($limit, $start));
		// echo $db->_error_message();
		$sql = $this->db->last_query();

		// echo $sql;

		$res = $result->result_array();
		$result->next_result();
		$result->free_result();
		if (count($res) > 0) {

			// var_dump('<pre>', $res);
			// exit();
			
			return $res;
		} else {
			return 0;
		}
	}
	//
	public function totalSearchNoticias($search){
		$result = $this->db->query('CALL totalSearchNoticias(?);', array($search));
		$res = $result->result_array();
		$result->next_result();
		$result->free_result();
		if (count($res) > 0) {
			return $res;
		} else {
			return 0;
		}
	}
	//
	public function limitSearchNoticias($search, $limit, $start){
		$result = $this->db->query('CALL limitSearchNoticias(?, ?, ?);', array($search, $limit, $start));
		// echo $db->_error_message();
		$res = $result->result_array();
		$result->next_result();
		$result->free_result();
		if (count($res) > 0) {
			return $res;
		} else {
			return 0;
		}
	}
}

