<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Util {

	public function __construct()
	{
		
	}

	function array_insert_numeric(&$array, $position, $insert)
	{
	    if (is_int($position)) {
	        array_splice($array, $position, 0, $insert);
	    } else {
	        $pos   = array_search($position, array_keys($array));
	        $array = array_merge(
	            array_slice($array, 0, $pos),
	            $insert,
	            array_slice($array, $pos)
	        );
	    }
	}

	function array_insert_associative(&$array,$values,$offset) {

    	return array_slice($array, 0, $offset, true) + $values + array_slice($array, $offset, NULL, true);

	}

	function isClientSatisfied($dataTest,$data){

		$valBool=TRUE;

		foreach ($dataTest as $key) {
			if(in_array($key,$data)){
				$valBool=FALSE;
			}
		}
				
		return $valBool;
	}

	function printr($data) {
	   echo "<pre>";
	      print_r($data);
	   echo "</pre>";
	}
}