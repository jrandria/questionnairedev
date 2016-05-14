<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Remarque{

	private $idRemarque;
	private $idClient;
	private $note;


	/**
	 * Class Constructor
	 * @param    $idRemarque   
	 * @param    $note   
	 */
	public function __construct($idRemarque, $note)
	{
		$this->idRemarque = $idRemarque;
		$this->note = $note;
	}




    /**
     * Gets the value of note.
     *
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the value of note.
     *
     * @param mixed $note the note
     *
     * @return self
     */
    private function _setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets the value of idRemarque.
     *
     * @return mixed
     */
    public function getIdRemarque()
    {
        return $this->idRemarque;
    }

    /**
     * Sets the value of idRemarque.
     *
     * @param mixed $idRemarque the id remarque
     *
     * @return self
     */
    private function _setIdRemarque($idRemarque)
    {
        $this->idRemarque = $idRemarque;

        return $this;
    }
}

