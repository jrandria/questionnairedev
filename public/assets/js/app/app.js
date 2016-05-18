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

    /*----CHARGEMENT DES EVENTS------------*/
     $(document).on('change','input[type=checkbox]',function() {
        var id=this.id;

        if (this.checked) {
         updateDataIfCheckBoxCheked(id);
            return;

        }
         updateDataIfCheckBoxUnchecked(id);
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = $(e.target).attr("href") // activated tab
         
         switch(target){
         	case '#tabQuestions':
         		//chargementDeTableQuestions();
         	break;
         	case '#tabReponses':
         		alert('#tabReponses');
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

    	console.log('statusGenerale: '+status.statusGeneraleValue+',statusStatistiques: '+status.statusStatistiquesValue+',statusParticulier: '+status.statusParticulierValue+',statusProfessionnel: '+status.statusProfessionnelValue);

    	setKeywordInputValue();
    	//setIdentifiantInputValue();

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

                var $TableRow = $('<tr></tr>');
                var $TableDataColID='<td>'+questVal.id_question+'</td>';
                var $TableDataColQuestion='<td>'+questVal.libelle+'</td>';
                var $TableDataColActif='<td><div class="switch-button lg showcase-switch-button"><input id="switch-button-actifs'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusGenerale)+' type="checkbox"><label for="switch-button-actifs'+questVal.id_question+'"></label></div></td>';
                var $TableDataColStats='<td><div class="switch-button lg primary showcase-switch-button"><input id="switch-button-stats'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusStatistiques)+' type="checkbox"><label for="switch-button-stats'+questVal.id_question+'"></label></div></td>';
                var $TableDataColPart='<td><div class="switch-button lg info showcase-switch-button"><input id="switch-button-particulier'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusParticulier)+' type="checkbox"><label for="switch-button-particulier'+questVal.id_question+'"></label></div></td>';
                var $TableDataColPro='<td><div class="switch-button lg warning showcase-switch-button"><input id="switch-button-pro'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusProfessionnel)+' type="checkbox"><label for="switch-button-pro'+questVal.id_question+'"></label></div></td>';
                var $TableDataColMotsCles='<td>'+questVal.motscles+'</td>';
                var $TableDataColDateAjout='<td>'+questVal.dateAjout+'</td>';

                var $AllTD=$TableRow.append($TableDataColID).append($TableDataColQuestion).append($TableDataColActif).append($TableDataColStats).append($TableDataColPart).append($TableDataColPro).append($TableDataColMotsCles).append($TableDataColDateAjout);

                $("#tbodyQuestionsTables").append($AllTD);

                   /* $("#tbodyQuestionsTables").append('<tr><td>'+questVal.id_question+'</td><td>'+questVal.libelle+'</td><td><div class="switch-button lg showcase-switch-button"><input id="switch-button-actifs'+questVal.id_question+'" '+checkboxCheckActif+' type="checkbox"><label for="switch-button-actifs'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg primary showcase-switch-button"><input id="switch-button-stats'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusStatistiques)+' type="checkbox"><label for="switch-button-stats'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg info showcase-switch-button"><input id="switch-button-particulier'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusParticulier)+' type="checkbox"><label for="switch-button-particulier'+questVal.id_question+'"></label></div></td><td><div class="switch-button lg warning showcase-switch-button"><input id="switch-button-pro'+questVal.id_question+'" '+isCheckBoxChecked(questVal.statusProfessionnel)+' type="checkbox"><label for="switch-button-pro'+questVal.id_question+'"></label></div></td><td>'+questVal.motscles+'</td><td>'+questVal.dateAjout+'</td></tr>');*/

                  i++;
              });
               table.dataTable();

               table.on( 'xhr', function () {
                  var json = table.ajax.json();
                  alert( json.data.length +' row(s) were loaded' );
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
                console.log(status.statusProfessionnelValue );
                break;
            case 'switch-button-particulierPop':
                status.statusParticulierValue = isChecked;
                console.log(status.statusParticulierValue );
                break;
            default:
                return 0;
        }
    }

    function openModal() {
        $('#modalCreateQuestion').modal();
    }

    function updateDataIfCheckBoxCheked(id){
        alert('Activé:Appel à AJAX pour '+id);
             /*
             var url="questionnaire/updateQuestionnaire";
             $.ajax({
              type: "POST",
              url:url,
              dataType: 'json',
              //data: {name: user_name, pwd: password},
              data:data,
              success: function(res) {
                  result = JSON.parse(data);
                  notie.alert(1, 'Questionnaire envoyé avec succès!',2);
                  console.log(result);
              }*/
    }


    function isCheckBoxChecked(status){
        var valRetourne='';
        if(status==1){
            valRetourne = 'checked';
        }
        return valRetourne;        
    }


    function updateDataIfCheckBoxUnchecked(id){
             alert('desactivé:Appel à AJAX pour'+id);
    }

    function openModal(){
       $('#modalCreateQuestion').modal();
    }
});