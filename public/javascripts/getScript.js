$(function() {

	// view the news data
	getNewsData(function (err, data) {
		
		if(!err && !data) {
			location.href = '/';
			return;
		}

		$('.getViewArea').append(JSON.stringify(data));
	});
});

