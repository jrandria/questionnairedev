/*--------LES VARIABLES UTILES--------*/
var Status = function() { //Object Question
    this.statusGeneraleValue = 0;
    this.statusStatistiquesValue = 0;
    this.statusParticulierValue = 0;
    this.statusProfessionnelValue = 0;
}

var keywordidvalue=1;
var table=$('#tableListeQuestions');
/*---------------------*/
$(function() {
	var status = new Status();

    moment.locale('fr').format('LLL'); //moment.js en format date français
    $("html").niceScroll({ //On applique nicescroll
        cursorwidth: '2px',
        autohidemode: false,
        zindex: 999
    });
    /*----CHARGEMENTS DES ELEMENTS-----*/

    $("#menuDashboard").removeClass("active"); //Enlever la classe qui met en rouge
    $("#menuQuestionnaires").addClass("active"); //Ajouter la classe active sur le menu 
    $('input[name="idDatePop"]').val(moment().format('DD/MMM/YYYY'));
    chargementDeTableQuestions();
    chargementDeTableReponses();

    /*----CHARGEMENT DES EVENTS------------*/
    $(document).on('change','input[type=checkbox]',function() {

        var idButton=this.id;
        var valIDElement= $(this).closest('td').siblings(':first-child').text();
        var boolChecked= this.checked;

        updateDataIfCheckBoxCheked(idButton,valIDElement,boolChecked);
    });   

    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = $(e.target).attr("href") // activated tab
         
         switch(target){
         	case '#tabQuestions':
         		//chargementDeTableQuestions();
         	break;
         	case '#tabReponses':
         		//
         	break;
         	case '#tabCategories':
         		alert('#tabCategories');
         	break;
         	default:
         	 alert('Erreur détécté');

         } 
    });


    $("#btnAddQuestion").on('click', function() {
        openModal();
    });

    $('#modalCreateQuestion').on('shown.bs.modal', function () {
    	setKeywordInputValue();
		  $("#idlibelleQuestionPop").focus();
	});

    $('#idKeywordPop').on('change', function() {
        keywordidvalue=(this.value); // ou $(this).val()
    });
    /*------FONCTIONS POUR LES MODIFICATIONS DES CHECKBOXS DANS POP---*/
    $('input[type=checkbox]').on('change', function() {
        var id = this.id;
        var isChecked = this.checked ? 1 : 0;
        getSwitchButtonValueChecked(id, isChecked);
        return;
    });

    $("#btnValiderPop").on('click', function(event) {
    	event.preventDefault();
        sendDataToTableQuestionByAjax();
    });    

    
    /*--APPEL AJAX pour les nouvelles questions dans la base de donnée---------*/

     function chargementDeTableQuestions(){
    	            /*--APPEL AJAX pour remplir la table des questions---------*/
        $.ajax({
              type: "GET",
              url:'getQuestionsFromDB',
              dataType: 'json',
              success: function(quest) {

                var quest = jQuery.parseJSON(JSON.stringify(quest));
                //console.log(quest);

               $.each(quest, function(key, value){
                var i=1;
                var questVal=quest[key];

                //A modifier en $.each( $( "div" ), function() {}); en jquery c'est plus joli

                var $TableRow = $('<tr></tr>'),
                 $TableDataColID='<td>'+questVal.id_question+'</td>',
                 $TableDataColQuestion='<td>'+questVal.libelle+'</td>',
                 $TableDataColActif='<td><div class="switch-button lg showcase-switch-button"><input id="switch-button-actifs'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusGenerale)+' type="checkbox"><label for="switch-button-actifs'+questVal.id_question+'"></label></div></td>',
                 $TableDataColStats='<td><div class="switch-button lg primary showcase-switch-button"><input id="switch-button-stats'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusStatistiques)+' type="checkbox"><label for="switch-button-stats'+questVal.id_question+'"></label></div></td>',
                 $TableDataColPart='<td><div class="switch-button lg info showcase-switch-button"><input id="switch-button-particulier'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusParticulier)+' type="checkbox"><label for="switch-button-particulier'+questVal.id_question+'"></label></div></td>',
                 $TableDataColPro='<td><div class="switch-button lg warning showcase-switch-button"><input id="switch-button-pro'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusProfessionnel)+' type="checkbox"><label for="switch-button-pro'+questVal.id_question+'"></label></div></td>',
                 $TableDataColMotsCles='<td>'+questVal.motscles+'</td>',
                 $TableDataColDateAjout='<td>'+questVal.dateAjout+'</td>';

                var $AllTD=$TableRow.append($TableDataColID).append($TableDataColQuestion).append($TableDataColActif).append($TableDataColStats).append($TableDataColPart).append($TableDataColPro).append($TableDataColMotsCles).append($TableDataColDateAjout);

                $("#tbodyQuestionsTables").append($AllTD);

                   /* $("#tbodyQuestionsTables").append('<tr><td>'+questVal.id_question+'</td><td>'+questVal.libelle+'</td><td><div class="switch-button lg showcase-switch-button"><input id="switch-button-actifs'+questVal.id_question+'" '+checkboxCheckActif+' type="checkbox"><label for="switch-button-actifs'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg primary showcase-switch-button"><input id="switch-button-stats'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusStatistiques)+' type="checkbox"><label for="switch-button-stats'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg info showcase-switch-button"><input id="switch-button-particulier'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusParticulier)+' type="checkbox"><label for="switch-button-particulier'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg warning showcase-switch-button"><input id="switch-button-pro'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusProfessionnel)+' type="checkbox"><label for="switch-button-pro'+questVal.id_question+'"></label></div></td><td>'+questVal.motscles+'</td><td>'+questVal.dateAjout+'</td></tr>');*/

                  i++;
              });
               table.dataTable({
                  "language": {
                    "url":"public/assets/json/French.json"
                  }
                });

               table.on( 'xhr', function () {
                  var json = table.ajax.json();
              } );
               /*setInterval( function () {
                  table.ajax.reload();
              }, 30000 );*/

              },
              error: function() {
                  alert('Erreur de récupération des données!');
              }

        });
      }

      function chargementDeTableReponses(){
        /*$('#tableListeReponses').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "getReponsesFromDB",
            "type": "POST"
        },
        "columns": [
            { "data": "id" },
            { "data": "idquestions" },
            { "data": "reponses_recu" },
            { "data": "idClient" },
            { "data": "satisfaction" },
            { "data": "dateajout" }
        ]
      });
        */
        $.ajax({
                type:'GET',
                url: 'QuestionnaireController/sendResponsesToTable',
                datatype: 'json',
                success: function(rep){
                  var rep = $.parseJSON(rep);
                  //var rep = $.parseJSON(JSON.stringify(rep));
                 console.log(rep);
                   $.each(rep, function(index, value) {
                      var repVal=rep[index];
                      var $TableRow = $('<tr></tr>'),
                            $TableDataColID='<td>'+repVal.id+'</td>',
                            $TableDataColQuestID='<td>'+phpUnserialize(repVal.idquestions)+'</td>',
                            $TableDataColRep='<td>'+phpUnserialize(repVal.reponses_recu)+'</td>',
                            $TableDataColIDClient = '<td>'+repVal.idClient+'</td>',
                            $TableDataColSatisf='<td><i class="fa fa-star text-warning"></i>'+repVal.satisfaction+'</td>',
                            $TableDataColDateAjout='<td>'+repVal.dateajout+'</td>';

                        var $AllTDRep=$TableRow.append($TableDataColID).append($TableDataColQuestID).append($TableDataColRep).append($TableDataColIDClient).append($TableDataColSatisf).append($TableDataColDateAjout);

                        $("#tbodyReponsesTables").append($AllTDRep);
                    });
                },
                error: function(jqXHR, textStatus, ex) {
                  console.log(textStatus + "," + ex + "," + jqXHR.responseText);
                }
              });
        }

    function sendDataToTableQuestionByAjax() {
        $.ajax({
            type: "POST",
            url: 'sendQuestionsToDB',
            dataType: 'json',
            data: {
            	token: $("input[name='token']").val(),
                libelle: $("#idlibelleQuestionPop").val(),
                keywordid: keywordidvalue,
                statusGenerale: status.statusGeneraleValue,
                statusStatistiques: status.statusStatistiquesValue,
                statusParticulier: status.statusParticulierValue,
                statusProfessionnel: status.statusProfessionnelValue,
            },
            success: function(res) {
            	if(res){
            		notie.alert(1, 'Insertion avec succès !', 2);
            		$('#modalCreateQuestion').modal('hide');
            		
            		//chargementDeTableQuestions();
            		/*$('#tableListeQuestions').dataTable().fnDestroy();
            		var table=$('#tableListeQuestions').DataTable({
            			 "ajax": {
            			 	url:"getQuestionsFromDB",
            			 	dataSrc : ''
            			 },
            			 "aaData": data,
            			 "columns": [
						      { "data": "id_question" },
						      { "data": "libelle" },
						      { "data": "motscles" },
						      { "data": "statusGenerale" },
						      { "data": "statusStatistiques" },
						      { "data": "statusParticulier" },
						      { "data": "statusProfessionnel" },
						      { "data": "dateAjout" }
						   ]
            		});
            		table.ajax.reload();//Refresh du dataTable
            		*/
            	}
            },
             error: function() {
                  notie.alert(1, 'Erreur de récupération des données! !', 3);
              }
        });
    }

    function setKeywordInputValue() {
        $.getJSON("getDataCategorieFromDB", function(data) {
            $('#idKeywordPop').empty();
            $.each(data, function(index, value) {
              //$('<option value="' + data[index].motscles + '">' + data[index].motscles + '</option>"').appendTo("#idKeywordPop");
              
              $('<option value="' + data[index].id + '">' + data[index].motscles + '</option>"').appendTo("#idKeywordPop");
            });
        });
    }

    function getSwitchButtonValueChecked(id, isChecked) {
        switch (id) {
            case 'switch-button-actifsPop':
                status.statusGeneraleValue = isChecked;
                break;
            case 'switch-button-statsPop':
                status.statusStatistiquesValue = isChecked;
                break;
            case 'switch-button-proPop':
                status.statusProfessionnelValue = isChecked;
                break;
            case 'switch-button-particulierPop':
                status.statusParticulierValue = isChecked;
                break;
            default:
                return 0;
        }
    }

    function isCheckBoxChecked(status){
        var valRetourne='';
        if(status==1){
            valRetourne = 'checked';
        }
        return valRetourne;        
    } 

    function updateDataIfCheckBoxCheked(idButton,valIDElement,isChecked){
      var dataToSend={
        token: $("input[name='token']").val(),
        keywordid:parseInt(valIDElement)
      };

        console.log('Id du Bouton:'+idButton+'-- ID dans la base:'+valIDElement);
        console.info('checkBoxChecked');
        
        switch(idButton){
          case 'switch-button-actifs'+valIDElement:
            dataToSend['statusGenerale'] = isChecked?1:0;
            updateElementOnCheckBoxChange(dataToSend);
            break;
          case 'switch-button-stats'+valIDElement:
            dataToSend['statusStatistiques'] = isChecked?1:0;
            updateElementOnCheckBoxChange(dataToSend);
            break;
          case 'switch-button-particulier'+valIDElement:
            dataToSend['statusParticulier'] = isChecked?1:0;
            updateElementOnCheckBoxChange(dataToSend);
            break;
          case 'switch-button-pro'+valIDElement:
            dataToSend['statusProfessionnel'] = isChecked?1:0;
            updateElementOnCheckBoxChange(dataToSend);
            break;
          case 'remember':
            break;
           default:
             ;
        }
        
    }




    function updateDataIfCheckBoxUnchecked(idButton,valIDElement){

       console.log('Id du Bouton:'+idButton+'-- ID dans la base:'+valIDElement);
    }

    function updateElementOnCheckBoxChange(data){

      console.log("Dans la fonction update:"+JSON.stringify(data, null, "  "));
      var url="QuestionnaireController/updateIfQuestionChange";
             
      $.ajax({
          type: "POST",
          url:url,
          dataType: 'json',
          data:data,
          success: function(res) {
            notie.alert(2, 'Update avec succès!',2);
            console.log((res));
          },
          error: function(jqXHR, exception) {
            alert('Erreur de récupération des données!'+ jqXHR.responseText);
                  /*
                      var msg = '';
                      if (jqXHR.status === 0) {
                          msg = 'Not connect.\n Verify Network.';
                      } else if (jqXHR.status == 404) {
                          msg = 'Requested page not found. [404]';
                      } else if (jqXHR.status == 500) {
                          msg = 'Internal Server Error [500].';
                      } else if (exception === 'parsererror') {
                          msg = 'Requested JSON parse failed.';
                      } else if (exception === 'timeout') {
                          msg = 'Time out error.';
                      } else if (exception === 'abort') {
                          msg = 'Ajax request aborted.';
                      } else {
                          msg = 'Uncaught Error.\n' + jqXHR.responseText;
                      }
                      console.log(msg);
                  */
          }
      });
    }

    function openModal(){
       $('#modalCreateQuestion').modal();
    }
});