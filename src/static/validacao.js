$(document).ready(function () {

    $('#examForm').validate({
			errorClass: "error help-inline alert alert-warning",
			errorPlacement: function(error, element){
				error.insertBefore(element.parent().parent(element));
			},
            rules: {
                1: {required: true},
                2: {required: true},	
				3: {required: true},
				4: {required: true},
				5: {required: true},
				6: {required: true},
				7: {required: true},
				8: {required: true},
				9: {required: true},
				10: {required: true},
            },

			messages: {
				1: "Selecione uma alternativa",
				2: "Selecione uma alternativa",
				3: "Selecione uma alternativa",
				4: "Selecione uma alternativa",
				5: "Selecione uma alternativa",
				6: "Selecione uma alternativa",
				7: "Selecione uma alternativa",
				8: "Selecione uma alternativa",
				9: "Selecione uma alternativa",
				10: "Selecione uma alternativa",
			}
        });	
});
