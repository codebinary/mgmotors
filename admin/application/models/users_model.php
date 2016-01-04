<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model{

	public function __construct(){
		// nos sirve para cargar los modelos :D ....
		parent::__construct();
	}

	public function login_user($username,$password){
		$this->db->where('user_username',$username);
		$this->db->where('user_password',$password);
		$query = $this->db->get('tblUsers');

		$sql = $this->db->last_query();

		// echo $sql;

		if($query->num_rows() == 1){
			$data = array(
								'dataL' => $query->row(),
								'login' => TRUE
							);
			return $data;
		} else {
			$data = array(
								'login' => FALSE
							);
			return $data;
		}
	}

}

