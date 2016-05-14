<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);*/

class Reponse{

	private $idReponse;
	private $idQuestion;
    private $idClient;
	private $valeur;


    /**
     * Class Constructor
     * @param    $idReponse   
     * @param    $idQuestion   
     * @param    $idClient   
     * @param    $valeur   
     */
    public function __construct($idReponse, $idQuestion, $idClient, $valeur)
    {
        $this->idReponse = $idReponse;
        $this->idQuestion = $idQuestion;
        $this->idClient = $idClient;
        $this->valeur = $valeur;
    }


    



    /**
     * Gets the value of idReponse.
     *
     * @return mixed
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Sets the value of idReponse.
     *
     * @param mixed $idReponse the id reponse
     *
     * @return self
     */
    private function _setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;

        return $this;
    }

    /**
     * Gets the value of idQuestion.
     *
     * @return mixed
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Sets the value of idQuestion.
     *
     * @param mixed $idQuestion the id question
     *
     * @return self
     */
    private function _setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Gets the value of valeur.
     *
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Sets the value of valeur.
     *
     * @param mixed $valeur the valeur
     *
     * @return self
     */
    private function _setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Gets the value of idClient.
     *
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Sets the value of idClient.
     *
     * @param mixed $idClient the id client
     *
     * @return self
     */
    private function _setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }
}