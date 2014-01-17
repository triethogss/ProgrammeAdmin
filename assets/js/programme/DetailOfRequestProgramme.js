(function($){
	//show reason text
	$("#decline").click(function(){
		if($(this).is(':checked'))
		{
			$("#reason-text").removeClass("hidden");
			//alert("Checked");
		}
	});
	// hide reason text
	$("#endorse").click(function(){
		if($(this).is(':checked'))
		{
			$("#reason-text").addClass("hidden");
			//alert("Checked");
		}
	});

})(jQuery);