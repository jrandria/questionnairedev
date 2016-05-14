<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ReponsesModel extends CI_Model
	{

	public function insertResponses($data){
        $this->db->insert('reponses', $data); 
    }

	public function selectAllResponses(){
   		 $arr = array();

   		$query = $this->db->get('reponses');

   		foreach ($query->result_array() as $row)
        {
            $arr[]=$row;
        }
        return $arr;
	}

	public function insertClient($data){
		$this->db->insert('client', $data); 
		$insert_id = $this->db->insert_id();

  		 return  $insert_id;
	}



	}