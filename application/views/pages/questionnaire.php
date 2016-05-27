
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
														

														$this->session->set_userdata('$dataidquestions', $dataidquestions);//On met temporairemenent les id et on envoi au controlleur
													}?>
												<input id="checkServerRepID" type="text" hidden="true" value="<?php echo ''.$this->session->userdata('$reponseServer'); ?>"></input>
												
											</div>
											
										</div>

										<div class="form-group">
											<button type="submit" id="submitquestionPart" class="btn btn-info" name="submitquestion" value="valider">Valider</button>
										</div>
										<div id="TauxDeProgression">
											<h3>Taux de satisfaction:</h3>
											<div class="progress progress-striped active col-lg-4">
												<div class="progress-bar progress-bar-success" data-transitiongoal="100"></div>
											</div>
										</div>
									</form>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
<?php require_once(__DIR__.'/../pop/createCommentModal.php'); ?>
</section>
<script type="text/javascript">
$(function(){
		var checkServerRep = $("#checkServerRepID").val();

		var arrayOfCheckedValue={};
		var dataArray;
		var pourcentage;

		//Prototype Javascrit pour calculer la somme des éléments dans un tableau
		Array.prototype.sum = function(){
		    var sum = 0;
		    this.map(function(item){
		        sum += item;
		    });
		    return sum;
		}


		if(checkServerRep){
			notie.alert(1, 'Questionnaire envoyé avec succès!',2);
		}


		$('input[type=radio]').change(function(event) {
			
			totalDeMesPoints=getAllCheckedValue(event);
			totalDeTousLesPoints=(dataArray.length)*5;
			//On s'assure de ne pas avoir une division par zero !
			pourcentage=(totalDeTousLesPoints!=0) ? Math.floor((totalDeMesPoints*100)/totalDeTousLesPoints) : null ;//On arrondit à la valeur inférieur

			updateProgressBarValue(pourcentage);
    	});

    	function getAllCheckedValue(event) {

    		$(':radio:checked').each(function(event){
    			arrayOfCheckedValue[this.name]=this.value;
    		});

    		sortedObj=sortArrayObjectByKey(arrayOfCheckedValue);//On arrange par clé 
    		dataArray = extractValuesFromArrayObject(sortedObj);//on récupère seulement les valeurs 
    		//console.log(dataArray);
    		var totalValuesInarray=arraySum(dataArray);
			//console.log(dataArray.sum());
    		return dataArray.sum();
    	}

    	function extractValuesFromArrayObject(arrayOfObject) {
    		
    		dataArray=$.map(arrayOfObject,function(v){
				return parseInt(v);
			});
			return dataArray;
    	}

    	function sortArrayObjectByKey(arrayOfObject) {
		    
		    var keys = [];
		    var sorted_obj = {};

		    for(var key in arrayOfObject){
		        if(arrayOfObject.hasOwnProperty(key)){
		            keys.push(key);
		        }
		    }

		    // arrangement des keys
		    keys.sort();

		    // Créer un array basé sur l'array arrangé :Keys
		    jQuery.each(keys, function(i, key){
		        sorted_obj[key] = arrayOfObject[key];
		    });

   			 return sorted_obj;
    	};

    	function arraySum(array){
			  var total = 0,
			      len = array.length;

			  for (var i = 0; i < len; i++){
			    total += array[i];
			  }

			  return total;
		}

    	function updateProgressBarValue(value) {
    		var $pb = $('#TauxDeProgression  .progress-bar');

    		if(value<50){
    			$pb.attr('class','progress-bar');//Enlèver toutes les classes sauf progress-bar
    			$pb.addClass('progress-bar-danger');//On ajoute une class                                 //
    			/*Une attente de qlqs secondes avant */
    			/*setTimeout(function(){
		       		$pb.addClass("progress-bar-danger");
		   		}, 5);*/
			}else if(50<value && value<75){
				$pb.attr('class','progress-bar');
				$pb.addClass('progress-bar-warning');
			}else {
				$pb.attr('class','progress-bar');
				$pb.addClass('progress-bar-success');
			}

    		$('#TauxDeProgression .progress-bar').attr('data-transitiongoal', 0).progressbar();
    		$pb.attr('data-transitiongoal',value);


    		$pb.progressbar({
				display_text:'fill'
			});
    	}

		$('#submitquestionPart').on('click',function(event){
			event.preventDefault();


			if(pourcentage !== null && pourcentage<75){
				openModal('#modalCreateComment');
			}else if (pourcentage !==null && pourcentage >75) {
				alert('Client moyennement satisfait envoi de donnée au bdd'+pourcentage);
				//window.location.replace("https://www.facebook.com/Econcept-informatique-138047422928154/?fref=ts");
				$(location).attr('href','https://www.facebook.com/Econcept-informatique-138047422928154/?fref=ts');
			}

		})

		function openModal(element){
		  $(element).modal();
		}

});	
	
</script>