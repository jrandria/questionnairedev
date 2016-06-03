
<style type="text/css">

.container{
  position: relative;
        margin: 0 auto;
        padding: 15px;
}


.center-div {
     margin: 0 auto;
     width: 800px; 
}


</style>
<section class="content center-div">


   <div class="warper">
          
                <hr class="no-margn">

            <div class="row">
            
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center" >Informations client </div>
                        <div class="panel-body">
                            <div class="col-lg-12">


                  <!--<div><h1>Questionnaire satisfaction</h1></div>-->
                      <?php echo form_open("sendresponses");?>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Nom</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="nomclient" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Prenom</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="prenomclient" />
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="emailclient" />
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Tel</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="telclient" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Messages</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control noresize" placeholder="Laissez nous donc un message :)  ..." name="commentaireClient" style="height: 200px"></textarea>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" id="submitAllResponses" class="btn btn-info" name="submitquestion" value="valider">Valider</button>
                                    </div>
                                </div>
                     </form>

              </div>
            </div>
          </div>
        </div>
  </div>
</div>
</section>
