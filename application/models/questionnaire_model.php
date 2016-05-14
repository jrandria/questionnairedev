<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	Class Questionnaire_Model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
		}


		public function get_all_users()
		{
			return $this-> db -> get('tbl_user');

		}

		public function get_all_users__()
		{
			$query= $this->db->query('SELECT * FROM tbl_user');

			if($query->num_rows()>0){
				return $query->result();
			} else {
				return NULL;
			}

		}

		//Utilisation d'oop plus poussé (User)
		public function get_all_users_()
		{
		    $query = $this->db->get('tbl_user');
		    $arr = array();

		    foreach ($query->result_array() as $row)
		    {
		        $arr[] = new User($row['id'],$row['name'],$row['password']);
		    }    

		    return $arr;
		}


		public function create_user($data)
		{
			if($this->db->insert('tbl_user',$data))
			{
				return $this->db->insert_id();
			} else {
				return false;
			}

		}

		public function update_user($id,$data)
		{
			$this->db->where('id', $id);

			if($this->db->update('tbl_user',$data)) {
				return true;
			} else {
				return false;
			}
		}

		public function get_user_details($id)
		{
			$this->db->where('id', $id);
			$result = $this->db->get('tbl_user');

			if($result) {
				return $result;
			} else {
				return false;
			}
		}

		public function get_user_details_by_name($name) 
		{

			$result = $this->db->get_where('tbl_user',array('name'=>$name))->result();
			
			if($result) {
				return $result;
			} else {
				return false;
			}

		}

		public function get_user_details_by_password($password) 
		{

			$this->db->where('password', $password);
			$result = $this->db->get('tbl_user');

			if($result) {
				return $result;
			} else {
				return false;
			}

		}



		public function delete_user($id) 
		{

			if($this->db-delete('tbl_user', array('id' => $id))) {
				return true;
			} else {
				return false;
			}
		}

		public function valid_username($name)
		{
			
			//$this->get_user_details_by_name($name));

			if($this->get_user_details_by_name($name))
			{
				return false;//Cas ou l'utilisateur Existe déjà";

			} else {

				return true;//Cas ou l'utilisateur n'existe pas encore";
			}
		}



	}

