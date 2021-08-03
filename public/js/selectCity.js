function selectCity(ob) {
    var item = ob.value;

    $.ajax({
		url: `/app/cidades/${item}`,
		type:'GET',
		data:{},
		dataType:'json',
		success:function(json) {
			var html = '';

			for(var i in json) {
                console.log(json);
				html += '<option value="'+json[i].id+'">'+json[i].name+'</option>';
			}
            $("#city").html(html);
		}
	});
}
