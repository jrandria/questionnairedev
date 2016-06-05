          <div  class="modal fade" id="modalCreateQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Création d'une question</h4>
                </div>
                <div class="modal-body">
                  
                  <?php echo form_open("sendQuestionsToDB");?>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="Identifiant">Identifiant</label>
                              <input type="text" class="form-control" placeholder="identifiant">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="dateInscription">Date création</label>
                              <input id="idDatePop" name="idDatePop" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                              <label for="MotsCles">Mots Clés</label>
                              <select id="idKeywordPop" class="form-control">
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="form-group">
                              <label for="libelleQuestion">Question</label>
                              <input  id="idlibelleQuestionPop" type="text" class="form-control" placeholder="">
                        </div>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group">
                            <label for="Telephone">Status:</label>
                                   <div id="status" class="form-group text-right">
                                      <label for="StatusActifPop">Actif</label>
                                      <div class="switch-button lg showcase-switch-button">
                                        <input id="switch-button-actifsPop"  type="checkbox">
                                           <label for="switch-button-actifsPop"></label>
                                     </div>
                                     <label for="StatusStatsPop">Statistique</label>
                                       <div class="switch-button lg primary showcase-switch-button">
                                          <input id="switch-button-statsPop"  type="checkbox">
                                          <label for="switch-button-statsPop"></label>
                                       </div>
                                      <label for="StatusParticulierPop">Particulier</label>
                                        <div class="switch-button lg info showcase-switch-button">
                                          <input id="switch-button-particulierPop"  type="checkbox">
                                          <label for="switch-button-particulierPop"></label>
                                        </div>
                                      <label for="StatusProfessionnelPop">Pro</label>
                                        <div class="switch-button lg warning showcase-switch-button">
                                           <input id="switch-button-proPop"  type="checkbox">
                                            <label for="switch-button-proPop"></label>
                                        </div>                                      
                                   </div>

                          </div>
                      </div>
                    </div>

                  </form>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <button id="btnValiderPop" type="button" class="btn btn-primary">Valider</button>
                </div>
              </div>
            </div>
          </div>