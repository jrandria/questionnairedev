/* ========================================================
*
* MES PROPRES FICHIERS JS
*
* ======================================================== */
 $(function() {

 	//===== jGrowl notifications defaults =====//
 	
 	$.jGrowl.defaults.closer = false;
	$.jGrowl.defaults.easing = 'easeInOutCirc';


 	//Notification pour le formulaire d'enregistrement
 	var testError=$('#phpVar').attr('value');
	//console.log(testError);//console pour tester
	
	if(testError>0){
		$.jGrowl('Pseudo déjà reservé', 
			{ 
				sticky: true, 
				theme: 'growl-error', 
				//position:'center',
				header: 'Erreur!' 
			}
		);
	}
	

});