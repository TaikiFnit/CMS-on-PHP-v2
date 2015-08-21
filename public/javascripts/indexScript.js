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

				code += '<th>title</th><th>team</th><th>images</th>';

				code += '</tr>';

				for(var i = 0; i < data.length; i++) {
					code += '<tr>';

					code += '<td>' + data[i].title + '</td><td>' + data[i].team + '</td><td>' + data[i].images + '</td>';

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