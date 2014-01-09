(function($){
	// $('#tblAppendGrid').appendGrid({
	// 	caption: 'My CD Collections',
	// 	initRows: 1,
	// 	columns: [
	// 		{ name: 'Album', display: 'Album', type: 'text', ctrlAttr: { maxlength: 100 }, ctrlCss: { width: '160px'} },
	// 		{ name: 'Artist', display: 'Artist', type: 'text', ctrlAttr: { maxlength: 100 }, ctrlCss: { width: '100px'} },
	// 		{ name: 'Year', display: 'Year', type: 'text', ctrlAttr: { maxlength: 4 }, ctrlCss: { width: '40px'} },
	// 		{ name: 'Origin', display: 'Origin', type: 'select', ctrlOptions: { 0: '{Choose}', 1: 'Hong Kong', 2: 'Taiwan', 3: 'Japan', 4: 'Korea', 5: 'US', 6: 'Others'} },
	// 		{ name: 'Poster', display: 'With Poster?', type: 'checkbox' },
	// 		{ name: 'Price', display: 'Price', type: 'text', ctrlAttr: { maxlength: 10 }, ctrlCss: { width: '50px', 'text-align': 'right' }, value: 0 },
	// 		{ name: 'RecordId', type: 'hidden', value: 0 }
	// 	]
	// });
	// 
	$('.addRowShipping').on('click', function(e) {
		e.preventDefault();
		var table = $('table'),
			row = table.find('tbody tr').eq(0).clone();

		$("input", row).val('');
		$('.btnDelShippingRate', row).show();
		$(row).show().appendTo(table);
	});

	// on country change, refresh the region list
	
	$('.formEditShipping').ajaxForm({
		dataType:  'json',
		success: function (data) {
			// console.log(data);
	        // return;
	    	if (typeof data == 'object') {
	    		bootbox.alert(data.message, function() {
	    			if (data.status_code === 200) {
		    			window.location.href = data.redirect;
		    		}
	    		});
	    	} else {
	    		bootbox.alert('error');
	    	}
		}
	});

	$('.btnDelShippingRate').eq(0).hide();

	$('.formEditShipping').on('click', '.btnDelShippingRate', function(e) {
		e.preventDefault();
		var that = $(this).closest('tr');
		if ($('.btnDelShippingRate').index($(this)) == 0) return;
		// console.log($('.btnDelShippingRate').index($(this)));
		$(that).hide('slow', function() {
			$(that).remove();
		});
	});
})(jQuery);