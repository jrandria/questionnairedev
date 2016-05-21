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

	
	
	/**
	 * Cette fonction affiche le view questionnaire pour le pro
	 */
	function load_questions_pro(){

		//$this->index() Si besoin de se connecter avant d'arriver sur la page
		
		$this->load_questions();
		
	}


	function load_modif_utilisateur(){

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

	
	
	/**
	 * { Cette fonction sert à valider d'abord les reponses envoyés par le client si nécessaireS }
	 */
	function validate_responses(){
		$reponses= array();
		$dataTest=array(1,2,3);
		//$tableau des idQuestions
		$dataidquestions = $this->session->userdata('$dataidquestions');
		//Le tableau des réponses (dépendents du nombre de question )
		$nbReponses=count($dataidquestions);

		for ($i=0; $i <$nbReponses ; $i++) { 
			$reponses[]=$this->input->post('reponse'.$i);
		}

		$satisf=$this->util->isClientSatisfied($dataTest,$reponses)?1:0;

		$dataResponses = array(
			'idQuestions' => serialize($dataidquestions),
			'reponses_recu' => serialize($reponses),
			'satisfaction' => $satisf
		);

		$this->session->set_flashdata('$dataResponses',$dataResponses);
		$this->session->set_flashdata('$statusSatisf',$satisf);

		//On rédirige la page dd'insertion des infos client
		$data['toto']='toto';
		$this->loadPage('create_client',0,$data);

	}


	function submitallclientresponses(){

		
		$dataResponsesFlash = $this->session->userdata('$dataResponses');
		$statusSatisfFlash = $this->session->userdata('$statusSatisf');

		$dataClient = array(
			'nom' => $this->input->post('nomclient'),
			'prenom' => $this->input->post('prenomclient'),
			'email' => $this->input->post('emailclient'),
			'telephone' => $this->input->post('telclient'),
			'commentaire'=>$this->input->post('commentaireClient'),
		);

		$idClient=$this->reponsesModel->insertClient($dataClient);

		//On insère les réponses
		$dataResponsesToInsert=$this->util->array_insert_associative($dataResponsesFlash,array('idClient' => $idClient),2);

		//print_r($dataResponsesToInsert);

		$this->reponsesModel->insertResponses($dataResponsesToInsert);

		$this->redirectUser($statusSatisfFlash);

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
		$mondata=$this->reponsesModel->selectAllResponses();
		$data['mondata']=$mondata;
		$this->loadPage('pagetest',0,$data);
	}

	/**
	 * { géneration des pages}
	 *
	 * @param      <type>  $page   (le Nom de la page dans view)
	 * @param      <type>  $type   (corerspond au type de la page :0 si page sans header,1 si avec header)
	 * @param      <type>  $data   (les données à passet dans le view)
	 */
	function loadPage($page,$type,$data){//headerView contient tous les css et footerview tous les javascript
		$this->load->view('common/headerView');
		if($type){
			
			$this->load->view('common/asideView',$data);
		}
		$this->load->view('pages/'.$page,$data);
		$this->load->view('common/footerView');
	}



}