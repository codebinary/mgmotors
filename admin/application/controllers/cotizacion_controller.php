<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cotizacion_controller extends CI_Controller {

	private $totalNoticias;

	public function __construct(){
		parent::__construct();
		// $this->load->helper('load_controller');
		$this->load->model('cotizacion_model');
	  $this->load->library(array('pagination','session','form_validation'));
		$this->load->helper(array('ayuda_helper', 'url'));
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
	}

	public function index(){
		$title = 'Administrador - MG';
		$description = '';
		$keywords = '';
		$data = array(
			'title_proyect'	=> 'Lista de Cotizaciones',
			'page' => 1,
			'cotizaciones' => $this->listCotizaciones()
		);
		/*************/
		/*************/
		if($this->session->userdata('perfil') == FALSE){
			redirect(base_url().'users_controller');
		}
		$this->load->view('ci_sections/html_cotizaciones', $data);
		$this->output->set_common_meta($title, $description, $keywords);
	}

	public function exportExcel($dateUno = null, $dateDos = null){
		$this->output->unset_template();
		$this->load->library('export');
		if(!empty($dateUno) OR !empty($dateDos)){						$dateUno .= " 00:00:00";			$dateDos .= " 23:59:59";
			$sql = $this->cotizacion_model->getCotizacion($dateUno, $dateDos);
		} else {
			$sql = $this->cotizacion_model->getCotizacion();
		}
		$this->export->to_excel($sql, 'exportCotizaciones');
	}

	public function page($offset = 0){
		$title = 'Administrador - MG';
		$data['title_proyect'] = 'Lista de Cotizaciones';
		$data['page'] = 1;
		// --
		if(isset($_GET['i']) OR isset($_GET['f'])){
			$data['cotizaciones'] = $this->listCotizaciones($offset, $_GET['i'], $_GET['f']);
		} else {
			$data['cotizaciones'] = $this->listCotizaciones($offset);
		}
		// --
		$this->load->view('ci_sections/html_cotizaciones', $data);
		$this->output->set_common_meta($title, '', '');
	}

	public function listCotizaciones($offset = 0, $fechaUno = null, $fechaDos = null){
		// $this->output->unset_template();
		$limit = 30;
		// ----> 
		if(empty($fechaUno) OR empty($fechaDos)){
			$this->totalCotizacion = $this->cotizacion_model->totalCotizacion();
			$this->dataCotizacion  = $this->cotizacion_model->limitCotizacion($limit, $offset);
		} else {						$fechaUno .= " 00:00:00";			$fechaDos .= " 23:59:59";
			$this->totalCotizacion = $this->cotizacion_model->totalSearchCotizacion($fechaUno, $fechaDos);
			$this->dataCotizacion  = $this->cotizacion_model->limitSearchCotizacion($fechaUno, $fechaDos, $limit, $offset);
		}

		if($this->dataCotizacion > 0){
			// ----> 
			$data['noticias']			 = $this->dataCotizacion;
			$config["base_url"]		 = base_url().'cotizacion_controller/page';
			if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
			$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
	    $config["total_rows"]	 = $this->totalCotizacion;
	    $config["per_page"] 	 = $limit;
	    // -->
	    $config['uri_segment'] = 3;
	    $config['num_links'] = 5;
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['prev_link'] = '&laquo;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['next_link'] = '&raquo;';
			$config['first_link'] = '';
			$config['last_link'] = '';
			// -->
			$this->pagination->initialize($config);
			$data['pagination']	= $this->pagination->create_links();
		} else {
			$data['null_row'] = true;
		}
		return $data;
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */