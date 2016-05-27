<!-- MENU GAUCHE -->
<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="public/assets/images/avtar/user.png" class="img-circle" alt="...">
                  <h4 class="user-name"><?php echo $Nom." ".$Prenom ?></h4>
                  
                  <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-circle status-icon available"></i> Connecté <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li  role="presentation"><?php echo anchor('auth/logout', '<i class="fa fa-circle status-icon signout"></i>Deconnexion', array('role'=>'menuitem')); ?></li>
                  </ul>
                  </div>	 
            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
                	   <li id="menuDashboard" class="active"><a href=""><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
                     <li id="menuClients" class="has-submenu"><a href=""><i class="fa fa-users"></i> <span class="nav-label">Clients</span></a></li>
                     <li id="menuQuestionnaires" class="has-submenu"><a href="modifications.html"><i class="fa fa-navicon"></i> <span class="nav-label">Questionnaires</span></a></li>
                     <li id="menuUtilisateurs" class="has-submenu"><a href="utilisateur.html"><i class="fa fa-user"></i> <span class="nav-label">Utilisateurs</span></a></li>
                    <li id="menuStatistiques" class="has-submenu"><a href="statistiques.html"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistiques</span></a>
                        <ul class="list-unstyled">
                        </ul>
                    </li>
                     <li id="menuParamètres" class="has-submenu"><a href="parametrage.html"><i class="fa fa-gears (alias)"></i> <span class="nav-label">Parametres</span></a>
                        <ul class="list-unstyled">
                        </ul>
                    </li>


                </ul>
            </nav>
            
</aside>
<!-- Fin Aside (Menu Gauche)-->