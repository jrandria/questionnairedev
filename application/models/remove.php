 <?php
 foreach ($unserializedReponses as &$arrRep) {

          foreach ($arrRep as $key => &$value) {


           if($key=='idquestions'){
                $arrayTempFusion=array();
                $arrayFusionCategorie=array();


            //$this->util->printr($arrRep['satisfaction']);
            //$this->util->printr($value);

              for ($i=0; $i < count($value) ; $i++) { 
                echo '<br\> valeur de id = '.$value[$i].'<br\>';

                $arrayTempFusion=$this->getQuestionsById($value[$i]);
                echo '<br/>------Fusion TEMP-------: <br/>';
                $this->util->printr($arrayTempFusion);
                echo '-----FIN FUSION TEMP----- <br/>';

               

                //$this->util->printr($arrayFusionCategorie);
              //$this->util->printr($value);
              //$this->util->printr($arrayFusionCategorie);
              

             
        //$this->util->printr($arrRep);
        //array_splice($arrRep,1,0,$arrayFusionCategorie);
        //$this->util->printr($arrRep);
                echo '<br/>-----DEBUT FUSION pour id = '.$value[$i].' -------: <br/>';
                array_push($arrayFusionCategorie,$arrayTempFusion);
                $this->util->printr($arrayFusionCategorie);
                echo ':-----FIN FUSION----- <br/>';



              }
              
               

               //$this->util->printr($value);
           array_splice($key,0,0,$arrayFusionCategorie);
           }

           array_replace($value,$arrayFusionCategorie);

           

           
         
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