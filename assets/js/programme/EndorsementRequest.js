(function($){
	// $(function () {
	//     $('#myTab a:first').tab('show')
	//  });
	var $this = $(this);
	// start event of btn-del-request-programme (delete request programme)
	//show dialog when click delete programme
 	$(".btn-del-request-prog").click(function(){
 		$("#dialog-confirm-del-request-prog").modal("show");
 		$this = $(this).parent().parent().parent();

 	});
 	// event when click "yes" in dialog confirm
 	$("#delete-request-prog-yes").click(function(){
 		$this.remove();
 		$("#dialog-confirm-del-request-prog").modal("hide");
 	});
 	// end event of btn-del-request-programme

})(jQuery);