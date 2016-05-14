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
                              <label for="MotsCles">Mots Clés</label>
                              <select id="keyword" class="form-control">
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="form-group">
                              <label for="libelleQuestion">Question</label>
                              <input  id="idlibelleQuestionPop" type="text" class="form-control" placeholder="">
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
                  <button id="btnValiderPop" type="button" class="btn btn-primary">Valider</button>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
          /*--------LES VARIABLES UTILES--------*/
          var statusGeneraleValue=0;
          var statusStatistiquesValue=0;
          var statusParticuliervalue=0;
          var statusProfessionnelValue=0;

        $(document).ready(function($){

          /*-----POUR LES MENUS--*/
           $("#menuDashboard").removeClass("active");//Enlever la classe qui met en rouge
           $("#menuQuestionnaires").addClass("active");//Ajouter la classe active sur le menu 
           
           setKeywordInputValue();

          /*--APPEL AJAX pour les nouvelles questions dans la base de donnée---------*/

          $("#btnValiderPop").on('click',function(){
             sendDataToTableQuestionByAjax();
          });

          function sendDataToTableQuestionByAjax(){
             $.ajax({
              type: "POST",
              url:'QuestionnaireController/sendQuestionsToDB',
              dataType: 'json',
              data:{
                libelle:$("#idlibelleQuestionPop").val(),
                keywordid:1,
                statusGenerale:statusGeneraleValue,
                statusStatistiques:statusStatistiquesValue,
                statusParticulier:statusParticuliervalue,
                statusProfessionnel:statusProfessionnelValue
              },
              success: function(data) {
                
              }
            });
          }

          function setKeywordInputValue(){
             $.getJSON( "getDataCategorieFromDB", function( data ) {
              console.log(data);
                      $.each(data, function(index, value) {
                          $( '<option value="'+ data[index].motscles+'">'+data[index].motscles+'</option>"').appendTo( "#keyword" );
                      });
              });
          }

          function getAllStatusValue(){

          }

          $("#btnAddQuestion").on('click',function(){
              openModal();
          });

          /*------FONCTIONS POUR LES MODIFICATIONS DU SELECT DANS POP---*/

          $('#keyword').on('change', function() {
            alert( this.value ); // or $(this).val()
          });

           /*------FONCTIONS POUR LES MODIFICATIONS DES CHECKBOXS DANS POP---*/

          $('input[type=checkbox]').on('change', function() { 
            var id=this.id;
            var isChecked=this.checked?1:0;

            getSwitchButtonValueChecked(id,isChecked);

              return;
          });

          function getSwitchButtonValueChecked(id,isChecked){

             switch(id) {
                case 'switch-button-actifsPop':
                    statusGeneraleValue=isChecked;
                    break;
                case 'switch-button-statsPop':
                    statusStatistiques=isChecked;
                    break;
                case 'switch-button-statsPop':
                    statusProfessionnel=isChecked;
                    break;
                case 'switch-button-statsPop':
                    statusParticulier=isChecked;
                    break;
                default:
                  return 0;
            }
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

          function openModal(){
            $('#modalCreateQuestion').modal();
          }
        });

         
        </script>