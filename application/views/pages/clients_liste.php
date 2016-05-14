    <section class="content">
    	
      <?php 
         require_once(__DIR__.'/../common/menuHeadView.php'); 
      ?>
      <style type="text/css">
          table {
              border-collapse: separate;
              border-spacing: 0 5px;
          }

          thead th {
              background-color: #006DCC;
              color: white;
          }

          /*tbody td {
              background-color: #EEEEEE;
          }*/

          tr td:first-child,
          tr th:first-child {
              border-top-left-radius: 6px;
              border-bottom-left-radius: 6px;
          }

          tr td:last-child,
          tr th:last-child {
              border-top-right-radius: 6px;
              border-bottom-right-radius: 6px;
          }
          /*

          tr:nth-child(even) {
            background-color: red;
          }


          tr:nth-child(odd) {
            background-color: white;
          }*/
      </style>
        <div class="warper container-fluid">
        	
            <!--div class="page-header"><h1>Affichage de la liste pour l'attestation</h1></div>-->
                <hr class="no-margn">
            
            <!--<div class="page-header"><small> <nouveaux> clients du mois </small></div>-->
            
            <div class="row">
            
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" >Liste des clients </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                              <ul class="nav nav-tabs" role="tablist">
                                  <li class="active"><a href="#listeNvxClients" role="tab" data-toggle="tab">Liste Nvx Clients</a></li>
                                  <li class=""><a href="#clientsPerdusMois" role="tab" data-toggle="tab">Clients perdus du mois</a></li>
                                  <li class=""><a href="#statsClients" role="tab" data-toggle="tab"><span class="hidden-xs">Stats</span> Clients</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                    <!-- Tabs Nvx Clients-->
                                    <div class="panel panel-default tab-pane tabs-up active" id="listeNvxClients">
                                        <div class="panel-body">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                <div class="page-header">
                                                </div>
                                                 <div class="row">
                                                 <!-- Panel -->
                                                   <div class="panel panel-default">
                                                      <div class="panel-heading clean">Choix de Ville</div>
                                                      <div class="panel-body">
                                                        <div class="col-md-8">
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">Clients du mois</label>
                                                                <div class="col-sm-4">
                                                                  <div class='input-group date' id="datepickerClientsMois" >
                                                                        <input type='text' class="form-control" data-date-format="DD/MM/YYYY" />
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                         <form class="form-horizontal" role="form">
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">Ville</label>
                                                                <div class="col-sm-8 col-sm-offset-2">
                                                                  <select data-placeholder="Ville" id="listeVilleNvxClients"  name="listeVilleNvxClients" class="chosen-select-deselect" tabindex="7">
                                                                    <option value=""></option>
                                                                    <option>American Black Bear</option>
                                                                    <option>Asiatic Black Bear</option>
                                                                    <option>Brown Bear</option>
                                                                    <option>Giant Panda</option>
                                                                    <option>Sloth Bear</option>
                                                                    <option>Sun Bear</option>
                                                                    <option>Polar Bear</option>
                                                                    <option>Spectacled Bear</option>
                                                                  </select>
                                                                </div>
                                                              </div>
                                                          </form>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <!-- Fin Panel Head Interne-->
                                                 </div>
                                                 <div class="row">
                                                  <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                      </div>
                                                      <div class="panel-body table-responsive">
                                                      
                                                        <table class="table table-bordered  table-striped">
                                                              <thead>
                                                                <tr>
                                                                  <th>#</th>
                                                                  <th>Clients</th>
                                                                  <th>Adresse</th>
                                                                  <th>Téléphone</th>
                                                                  <th>Intervenant</th>
                                                                  <th>Date début abonnement</th>
                                                                  <th>Type abonnement</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <td>1</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>2</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>3</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>4</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>5</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>6</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>7</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>8</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>9</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>10</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                              </tbody>
                                                        </table>
                                                      
                                                      </div>
                                                  </div>                                                   
                                                 </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                        </div>
                                    </div>
                                    <!--Fin Tabs Liste Nvx Clients-->

                                    <!-- Tabs clients perdus du Mois-->
                                    <div class="panel panel-default padd-t-sm tab-pane tabs-up" id="clientsPerdusMois">
                                        <div class="panel-body">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                <div class="page-header">
                                                </div>
                                                 <div class="row">
                                                 <!-- Panel -->
                                                   <div class="panel panel-default">
                                                      <div class="panel-heading clean">Choix de Ville</div>
                                                      <div class="panel-body">
                                                        <div class="col-md-8">
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">Clients du mois</label>
                                                                <div class="col-sm-4">
                                                                  <div class='input-group date' id="datepickerClientsPerdusMois" >
                                                                        <input type='text' class="form-control" data-date-format="DD/MM/YYYY" />
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                           <form class="form-horizontal" role="form">
                                                                <div class="form-group">
                                                                  <label class="col-sm-2 control-label">Ville</label>
                                                                  <div id="divSelectClientsPerdusMois" class="col-sm-8 col-sm-offset-2">
                                                                    <select data-placeholder="Ville" id="listeVilleClientsPerdusMois" class="chosen-select-deselect" tabindex="7">
                                                                    </select>
                                                                  </div>
                                                                </div>
                                                           </form>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <!-- Fin Panel Head Interne-->
                                                 </div>
                                                 <div class="row">
                                                  <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                      </div>
                                                      <div class="panel-body table-responsive">
                                                      
                                                        <table class="table table-bordered">
                                                              <thead>
                                                                <tr>
                                                                  <th>#</th>
                                                                  <th>Clients</th>
                                                                  <th>Adresse</th>
                                                                  <th>Téléphone</th>
                                                                  <th>Intervenant</th>
                                                                  <th>Date début abonnement</th>
                                                                  <th>Type abonnement</th>
                                                                  <th>Motifs</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <td>1</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>2</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>3</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>4</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>5</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>6</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>7</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>8</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>9</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>10</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                </tr>
                                                              </tbody>
                                                        </table>
                                                      
                                                      </div>
                                                  </div>                                                   
                                                 </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                        </div>
                                    </div>
                                    <!-- Fin Tabs Clients perdus du Mois-->
                                    
                                    <!-- Tabs Stats Clients-->
                                    <div class="panel panel-default tab-pane tabs-up" id="statsClients">
                                        <div class="panel-body">
                                          <div class="row">
                                                 <!-- Panel -->
                                                   <div class="panel panel-default">
                                                      <div class="panel-heading clean">Choix de Ville</div>
                                                      <div class="panel-body">
                                                         <div class="col-md-4">
                                                           <form class="form-horizontal" role="form">
                                                                <div class="form-group">
                                                                  <label class="col-sm-2 control-label">Ville</label>
                                                                  <div id="divSelectClientsPerdusMois" class="col-sm-8 col-sm-offset-2">
                                                                    <select data-placeholder="Ville" id="listeVilleClientsStats" class="chosen-select-deselect" tabindex="7">
                                                                    </select>
                                                                  </div>
                                                                </div>
                                                           </form>
                                                          </div>
                                                      </div>
                                                    </div>
                                                 <!-- Fin Panel Interne-->
                                          </div>
                                          <div class="row">
                                            <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                      </div>
                                                      <div class="panel-body table-responsive">
                                                      
                                                        <table class="table table-bordered">
                                                              <thead>
                                                                <tr>
                                                                  <th>Janvier</th>
                                                                  <th>Fevrier</th>
                                                                  <th>Mars</th>
                                                                  <th>Avril</th>
                                                                  <th>Mai</th>
                                                                  <th>Juin</th>
                                                                  <th>Juillet</th>
                                                                  <th>Aout</th>
                                                                  <th>Septembre</th>
                                                                  <th>Octobre</th>
                                                                  <th>Novembre</th>
                                                                  <th>Decembre</th>
                                                                  <th>Total</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <td>1</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <th>1200</th>
                                                                </tr>
                                                              </tbody>
                                                        </table>
                                                      
                                                      </div>
                                            </div>                                                   
                                          </div>
                                          <div class="row">
                                            <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                      </div>
                                                      <div class="panel-body table-responsive">
                                                      
                                                        <table class="table table-bordered">
                                                              <thead>
                                                                <tr>
                                                                  <th>Janvier</th>
                                                                  <th>Fevrier</th>
                                                                  <th>Mars</th>
                                                                  <th>Avril</th>
                                                                  <th>Mai</th>
                                                                  <th>Juin</th>
                                                                  <th>Juillet</th>
                                                                  <th>Aout</th>
                                                                  <th>Septembre</th>
                                                                  <th>Octobre</th>
                                                                  <th>Novembre</th>
                                                                  <th>Decembre</th>
                                                                  <th>Total</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <td>1</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <td>Table cell</td>
                                                                  <th>2300</th>
                                                                </tr>
                                                              </tbody>
                                                        </table>
                                                      
                                                      </div>
                                            </div>                                                   
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-8">
                                              
                                                <div class="panel panel-default">
                                                    <div class="panel-heading clean">
                                                      Statistics 
                                                      <div class="pull-right">
                                                        <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-circle" data-toggle="dropdown">Monthly <span class="caret"></span></button>
                                                          <ul class="dropdown-menu pull-right" role="menu">
                                                              <li><a href="#">Daily</a></li>
                                                              <li><a href="#">Weekly</a></li>
                                                              <li class="active"><a href="#">Monthly</a></li>
                                                              <li><a href="#">Yearly</a></li>
                                                              <li class="divider"></li>
                                                              <li><a href="#">Specific Time</a></li>
                                                            </ul>
                                                          </div>
                                                          <button type="button" class="btn btn-default btn-sm btn-circle">GO</button>
                                                      </div>
                                                    </div>
                                                    <div class="panel-body">
                                                      <div id="chartPrincipal" style="height:280px;"></div>
                                                    </div>
                                                  </div>

                                              </div>
                                              <div class="col-lg-4">
                                              
                                                <div class="panel panel-default" data-ng-controller="TodoCtrl">
                                                    <div class="panel-heading un-bold"><h4>ToDo List <small class="text-gray">{{remaining()}} of {{todos.length}} remaining</small>  <a href="" data-ng-click="archive()" class="pull-right"><small>archive</small></a></h4></div>
                                                      <div class="panel-body">
                                                       <ul class="list-group no-margn nicescroll todo-list" style="height:205px; overflow:auto;">
                                                          <li data-ng-repeat="todo in todos" class="list-group-item">
                                                          <label class="cr-styled">
                                                            <input type="checkbox" data-ng-model="todo.done">
                                                              <i class="fa"></i>
                                                          </label>
                                                          <span class="done-{{todo.done}}">{{todo.text}}</span>
                                                          </li>
                                                       </ul>
                                                      </div>
                                                      
                                                      <div class="panel-footer">
                                                          <form data-ng-submit="addTodo()" role="form">
                                                          <div class="input-group">
                                                            <input type="text" data-ng-model="todoText" class="form-control" placeholder="add new todo here">
                                                            <span class="input-group-btn">
                                                              <button class="btn-primary btn" type="submit" >Add</button>
                                                            </span>
                                                          </div>
                                                          </form>
                                                      </div>
                                                      
                                                      
                                                  </div>
                                              
                                              </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="panel panel-default">
                                                      <div class="panel-heading">Client Gagne</div>
                                                      <div class="panel-body">
                                                        <div id="bar-chart-clientGagne" style="height:250px;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-6">
                                                <div class="panel panel-default">
                                                      <div class="panel-heading">Client Perdus</div>
                                                      <div class="panel-body">
                                                        <!--<div id="side-by-side-bar-ClientPerdus" style="height:250px;"></div>-->
                                                        <div id="chartContainer2" style="height: 250px"></div>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>



                                        </div>
                                        
                                    </div>
                                    <!-- Fin Tabs Stats Clients-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <!-- Warper Ends Here (working area) -->