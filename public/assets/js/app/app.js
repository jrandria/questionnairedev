/*--------LES VARIABLES UTILES--------*/
var Status = function() { //Object Question
    this.statusGeneraleValue = 0;
    this.statusStatistiquesValue = 0;
    this.statusParticuliervalue = 0;
    this.statusProfessionnelValue = 0;
}

var keywordidvalue=1;
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


    /*----CHARGEMENT DES EVENTS------------*/

    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = $(e.target).attr("href") // activated tab
        if (target == '#statsClients') {
            //alert(target); Si la tab active est stats chargé dynamiquement les stats
            chargementDesChartsStats();
        } else if (target == '#geographieMap') {
            initMap();
        }
    });


    $("#btnAddQuestion").on('click', function() {
        openModal();
    });

    $('#modalCreateQuestion').on('shown.bs.modal', function () {

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
            	}
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
});