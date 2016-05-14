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
                                    <li class="active"><a href="#questions" role="tab" data-toggle="tab">Questions</a></li>
                                    <li><a href="#reponses" role="tab" data-toggle="tab">Reponses</a></li>
                                    <li><a href="#categories" role="tab" data-toggle="tab">categories</a></li>
                                  </ul>
                    
                                  <div class="tab-content">
                                  
                                      <div class="panel panel-default tab-pane tabs-up active" id="questions">
                                          <div class="panel-body">
                                        <table class="table table-bordered  table-striped">

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
                                      

                                      <div class="panel panel-default padd-t-sm tab-pane tabs-up" id="reponses">
                                      
                                          <div class="panel-heading clean clearfix text-center">
                                        
                                          </div>
                  
                                          <div class="panel-body">
                                             
                                          </div>
                                      
                                    </div>
                                      <!--Fin tabs reponses -->
                                      
                                      
                                      <div class="panel panel-default tab-pane tabs-up" id="categories">
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


            /*--APPEL AJAX pour remplir la table des questions---------*/
           $.ajax({
              type: "GET",
              url:'QuestionnaireController/sendQuestionsToTable',
              dataType: 'json',
              success: function(quest) {

                var quest = jQuery.parseJSON(JSON.stringify(quest));
                //console.log(quest);

               $.each(quest, function(key, value){
                var i=1;
                var questVal=quest[key];

                var $TableRow = $('<tr></tr>');
                var $TableDataColID='<td>'+questVal.id_question+'</td>';
                var $TableDataColQuestion='<td>'+questVal.libelle+'</td>';
                var $TableDataColActif='<td><div class="switch-button lg showcase-switch-button"><input id="switch-button-actifs'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusGenerale)+' type="checkbox"><label for="switch-button-actifs'+questVal.id_question+'"></label></div></td>';
                var $TableDataColStats='<td><div class="switch-button lg primary showcase-switch-button"><input id="switch-button-stats'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusStatistiques)+' type="checkbox"><label for="switch-button-stats'+questVal.id_question+'"></label></div></td>';
                var $TableDataColPart='<td><div class="switch-button lg info showcase-switch-button"><input id="switch-button-particulier'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusParticulier)+' type="checkbox"><label for="switch-button-particulier'+questVal.id_question+'"></label></div></td>';
                var $TableDataColPro='<td><div class="switch-button lg warning showcase-switch-button"><input id="switch-button-pro'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusProfessionnel)+' type="checkbox"><label for="switch-button-pro'+questVal.id_question+'"></label></div></td>';
                var $TableDataColMotsCles='<td>'+questVal.motscles+'</td>';
                var $TableDataColDateAjout='<td>'+questVal.dateAjout+'</td>';

                var $AllTD=$TableRow.append($TableDataColID).append($TableDataColQuestion).append($TableDataColActif).append($TableDataColStats).append($TableDataColPart).append($TableDataColPro).append($TableDataColMotsCles).append($TableDataColDateAjout);

                $("#tbodyQuestionsTables").append($AllTD);

                   /* $("#tbodyQuestionsTables").append('<tr><td>'+questVal.id_question+'</td><td>'+questVal.libelle+'</td><td><div class="switch-button lg showcase-switch-button"><input id="switch-button-actifs'+questVal.id_question+'" '+checkboxCheckActif+' type="checkbox"><label for="switch-button-actifs'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg primary showcase-switch-button"><input id="switch-button-stats'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusStatistiques)+' type="checkbox"><label for="switch-button-stats'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg info showcase-switch-button"><input id="switch-button-particulier'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusParticulier)+' type="checkbox"><label for="switch-button-particulier'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg warning showcase-switch-button"><input id="switch-button-pro'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusProfessionnel)+' type="checkbox"><label for="switch-button-pro'+questVal.id_question+'"></label></div></td><td>'+questVal.motscles+'</td><td>'+questVal.dateAjout+'</td></tr>');*/

                  i++;
              });
              }
            });
           


          // $("#tbodyQuestionsTables").
           
           /*----POUR LEBOUTON AJOUT DE QUESTION----*/
           $("#btnAddQuestion").on('click',function(){
              openModal();
           });


           /*------FONCTIONS POUR LES MODIFICATIONS DES CHECKBOXS---*/

          /* $(document).on('click', '.switch-button', function() {
                alert('test');
            });*/

           $(document).on('change','input[type=checkbox]',function() {
             var id=this.id;

            if (this.checked) {
                updateDataIfCheckBoxCheked(id);
              return;

             }
                updateDataIfCheckBoxUnchecked(id);
          });


          function updateDataIfCheckBoxCheked(id){
             alert('Activé:Appel à AJAX pour '+id);
             /*
             var url="questionnaire/updateQuestionnaire";
             $.ajax({
              type: "POST",
              url:url,
              dataType: 'json',
              //data: {name: user_name, pwd: password},
              data:data,
              success: function(res) {
                  result = JSON.parse(data);
                  notie.alert(1, 'Questionnaire envoyé avec succès!',2);
                  console.log(result);
              }*/
          }


          function isCheckBoxChecked(status){
              var valRetourne='';
               if(status==1){
                      valRetourne = 'checked';
                }
              return valRetourne;        
          }


          function updateDataIfCheckBoxUnchecked(id){
             alert('desactivé:Appel à AJAX pour'+id);
          }

          function openModal(){
            $('#modalCreateQuestion').modal();
          }
        });

         
        </script>