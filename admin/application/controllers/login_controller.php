<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array(
			'title' => 'Admin',
			'name_proyect' => 'Grupo MG'
		);
		$this->parser->parse('view_login', $data);		
	}
}






