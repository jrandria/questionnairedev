<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public $user;

	function _construct(){

		$user=new User();
	}

    function index()
    {

    	$this->user->setPassword('MaPassWord');
        //echo $this->pro->show_hello_world();
        echo $this->user->getPassword();
    }
}