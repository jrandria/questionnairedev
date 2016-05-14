<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome extends CI_Controller {


	public function index() {

		$this->home();

	}

	public function home()
	{

		$this->load->model('model_users');
		$this->load->library('pro');

		$data['title']='MVC Cool title';
		$data['page_header']='INTRO TO MVC';
		//$data['firstnames']=$this->model_users->getFirstNames();
		//$data['users']=$this->model_users->getUsers();

		$this->loadPage('webpageView',$data); 

        //echo $this->pro->show_hello_world();// test e library
	}

	public function loadPage($page,$data){

		$this->load->view('common/headerView');
		$this->load->view('common/asideView');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('common/footerView');
	}

}


