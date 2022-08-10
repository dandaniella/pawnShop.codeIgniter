$(function () {
	$("#emp-form").on("submit", function (e) {
		e.preventDefault();

		// remove disabled input
		// $("#form_add input, select, textarea").prop(disabled, false);

		const output = document.getElementById("output");

		// for (const [key, value] of formData) {
		// 	console.log("je");
		// }
		var form_data = new FormData(this);

		if ($("#emp-form").parsley().validate()) {
			// formData.append("user_email", $("#user_email").val());
			// formData.append("user_email", $("#user_email").val());
			if ($("#uuid").val() == " ") {
				// for (const value of formData.values()) {
				// 	console.log(value);
				// }
				// alert("hello");
				$.ajax({
					url: apiURL + "user_credentials/employee",
					type: "POST",
					data: {
						user_email: $("#user_email").val(),
						user_password: $("#user_password").val(),
						user_type: $("#user_type").val(),
						user_name: $("#user_name").val(),
					},
					dataType: "json",
					// contentType: false,
					// processData: false,
					// cache: false,
					success: function (data) {
						// if (data.success) {
						alert("sucess");
						notification("success", "Success!", data.message);
						formReset();
						$("#photo_path_placeholder").attr(
							"src",
							"https://avatars.dicebear.com/api/bottts/smile.svg"
						);
					},
					error: function ({ responseJSON }) {
						// alert("error");
						// $.ajax({
						// 	headers: {
						// 		Accept: "application/json",
						// 		Authorization: "Bearer " + token,
						// 		"Content-Type": "applcation/json",
						// 	},
						// });
					},
				});
			}
		}
		// $.ajax({
		// 	url: apiURL + "user_credentials/employee",
		// 	type: "POST",
		// 	data: form_data,
		// 	// data: {
		// 	// 	user_email: "semaja@gmail.com",
		// 	// 	user_name: "semaja",
		// 	// 	user_type: "Admin",
		// 	// 	user_password: "password",
		// 	// 	user_credential: [
		// 	// 		{
		// 	// 			em_profile_pic : $("#profile_pic").val(),
		// 	// 			em_firstName: "James",
		// 	// 			em_middleName: "James",
		// 	// 			em_lastName: "James",
		// 	// 			em_position: "Pawn Broker",
		// 	// 			em_sex: "Male",
		// 	// 			em_street: "Don Fabian Ext.",
		// 	// 			em_brgy: "Commonwealth",
		// 	// 			em_houseNo: "1664",
		// 	// 			em_city: "Quezon City",
		// 	// 			em_zipcode: "1121",
		// 	// 			em_hireDate: "March 15, 2001",
		// 	// 			em_birthDate: "March 15, 2001",
		// 	// 			em_contactNo: "12311",
		// 	// 		},
		// 	// 	],
		// 	// },
		// 	dataType: "json",
		// 	success: function (data) {
		// 		console.log(data);

		// 		localStorage.setItem("TOKEN", data.token);

		// 		// save session data in php
		// 		let session_data = "";

		// 		session_data += "token=" + data.token;
		// 		session_data += "&user_name=" + data.data.user_name;
		// 		session_data += "&user_email=" + data.data.user_email;
		// 		session_data += "&user_type=" + data.data.user_type;

		// 		window.location.replace(baseURL + "Access/oAuth?" + session_data);
		// 	},
		// 	error: function ({ responseJSON }) {
		// 		console.log(responseJSON);
		// 		return toastr[error]("error", title);
		// 		// notification("error", " ", responseJSON.message.join());
		// 	},
		// });
	});

	/*
  |--------------------------------------------------------------------------
  | profile picture
  |--------------------------------------------------------------------------
  */
	$("#profile_pic").change(function () {
		readURL(this);
	});

	// data table

	editData = (id, type) => {
		//3 for deactivation
		alert("hello");
	};

	infoData = (id, type) => {
		//3 for deactivation
		alert("info");
	};

	loadTable = () => {
		$.ajaxSetup({
			headers: {
				Accept: "application/json",
				Authorization: "Bearer " + token,
				ContentType: "application/x-www-form-urlencoded",
			},
		});

		$("#emp").dataTable().fnClearTable();
		$("#emp").dataTable().fnDraw();
		$("#emp").dataTable().fnDestroy();
		$("#emp").dataTable({
			responsive: true,
			serverSide: true,
			order: [[0, "asc"]],
			aLengthMenu: [5, 10, 20, 30, 40, 50, 100],
			buttons: ["copy", "csv", "excel", "pdf", "print"],
			aoColumns: [
				{ sClass: "text-left" },
				{ sClass: "text-left" },
				{ sClass: "text-left" },
				{ sClass: "text-left" },
				{ sClass: "text-left" },
			],
			columns: [
				{
					data: "user_name",
					name: "user_name",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
				{
					data: "user_email",
					name: "user_email",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
				{
					data: "user_status",
					name: "user_status",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
				{
					data: "user_type",
					name: "user_type",
					searchable: true,
					width: "10%",
					className: "dtr-control",
				},
				{
					data: "user_id",
					name: "user_id",
					// searchable: true,
					width: "10%",
					className: "dtr-control",
				},
			],
			ajax: {
				url: apiURL + "user_credentials/datatables",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				// if(aData["user_type"] == "Client") contin;
				let buttons = "";
				let swicth = "";

				// buttons +=
				// 	'<button type="button" onClick = "return editData(\`' +
				// 	aData["user_name"] +
				// 	`\`,0)" class="btn btn-light" >EDIT<i class ="bx bx-info-circle font-size-16 align-middle></i></button>`;

				buttons +=
					`
					<button type="button" class="btn btn-primary" onClick="return infoData(\'` +
					aData["user_id"] +
					`\',0)"><i class="bx bx-info-circle"></i></button>	`;
				buttons +=
					`

			
				<button type="button" class="btn btn-primary" onClick="return editData(\'` +
					aData["user_id"] +
					`\',0)"><i class="bx bx-edit-alt"></i></button>	`;
				if (aData["user_status"] == "Active") {
					swicth += `  <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
				<input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked>
				<label class="form-check-label" for="SwitchCheckSizelg"></label>
				`;
				} else {
					swicth += `  <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
				<input class="form-check-input" type="checkbox" id="SwitchCheckSizelg">
				<label class="form-check-label" for="SwitchCheckSizelg"></label>
				`;
				}

				$("td:eq(0)", nRow).html(aData["user_name"]);
				$("td:eq(1)", nRow).html(aData["user_email"]);
				$("td:eq(2)", nRow).html(aData["user_type"]);
				$("td:eq(3)", nRow).html(swicth);
				$("td:eq(4)", nRow).html(buttons);

				// $("span:eq(1)", nRow).html(aData["user_email"]);
			},
			drawCallBack: function (settings) {
				// alert("heel");
			},
		});

		$("#datatable-buttons").dataTable().fnClearTable();
		$("#datatable-buttons").dataTable().fnDraw();
		$("#datatable-buttons").dataTable().fnDestroy();
		$("#datatable-buttons").dataTable({
			responsive: true,
			serverSide: true,
			order: [[0, "asc"]],
			aLengthMenu: [2, 10, 20, 30, 40, 50, 100],
			buttons: ["copy", "csv", "excel", "pdf", "print"],
			aoColumns: [
				{ sClass: "text-left" },
				{ sClass: "text-left" },
				{ sClass: "text-left" },
			],
			columns: [
				{
					data: "em_fullName",
					name: "em_fullName",
					searchable: true,
					width: "10%",
					className: "dtr-control",
				},
				{
					data: "em_id",
					name: "em_id",
					searchable: true,
					width: "10%",
					className: "dtr-control",
				},
				{
					data: "em_hireDate",
					name: "em_hireDate",
					searchable: true,
					width: "10%",
					className: "dtr-control",
				},
			],
			ajax: {
				url: apiURL + "employee/datatables",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				let buttons = "";
				let swicth = "";

				buttons +=
					`<button type="button" class="btn btn-primary" onClick="return editData(\'` +
					aData["em_id"] +
					`\',0)"><i class="bx bx-edit-alt"></i></button>`;

				buttons +=
					`<button type="button" class="btn btn-primary" onClick="return editData(\'` +
					aData["em_id"] +
					`\',0)"><i class="bx bx-edit-alt"></i></button>`;

				// swicth += `  <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
				// 	 		<input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked>
				// 	 		<label class="form-check-label" for="SwitchCheckSizelg"></label>
				// 	 		</div>`;

				$("td:eq(0)", nRow).html(aData["em_fullName"]);
				$("td:eq(1)", nRow).html(aData["em_hireDate"]);
				// $("td:eq(2)", nRow).html(buttons);
				// $("td:eq(3)", nRow).html(swicth);
			},
			drawCallBack: function (settings) {
				// alert("heel");
			},
		});
	};

	loadTable();
	// loadItems();
});

loadItems = () => {
	$("#em_sex").empty();
	$.ajax({
		url: apiURL + "item/",
		type: "GET",
		dataType: "json",
		ContentType: "application/x-www-form-urlencoded",
		success: function (data) {
			// alert(data.error);
			if (!data.error) {
				$("#em_sex").empty();

				$.each(data.data, function (i, dataOptions) {
					var options = "";
					options =
						`<option value="` +
						dataOptions.it_id +
						`">` +
						dataOptions.it_name +
						`</option>`;

					$("#em_sex").append(options);
				});
			} else {
				alert("heeloo");
				notification("error", "Error", "error");
			}
		},
		error: function ({ responseJSON }) {
			console.log(responseJSON);
			alert("errro");
			notification("error", "errrrr ", responseJSON.message.join());
		},
	});
};

function readURL(input) {
	var url = input.value;
	var ext = url.substring(url.lastIndexOf(".") + 1).toLowerCase();
	if (
		input.files &&
		input.files[0] &&
		(ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")
	) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$("#photo_path_placeholder").attr("src", e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	} else {
		//$("#img").attr("src", "/assets/no_preview.png");
	}

	//load data table
	// loadTable();
}
