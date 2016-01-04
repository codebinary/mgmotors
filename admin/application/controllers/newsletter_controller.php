<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Newsletter_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->helper('load_controller');
		$this->load->model('newsletter_model');
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
			'title_proyect'	=> 'Lista de Newsletter',
			'page' => 1,
			'newsletter' => $this->listNewsletter()
		);
		/*************/
		/*************/
		if($this->session->userdata('perfil') == FALSE){
			redirect(base_url().'users_controller');
		}
		$this->load->view('ci_sections/html_newsletter', $data);
		$this->output->set_common_meta($title, $description, $keywords);
	}

	public function exportExcel($dateUno = null, $dateDos = null){
		$this->output->unset_template();
		$this->load->library('export');
		if(!empty($dateUno) OR !empty($dateDos)){
			$sql = $this->newsletter_model->getNewsletter($dateUno, $dateDos);
		} else {
			$sql = $this->newsletter_model->getNewsletter();
		}
		$this->export->to_excel($sql, 'exportCotizaciones');
	}

	public function page($offset = 0){
		$title = 'Administrador - MG';
		$data['title_proyect'] = 'Lista de Newsletter';
		$data['page'] = 1;
		// --
		if(isset($_GET['i']) OR isset($_GET['f'])){
			$data['newsletter'] = $this->listNewsletter($offset, $_GET['i'], $_GET['f']);
		} else {
			$data['newsletter'] = $this->listNewsletter($offset);
		}
		// -------------
		$this->load->view('ci_sections/html_newsletter', $data);
		$this->output->set_common_meta($title, '', '');
	}

	public function listNewsletter($offset = 0, $fechaUno = null, $fechaDos = null){
		// $this->output->unset_template();
		$limit = 30;
		// ---->
		if(empty($fechaUno) OR empty($fechaDos)){
			$this->totalNewsletter = $this->newsletter_model->totalNewsletter();
			$this->dataNewsletter  = $this->newsletter_model->limitNewsletter($limit, $offset);
		} else {
			$this->totalNewsletter = $this->newsletter_model->totalSearchNewsletter($fechaUno, $fechaDos);
			$this->dataNewsletter  = $this->newsletter_model->limitSearchNewsletter($fechaUno, $fechaDos, $limit, $offset);
		}
		if($this->dataNewsletter > 0){
		// ---->
			$data['newsletters']			 = $this->dataNewsletter;
			$config["base_url"]		 = base_url().'newsletter_controller/page';
			if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
			$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
			$config["total_rows"]	 = $this->totalNewsletter;
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