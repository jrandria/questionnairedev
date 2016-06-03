          <div  class="modal fade" id="modalCreateComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class=" panel panel-info">
              <div class="panel-heading text-center" >Informations client </div>
                        <div class="panel-body">
                         <div class="panel-body">
                                <div class="col-lg-12">
                                <section>
                                  <h1></h1>
                                  <p>Vous nous avez attribué la note de XXXX, pour nous ce n’est pas satisfaisant. Pour améliorer nos services et répondre aux mieux aux futures demandes, nous aimerions que vous nous expliquiez vos déceptions. Si vous le souhaitez, vous pouvez nous laisser vos coordonnées pour que nous puissions vous recontacter.</p>
                                </section>
                                      <?php echo form_open("sendresponses");?>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Nom</label>
                                            <div class="col-lg-9">
                                                <input id="nomclientID" type="text" class="form-control" name="nomclient" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-3 control-label">Prenom</label>
                                            <div class="col-lg-9">
                                                <input id="prenomclientID" type="text" class="form-control" name="prenomclient" />
                                            </div>
                                        </div>
                        
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Email</label>
                                            <div class="col-lg-9">
                                                <input id="emailclientID" type="text" class="form-control" name="emailclient" />
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-lg-3 control-label">Tel</label>
                                            <div class="col-lg-9">
                                                <input id="telclientID" type="text" class="form-control" name="telclient" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Messages</label>
                                            <div class="col-lg-9">
                                                <textarea id="commentaireClientID" class="form-control noresize" placeholder="" name="commentaireClient" style="height: 200px;resize: none;"></textarea>
                                            </div>
                                        </div>

                                      </form>
                                </div>
                            </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              <button id="submitallcomment" type="button " name="valider"  value="valider" class="btn btn-primary">Valider</button>
                          </div>
                        </div>
              </div>
            </div>
          </div>