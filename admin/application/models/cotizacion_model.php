<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cotizacion_model extends CI_Model{

	public function __construct(){
		// nos sirve para cargar los modelos :D ....
		parent::__construct();
	}

	public function getCotizacion($fechaUno = null, $fechaDos = null){		
		if(!empty($fechaUno) OR !empty($fechaDos)){
			// Si se encuentran limpios xD
			// SELECT * FROM `cotizacion` WHERE (`fecha` BETWEEN '2014-03-31' AND '2014-04-01') ORDER BY `fecha` DESC
			$this->db->order_by('id_cotizacion', 'desc');
			$this->db->where('fecha >=', $fechaUno);
			$this->db->where('fecha <=', $fechaDos);
		}
		$query = $this->db->get('cotizacion');
		return $query;
	}

	public function totalCotizacion(){
		return $this->db->count_all('cotizacion');
	}

	public function limitCotizacion($limit, $offset){
		$data = array();
		$this->db->order_by("id_cotizacion", "desc");
		$query = $this->db->get('cotizacion', $limit, $offset);
		// echo $this->db->last_query();
		foreach($query->result() as $row){
	   	$data[] = $row;
		}
		return $data;
	}

	public function totalSearchCotizacion($fechaUno = null, $fechaDos = null){
		$this->db->where('fecha >=', $fechaUno);
		$this->db->where('fecha <=', $fechaDos);
		$this->db->from('cotizacion');
		// echo $this->db->count_all_results();
		// echo $this->db->last_query();
		// exit;
		return $this->db->count_all_results();
	}

	public function limitSearchCotizacion($fechaUno = null, $fechaDos = null, $limit, $offset){
		//
		$this->db->order_by("id_cotizacion", "desc");
		$this->db->where('fecha >=', $fechaUno);
		$this->db->where('fecha <=', $fechaDos);
		$query = $this->db->get('cotizacion', $limit, $offset);
		// echo $this->db->last_query();
		foreach($query->result() as $row){
	   	$data[] = $row;
		}
		return $data;
	}


}

