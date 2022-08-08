$(function () {
	$("#personal_info").on("submit", function (e) {
		e.preventDefault();
		trimInputFields();

		if ($("#personal_info").parsley().validate()) {
			var form_data = new FormData(this);

			if ($("#uuid").val() == ""){
			formData.append("user_email", $("#user_email").val());
			formData.append("user_name", $("#user_name").val());
			formData.append("user_type", $("#user_type").val());
			formData.append("user_password", $("#user_password").val());
			formData.append(
				"client_credentials[0][cl_firstName]",
				$("#cl_firstName").val()
			);
			formData.append(
				"client_credentials[0][cl_middleName]",
				$("#em_middleName").val()
			);
			formData.append(
				"client_credentials[0][cl_lastName]",
				$("#cl_lastName").val()
			);
            formData.append(
				"client_credentials[0][cl_street]",
				$("#cl_street").val()
			);
            formData.append(
				"client_credentials[0][cl_brgy]",
				$("#cl_brgy").val()
			);
            formData.append(
				"client_credentials[0][cl_house]",
				$("#cl_house").val()
			);
            formData.append(
				"client_credentials[0][cl_city]",
				$("#cl_city").val()
			);
            formData.append(
				"client_credentials[0][cl_zipcode]",
				$("#cl_zipcode").val()
			);
            formData.append(
				"client_credentials[0][cl_civilStatus]",
				$("#cl_civilStatus").val()
			);
            formData.append(
				"client_credentials[0][cl_birthDate]",
				$("#cl_birthDate").val()
			);
            formData.append(
				"client_credentials[0][cl_contactNo]",
				$("#cl_contactNo").val()
			);
            formData.append(
				"client_credentials[0][cl_idPresentedNo]",
				$("#cl_idPresentedNo").val()
			);
            formData.append(
				"client_credentials[0][cl_idPresented]",
				$("#cl_idPresented").val()
			);
            
			$.ajax({
				url: apiURL +"user",
				type: "POST",
				data: form_data,
				dataType: "json",
				contentType: false,
				processData: false,
				cache: false,
				success: function (data){
					if (data.success) {
						notification("success", "Success!, data. message");
						formReset("hide");
					} else {
						notification("error","Error!, data.message");
					}
				},
				error:function ({ responseJSON}){
					$ajaxSetup({
						headers:{
							Accept:"application/json",
							Authorization: "Bearer"+token,
							"Content-Type":"application/json",
						},
					});
				},
			});
			} else {
				//edit record
			}
		}
	});
});
