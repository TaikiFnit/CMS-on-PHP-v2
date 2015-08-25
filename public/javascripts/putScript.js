$(function(){

	// get the news data
	getNewsData(function(err, data) {

		if(!err && !data) {
			location.href = '/';
			return;
		}

		// view the data
		$('#title').val(data.title);
		$('#content').val(data.content);
		$('#author').val(data.author);
		$('#created').val(data.created);
		$('#team').val(data.team);
		$('#images').val(data.images);
		$('#image_alt1').val(data.image_alt1);
		$('#image_alt2').val(data.image_alt2);
	});
});