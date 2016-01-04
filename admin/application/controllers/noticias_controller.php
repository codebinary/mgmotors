<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias_controller extends CI_Controller {

	private $totalNoticias;

	public function __construct(){
		parent::__construct();
		// $this->load->helper('load_controller');
		$this->load->model('noticias_model');
	  $this->load->library(array('pagination','session','form_validation'));
		$this->load->helper('url');
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
			'title_proyect'	=> 'Lista de Noticias',
			'page' => 1
		);
		/*************/
		/*************/
		// echo "<pre>";
		// print_r($this->session->all_userdata());
		// echo "</pre>";
		// exit;
		// if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin'){
		if($this->session->userdata('perfil') == FALSE){
			redirect(base_url().'users_controller');
		} elseif ($this->session->userdata('perfil') != 'admin') {
			redirect(base_url().'cotizacion_controller');
		}
		$this->load->view('ci_sections/html_noticias', $data);
		$this->output->set_common_meta($title, $description, $keywords);
	}

	public function paginationConfig($offset = 0, $search = ''){
		$this->output->unset_template();
		$limit = 10;
		// ----> 
		if(empty($search)){
			$instanTotalNoticias = $this->noticias_model->totalNoticias();
			$this->totalNoticias = $instanTotalNoticias[0]["TOTAL"];
			$this->dataNoticias  = $this->noticias_model->limitNoticias($offset, $limit);
		} else {
			$instanTotalNoticias = $this->noticias_model->totalSearchNoticias($search);
			$this->totalNoticias = $instanTotalNoticias[0]["TOTAL"];
			$this->dataNoticias  = $this->noticias_model->limitSearchNoticias($search, $offset, $limit);
		}

		if($this->totalNoticias > 0){
			// ----> 
			$data['noticias']			 = $this->dataNoticias;
	    $config["base_url"]		 = base_url();
	    $config["total_rows"]	 = $this->totalNoticias;
	    $config["per_page"] 	 = $limit;
	    // -->
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

	public function conten_list($numPag = 0, $search = '', $header = true, $grid = true, $footer = true){
		$this->output->unset_template();
		$paginationNoticias = $this->paginationConfig($numPag, $search);

		// var_dump($paginationNoticias);
		$nullReg =  isset($paginationNoticias['null_row']) == true ?  false : true;

		if($nullReg){
			// echo $this->body_list($paginationNoticias["noticias"]);
			// exit();


			$data = array(
				'header' 	=> $header 	== true ? $this->header_list() : '',
				'grid' 		=> $grid 		== true ? $this->body_list($paginationNoticias["noticias"]) : '',
				'brkBF'		=> $grid 		== true && $footer 	== true ? $this->brk_body_footer() : '',
				'footer' 	=> $footer 	== true ? $this->footer_list($paginationNoticias["pagination"]) : '',
				'brkF' 		=> $grid 		== true && $footer 	== true ? $this->brk_footer() : '',
				'nullReg' => false
			);
		} else {
			$data = array(
				'nullReg' => $paginationNoticias['null_row']
 			);
		}
		echo json_encode($data);
	}

	public function ajax_conten_list($numPag = 0, $grid = true, $footer = true){
		// $this->output->unset_template();
		$paginationNoticias = $this->paginationConfig($numPag);
		$data = array(
							'grid' => $grid == true ? $this->body_list($paginationNoticias["noticias"]) : '',
							'footer' => $footer == true ? $this->footer_list($paginationNoticias["pagination"]) : ''
						);
		echo json_encode($data);
	}

	public function header_list(){
	$this->output->unset_template();
	$htmlHeader = '<div id="crudtable_wrapper" class="dataTables_wrapper" role="grid">';
    							if($this->session->userdata('perfil') == 'admin'):
	$htmlHeader .=	'<div class="row">
											<div class="col-sm-8">
												<div class="btn-group">
													<a class="btn btn-default DTTT_button_text" id="btnAddNoticia"><i class="icon-plus-sign"></i> <span>Nuevo</span></a>
													<a class="btn btn-default DTTT_button_text disabled" id="btnEditNoticia"><i class="icon-edit"></i> <span>Editar</span></a>
													<a class="btn btn-default DTTT_button_text disabled" id="btnMdlEvnDlt"><i class="icon-remove-sign"></i> <span>Eliminar</span></a>
													<a class="btn btn-default DTTT_button_text disabled" id="btnEstblPrnt"><i class="icon-ok-circle"></i> <span>Noticia Principal</span></a>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="dataTables_filter" id="crudtable_filter">
													<label><input type="text" aria-controls="crudtable" class="form-control" placeholder="Buscar..." id="iptSearch"></label>
												</div>
											</div>
										</div>';
									else:
	$htmlHeader .=	'<div class="row">
											<div class="col-sm-4">
												<div id="crudtable_filter">
													<label><input type="text" aria-controls="crudtable" class="form-control" placeholder="Buscar..." id="iptSearch"></label>
												</div>
											</div>
											<div class="col-sm-8"></div>
										</div>';
									endif;
		$htmlHeader .=	'<div id="loaderTable">';
		return $htmlHeader;
	}

	public function body_list($gridlist){
		$this->output->unset_template();
		$htmlList = '<table id="tblNoticias" class="table table-striped">
										<thead>
											<tr>
												<th class="center">No.</th>
												<th class="center">Titulo</th>
												<th class="center">Descripcion</th>
											</tr>
										</thead>
										<tbody>';
		foreach($gridlist AS $registro):
			$descriptionA = strip_tags(preg_replace("/<img[^>]+\>/i", " ", $registro['descripcion']));
			$descripcionN = strlen($descriptionA) > 70 ? substr($descriptionA, 0, 70)." ..." : $descriptionA;
			$htmlList .= '<tr class="selectable" idRow="'.$registro['id'].'">
											<td class="center">'.$registro['id'].'</td>
											<td class="center">'.$registro['title'].'</td>
											<td class="center">'.$descripcionN.'</td>
										</tr>';
		endforeach;
		$htmlList .= '</tbody>
						</table>';
		return $htmlList;
	}

	public function brk_body_footer(){
		$htmlBrkBF = '</div>
									<div class="row">
							    	<div class="col-sm-6"></div>
										<div class="col-sm-6">
										<div class="dataTables_paginate paging_bootstrap">';
		return $htmlBrkBF;
	}

	public function footer_list($links){	
		$this->output->unset_template();	
		$htmlFooter = $links;
		return $htmlFooter;
	}

	public function brk_footer(){
		$htmlBrkF = '</div>
								</div>
							</div>
						</div>';
		return $htmlBrkF;
	}

	public function fromAdd(){
		$this->output->unset_template();
		$data['page'] = 2;
		$this->load->view('ci_sections/html_noticias', $data);
	}

	public function frmEdit(){
		$this->output->unset_template();
		$data = array(
							'page' => 3,
							'idRow' => $_GET['idRow'],
							'dataFrm' => $this->noticias_model->listarNoticia($_GET['idRow']));
		$this->load->view('ci_sections/html_noticias', $data);
	}

	public function fromAddSave(){
		$this->output->unset_template();
		$this->noticias_model->insertNoticia($_GET['txtTitulo'], $_GET['txtDescripcion'], $_GET['txtFecha']);
	}

	public function fromEditSave(){
		$this->output->unset_template();
		$this->noticias_model->updateNoticia($_GET['txtId'], $_GET['txtTitulo'], $_GET['txtEdtrDescrip'], $_GET['txtFecha']);
	}

	public function fromDltSave(){
		$this->output->unset_template();
		$this->noticias_model->deleteNoticia($_GET['idRegRow']);
	}

	public function fromNtPSave(){
		$this->output->unset_template();
		$this->noticias_model->principalNoticia($_GET['idRegRow']);
	}

	public function getUploads(){
		$this->output->unset_template();
		$this->load->helper('directory');
		$this->load->helper('file');
		$this->path = "imagenes";
		$map = directory_map($this->path);
		foreach ($map as $k => $v){
	    if (!is_array($v))
	      echo "[file]: ",$v,"\n";
			else
		    echo "[directory]: ",$k,"\n",print_dir($v);
		}
	}

	public function imageUpload(){
		$this->output->unset_template();
		// /************/
		// Allowed extentions.
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		// Get filename.
		$temp = explode(".", $_FILES["file"]["name"]);
		// Get extension.
		$extension = end($temp);
		// An image check is being done in the editor but it is best to
		// check that again on the server side.
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& in_array($extension, $allowedExts)) {
	    // Generate new random name.
	    $name = sha1(microtime()) . "." . $extension;
	    // Save file in the uploads folder.
	    move_uploaded_file($_FILES["file"]["tmp_name"], "imagenes/" . $name);
	    // Generate response.
	    $response = new StdClass;
	    $response->link = base_url()."imagenes/" . $name;
			$array = array(
				'filelink' => $response->link
			);
			echo stripslashes(json_encode($array));
		}
		// $config = array('upload_path' => 'imagenes/',
		//                 'upload_url' => base_url().'imagenes/',
		//                 'allowed_types' => 'jpg|gif|png|jpeg',
		//                 'overwrite' => false,
		//                 'max_size' => 512000);
		// $this->load->library('upload', $config);
		// if (!$this->upload->do_upload()) {
		//     echo json_encode(array('error' => $this->upload->display_errors()));
		// } else {
		// 	$data = $this->upload->data();
		//     $array = array(
		//       'filelink' => $config['upload_url'] . $data['file_name']
		//     );            
		//     echo stripslashes(json_encode($array));
		// }
	}

	public function frmList($frm = 1, $id = null){
		$data['id'] = $id;
		$data['frm'] = $frm;
		$this->load->view('ci_sections/html_noticias', $data);
		$this->output->unset_template();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */