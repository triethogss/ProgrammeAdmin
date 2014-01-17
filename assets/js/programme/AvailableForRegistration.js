(function($){
	var $this = $(this);
	// start event of btn-delete available programme
	//show dialog when click delete programme
 	$(".btn-delete-available-prog").click(function(){
 		$("#dialog-confirm").modal("show");
 		$this = $(this).parent().parent().parent();

 	});
 	// event when click "yes" in dialog confirm
 	$("#delete-available-prog-yes").click(function(){
 		$this.remove();
 		$("#dialog-confirm").modal("hide");
 	});
 	// end event of btn-delete available programme


})(jQuery);