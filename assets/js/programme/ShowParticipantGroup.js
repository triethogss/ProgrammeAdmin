var current;
(function($){

	//select all participant group
   $('#check-all-participant-group').change(function() {
    var $this = $(this);
	    // $this will contain a reference to the checkbox   
	    if ($this.is(':checked')) {
	        // the checkbox was checked      
	        $(".check-participant-group").prop('checked', true);

	    } else {
	        // the checkbox was unchecked
	         $(".check-participant-group").prop('checked', false);
	    }
    });
   // check all when all checkbox checked
 	$(".check-participant-group").change(function(){
 		var checked =	$(".check-participant-group:checked").length;
 		var count = $(".check-participant-group").length;
 		if(checked==count)
 		{
 			 $('#check-all-participant-group').prop('checked', true);
 		}
 		else
 		{
 			 $('#check-all-participant-group').prop('checked', false);
 		}
 	});

 	// start event of btn-del-participant-group-attendance (delet participant in group)
	//show dialog when click delete programme
 	$(".btn-del-participant-group-attendance").click(function(){
 		$("#dialog-confirm-del-participant-group").modal("show");
 		$this = $(this).parent().parent().parent().parent();

 	});
 	// event when click "yes" in dialog confirm
 	$("#delete-participant-group-yes").click(function(){
 		$this.remove();
 		$("#dialog-confirm-del-participant-group").modal("hide");
 	});
 	// end event of btn-delete available programme

 	//edit participant in group
 	$(".btn-edit-participant-group").click(function(){
 		status = $(this).attr("id");
 		var current_row = $(this).parent().parent().parent().parent(); 		
 		if(status==1)
 		{
 			//alert(status);
 			//disables all edit button
 			$(".btn-edit-participant-group").addClass("disabled");
 			//enable current button
 			$(this).removeClass("disabled");
 			// change icon
 			$(this).find("span").removeClass("glyphicon-pencil");
 			$(this).find("span").addClass("glyphicon-floppy-disk");
 			//end change icon
 			current_row.find("td").find(".participant-name").prop("disabled",false);
	 		current_row.find("td").find(".participant-mobile").prop("disabled",false);
	 		current_row.find("td").find(".participant-email").prop("disabled",false);
	 		// $(".btn-edit-participant-group").addClass("disabled");
 			$(this).attr("id",0);

 		}
 		else
 		{
 			//alert(status);
 			//enable all edit button
 			$(".btn-edit-participant-group").removeClass("disabled");
 			//change icon
 			$(this).find("span").removeClass("glyphicon-floppy-disk");
 			$(this).find("span").addClass("glyphicon-pencil");
 		
 			//end chaneg icon
 			current_row.find("td").find(".participant-name").prop("disabled",true);
	 		current_row.find("td").find(".participant-mobile").prop("disabled",true);
	 		current_row.find("td").find(".participant-email").prop("disabled",true);
 			$(this).attr("id",1);
 		}
 		// var current_row = $(this).parent().parent().parent().parent(); 		
 		// current_row.find("td").find(".participant-name").prop("disabled",false);
 		// current_row.find("td").find(".participant-mobile").prop("disabled",false);
 		// current_row.find("td").find(".participant-email").prop("disabled",false);
 	});

})(jQuery);