$(function(){

	$('#create').submit(function() {
		var url = '/admin/photo/create?';
		var param = $(this).serialize();console.log(param);
		$.getJSON(url+param).then(function(res){
			if (!res.err) {
				alert('成功!');
			}
			else {
				alert('failed !'+res.msg);
			}
		});
		return false;
	});

})