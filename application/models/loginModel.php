<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	Class LoginModel extends CI_Model
	{

		public function login($name,$password)
		{

			$this->db->where('name', $name);
			$this->db->where('password', MD5($password));

			$this->db->limit(1);
			$query=$this->db->get('tbl_user');

			/*
				$data=array('name'=>$name,'password'=>$password);
				$query=$this->db->get_where('tbl_users',$data)
			*/
		
			if($query->num_rows()==1)
			{
				//print_r($query->result());
				return $query->result();
			}
		 	else
			{
				return false;
			}
		}

		public function _login($name, $password)
		{
			   $this -> db -> select('id, name, password');
			   $this -> db -> from('tbl_user');
			   $this -> db -> where('name', $name);
			   $this -> db -> where('password', MD5($password));
			   $this -> db -> limit(1);

			      $query = $this -> db -> get();
		 
			   		if($query -> num_rows() == 1)
			   		{
			     		return $query->result();
			   		}
			  		 else
			  		 {
			     		return false;
			   		}
		}

	}

