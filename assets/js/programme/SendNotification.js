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
 
})(jQuery);