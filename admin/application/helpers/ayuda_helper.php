<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//si no existe la función invierte_date_time la creamos
if(!function_exists('text_to_array')){
	function text_to_array($str) {
		//Initialize arrays
		$keys = array();
		$values = array();
		$output = array();
		//Is it an array?
		if( substr($str, 0, 5) == 'Array' ) {
			//Let's parse it (hopefully it won't clash)
			$array_contents = substr($str, 7, -2);
			$array_contents = str_replace(array('[', ']', '=>'), array('#!#', '#?#', ''), $array_contents);
			$array_fields = explode("#!#", $array_contents);
			//For each array-field, we need to explode on the delimiters I've set and make it look funny.
			for($i = 0; $i < count($array_fields); $i++ ) {
				//First run is glitched, so let's pass on that one.
				if( $i != 0 ) {
					$bits = explode('#?#', $array_fields[$i]);
					if( $bits[0] != '' ) $output[$bits[0]] = $bits[1];
				}
			}
			//Return the output.
			return $output;
		} else {
			//Duh, not an array.
			echo 'The given parameter is not an array.';
			return null;
		}
	}
}


