$(function () {
	var state = $('#input-states').val();
	var city_id = $('#city-data').val();

	console.log(city);
	$.ajax({
		url: `/app/cidades/${state}`,
		type: "GET",
		data: {},
		dataType: 'json',
		success: function (res) {
			$.each(res, function (key, value) {
				let foo = (city_id == value.id) ? "selected":"";

				$("#city").append('<option value="' + value.id + '" '+ foo+'>' + value.name + '</option>');
			});
		}
	});
	
	$('#input-states').on('change', function () {
		var idState = this.value;
		$("#city").html('');
		$.ajax({
			url: `/app/cidades/${idState}`,
			type: "GET",
			data: {},
			dataType: 'json',
			success: function (res) {
				$('#city').html('<option value="">Selecione uma cidade	</option>');
				$.each(res, function (key, value) {
					$("#city").append('<option value="' + value.id + '">' + value.name + '</option>');
				});
			}
		});
	});
});
