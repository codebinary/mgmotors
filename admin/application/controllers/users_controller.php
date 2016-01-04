<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_controller extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  $this->load->model('users_model');
	  $this->load->library(array('session','form_validation'));
	  $this->load->helper(array('url','form', 'security'));
	  $this->_init();
	}

	private function _init(){
		$this->output->set_template('login');
	}

	public function index(){
		switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				$data['title'] = 'Login Mg';
				$description = '';
				$keywords = '';
				$data['page'] = 1;
				$this->load->view('ci_sections/html_users',$data);
				$this->output->set_common_meta($data['title'], $description, $keywords);
			break;
			case 'admin':
				redirect(base_url().'noticias_controller');
			break;
			case 'user':
				redirect(base_url().'cotizacion_controller');
			break;
			default:
				$data['token'] = $this->token();
				$data['title'] = 'Login con roles de usuario en codeigniter';
				$data['page'] = 1;
				$description = '';
				$keywords = '';
				$this->load->view('ci_sections/html_users',$data);
				$this->output->set_common_meta($data['title'], $description, $keywords);
			break;        
		}
	}

	public function new_user(){
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')){
			$this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
			$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
			//lanzamos mensajes de error si es que los hay
			if($this->form_validation->run() == FALSE){
				$this->index();
			}else{
				$username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_user($username,$password);
				if($check_user == TRUE){
					$data = array(
						'is_logued_in'	=> TRUE,
						'id_usuario'		=> $check_user->id,
						'perfil'				=> $check_user->perfil,
						'username'			=> $check_user->username
					);
					$this->session->set_userdata($data);
					// $this->index();
				}
			}
		} else {
			redirect(base_url().'users_controller');
		}
	}

	public function token(){
	  $token = md5(uniqid(rand(),true));
	  $this->session->set_userdata('token',$token);
	  return $token;
	}

	public function logout_ci(){
	  $this->session->sess_destroy();
	  $this->index();
	}

	public function admin(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'users_controller');
		}
		$data['titulo'] = 'Bienvenido Administrador';
		$this->load->view('admin_view',$data);
	}
	
	public function login_user(){
		$this->output->unset_template();
		if ($this->input->is_ajax_request()) {
			$user = $_GET['user'];
			$clve = sha1($_GET['clve']);
			$chkU = $this->users_model->login_user($user, $clve);
			if($chkU['login'] == TRUE){
				$data = array(
							'is_logued_in'	=> TRUE,
							'id_usuario'		=> $chkU['dataL']->user_username,
							'perfil'				=> $chkU['dataL']->user_perfil,
							'username'			=> $chkU['dataL']->user_password
						);
				$this->session->set_userdata($data);
				echo 'true';
			}	else {
				echo 'false';
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */