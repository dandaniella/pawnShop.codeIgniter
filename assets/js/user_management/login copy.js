$(function () {
	$("#login_id").on("submit", function (e) {
		e.preventDefault();

		if ($("#login_id").parsley().validate()) {
			//no validate

			$.ajax({
				url: apiURL + "login",
				type: "POST",
				data: {
					user_email: $("#user_email").val(),
					user_password: $("#user_password").val(),
				},
				dataType: "json",
				success: function (data) {
					console.log(data);

					localStorage.setItem("TOKEN", data.token);

					// save session data in php
					let session_data = "";

					session_data += "token=" + data.token;
					session_data += "&user_name=" + data.data.user_name;
					session_data += "&user_email=" + data.data.user_email;
					session_data += "&user_type=" + data.data.user_type;

					window.location.replace(baseURL + "Access/oAuth?" + session_data);
				},
				error: function ({ responseJSON }) {
					console.log(responseJSON);
					notification("error", " ", responseJSON.message.join());
				},
			});
		}
	});
});
