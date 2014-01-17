(function($){
	// $(function () {
	//     $('#myTab a:last').tab('show');	 
	//  });
	var $this = $(this);
	// start event of btn-del-endorsed-programme (delete endorsed programme)
	//show dialog when click delete programme
 	$(".btn-del-endorsed-prog").click(function(){
 		$("#dialog-confirm-del-endorsed-prog").modal("show");
 		$this = $(this).parent().parent().parent();

 	});
 	// event when click "yes" in dialog confirm
 	$("#delete-endorsed-prog-yes").click(function(){
 		$this.remove();
 		$("#dialog-confirm-del-endorsed-prog").modal("hide");
 	});
 	// end event of btn-del-request-programme

})(jQuery);