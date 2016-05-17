/********************************
Preloader si nécessaire
********************************/
/*
$(window).load(function() {
  $('.loading-container').fadeOut(1000, function() {
	$(this).remove();
  });
});	
*/
/********************************
Les variables pour les valeurs des étoiles
********************************/
var repQuestion2;
var repQuestion3;
var repQuestion4;
var repQuestion5;
var tableauxValeursStars = [];
var tableauxStars = new Object(); //Tableaux associatif
                                  //
                                  //
$(function() {
    /********************************
    Fonctions pour les notes en étoiles
    ********************************/
    if ($.isFunction($.fn.rating)) {
        //Un événement est attaché à chaque changement sur les étoiles
        //rating.change est appelé si on change la veleur des étoiles
        //rating.clear est appelé si on réinitialise à zero en cliquand le bouton à guache
        //-------POur les étoiles Questions1--------
        $('#input-question1').on('rating.change', function(event, value, caption) {
            //console.log(value);console.log(caption);
            //Ajout des éléments dans le tableaux
            insertElementInArrayObject('question1Key', value);
        });
        $('#input-question1').on('rating.clear', function(event, value) {
            $.notiny({
                text: 'Reset total ! '
            }); //Affiche le petit Popup en bas à gauche
            removeElementInArrayObject('question1Key', tableauxStars);
        });
        //----------------------------------------
        //-------POur les étoiles Questions2--------
        $('#input-question2').on('rating.change', function(event, value, caption) {
            insertElementInArrayObject('question2Key', value);
        });
        $('#input-question2').on('rating.clear', function(event, value) {
            $.notiny({
                text: 'Reset total ! '
            });
            removeElementInArrayObject('question2Key', tableauxStars);
        });
        //-------POur les étoiles Questions3--------
        $('#input-question3').on('rating.change', function(event, value, caption) {
            insertElementInArrayObject('question3Key', value);
        });
        $('#input-question3').on('rating.clear', function(event, value) {
            $.notiny({
                text: 'Reset total ! '
            });
            removeElementInArrayObject('question3Key', tableauxStars);
        });
        //-------POur les étoiles Questions4--------
        $('#input-question4').on('rating.change', function(event, value, caption) {
            insertElementInArrayObject('question4Key', value);
        });
        $('#input-question4').on('rating.clear', function(event, value) {
            $.notiny({
                text: 'Reset total ! '
            });
            removeElementInArrayObject('question4Key', tableauxStars);
        });
        //-------POur les étoiles Questions5--------
        $('#input-question5').on('rating.change', function(event, value, caption) {
            insertElementInArrayObject('question5Key', value);
        });
        $('#input-question5').on('rating.clear', function(event, value) {
            $.notiny({
                text: 'Reset total ! '
            });
            removeElementInArrayObject('question5Key', tableauxStars);
        });
        /*
	 	//Un événement est attaché et chaque réinitialisation déclenche un event
	 	$('#input-question1').on('rating.clear', function(event) {
	    	console.log("rating.clear");
		});

	 	//Un événement est attaché et chaque réinitialisation total (reset) déclenche un event
	 	$('#input-question1').on('rating.reset', function(event) {
	    	console.log("rating.reset");
		});

	 	//Un événement est attaché et chaque passage de souris sur les étoiles déclenchent également un event
		 $('#input-question1').on('rating.hover', function(event, value, caption, target) {
		    console.log(value);
		    console.log(caption);
		    console.log(target);
		});
		*/
    }
    $("#submitquestion").on('click', function() {
        event.preventDefault(); //On empêche le comportement par défaut du formulaire
        //var user_name = $("input#name").val();//Les variables
        //var password = $("input#pwd").val();
        var isDataReady = testArrayLength(tableauxStars); //On doit bien vérifier que tout a été remplir (5 Questions)
        if (isDataReady) {
            for (property in tableauxStars) {
                console.log(property + " = " + tableauxStars[property]);
            }
            //On ajoute un élément pour renforcer la securité du post Ajax
            tableauxStars[' csrf_test_name'] = $("input[name='csrf_test_name']").val();
            submitDataToDatabase(tableauxStars);
            notie.alert(1, 'Questionnaire envoyé avec succès !', 2);
        } else {
            notie.alert(3, 'Veuillez remplir correctement!', 2);
        }
    });

    function checkIfKeyIsAlreadyInArray(nameKey, myArray) {
        if (nameKey in myArray) {
            console.log('true');
            return true
        } else {
            console.log('false');
            return false;
        }
    }

    function insertElementInArrayObject(nameKey, value) {
        if (value > 0) { //&& !
            if (!(checkIfKeyIsAlreadyInArray('question1Key', tableauxStars))) {
                //On insère dans le tableau
                console.log('Insertion');
                tableauxStars[nameKey] = value;
                console.log(tableauxStars);
            } else {
                delete tableauxStars[nameKey];
                tableauxStars[nameKey] = value;
                console.log(tableauxStars);
            }
        } //On affiche une notification si la note maximale est donnée
        if (value == 6) {
            $.notiny({
                text: 'Merci,nous sommes à votre service ! '
            });
        }
        return 0;
    }

    function removeElementInArrayObject(nameKey, myArray) {
        delete myArray[nameKey];
        console.log('taille du tableaux=' + Object.keys(tableauxStars).length);
        console.log(tableauxStars);
    }

    function searchItemInArrayObject(nameKey, myArray) {
        for (var i = 0; i < myArray.length; i++) {
            if (myArray[i].name === nameKey) {
                return myArray[i];
            }
        }
        return 0;
    }

    function removeElementFromArray(array, item) {
        for (var i in array) {
            if (array[i] == item) {
                array.splice(i, 1);
                break;
            }
        }
        return 0;
    }

    function testArrayLength(tableaux) {
        var booLength = false;
        var size = Object.keys(tableauxStars).length;
        console.log('Longeur du tableaux=' + size);
        console.log(tableauxStars);
        if (size == 5) {
            booLength = true;
        }
        return booLength;
    }

    function submitDataToDatabase(data) { //On envoi les données au controller qui va appeler le model qui lui va insérer dans la base
        //On sert d'ajax pour faire le travail silencieusement 
        var url = "questionnaire/submitQuestionnaire";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            //data: {name: user_name, pwd: password},
            data: data,
            success: function(res) {
                result = JSON.parse(data);
                notie.alert(1, 'Questionnaire envoyé avec succès!', 2);
                console.log(result);
            }
        });
    }
});