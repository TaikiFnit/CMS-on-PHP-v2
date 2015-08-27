$(function() {

	// view the news data
	getNewsData(function (err, data) {

		if(!err && !data) {
			location.href = '/';
			return;
		}

		$('.deleteViewArea').append(JSON.stringify(data));
	});
});

$('#deleteForm #send').on('click', function() {

	$.ajax({
		url: '/news/' + getRestId(),
		method: 'DELETE',
		datatype: 'json',
		success: function(data) {
			console.log(data);
		},
		error: function(err) {
			console.log(err);
		}
	});
});
