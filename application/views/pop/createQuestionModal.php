          <div  class="modal fade" id="modalCreateQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Création d'une question</h4>
                </div>
                <div class="modal-body">
                  
                  <form role="form">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="Identifiant">Identifiant</label>
                              <input type="text" class="form-control" placeholder="identifiant">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="dateInscription">Date création</label>
                              <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="exampleInputEmail1">Mots Clés</label>
                              <select id="keyword" class="form-control">
                                  <option>Accueil</option>
                                  <option>Qualité</option>
                                  <option>Rapidité</option>
                                  <option>Choix</option>
                                  <option>Prix</option>
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="form-group">
                              <label for="libelleQuestion">Question</label>
                              <input id="champQuestion" type="text" class="form-control" placeholder="">
                        </div>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group">
                            <label for="Telephone">Status:</label>
                                   <div id="status" class="form-group text-right">
                                      <label for="StatusActifPop">Actif</label>
                                      <div class="switch-button lg showcase-switch-button">
                                        <input id="switch-button-actifsPop" checked type="checkbox">
                                           <label for="switch-button-actifsPop"></label>
                                     </div>
                                     <label for="StatusStatsPop">Statistique</label>
                                       <div class="switch-button lg primary showcase-switch-button">
                                          <input id="switch-button-statsPop" checked type="checkbox">
                                          <label for="switch-button-statsPop"></label>
                                       </div>
                                      <label for="StatusParticulierPop">Particulier</label>
                                        <div class="switch-button lg info showcase-switch-button">
                                          <input id="switch-button-particulierPop" checked type="checkbox">
                                          <label for="switch-button-particulierPop"></label>
                                        </div>
                                      <label for="StatusProfessionnelPop">Professionnel</label>
                                        <div class="switch-button lg warning showcase-switch-button">
                                           <input id="switch-button-proPop" checked type="checkbox">
                                            <label for="switch-button-proPop"></label>
                                        </div>                                      
                                   </div>


                          </div>
                      </div>
                    </div>

                  </form>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <button type="button" class="btn btn-primary">Valider</button>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
        $(document).ready(function($){

          /*-----POUR LES MENUS--*/
           $("#menuDashboard").removeClass("active");//Enlever la classe qui met en rouge
           $("#menuQuestionnaires").addClass("active");//Ajouter la classe active sur le menu 
                                                       //
          /*--APPEL AJAX pour les nouvelles questions dans la base de donnée---------*/
           $.ajax({
              type: "POST",
              url:'QuestionnaireController/sendQuestionsToDB',
              dataType: 'json',
              success: function(question) {
                var question = data['#champQuestion'];
              }
            });

           $( "#champQuestion" ).select(function() {
              alert( "Handler for .select() called." );
            });

           $("#status").append('')

          // $("#tbodyQuestionsTables").
           
           /*----POUR LEBOUTON AJOUT DE QUESTION----*/
           $("#btnAddQuestion").on('click',function(){
              openModal();
           });


           /*------FONCTIONS POUR LES MODIFICATIONS DES CHECKBOXS---*/

          $('input[type=checkbox]').on('change', function() { 
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