
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
	 	// var ary = (arrayOfErrors);
	 	// console.log(ary, this);
		if (testError>0) {	
		$.jGrowl("Veuillez remplir correctement le formulaire svp ! ");
				// $.jGrowl("Erreurs : ".text, {
				// 		header: 'Header',
				// 		life: 5000,
				// 		theme:  'growl-warning',
				// 		speed:  'slow',
				// 		beforeOpen: function(e,m,o) {
				// 			console.log(phpVar, this);
				// 		},
				// 		open: function(e,m,o) {
				// 			console.log("I have been opened!", this);
				// 		},
				// 		beforeClose: function(e,m,o) {
				// 			console.log("I am going to be closed!", this);
				// 		},
				// 		close: function(e,m,o) {
				// 			console.log("I have been closed!", this);
				// 		},
				// 		animateOpen: { 
				// 			height: "show",
				// 			width: "show"
				// 		},
				// 		animateClose: { 
				// 			height: "hide",
				// 			width: "show"
				// 		}
				// 	});			
	}
    });
	 /*
	 $(function() {
	    $("#btnSubmit").click(function() {
	        $.ajax({
	            url: "/account/signup",
	            type: "POST",
	            dataType: "json",
	            data: { 
	                Email: $("#strEmail").val(),
	                Password: $("#strPassword").val()
	            },
	            success: function(j) {
	                    $(".errMsg").hide();
	                    alert(j.length); // I couldn't get the total count
	                $.each(j, function(n) {
	                    $("#err" + n).html(j[n]);
	                    $("#err" + n).show();
	                })

	            },
	            error: function(req, status, error) {
	                alert(req);
	            }
	        });
	    });
	});
	$.ajax({
        type: 'POST',
        headers: {
            "cache-control": "no-cache"
        },
        url: "employee.php",
        async: false,
        cache: false,
        data: {
            employee_id: 10011
        },
        success: function (jsonString) {
            var employeeData = JSON.parse(jsonString); // employeeData variable contains employee array.
    });

	*/

	
	


});