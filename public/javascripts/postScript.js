$(function() {

	// 記事の送信
	$('#postForm #send').on('click', function() {

		// form　dataを取得
		var form = $('#postForm').get()[0];

		// 画像を送信するためにform objectを作成
		var formData = new FormData(form);

		$.ajax({
			url: '/news/',
			method: 'post',
			dataType: 'json',
			// dataとしてformDataを送信する設定
			data: formData,
			// ajaxがdataを整形しない設定
			processData: false,
			// ContentTypeをfalseに指定
			contentType: false,
			
			success: function(data) {
				console.log(data);
			},
			error: function(err) {
				console.log(err);
			}
		});
	});
});