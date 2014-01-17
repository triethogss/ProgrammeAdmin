(function($){
	//select all participant checkbox
   $('#checkbox-all-table-participant').change(function() {
    var $this = $(this);
	    // $this will contain a reference to the checkbox   
	    if ($this.is(':checked')) {
	        // the checkbox was checked      
	        $(".checkbox-participant").prop('checked', true);

	    } else {
	        // the checkbox was unchecked
	         $(".checkbox-participant").prop('checked', false);
	    }
    });
   // check all when all checkbox checked
 	$(".checkbox-participant").change(function(){
 		var checked =	$(".checkbox-participant:checked").length;
 		var count = $(".checkbox-participant").length;
 		if(checked==count)
 		{
 			 $('#checkbox-all-table-participant').prop('checked', true);
 		}
 		else
 		{
 			 $('#checkbox-all-table-participant').prop('checked', false);
 		}
 	});
    //select all waiting list checkbox
   $('#checkbox-all-waiting-list').change(function() {
	    var $this = $(this);
	    // $this will contain a reference to the checkbox   
	    if ($this.is(':checked')) {
	        // the checkbox was checked      
	        $(".checkbox-waiting-list").prop('checked', true);

	    } else {
	        // the checkbox was unchecked
	         $(".checkbox-waiting-list").prop('checked', false);
	    }
	});
    // check all when all checkbox checked
 	$(".checkbox-waiting-list").change(function(){
 		var checked =	$(".checkbox-waiting-list:checked").length;
 		var count = $(".checkbox-waiting-list").length;
 		if(checked==count)
 		{
 			 $('#checkbox-all-waiting-list').prop('checked', true);
 		}
 		else
 		{
 			 $('#checkbox-all-waiting-list').prop('checked', false);
 		}
 	});

   // start event of btn-del-participant (delete endorsed programme)
	//show dialog when click delete programme
 	$(".btn-del-participant").click(function(){
 		$("#dialog-confirm-del-participant").modal("show");
 		$this = $(this).parent().parent().parent();

 	});
 	// event when click "yes" in dialog confirm
 	$("#delete-participant-yes").click(function(){
 		$this.remove();
 		$("#dialog-confirm-del-participant").modal("hide");
 	});
 	// end event of btn-del-participant

 	// start event of btn-del-participant-waiting (delete endorsed programme)
	//show dialog when click delete programme
 	$(".btn-del-participant-waiting").click(function(){
 		$("#dialog-confirm-del-participant-waiting").modal("show");
 		$this = $(this).parent().parent().parent();

 	});
 	// event when click "yes" in dialog confirm
 	$("#delete-participant-waiting-yes").click(function(){
 		$this.remove();
 		$("#dialog-confirm-del-participant-waiting").modal("hide");
 	});
 	// end event of btn-del-participant
})(jQuery);