$('#deleteForm #send').on('click', function() {

	if(window.confirm('本当に削除しますか?')) {

		$.ajax({
			url: '/news/' + getRestId(),
			method: 'DELETE',
			dataType: 'json',
			success: function(data) {
				if(data.result == true) {
					alert('success');
					location.href = '/';
				}
				else if(data.result == false){
					alert('faild');
				}
			},
			error: function(err) {
				console.log(err);
			}
		});
	}
});
