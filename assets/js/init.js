function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

(function($){
	if (typeof pagination !== 'undefined') {
		pagination.options.pageUrl = function(type, page, current) {
        	if (page == current) {
            	return '#';
        	} else {
				var query = window.location.search.substring(1);
				query = $.deparam(query);
				
				query.page = page;
				// console.log(query);
				// console.log($.param(query));
				return window.location.href.split('?')[0] + '?' + $.param(query);
        	}
        };
		$('.pagination').bootstrapPaginator(pagination.options);
	}

	$('.datetimeformat').each(function(){
		// console.log(this.innerHTML);
		this.innerHTML = moment.utc(this.innerHTML).format('LLLL');
	});
})(jQuery);

var BASE_URL = BASE_URL || 'http://localhost/wusic_admin';