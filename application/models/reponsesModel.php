<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ReponsesModel extends CI_Model
	{

  	public function insertResponses($data){

      $res=FALSE;
      
       if($this->db->insert('reponses', $data))
        {
          $res=TRUE;
        }
      return $res; 
    }

  	public function selectAllResponses() {
     		 $arr = array();

     		$query = $this->db->get('reponses');

     		foreach ($query->result_array() as $row)
          {
              $arr[]=$row;
          }
          return $arr;
  	}


    public function getAllUnserializedReponses() {

       $arr = array();

        $query = $this->db->get('reponses');

        foreach ($query->result_array() as &$row)
        {
          $row=$this->util->perform_changes_on($row);

          $arr[]=$row;
        }
        
        return $arr;
              
    }

    //   function perform_changes_on(&$row) {

    //    foreach ($row as $key => &$value) {
    //     if($key=='idquestions' || $key== 'reponses_recu'){
    //         $value=unserialize($value);
    //     }
    //    }
       
    //   return $row;
    // }


    public function getQuestionsById($id) {

      $arr=array();

      $arrayConditions=array('id_question' => $id);
      $this->db->select('id_question,libelle,motscles,dateAjout');
      $this->db->join('categorie', 'categorie.id = question.keywordId');
      $this->db->where($arrayConditions);
      $query=$this->db->get('question');

       foreach ($query->result_array() as $row)
          {
              $arr[]=$row;
          }
          return $arr;

    }

    
    public function getAllReponsesByCategorieSatisfait(){
       
       $unserializedReponses=$this->getAllUnserializedReponses();
       $arrayFusionCategorie=array();

       foreach ($unserializedReponses as &$arrRep) {

          foreach ($arrRep as $key => &$value) {


           if($key=='idquestions'){
            $arrayTempFusion=array();
            

            //$this->util->printr($arrRep['satisfaction']);
            //$this->util->printr($value);

              for ($i=0; $i < count($value) ; $i++) { 
                $this->util->printr($arrRep);

                echo '<br\> valeur de id = '.$value[$i].'<br\>';

                $arrayFusionCategorie=$this->getQuestionsById($value[$i]);
                $this->util->printr($value);

                $this->util->printr($arrayFusionCategorie);
              //$this->util->printr($value);
              //$this->util->printr($arrayFusionCategorie);
              

             
              
              array_splice($arrRep,-5,2,$arrayFusionCategorie);
              $this->util->printr($arrRep);
                
              }
               //$this->util->printr($value);
            //array_splice($key,0,0,$arrayFusionCategorie);
           }

           //array_replace($value,$arrayFusionCategorie);

           

           
         
           // echo '<br/> '.$key.' ';

            /*
            if($key=='satisfaction' && $value==1){
              foreach ($arrRep['idquestions'] as $key) {
                echo $key;
              }
            }*/

          }
   

          /*

          $arrayConditions = array('statusProfessionnel'=>1);

          $this->db->select('id_question,libelle,motscles');
          $this->db->join('categorie', 'categorie.id = question.keywordId');
          $this->db->where($arrayConditions);
            
          $query = $this->db->get('question');

          foreach ($query->result_array() as $row)
          {
            $arr[]=$row;
          }
            return $arr;

            */
         
       }

       $this->util->printr($unserializedReponses);

    }


  	public function insertClient($data) {
  		
      $this->db->insert('client', $data); 
  		$insert_id = $this->db->insert_id();

    		 return  $insert_id;
  	}

	}