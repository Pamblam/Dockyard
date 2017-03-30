

$(function(){
	
	$('#type').val("API");
	$(document).on('change', '#type', function(){
		$("#language").parent()[$(this).val() === "API" ? "hide" : "show"]();
		$("#endpoint").parent()[$(this).val() === "API" ? "show" : "hide"]();
	});

	$("#opensource").prop("checked", false);
	$(document).on('change', '#opensource', function(){
		$("#url").parent()[$(this).is(":checked") ? "show" : "hide"]();
	});
	
});
