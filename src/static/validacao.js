$(document).ready(function () {
	alert(2);
	$('#examPoscomp').validate({
		errorClass: 'error help-inline alert alert-danger',
		rules:{
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
		errorPlacement: function(error, element) {
			error.insertBefore(element.parent().parent(element));
		},
		messages: {
			1: " Por favor, assinale uma das alternativas.",
			2: "Por favor, assinale uma das alternativas.",
			3: "Por favor, assinale uma das alternativas.",
			4: "Por favor, assinale uma das alternativas.",
			5: "Por favor, assinale uma das alternativas.",
			6: "Por favor, assinale uma das alternativas.",
			7: "Por favor, assinale uma das alternativas.",
			8: "Por favor, assinale uma das alternativas.",
			9: "Por favor, assinale uma das alternativas.",
			10: "Por favor, assinale uma das alternativas."
		}
	});
});
