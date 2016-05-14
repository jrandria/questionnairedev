<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Question{

	private $idQuestion;
	private $libelle;
	private $categorieId;
    private $statusGenerale;
    private $statusParticulier;
    private $statusProfessionnel;
    private $motsClesAssocies;
    private $questionTab=array();


    public function __construct()
    {
        
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
     * Gets the value of libelle.
     *
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the value of libelle.
     *
     * @param mixed $libelle the libelle
     *
     * @return self
     */
    private function _setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Gets the value of categorieId.
     *
     * @return mixed
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Sets the value of categorieId.
     *
     * @param mixed $categorieId the categorie id
     *
     * @return self
     */
    private function _setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    /**
     * Gets the value of statusGenerale.
     *
     * @return mixed
     */
    public function getStatusGenerale()
    {
        return $this->statusGenerale;
    }
    
    /**
     * Sets the value of statusGenerale.
     *
     * @param mixed $statusGenerale the status generale
     *
     * @return self
     */
    private function _setStatusGenerale($statusGenerale)
    {
        $this->statusGenerale = $statusGenerale;

        return $this;
    }

    /**
     * Gets the value of statusParticulier.
     *
     * @return mixed
     */
    public function getStatusParticulier()
    {
        return $this->statusParticulier;
    }

    /**
     * Sets the value of statusParticulier.
     *
     * @param mixed $statusParticulier the status particulier
     *
     * @return self
     */
    private function _setStatusParticulier($statusParticulier)
    {
        $this->statusParticulier = $statusParticulier;

        return $this;
    }

    /**
     * Gets the value of statusProfessionnel.
     *
     * @return mixed
     */
    public function getStatusProfessionnel()
    {
        return $this->statusProfessionnel;
    }

    /**
     * Sets the value of statusProfessionnel.
     *
     * @param mixed $statusProfessionnel the status professionnel
     *
     * @return self
     */
    private function _setStatusProfessionnel($statusProfessionnel)
    {
        $this->statusProfessionnel = $statusProfessionnel;

        return $this;
    }

    /**
     * Gets the value of motsClesAssocies.
     *
     * @return mixed
     */
    public function getMotsClesAssocies()
    {
        return $this->motsClesAssocies;
    }

    /**
     * Sets the value of motsClesAssocies.
     *
     * @param mixed $motsClesAssocies the mots cles associes
     *
     * @return self
     */
    private function _setMotsClesAssocies($motsClesAssocies)
    {
        $this->motsClesAssocies = $motsClesAssocies;

        return $this;
    }

        /**
     * Class Constructor
     * @param    $idQuestion   
     * @param    $libelle   
     * @param    $categorieId   
     * @param    $statusGenerale   
     * @param    $statusParticulier   
     * @param    $statusProfessionnel   
     * @param    $motsClesAssocies   
     */
    public function setAllValue($idQuestion, $libelle, $categorieId, $statusGenerale, $statusParticulier, $statusProfessionnel, $motsClesAssocies)
    {

        $this->_setIdQuestion($idQuestion);
        $this->_setLibelle($libelle);
        $this->_setCategorieId($categorieId);
        $this->_setStatusGenerale($statusGenerale);
        $this->_setStatusParticulier($statusParticulier);
        $this->_setStatusProfessionnel($statusProfessionnel);
        $this->_setMotsClesAssocies($motsClesAssocies);
    }



    public function getAllValue(){

        $this->questionTab=array("idQuestion"=>($this->getIdQuestion),
                            "libelle"=>($this->getLibelle),
                            "categorieId"=>($this->getCategorieId),
                            "statusGenerale"=>($this->statusGenerale),
                            "statusParticulier"=>($this->statusParticulier),
                            "statusProfessionnel"=>($this->statusProfessionnel),
                            "motsClesAssocies"=>($this->motsClesAssocies)
                            );

        return $this->questionTab;

    }


    /**
     * Gets the value of questionTab.
     *
     * @return mixed
     */
    public function getQuestionTab()
    {
        return $this->questionTab;
    }

    /**
     * Sets the value of questionTab.
     *
     * @param mixed $questionTab the question tab
     *
     * @return self
     */
    private function _setQuestionTab()
    {
        $this->questionTab = array("idQuestion"=>($this->getIdQuestion),
                            "libelle"=>($this->getLibelle),
                            "categorieId"=>($this->getCategorieId),
                            "statusGenerale"=>($this->statusGenerale),
                            "statusParticulier"=>($this->statusParticulier),
                            "statusProfessionnel"=>($this->statusProfessionnel),
                            "motsClesAssocies"=>($this->motsClesAssocies)
                            );

        return $this;
    }
}