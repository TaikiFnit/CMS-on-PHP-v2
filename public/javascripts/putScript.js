$(function(){

	// get the news data
	getNewsData(function(err, data) {

		if(!err && !data) {
			location.href = '/';
			return;
		}

		// view the data
		$('#id').val(data.id);
		$('#title').val(data.title);
		$('#content').val(data.content);
		$('#author').val(data.author);
		$('#created').val(data.created);
		$('#team').val(data.team);
		$('#images').val(data.images);
		$('#image_src1').val(data.image_src1);
		$('#image_src2').val(data.image_src2);
		$('#image_alt1').val(data.image_alt1);
		$('#image_alt2').val(data.image_alt2);
	});
});

// 記事の送信
$('#putForm #send').on('click', function() {

	// form　dataを取得
	var form = $('#putForm').get()[0];

	// 画像を送信するためにform objectを作成
	var formData = new FormData(form);

	var data = {};

	data['title'] = $('#title').val();
	data['content'] = $('#content').val();
	data['author'] = $('#author').val();
	data['created'] = $('#created').val();
	data['team'] = $('#team').val();
	data['images'] = $('#images').val();
	data['image_src1'] = $('#image_src1').val();
	data['image_src2'] = $('#image_src2').val();
	data['image_alt1'] = $('#image_alt1').val();
	data['image_alt2'] = $('#image_alt2').val();

	$.ajax({
		url: '/news/' + getRestId(),
		method: 'PUT',
		dataType: 'json',
		// dataとしてformDataを送信する設定
		data: data,
		success: function(data) {
			console.log(data);
		},
		error: function(err) {
			console.log(err);
		}
	});
});