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
            
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" >Paramétrages du questionnaire </div>
                        <div class="panel-body">
                            <div class="col-lg-12">

                            </div>
                            <div class="panel-footer">
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
        </script>