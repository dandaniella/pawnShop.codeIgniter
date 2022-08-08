$(function () {});

loadItems = () => {
	// $("#product-list").empty();
	$.ajax({
		url: apiURL + "item/sale",
		type: "GET",
		data: {},
		dataType: "json",
		ContentType: "application/x-www-form-urlencoded",
		success: function (data) {
			if (data.success) {
				$("item-id").empty();

				$.each(data.data, function (i, dataOptions) {
					var options = "";

					options =
						"<option value='" +
						dataOptions.id +
						"'>" +
						dataOptions.program_name +
						"</options>";

					$("program_id").append(options);
				});
			} else {
				notification("error", "Error", data.message);
			}
		},
		error: function ({ responseJSON }) {
			console.log(responseJSON);
			notification("error", " ", responseJSON.message.join());
		},
	});
};
