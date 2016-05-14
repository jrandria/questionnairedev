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
        	
            <div class="page-header"><h1>Suppression d'un compte client</h1></div>
            
            
            <div id="divTableUser_suppr" class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#" data-column="0" class="toggle-vis btn btn-default btn-sm">Name</a>
                        <a href="#" data-column="1" class="toggle-vis btn btn-default btn-sm">Position</a>
                        <a href="#" data-column="2" class="toggle-vis btn btn-default btn-sm">Office</a>
                        <a href="#" data-column="3" class="toggle-vis btn btn-default btn-sm">Age</a>
                        <a href="#" data-column="4" class="toggle-vis btn btn-default btn-sm">Start date</a>
                        <a href="#" data-column="5" class="toggle-vis btn btn-default btn-sm">Salary</a>
                    </div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="toggleColumn-datatable">
                            <thead>
                                <tr>
                                    <th  width="5">#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                     
                            <tfoot>
                                <tr>
                                    <th  width="5">#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                     
                            <tbody id="tbody">
                            <div   id="tableBodyScroll">
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>
                                        <div class="table-controls">
                                            <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Trash</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td>
                                        <div class="table-controls">
                                            <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Trash</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                     <td>
                                        <div class="table-controls">
                                            <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Trash</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                    <td>
                                        <div class="table-controls">
                                            <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Trash</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td>
                                        <div class="table-controls">
                                            <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Trash</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td>2011/05/07</td>
                                    <td>$145,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Martena Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td>2011/03/09</td>
                                    <td>$324,050</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Unity Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/12/09</td>
                                    <td>$85,675</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Howard Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td>2008/12/16</td>
                                    <td>$164,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td>2010/02/12</td>
                                    <td>$109,850</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Vivian Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td>62</td>
                                    <td>2009/02/14</td>
                                    <td>$452,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Timothy Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td>2008/12/11</td>
                                    <td>$136,200</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Jackson Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td>65</td>
                                    <td>2008/09/26</td>
                                    <td>$645,750</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>$234,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Sakura Yamamoto</td>
                                    <td>Support Engineer</td>
                                    <td>Tokyo</td>
                                    <td>37</td>
                                    <td>2009/08/19</td>
                                    <td>$139,575</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Thor Walton</td>
                                    <td>Developer</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2013/08/11</td>
                                    <td>$98,540</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Serge Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Zenaida Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td>63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Zorita Serrano</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>56</td>
                                    <td>2012/06/01</td>
                                    <td>$115,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Jennifer Acosta</td>
                                    <td>Junior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>43</td>
                                    <td>2013/02/01</td>
                                    <td>$75,650</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Hermione Butler</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2011/03/21</td>
                                    <td>$356,250</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Lael Greer</td>
                                    <td>Systems Administrator</td>
                                    <td>London</td>
                                    <td>21</td>
                                    <td>2009/02/27</td>
                                    <td>$103,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  width="5">
                                      <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                      </label>
                                    </td>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                    <td>
                                       <div class="btn-group dropup">
                                          <button type="button" class="btn btn-info">Choix</button>
                                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Modifier</a></li>
                                              <li><a href="#">Supprimer</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Voir</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                </tr>
                              </div>
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
                      </div>

                    </div>
                    
                  </div>

            </div>

            <!-- PopUp Modal Pour ajout de client -->
          <div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">New Document</h4>
                </div>
                <div class="modal-body">
                  
                  <form role="form">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                              <label for="exampleInputEmail1">File Name</label>
                              <input type="text" class="form-control" placeholder="Name of Document">
                            </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                              <label for="exampleInputEmail1">File Type</label>
                              <select class="form-control">
                                  <option>Blank Document</option>
                                  <option>Blog Post</option>
                                  <option>Agendas</option>
                                  <option>Expense Report</option>
                                  <option>Forms</option>
                              </select>
                            </div>
                      </div>
                    </div>
                  </form>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Create</button>
                </div>
              </div>
            </div>
          </div>
        <!-- FIN PopUp Modal -->
            
        </div>
        <!-- Warper Ends Here (working area) -->