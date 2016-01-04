<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	// $this->load->library('export');
	// $this->export->to_excel($sql, 'nameForFile');

class Export{
    
	function to_excel($array, $filename) {
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename='.$filename.'.xls');

		// Filter all keys, they'll be table headers
		$h = array();
		foreach($array->result_array() as $row){
			foreach($row as $key=>$val){
				if(!in_array($key, $h)){
					$h[] = $key;   
				}
			}
		}
		
		//echo the entire table headers
		echo '<table><tr>';

		foreach($h as $key) {
			$key = ucwords($key);
			echo '<th>'.$key.'</th>';
		}
		echo '</tr>';

		foreach($array->result_array() as $row){
			echo '<tr>';
			foreach($row as $val)
				$this->writeRow($val);
			echo '</tr>';
		}
		echo '</tr>';
		echo '</table>';
	}

	function writeRow($val) {
		echo '<td>'.$val.'</td>';
	}

}

 // Do you wish to perform the following operations?
 //   Download remote "cotizacion_model.php" (35 minutes newer) over local "cotizacion_model.php" [12:57pm 5/28/14 vs. 12:22pm 5/28/14]
 // (Select via quick panel) Yes
