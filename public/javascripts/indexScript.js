$(function() {

	$.ajax({
		url: '/news/*',
		method: 'get',
		dataType: 'json',
		success: function(data) {

			console.log(data);

			if(data != null) {

				var code = '';

				code += '<tr>'

				code += '<th>id</th><th>news_id</th><th>title</th><th>team</th><th>images</th><th>control</th>';

				code += '</tr>';

				for(var i = 0; i < data.length; i++) {
					code += '<tr>';

					code += '<td>' + data[i].id + '</td><td>' + data[i].news_id + '</td><td>' + data[i].title + '</td><td>' + data[i].team + '</td><td>' + data[i].images + '</td><td><a href="/get/' + data[i].id + '">View</a><a href="/put/' + data[i].id + '">Update</a><a href="/delete/' + data[i].id + '">delete</a></td>';

					code += '</tr>';
				}

				$('#newsIndexTable').append(code);
			}
		},
		error: function(err) {
			alert(err);
		}
	});	
});