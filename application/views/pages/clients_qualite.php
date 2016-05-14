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

         .map {
         width: 100%;
          height: 500px;
          border: 1px solid #a0a0a0;
          }

          #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
          }

          #floating-panel {
            margin-left: -52px;
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
                        <div class="panel-heading text-center" >Suivi qualité </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                              <ul class="nav nav-tabs" role="tablist">
                                  <li class="active"><a href="#listeNvxClients" role="tab" data-toggle="tab">Liste Suivre</a></li>
                                  <li class=""><a href="#statsClients" role="tab" data-toggle="tab">Contrôle Agrément</a></li>
                                  <li class=""><a href="#statsClients" role="tab" data-toggle="tab">Mise à jour Pil/Livret enfant</a></li>
                                  <li class=""><a href="#statsClients" role="tab" data-toggle="tab">Suivi Trimestriel</a></li>
                                  <li class=""><a href="#geographieMap" role="tab" data-toggle="tab">Géographie</a></li>
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

                                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Clients</th>
                                                                    <th>Adresse</th>
                                                                    <th>Smiley</th>
                                                                    <th>Intervenant</th>
                                                                    <th>Date du suivi</th>
                                                                    <th>Commentaires</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd gradeX">
                                                                    <td>Trident</td>
                                                                    <td>Internet
                                                                         Explorer 4.0</td>
                                                                    <td>Win 95+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">X</td>
                                                                </tr>
                                                                <tr class="even gradeC">
                                                                    <td>Trident</td>
                                                                    <td>Internet
                                                                         Explorer 5.0</td>
                                                                    <td>Win 95+</td>
                                                                    <td class="center">5</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="odd gradeA">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 5.5</td>
                                                                    <td>Win 95+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">5.5</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="even gradeA">
                                                                    <td>Trident</td>
                                                                    <td>Internet
                                                                         Explorer 6</td>
                                                                    <td>Win 98+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">6</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="odd gradeA">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 7</td>
                                                                    <td>Win XP SP2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">7</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="even gradeA">
                                                                    <td>Trident</td>
                                                                    <td>AOL browser (AOL desktop)</td>
                                                                    <td>Win XP</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">6</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 1.0</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.7</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 1.5</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 2.0</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 3.0</td>
                                                                    <td>Win 2k+ / OSX.3+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.9</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Camino 1.0</td>
                                                                    <td>OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Camino 1.5</td>
                                                                    <td>OSX.3+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Netscape 7.2</td>
                                                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.7</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Netscape Browser 8</td>
                                                                    <td>Win 98SE+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.7</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Netscape Navigator 9</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.0</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.1</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.1</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.2</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.2</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.3</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.3</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.4</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.4</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.5</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.5</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.6</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.6</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.7</td>
                                                                    <td>Win 98+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.7</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.8</td>
                                                                    <td>Win 98+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Seamonkey 1.1</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Gecko</td>
                                                                    <td>Epiphany 2.20</td>
                                                                    <td>Gnome</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 1.2</td>
                                                                    <td>OSX.3</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">125.5</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 1.3</td>
                                                                    <td>OSX.3</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">312.8</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 2.0</td>
                                                                    <td>OSX.4+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">419.3</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 3.0</td>
                                                                    <td>OSX.4+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">522.1</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>OmniWeb 5.5</td>
                                                                    <td>OSX.4+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">420</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>iPod Touch / iPhone</td>
                                                                    <td>iPod</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">420.1</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Webkit</td>
                                                                    <td>S60</td>
                                                                    <td>S60</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">413</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 7.0</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 7.5</td>
                                                                    <td>Win 95+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 8.0</td>
                                                                    <td>Win 95+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 8.5</td>
                                                                    <td>Win 95+ / OSX.2+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 9.0</td>
                                                                    <td>Win 95+ / OSX.3+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 9.2</td>
                                                                    <td>Win 88+ / OSX.3+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera 9.5</td>
                                                                    <td>Win 88+ / OSX.3+</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Opera for Wii</td>
                                                                    <td>Wii</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Nokia N800</td>
                                                                    <td>N800</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Presto</td>
                                                                    <td>Nintendo DS browser</td>
                                                                    <td>Nintendo DS</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">8.5</td>
                                                                    <td class="center">C/A<sup>1</sup></td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                    <td>KHTML</td>
                                                                    <td>Konqureror 3.1</td>
                                                                    <td>KDE 3.1</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">3.1</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>KHTML</td>
                                                                    <td>Konqureror 3.3</td>
                                                                    <td>KDE 3.3</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">3.3</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>KHTML</td>
                                                                    <td>Konqureror 3.5</td>
                                                                    <td>KDE 3.5</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">3.5</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                    <td>Tasman</td>
                                                                    <td>Internet Explorer 4.5</td>
                                                                    <td>Mac OS 8-9</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                    <td>Tasman</td>
                                                                    <td>Internet Explorer 5.1</td>
                                                                    <td>Mac OS 7.6-9</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                    <td>Tasman</td>
                                                                    <td>Internet Explorer 5.2</td>
                                                                    <td>Mac OS 8-X</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">1</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Misc</td>
                                                                    <td>NetFront 3.1</td>
                                                                    <td>Embedded devices</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                    <td>Misc</td>
                                                                    <td>NetFront 3.4</td>
                                                                    <td>Embedded devices</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                    <td>Misc</td>
                                                                    <td>Dillo 0.8</td>
                                                                    <td>Embedded devices</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                    <td>Misc</td>
                                                                    <td>Links</td>
                                                                    <td>Text only</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                    <td>Misc</td>
                                                                    <td>Lynx</td>
                                                                    <td>Text only</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                    <td>Misc</td>
                                                                    <td>IE Mobile</td>
                                                                    <td>Windows Mobile 6</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                    <td>Misc</td>
                                                                    <td>PSP browser</td>
                                                                    <td>PSP</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeU">
                                                                    <td>Other browsers</td>
                                                                    <td>All others</td>
                                                                    <td>-</td>
                                                                    <td class="center"> 4</td>
                                                                    <td class="center">-</td>
                                                                    <td class="center">U</td>
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
                                    <!-- Tabs MAPS-->
                                    <div class="panel panel-default tab-pane tabs-up" id="geographieMap">
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="col-lg-12">
                                              
                                                <div class="panel panel-default">
                                                    <!--<div class="panel-heading clean">MAPS</div>-->
                                                    <div class="panel-body">
                                                         <div id="floating-panel">
                                                            <button id="dropButton">Drop Markers</button>
                                                         </div>
                                                        <div id="map" class="map"></div>
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

                      <!-- PopUp Modal Pour ajout de client -->
          <?php
              require_once(__DIR__.'/../pop/createClientModal.php'); 
          ?>
        <!-- FIN PopUp Modal -->
            
        </div>
        <!-- Warper Ends Here (working area) -->
