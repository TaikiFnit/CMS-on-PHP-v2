$(function() {

	// view the news data
	getNewsData(function (err, data) {
		if(!err) {
			if(data != null) {
				$('.getViewArea').append(JSON.stringify(data));
			}
			else {
				// the route if data is empty

			}
		}	
		else {
			// the rotue if happened err
		}
	});
});

