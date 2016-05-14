
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
									<?php echo form_open("validateResponses");?>

										<div class="section_question" id="question1">
											<div class="question-header">
												<?php 
													if($resultatArray)
													{
														$dataidquestions=array();

														for ($i=0; $i < count($resultatArray); $i++) { 
															foreach ($resultatArray[$i] as $key => $value) {

																if($key=='libelle'){?>
																		<div>
																			<?php  echo $value; ?>
																			<br/>
																			<?php
																				echo "&nbsp &nbsp 1 &nbsp";echo "&nbsp 2 &nbsp";echo "&nbsp 3 &nbsp";echo "&nbsp 4 &nbsp";echo "&nbsp 5 &nbsp <br/> &nbsp &nbsp";

																				echo form_radio('reponse'.$i,'1',FALSE);echo "&nbsp";
																				echo form_radio('reponse'.$i,'2',FALSE);echo "&nbsp";
																				echo form_radio('reponse'.$i,'3',FALSE);echo "&nbsp";
																				echo form_radio('reponse'.$i,'4',FALSE);echo "&nbsp";
																				echo form_radio('reponse'.$i,'5',FALSE);echo "&nbsp";

																			?>
																		</div>
																<?php }
																else if ($key=='id_question') {
																	$dataidquestions[]=$value;
																} 
															}
														}
														

														$this->session->set_flashdata('$dataidquestions', $dataidquestions);
													}?>
												<input id="checkServerRepID" type="text" hidden="true" value="<?php echo ''.$this->session->userdata('$reponseServer'); ?>"></input>
												
												<button type="submit" id="submitquestionPart" class="btn btn-info" name="submitquestion" value="valider">Valider</button>
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
<script type="text/javascript">
$(function(){
	var checkServerRep = $("#checkServerRepID").val();

	if(checkServerRep){
		notie.alert(1, 'Questionnaire envoyé avec succès!',2);
	}
});
	
	
</script>