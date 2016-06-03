    <section class="content">
      
      <?php
         require_once(__DIR__.'/../common/headerView.php'); 
         require_once(__DIR__.'/../common/menuHeadView.php'); 
         
      ?>
      <pre>
          <?php 
          // print_r($resultatArrayAllUtilisateur);
          ?>
        </pre>
      <div class="warper container-fluid">
        <hr class="no-margn">

           <div class="row">
            
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading clean" >Paramétrages génerale </div>
                        <div class="panel-body no-padd">
                            
                         </div>
                         <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Paramétrages supplémentaires </div>
                        <div class="panel-body no-padd">

                            <form method="post" class="form-horizontal validator-form" action="php/bootstrap-validator/ajaxSubmit.php">
                                <div class="form-group">
                                    <label for="inputSlider" class="col-sm-3 control-label">Taux minimum:</label>
                                    <div class="col-lg-9">
                                        <div id="sliderTauxMin" style="width: 250px; margin-top: 10px"></div>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label for="inputActiveTaux" class="col-sm-3 control-label">Aciver/Desactiver le taux:</label>
                                    <div class="col-lg-9">
                                        <input type="checkbox" id="activDesactiveTaux" style="margin-top: 10px">
                                    </div>
                                </div>
                            </form>



                           
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
           $(function(){
            /*-----POUR LES MENUS--*/
             $("#menuQuestionnaires").removeClass("active");//Enlever la classe qui met en rouge
             $("#menuParametres").toggleClass("active");//Ajouter la classe active sur le menu 
             
             var s0 = $("#sliderTauxMin").freshslider({
                step: 5,
                unit:'%',
                enabled:true,
                value:[75],
                onchange:function(low, high){
                    console.log(low, high);
                }
            });
           });


        </script>
