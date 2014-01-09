(function($){
	var BASE_URL = BASE_URL || 'http://localhost/wusic_admin';

	if ($.fn.summernote) {
		$('.summernote').summernote({
			height: "300px",
			oninit: function() {
				console.log('Summernote is launched');
			}
			// onImageUpload: function(files, editor, welEditable) {
				// console.log('image upload:', files, editor, welEditable);
				// sendFile(files, editor, welEditable);
			// }
		});
	}

	function sendFile(file, editor, welEditable) {
		var data = new FormData();
		data.append("file", file);

		// console.log(data);
		// return;

		$.ajax({
		    data: data,
		    type: "POST",
		    url: BASE_URL + "/ajax/saveimage",
		    cache: false,
		    contentType: false,
		    processData: false,
		    success: function(url) {
		    	console.log(url);
		        // editor.insertImage(welEditable, url);
		    }
		});
	}

	$('.btnSaveInformation').on('click', function(e) {
		var data;

		data = {
			content: $('.summernote').code()
		};

		$.ajax({
			type: 'POST',
			dataType: 'json',
			data: data,
		})
		.done(function( data, textStatus, jqXHR) {
			console.log(data);
			// console.log("success");
		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			console.log(errorThrown);

		})
		.always(function() {

		});
	});



	Handlebars.registerHelper('link_to', function(id, name) {
		var url = BASE_URL + '/accounts/view?id=' + id;
		return new Handlebars.SafeString( "<a href='" + url + "'>" + this.name + "</a>");
	});
	
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		// console.log(e.target);
		// if ($(e).data('href'))
		// 
		$('.tabcontainer').html('');

		var href = $(e.target).data('href');

		if (href) {
			$.get(href, function(data) {
				/*optional stuff to do after success */
				if (data.status_code == 200) {
					if (e.target.getAttribute('href') == '#more-information') {
						$('.tabcontainer').html(data.results.content);		
					} else {
						// console.log(data.results);

						var source   = $("#buyerTpl").html();
						var template = Handlebars.compile(source);
						var context  = data;
						var html     = template(context);

						$('.tabcontainer').html(html);
					}
				} else {
					// alert('todo');
				}
			});
		}
	});

	// create tiered price
	$('.formCreateDeal').on('click', '.btnAddTierPrice', function() {
		var that = this;
		// var newTier = $(that).parents('tr').clone();

		var source   = $("#tierPriceTpl").html();
		var template = Handlebars.compile(source);
		// var context  = data;
		// var html     = template();
		var newTier     = template();

		// console.log(html);
		$(that).parents('tr').parent().append(newTier);
		// newTier.find('.btnDelTierPrice').show();
	});

	// delete tiered price
	$('.formCreateDeal').on('click', '.btnDelTierPrice', function() {
		var that = this;
		$(that).parents('tr').fadeOut('400', function() {
			$(this).remove();	
		});
	});

	// datepicker

	$.fn.datetimepicker.defaults = {
		// maskInput: true,           // disables the text input mask
		// pickDate: true,            // disables the date picker
		// pickTime: true,            // disables de time picker
		// pick12HourFormat: false,   // enables the 12-hour format time picker
		// pickSeconds: true,         // disables seconds in the time picker
		// startDate: new Date(),      // set a minimum date
		// endDate: Infinity          // set a maximum date
	};

	var el = $('.datetimepicker').datetimepicker({
    	startDate: moment(),
    	pick12HourFormat: false,
		icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-arrow-up",
			down: "fa fa-arrow-down"
		}
    });

    $(".startdatetimepicker").on("change.dp",function (e) {
		$('.enddatetimepicker').data("DateTimePicker").setStartDate(e.date);
	});

	$(".enddatetimepicker").on("change.dp",function (e) {
		$('.startdatetimepicker').data("DateTimePicker").setEndDate(e.date);
		$('.expireddatetimepicker').data("DateTimePicker").setStartDate(e.date);
	});

	// create form
	$('.formCreateDeal').ajaxForm({
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

	//publish and unpublish deal
	//
	$('.btnUnpublishDeal').on('click', function(e) {
		var id = $(this).data('dealID');
		
	});

	$('.btnPublishDeal').on('click', function(e) {

	});

})(jQuery);