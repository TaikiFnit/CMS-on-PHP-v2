$(function() {

	$.ajax({
		url: '/img/',
		method: 'get',
		dataType: 'json',
		success: function(data) {

			var code = '';

			for(var i = 0; i < data.length; i++) {
				code += '<div class="col-xs-6 col-sm-3 col-lg-2" id="img' + i + '">';
				code += '<div class="thumbnail">';
				code += '<img src="/news_image/' + data[i] + '">';
				code += '<div class="caption">';
				code += '<p class="caption-title">' + data[i] + '</p>';
					code += '<div class="dropdown">';
					code += '<button type="button" id="button' + i + '" class="btn btn-info btn-sm btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
					code += 'Action <span class="caret"></span>';
					code += '</button>';
					code += '<ul class="dropdown-menu" aria-labelledby="button' + i + '">';
					code += '<li onclick="renameImg(\'' + i + '\', \'' + data[i] + '\')"><a href="#">Rename</a></li>';
					code += '<li role="separator" class="divider"></li>';
					code += '<li onclick="deleteImg(\'' + i + '\', \'' + data[i] + '\')"><a href="#">Delete</a></li>';
					code += '</ul>';
					code += '</div>';
				code += '</div>';
				code += '</div>';
				code += '</div>';
			}

			$('#imgIndexArea').html(code);
		},
		error: function(err) {
			alert(err);
		}
	});
});

function renameImg(id, imgName) {

	var named = window.prompt('変更後のファイル名を入力してください。', imgName);

	if(window.confirm('"' + imgName + '"を"' + named + '"に変更しますか?')) {
		$.ajax({
			url: '/img/' + imgName,
			dataType: 'json',
			method: 'put',
			data: {'newImgName': named},
			success: function(data) {
				if(data.result) {
					alert('ファイル名の変更に成功しました。')
					$('#img' + id + ' .caption-title').text(named);
				}
				else {
					alert('ファイル名の変更に失敗しました。')
				}
			},
			error: function(err) {

			}
		});
	}

}

// delete image request
function deleteImg(id, imgName) {
	if(window.confirm("サーバー上から '" + imgName + "' を削除しますか?")) {
		$.ajax({
			url: '/img/' + imgName,
			dataType: 'json',
			method: 'delete',
			success: function(data) {
				if(data.result) {
					alert('画像の削除に成功しました。')
					$('#img' + id).fadeOut('slow', function() {
						$('#img' + id).remove();
					});
				}
				else {
					alert('画像の削除に失敗しました。')
				}
			},
			error: function(err) {
				console.log(err);
			}
		});
	}
}