<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	Class QuestionModel extends CI_Model
	{
		public function getAllQuestion()
        {
            $arr = array();

            $arrayConditions = array();
            $this->db->select('id_question,libelle,motscles,statusGenerale,statusStatistiques,statusParticulier,statusProfessionnel,dateAjout');
            $this->db->join('categorie', 'categorie.id = question.keywordId');
            $this->db->where($arrayConditions);
            $query = $this->db->get('question');

            foreach ($query->result_array() as $row)
            {
                $arr[]=$row;
            }
            return $arr;

        }


		public function getQuestionActiforParticulier()
        {
            $arr = array();

            $arrayConditions = array('statusGenerale' => 1, 'statusParticulier'=>1);
            $this->db->select('id_question,libelle,motscles');
            $this->db->join('categorie', 'categorie.id = question.keywordId');
            $this->db->where($arrayConditions);
            $query = $this->db->get('question');

            foreach ($query->result_array() as $row)
            {
                $arr[]=$row;
            }
            return $arr;

        }

        public function getAllQuestionForParticulier()
        {
            $arr = array();

            $arrayConditions = array('statusParticulier'=>1);
            $this->db->select('id_question,libelle,keywordid');
            $this->db->join('categorie', 'categorie.id = question.keywordid');
            $this->db->where($arrayConditions);
            $query = $this->db->get('question');

            foreach ($query->result_array() as $row)
            {
                $arr[]=$row;
            }
            return $arr;

        }


        public function getQuestionForProfessionnel()
        {
            $arr = array();

            $arrayConditions = array('statusProfessionnel'=>1);
            $this->db->select('id_question,libelle,keywordid,');
            $this->db->join('categorie', 'categorie.id = question.keywordid');
            $this->db->where($arrayConditions);
            $query = $this->db->get('question');

            foreach ($query->result_array() as $row)
            {
                $arr[]=$row;
            }
            return $arr;

        }

        public function insertQuestion($data)
        {
            $this->db->insert('question',$data);
            $data = array(
               'libelle' => 'libelle' ,
               'keywordid' => 'keywordid' ,
               'statusGenerale' => 'actif',
               'statusStatistiques' => 'statusStatistiques',
               'statusParticulier' => 'statusParticulier',
               'statusProfessionnel' => 'statusProfessionnel'
            );

        }




	}