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
                        <div class="panel-heading text-center" >Gestion des comptes utilisateurs </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                        <table class="table table-bordered  table-striped">

                                                <thead>
                                                      <tr>
                                                        <th>Prénom</th>
                                                        <th>Nom</th>
                                                        <th>Email</th>
                                                        <th>Groupes</th>
                                                        <th>Statut</th>
                                                        <th>Action</th>
                                                      </tr>
                                                </thead>
                                                 <colgroup>
                                                    <col>
                                                    <col class="col-md-4">
                                                </colgroup>
                                                <tbody id="tbodyUserTables">
                                                <?php foreach ($users as $user):?>
                                                  <tr>
                                                          <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                                          <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                                          <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                                          <td>
                                                            <?php foreach ($user->groups as $group):?>
                                                              <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                                                                    <?php endforeach?>
                                                          </td>
                                                          <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id,'Désactiver') : anchor("auth/activate/". $user->id,'Activer');?></td>
                                                          <td><?php echo anchor("auth/edit_user/".$user->id, 'Editer') ;?></td>
                                                  </tr>
                                                <?php endforeach;?>

                                                </tbody>
                                        </table>
                            </div>
                            <div class="panel-footer">
                                <form data-ng-submit="addTodo()" role="form">
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn-primary btn" type="submit" >Ajouter</button>
                                    <p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
                                  </span>
                                </div>
                                </form>
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

        <!--Un petit Script de changement de lien Menu-->
          <script type="text/javascript" src="<?php echo base_url('public/assets/js/jquery/jquery-1.9.1.min.js'); ?>"></script>
        <script type="text/javascript">
        $(document).ready(function($){
          /*-----POUR LES MENUS--*/
           $("#menuUtilisateurs").toggleClass("active");//Ajouter la classe active sur le menu 

        });
        </script>