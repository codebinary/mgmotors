<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->helper('load_controller');
	}

	public function index(){
		$data = array(
			'title' => 'Admin',
			'name_proyect' => 'Grupo MG',
			'loadJs' => ""
		);
		$this->parser->parse('view_template', $data);
	}
	
	/* Carga de Menu */
	public function loader($idMenu, $controller){
		if($this->input->is_ajax_request()){
			$data['menu'] = $idMenu;
			$menu = array(
				"menuLeft" => $this->load->view('menu_list', $data, true)
			);
			$generic = array_merge($menu, load_controller($controller));
			echo json_encode($generic);
		}
	}
}