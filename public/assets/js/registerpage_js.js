
/* ========================================================
*
* JB Randria
*
* ========================================================
*
* File: registerpage_js.js;
* Description:Load des scripts de ma page inscription register.php.
* Version: 1.0
*
* ======================================================== */



$(function() {

	//===== jGrowl notifications par défault =====//

	$.jGrowl.defaults.closer = false;
	$.jGrowl.defaults.easing = 'easeInOutCirc';
	$.jGrowl.defaults.position = 'bottom-right';
	
	/*growl-success,growl-error,growl-warning*/
	
	//var arrayOfErrors=
    
	$("button").on("click", function(){

	 	var testError=$('#phpVar').attr('value');
	 	console.log(testError);

		if (parseInt(testError)>0) {	
			$.jGrowl("Veuillez remplir correctement le formulaire svp ! ",{header:'--ERREURS--',theme:'growl-warning'});		
		}
    });

});