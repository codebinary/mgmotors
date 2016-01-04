<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Newsletter_model extends CI_Model{

	public function __construct(){
		// nos sirve para cargar los modelos :D ....
		parent::__construct();
	}

	public function getNewsletter($fechaUno = null, $fechaDos = null){
		if(!empty($fechaUno) OR !empty($fechaDos)){
			// Si se encuentran limpios xD
			// SELECT * FROM `cotizacion` WHERE (`fecha` BETWEEN '2014-03-31' AND '2014-04-01') ORDER BY `fecha` DESC
			$this->db->order_by('news_id', 'desc');
			$this->db->where('fecha >=', $fechaUno);
			$this->db->where('fecha <=', $fechaDos);
		}
		$query = $this->db->get('newsletter');
		return $query;
	}

	public function totalNewsletter(){
		return $this->db->count_all('newsletter');
	}

	public function limitNewsletter($limit, $offset){
		$data = array();
		$this->db->order_by("news_id", "desc");
		$query = $this->db->get('newsletter', $limit, $offset);
		// echo $this->db->last_query();
		foreach($query->result() as $row){
			$data[] = $row;
		}
		return $data;
	}

	public function totalSearchNewsletter($fechaUno = null, $fechaDos = null){
		$this->db->where('fecha >=', $fechaUno);
		$this->db->where('fecha <=', $fechaDos);
		$this->db->from('newsletter');
		// echo $this->db->count_all_results();
		// echo $this->db->last_query();
		// exit;
		return $this->db->count_all_results();
	}

	public function limitSearchNewsletter($fechaUno = null, $fechaDos = null, $limit, $offset){
		//
		$data = array();
		$this->db->order_by("news_id", "desc");
		$this->db->where('fecha >=', $fechaUno);
		$this->db->where('fecha <=', $fechaDos);
		$query = $this->db->get('newsletter', $limit, $offset);
		// echo $this->db->last_query();
		foreach($query->result() as $row){
			$data[] = $row;
		}
		return $data;
	}

}