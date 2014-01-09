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
})(jQuery);