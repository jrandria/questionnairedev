<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Auth';
$route['login']='auth/login';
$route['logout']='auth/logout';
$route['forgot_password']='auth/forgot_password';
$route['index_user'] = 'auth/load_index';
$route['questions']='QuestionnaireController/load_questions';
$route['updateQuestionnaire']='QuestionnaireController/load_questions';
$route['questionsclients']='QuestionnaireController/load_questions_clients';
$route['questionspro']='QuestionnaireController/load_questions_pro';
$route['validateResponses']='QuestionnaireController/validate_responses';
$route['testserialize']= 'QuestionnaireController/testserialize';
$route['index_admin']= 'auth/index';
//$route['']='QuestionnaireController/load_modifications';
$route['utilisateur']='QuestionnaireController/load_modif_utilisateur';
$route['statistiques']='QuestionnaireController/load_statistique';
$route['parametrage']='QuestionnaireController/load_parametrages';
$route['sendresponsesToDB']='QuestionnaireController/validate_responses';
$route['getDataCategorieFromDB']='QuestionnaireController/getDataCategorieFromDB';
$route['getQuestionsFromDB']='QuestionnaireController/sendQuestionsToTable';
$route['sendQuestionsToDB']='QuestionnaireController/sendQuestionsToDB';
$route['getReponsesFromDB']='QuestionnaireController/sendResponsesToTable';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
