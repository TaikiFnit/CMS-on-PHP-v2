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

				code += '<th>ID</th><th>タイトル</th><th>作成日</th><th>チーム</th><th>画像の数</th><th>Actions</th>';

				code += '</tr>';

				for(var i = 0; i < data.length; i++) {
					code += '<tr>';

					code += '<td>' + data[i].id + '</td>';
					code += '<td>' + data[i].title + '</td>';
					code += '<td>' + data[i].created + '</td>';
					code += '<td>' + data[i].team + '</td>';
					code += '<td>' + data[i].images + '</td>';
					code += '<td>';
					code += '<div class="dropdown">';
					//code += '<button type="button" class="btn btn-info btn-sm btn-flat">View</button>';
					code += '<button type="button" id="button' + data[i].id + '" class="btn btn-info btn-sm btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
					code += 'Action <span class="caret"></span>';
					code += '</button>';
					code += '<ul class="dropdown-menu" aria-labelledby="button' + data[i].id + '">';
					code += '<li><a href="/get/' + data[i].id + '">View</a></li>';
					code += '<li role="separator" class="divider"></li>';
					code += '<li><a href="/put/' + data[i].id + '">Update</a></li>';
					code += '<li role="separator" class="divider"></li>';
					code += '<li><a href="/delete/' + data[i].id + '">Delete</a></li>';
					code += '</ul>';
					code += '</div>';
					code += '</td>';

					code += '</tr>';
				}

				$('#newsIndexTable').html(code);
			}
		},
		error: function(err) {
			alert('Error! for more informations, see console.');
			console.log(err);
		}
	});	
});