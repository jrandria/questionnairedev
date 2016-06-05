<?php defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionnaireController extends CI_Controller {

	private $data;
	private $dataResponses;

	/**
	 * {Cette fonction correspond au constructeuur de ma Classe}
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * {Cette fonction sert à tester si nécessaire que l'utilisateur se connecte et que session existe}
	 */
	function index()
	{
		 //Enlever le commentaire si l'utilisateur doit être connecté pour répondre au questionnaire
		if (!$this->ion_auth->logged_in())
		{
			// Redirection vers la page de login
			redirect('login', 'refresh');
		}
	}


	/**
	 * {Cette fonction affiche le view questionnaire pour les clients}
	 */
	function load_questions(){
		//Ici tu appel ton model 
		$this->data=$this->questionModel->getQuestionActiforParticulier();
		$data['resultatArray']=$this->data;

		$this->loadPage('questionnaire',0,$data);

	}

	/**
	 * { Cette fonction genère la vue pour les modifications des questions clients}
	 */
	function load_modifications(){

		//Controle de la session
		$this->index();
		$user = $this->ion_auth->user()->row();
		

		//Récupération des données du model
		$data['resultatArrayAllQuestion']=$this->questionModel->getAllQuestion();
		$data['Nom']=$user->last_name;
		$data['Prenom']=$user->first_name;

		$this->loadPage('modificationQuestions',1,$data);

	}

	function load_statistique() {
		//Controle de la session
		$this->index();
		$user = $this->ion_auth->user()->row();
		

		//Récupération des données du model
		$data['resultatArrayAllQuestion']=$this->questionModel->getAllQuestion();
		$data['Nom']=$user->last_name;
		$data['Prenom']=$user->first_name;

		$this->loadPage('statistiques',1,$data);

	}

	
	
	/**
	 * Cette fonction affiche le view questionnaire pour le pro
	 */
	function load_questions_pro() {

		//$this->index() Si besoin de se connecter avant d'arriver sur la page
		
		$this->load_questions();//A modifier pour la version PRO
		
	}


	function load_modif_utilisateur() {

		//Controle de la session
		$this->index();
		$user = $this->ion_auth->user()->row();

		//Récupération des données du model
		$this->data['resultatArrayAllQuestion']=$this->questionModel->getAllQuestion();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;
		//list the users
		$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

		$this->loadPage('modificationUtilisateurs',1,$this->data);

	}

	function load_parametrages() {

		//Controle de la session
		$this->index();
		$user = $this->ion_auth->user()->row();
		$this->data['Nom']=$user->last_name;
		$this->data['Prenom']=$user->first_name;

		$this->loadPage('parametrageQuestionnaire',1,$this->data);

	}


	function validate_responses() {

		$reponses= array();
		$valReturnToAjax=FALSE;

		$dataidquestions=$this->session->has_userdata('$dataidquestions')?$this->session->userdata('$dataidquestions'):[];

		$reponses=array_map(function($value){return intval($value);},$this->input->post('dataReponsesSend'));

		$sanitizedReponsesData = array_filter($reponses,
			function($var){//Callback qui enlène les valeurs null de monArray
    			return !is_null($var);
		});

		$resultIdQuestionsDiff = array_intersect_key($dataidquestions,$sanitizedReponsesData);//On enlève l'id des éléments que le client décide de ne pas répondre
		
		$dataResponses = array(
			'idQuestions' => serialize($resultIdQuestionsDiff),
			'reponses_recu' => serialize($sanitizedReponsesData),
			'satisfaction' => 1
		);



		$dataClient=$this->input->post('dataInfosClient');

		/*

		$dataClient = array(
			'nom' => $this->input->post('nomclient'),
			'prenom' => $this->input->post('prenomclient'),
			'email' => $this->input->post('emailclient'),
			'telephone' => $this->input->post('telclient'),
			'commentaire'=>$this->input->post('commentaireClient'),
		);*/

		$idClient=$this->reponsesModel->insertClient($dataClient);//On récupère l'id du dernier client inséré

		//On insère l'id du client dans la liste des réponses à envoyer
		$dataResponsesToInsert=$this->util->array_insert_associative($dataResponses,array('idClient' => $idClient),2);

		//$this->util->printr($dataResponsesToInsert);
		if($this->reponsesModel->insertResponses($dataResponsesToInsert)){
			$this->session->set_userdata('some_name', 'some_value');//Cr&er une valeur de session pour bloquer le formulaire si la personne a déjà envoyé
			$valReturnToAjax=TRUE;
		}
		
		echo json_encode($dataResponsesToInsert);

	}


	function redirectUser($valCase){
		//Je nettoie tout avant tout redirection
		if($this->session->userdata('$dataResponses')){
			$this->session->unset_userdata('$dataResponses');
		}
		$valCase?redirect('https://fr-fr.facebook.com/ecdist', 'refresh'):redirect('questions','refresh');

		$this->session->set_flashdata('$reponseServer',1);
			
		return 0;

	}



	function updateIfQuestionChange(){

		$passedArray=array(
			'statusGenerale' => $this->input->post('statusGenerale'),
			'statusStatistiques' => $this->input->post('statusStatistiques'),
			'statusParticulier' => $this->input->post('statusParticulier'),
			'statusProfessionnel' => $this->input->post('statusProfessionnel')
			);

		$emptyRemovedData = array_filter($passedArray,
			function($var){//Callback qui enlène les valeurs null de monArray
    			return !is_null($var);
		});

		/*$data = array(
			'statusGenerale' => ($this->input->post('statusGenerale'))
		);*/
		$dataRet=$this->questionModel->updateQuestion($this->input->post('keywordid'),$emptyRemovedData);

		echo ($dataRet);//Retour à Ajax
	}



	function sendResponsesToTable(){

		$data=$this->reponsesModel->selectAllResponses();
		$output = array();
		foreach($data as $k => $value) {
		    $output[] = array_values($value);
		}
		//echo json_encode(array('data' => $output));
		echo json_encode($data);

	}


	
	function sendQuestionsToTable(){

		$data=$this->questionModel->getAllQuestion();

		echo json_encode($data);

	}



	function sendQuestionsToDB(){

		
		$data = array(
			'libelle'  => $this->input->post('libelle'),
			'keywordid' => $this->input->post('keywordid'),
			'statusGenerale' => $this->input->post('statusGenerale'),
			'statusStatistiques' => $this->input->post('statusStatistiques'),
			'statusParticulier' => $this->input->post('statusParticulier'),
			'statusProfessionnel' => $this->input->post('statusProfessionnel')
		);
		$dataRet=$this->questionModel->insertQuestion($data);
		echo json_encode($dataRet);
		
	}



	function getDataCategorieFromDB(){
		$data=$this->questionModel->getAllcategorie();
		echo json_encode($data);
	}


	function testserialize(){

		// $mondataOriginal=$this->reponsesModel->selectAllResponses();
		
		$mondataDeserialized=$this->reponsesModel->getAllUnserializedReponses();
		$mondataRecupUtile=$this->reponsesModel->getAllReponsesByCategorieSatisfait();

		// $data['mondataOriginal']=$mondataOriginal;
		$data['mondataChanged']=$mondataDeserialized;
		$data['mondataRecupUtile']=$mondataRecupUtile;

		$this->loadPage('pagetest',0,$data);
	}


	function loadPage($page,$type,$data){//headerView contient tous les css et footerview tous les javascript
		$this->load->view('common/headerView');
		if($type){
			
			$this->load->view('common/asideView',$data);
		}
		$this->load->view('pages/'.$page,$data);
		$this->load->view('common/footerView');
	}



}
