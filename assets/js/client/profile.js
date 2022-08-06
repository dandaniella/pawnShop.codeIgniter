$(function () {
	$("#personal_info").on("submit", function (e) {
		e.preventDefault();

		if ($("#personal_info").parsley().validate()) {
		}
	});
});
