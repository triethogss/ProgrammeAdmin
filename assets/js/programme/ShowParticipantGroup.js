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
 
})(jQuery);