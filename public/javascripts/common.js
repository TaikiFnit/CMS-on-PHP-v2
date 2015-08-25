$(function() {



});

function getRestId() {
	
	var pathName = location.pathname;

	pathName = pathName.split('/');

	return pathName[pathName.length - 1];
}

function getNewsData(callback) {

	$.ajax({
		url: '/news/' + getRestId(),
		method: 'GET',
		dataType: 'json',
		success: function(data) {
			callback(null, data);
		},
		error: function(e) {
			callback(e, null);
		}
	});
}