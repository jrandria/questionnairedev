    <section class="content">
      
      <?php
         require_once(__DIR__.'/../common/headerView.php'); 
         require_once(__DIR__.'/../common/menuHeadView.php'); 
         
      ?>
      <pre>
        </pre>
        <div class="warper container-fluid">
        <hr class="no-margn">

           <div class="row">
            
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" >Statistiques utilisateurs</div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                               <!--<div class="panel panel-primary">-->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tabReponses" role="tab" data-toggle="tab">Reponses</a></li>
                                  </ul>

                                  <div class="tab-content">

                                    <div class="panel panel-default tab-pane tabs-up active"  id="tabReponses">
                  
                                          <div class="panel-body">

                                              <table id="tableListeReponses" class="table table-bordered  table-striped table-hover">
                                                 <thead>
                                                    <tr>
                                                      <th colspan="8" scope="colgroup" class="text-center">Liste des réponses reçus</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">id</th>
                                                        <th colspan="2"  class="text-center">Questions/Réponses</th>
                                                        <th colspan="5"  class="text-center"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Questions</th>
                                                        <th>Réponses</th>
                                                        <th scope="col" >idClient</th>
                                                        <th scope="col" colspan="3"   class="text-center">Satisfaction</th>
                                                        <th scope="col" >dateAjout</th>
                                                    </tr>
                                                    <tr class="clickable-row">
                                                    </tr>
                                                </thead>
                                                   <colgroup>
                                                        <col>
                                                        <col class="col-md-4">
                                                    </colgroup>
                                                    <tbody id="tbodyReponsesTables">
                                                    </tbody>
                                              </table>
                                              
                                          </div>
                                      
                                    </div>
                                      <!--Fin tabs reponses -->
                                  </div>
                    
                          </div>
                      </div>
                  </div>
                </div>
          </div>
          <div class="form-group">
                   <?=form_hidden('base_url_name',base_url());?>
          </div>
          <?php require_once(__DIR__.'/../pop/viewReponsesModal.php'); ?>
    </div>
        <!-- Fin Wraper -->

        <!--Un petit Script de changement de la coloration du Menu-->
        <script type="text/javascript" src="<?php echo base_url('public/assets/js/jquery/jquery-1.9.1.min.js'); ?>"></script>
        <script type="text/javascript">
        $(document).ready(function($){
          /*-----POUR LES MENUS--*/
           $("#menuStatistiques").toggleClass("active");//Ajouter la classe active sur le menu 

        });

        </script>