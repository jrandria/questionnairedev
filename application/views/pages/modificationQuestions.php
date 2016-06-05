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

                                          <?php echo form_open("sendQuestionsToDB");?><?php echo form_close()?><!-- Pour génerer un token-->
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
                                  </div>
                    
                          </div>
                      </div>
                  </div>
                </div>
          </div>
          <div class="form-group">
                   <?=form_hidden('base_url_name',base_url());?>
          </div>
         <!-- PopUp Modal Pour ajout de client -->
          <?php require_once(__DIR__.'/../pop/createQuestionModal.php'); ?>
    </div>
        <!-- Fin Wraper -->

        <!--Un petit Script de changement de la coloration du Menu-->
        <script type="text/javascript" src="<?php echo base_url('public/assets/js/jquery/jquery-1.9.1.min.js'); ?>"></script>
        <script type="text/javascript">
        $(document).ready(function($){
          /*-----POUR LES MENUS--*/
           $("#menuQuestionnaires").toggleClass("active");//Ajouter la classe active sur le menu 

        });

        </script>