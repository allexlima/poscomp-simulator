$(document).ready(function () {

	var general_tab = true;
	var detailed_tab = false;
	var gg_tab = $("#general-grade");
	var dg_tab = $("#detailed-grade");
	var gg_body = $("#general-grade-body");
	var dg_body = $("#detailed-grade-body");

	$("#detailed-grade").click(function(){
		if(detailed_tab == false){
			$("#general-grade").removeClass('active');
			$("#detailed-grade").addClass('active');
			$("#general-grade-body").hide();
			$("#detailed-grade-body").show();
			$("#detailed-grade-body").addClass('animated bounceIn');
			detailed_tab = true;
			general_tab = false;
		}
	});

	$("#general-grade").click(function(){
		if(general_tab == false){
			$("#detailed-grade").removeClass('active');
			$("#general-grade").addClass('active');
			$("#detailed-grade-body").hide();
			$("#general-grade-body").show();
			$("#general-grade-body").addClass('animated bounceIn');
			detailed_tab = false;
			general_tab = true;
		}
	});


});
