(function($){
	//select all email checkbox
   $('#checkbox-all-email').change(function() {
    	var $this = $(this);
	    // $this will contain a reference to the checkbox   
	    if ($this.is(':checked')) {
	        // the checkbox was checked      
	        $(".check-email").prop('checked', true);

	    } else {
	        // the checkbox was unchecked
	         $(".check-email").prop('checked', false);
	    }
    });
    // check all when all checkbox checked
 	$(".check-email").change(function(){
 		var checked =	$(".check-email:checked").length;
 		var count = $(".check-email").length;
 		if(checked==count)
 		{
 			 $('#checkbox-all-email').prop('checked', true);
 		}
 		else
 		{
 			 $('#checkbox-all-email').prop('checked', false);
 		}
 	});

   //select all notification checkbox
   $('#checkbox-all-notification').change(function() {
    	var $this = $(this);
	    // $this will contain a reference to the checkbox   
	    if ($this.is(':checked')) {
	        // the checkbox was checked      
	        $(".check-notification").prop('checked', true);

	    } else {
	        // the checkbox was unchecked
	         $(".check-notification").prop('checked', false);
	    }
    });
   // check all when all checkbox checked
 	$(".check-notification").change(function(){
 		var checked =	$(".check-notification:checked").length;
 		var count = $(".check-notification").length;
 		if(checked==count)
 		{
 			 $('#checkbox-all-notification').prop('checked', true);
 		}
 		else
 		{
 			 $('#checkbox-all-notification').prop('checked', false);
 		}
 	});

   //select all sms checkbox
   $('#checkbox-all-sms').change(function() {
    	var $this = $(this);
	    // $this will contain a reference to the checkbox   
	    if ($this.is(':checked')) {
	        // the checkbox was checked      
	        $(".check-sms").prop('checked', true);

	    } else {
	        // the checkbox was unchecked
	         $(".check-sms").prop('checked', false);
	    }
    });
   // check all when all checkbox checked
 	$(".check-sms").change(function(){
 		var checked =	$(".check-sms:checked").length;
 		var count = $(".check-sms").length;
 		if(checked==count)
 		{
 			 $('#checkbox-all-sms').prop('checked', true);
 		}
 		else
 		{
 			 $('#checkbox-all-sms').prop('checked', false);
 		}
 	});
 
})(jQuery);