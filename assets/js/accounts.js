(function($) {
	Handlebars.registerHelper('link_to', function(id, name) {
		var url = BASE_URL + '/deals/' + id;
		return new Handlebars.SafeString( "<a href='" + url + "'>" + name + "</a>");
	});
	
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		console.log(e.target);
		// if ($(e).data('href'))
		// 
		var href = $(e.target).data('href');

		if (href) {
			$.get(href, function(data) {
				/*optional stuff to do after success */
				// console.log(data);
				if (data.status_code == 200) {
					if (e.target.getAttribute('href') == '#more-information') {
						$('.tabcontainer').html(data.results.content);		
					} else {
						// console.log(data.results);

						var source   = $("#dealBoughtTpl").html();
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
})(jQuery);