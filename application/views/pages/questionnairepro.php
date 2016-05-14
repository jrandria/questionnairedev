
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
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center" >Questionnaire de satisfaction </div>
                        <div class="panel-body">
                            <div class="col-lg-12">


									<!--<div><h1>Questionnaire satisfaction</h1></div>-->
									<?php echo form_open("validerquestions");?>

										<div class="section_question" id="question1">
											<div class="question-header">
												<!-- <a id="Q1_contenu"></a> -->
												<!--
												<div class="question1"/>
													<p>Avez-vous été bien accueilli ?</p>
														<input type="radio" name="reponse" value="1" checked >1</input>
														<input type="radio" name="reponse" value="2">2</input>
														<input type="radio" name="reponse" value="3">3</input>
														<input type="radio" name="reponse" value="4">4</input>
														<input type="radio" name="reponse" value="5">5</input>
												</div>
												-->
												<div class="question1">
														<p>Avez-vous été bien accueilli ?</p>
														<input id="input-question1" class="rating rating-loading" value="0" data-min="0" data-max="5" data-step="1" data-size="xs" lang="fr"><hr/>
												</div>
												</br>
												<div class="question2"/>
													<p>Comment évaluerez-vous la qualité de nos services ?</p>
													<input id="input-question2" class="rating rating-loading" value="0" data-min="0" data-max="5" data-step="1" data-size="xs" lang="fr"><hr/>

												</div>
												</br>
												<div class="question3"/>
													<p>Jugez-vous nos produits et services de bonnes qualités ?</p>
													<input id="input-question3" class="rating rating-loading" value="0" data-min="0" data-max="5" data-step="1" data-size="xs" lang="fr"><hr/>
												</div>
												</br>
												<div class="question4"/>
													<p>Votre avis sur nos prix ?</p>
													<input id="input-question4" class="rating rating-loading" value="0" data-min="0" data-max="5" data-step="1" data-size="xs" lang="fr"><hr/>
												</div>
												</br>
												<div class="question5"/>
													<p>Trouvez-vous le matériel qui correspond à vos besoins ?</p>
													<input id="input-question5" class="rating rating-loading" value="0" data-min="0" data-max="5" data-step="1" data-size="xs" lang="fr"><hr/>
												</div>
												<button type="submit" id="submitquestion" class="btn btn-info" name="submitquestion" value="valider">Valider</button>
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
