<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	// toujours faire un test si l'utilisateur est bien connecté et que la session est toujours active
	function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			// Redirection vers la page de login
			redirect('login', 'refresh');
		}
		
	}

	function creation_client(){
		$this->index();

		$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('pages/create_user',1,$this->data);

	}

	function suppression_client(){
		$this->index();

		$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('pages/suppr_user',1,$this->data);
	}

	function planning_client() {
		$this->index();

				$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('pages/planning_client',1,$this->data);
	}

	function clients_attestation(){
		$this->index();

				$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('pages/clients_attestation',1,$this->data);
	}


	function clients_liste(){
		$this->index();

		$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('pages/clients_liste',1,$this->data);
	}


	function clients_qualite(){
		$this->index();

		$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('pages/clients_qualite',1,$this->data);
	}


	function loadPage($page,$type,$data){//$type (0 pour login ou toute page qui n'a pas besoin de header/side)

		if($type){
			$this->load->view('common/headerView');
			$this->load->view('common/asideView',$data);
		}

		$this->load->view($page,$data);
		$this->load->view('common/footerView');
	}

}