    <section class="content">
    	
      <?php 
         require_once(__DIR__.'/../common/menuHeadView.php'); 
      ?>
      <style type="text/css">
        body {
          overflow-y: scroll;
        }
      </style>
        <div class="warper container-fluid">
        	
            <!--div class="page-header"><h1>Affichage de la liste pour l'attestation</h1></div>-->
                <hr class="no-margn">
            
            <div class="page-header"><small> Dimanche 10 avril 2016 </small></div>
            
            <div class="row">
            
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" >Liste des clients pouvant avoir des attestations </div>
                        <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="reload" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="remove" data-original-title="" title="">
                                </a>
                         </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-lg-1">
                                    <div class="form-group">
                                    <select class="form-control input-sm  form-control-flat">
                                      <option>05</option>
                                      <option>10</option>
                                      <option>20</option>
                                      <option>30</option>
                                      <option>40</option>
                                      <option>All</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-3" style="padding-left:0px;">
                                  <p class="form-control-static">Données par page</p>
                                </div>
                                <div class="col-lg-3 col-lg-offset-5">
                                    <div class="input-group">
                                      <input type="text" class="form-control input-sm  form-control-flat" placeholder="Rechercher...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default btn-sm btn-flat" type="button">Go!</button>
                                      </span>
                                    </div>
                                </div>
                            </div>
                            
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th width="1">#</th>
                                  <th>First Name</th>
                                  <th>Email</th>
                                  <th>Address</th>
                                  <th>Mob No.</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" id='chk' ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Paris Foreman</td>
                                    <td>kenton@trade.org</td>
                                    <td>54234 Erma Ave</td>
                                    <td>199-887-7642</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Rachael Dodson</td>
                                    <td>tricia.laverne.olive@way.com</td>
                                    <td>5400 Atkinson Dr</td>
                                    <td>306-745-6180</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Eliseo Peterson</td>
                                    <td>carla@lightlike.edu</td>
                                    <td>69 S John Reddit Dr</td>
                                    <td>850-855-9875</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Malissa Avila</td>
                                    <td>robbie.shauna@maymeal.me</td>
                                    <td>430 State Hwy 73</td>
                                    <td>826-379-4452</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Alvina Mahoney</td>
                                    <td>aubrey.griselda@appleapproval.org</td>
                                    <td>3037 Hempstead Hwy</td>
                                    <td>605-527-5369</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Joan Fletcher</td>
                                    <td>pierre.junior.freddy@instrument.edu</td>
                                    <td>5985 Old Hwy 6</td>
                                    <td>467-186-1793</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Myron Goodman</td>
                                    <td>rocky.pierre.junior@feeble.org</td>
                                    <td>26 State Hwy 64 W</td>
                                    <td>170-699-4064</td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                        </label>
                                    </td>
                                    <td>Ahmad Mcbride</td>
                                    <td>theresa.beverly@feather.org</td>
                                    <td>58452 FM 2759</td>
                                    <td>601-690-1247</td>
                                  </tr>
                                  
                              </tbody>
                            </table>
                            
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                    <form class="form-inline" role="form">
                                    <select class="form-control  form-control-flat input-sm">
                                      <option>Actions</option>
                                      <option>Delete</option>
                                      <option>Merge</option>
                                      <option>Edit</option>
                                    </select>
                                    <button class="btn btn-default btn-sm btn-flat" type="button">Apply</button>
                                    </form>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                  <p class="form-control-static text-center">Showing 1 to 5 of 15 entries</p>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                      <input type="text" class="form-control input-sm form-control-flat" placeholder="Search record here...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default btn-sm btn-flat" type="button">Go!</button>
                                      </span>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                
            </div>

            
        </div>
        <!-- Warper Ends Here (working area) -->