    <section class="content">
      
      <?php
         require_once(__DIR__.'/../common/headerView.php'); 
         require_once(__DIR__.'/../common/menuHeadView.php'); 
         
      ?>
      <pre>
          <?php 
          // print_r($resultatArrayAllQuestion);

        ?>
        </pre>
        <div class="warper container-fluid">
        <hr class="no-margn">

           <div class="row">
            
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" >Questionnaire de satisfaction </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                               <!--<div class="panel panel-primary">-->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tabQuestions" role="tab" data-toggle="tab">Questions</a></li>
                                    <li><a href="#tabReponses" role="tab" data-toggle="tab">Reponses</a></li>
                                    <li><a href="#tabCategories" role="tab" data-toggle="tab">categories</a></li>
                                  </ul>
                    
                                  <div class="tab-content">
                                  
                                      <div class="panel panel-default tab-pane tabs-up active" id="tabQuestions">
                                          <div class="panel-body">
                                        <table id="tableListeQuestions" class="table table-bordered  table-striped">

                                                <thead>
                                                      <tr>
                                                        <th>#</th>
                                                        <th>Questions</th>
                                                        <th>Actif</th>
                                                        <th>Statistiques</th>
                                                        <th>Particulier</th>
                                                        <th>Professionnel</th>
                                                        <th>Mots-clés</th>
                                                        <th>Date ajout</th>
                                                      </tr>
                                                </thead>
                                                 <colgroup>
                                                    <col>
                                                    <col class="col-md-4">
                                                </colgroup>
                                                <tbody id="tbodyQuestionsTables">
                                                </tbody>
                                       </table>
                                          
                                          </div>
                                          <div class="panel-footer">
                                            <form role="form">
                                              <div class="input-group">
                                                <span class="input-group-btn">
                                                  <!--<button id="btnAddQuestion" type="submit"   data-toggle="modal" data-target="#modalCreateUser" class=" btn-success btn">Send</button>-->
                                                  <button id="btnAddQuestion"  class=" btn-success btn">Ajouter</button>
                                                </span>
                                              </div>
                                              </form>
                                          </div>
                                      </div>
                                      <!--Fin  Questions tabs -->
                                      

                                      <div class="panel panel-default padd-t-sm tab-pane tabs-up" id="tabReponses">
                                      
                                          <div class="panel-heading clean clearfix text-center">
                                        
                                          </div>
                  
                                          <div class="panel-body">

                                              <table id="tableListeReponses" class="table table-bordered  table-striped">
                                                 <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>reponses reçu</th>
                                                        <th>Nom</th>
                                                        <th>Prenom</th>
                                                        <th>Date Ajout</th>
                                                    </tr>
                                                </thead>
                                              </table>
                                          </div>
                                      
                                    </div>
                                      <!--Fin tabs reponses -->
                                      
                                      
                                      <div class="panel panel-default tab-pane tabs-up" id="tabCategories">
                                          <div class="panel-body">
                                          </div>
                                          
                                      </div>
                                      <!--Fin tabs categories -->
                                  </div>
                    
                          </div>
                      </div>
                  </div>
                </div>
          </div>
         <!-- PopUp Modal Pour ajout de client -->
          <?php require_once(__DIR__.'/../pop/createQuestionModal.php'); ?>
    </div>
        <!-- Fin Wraper -->

        <!--Un petit Script de changement de lien Menu-->
        <script type="text/javascript">
        $(document).ready(function($){

          /*-----POUR LES MENUS--*/
           $("#menuDashboard").removeClass("active");//Enlever la classe qui met en rouge
           $("#menuQuestionnaires").addClass("active");//Ajouter la classe active sur le menu 
                                                       //
          /*--APPEL AJAX pour remplir la table des questions---------*/
           // $.ajax({
           //    type: "GET",
           //    url:'QuestionnaireController/sendResponsesToTable',
           //    dataType: 'json',
           //    success: function(res) {
           //      var res = jQuery.parseJSON(JSON.stringify(res));
           //      console.log(res);

           //     $.each(res, function(key, value){
           //      var resVal=res[key];
           //        $.each(resVal,function(key, value){
           //              console.log(key + ": " + resVal[key]);
           //        });
           //    });
           //       // result = JSON.parse(res);
           //        //console.log(result);
           //    }
           //  });


          // $("#tbodyQuestionsTables").
           
           /*----POUR LEBOUTON AJOUT DE QUESTION----*/
           

           /*------FONCTIONS POUR LES MODIFICATIONS DES CHECKBOXS---*/

          /* $(document).on('click', '.switch-button', function() {
                alert('test');
            });*/





        });

         
        </script>