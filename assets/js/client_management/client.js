$(function () {
	// 	formReset;
	// 	//first modal validation in user redential profile
	// 	val = $("#form-id1").validate({
	// 		rules: {
	// 			user_email: {
	// 				required: true,
	// 				email: true,
	// 			},
	// 			user_password: {
	// 				required: true,
	// 			},
	// 			user_type: {
	// 				required: true,
	// 			},
	// 			user_name: {
	// 				required: true,
	// 			},
	// 		},
	// 		messages: {
	// 			user_email: "Please accept our terms",
	// 			user_password: "Please accept our terms",
	// 			user_type: "Please accept our terms",
	// 			user_name: "Please accept our terms",
	// 		},

	// 		errorElement: "div",
	// 		errorPlacement: function (error, element) {
	// 			error.addClass("invalid-feedback");
	// 			element.closest(".input-group").append(error);
	// 		},
	// 		highlight: function (element, errorClass, validClass) {
	// 			$(element).addClass("is-invalid");
	// 		},
	// 		unhighlight: function (element, errorClass, validClass) {
	// 			$(element).removeClass("is-invalid");
	// 		},
	// 	});

	// 	//Second and third modal valdiation in user employee profile and location
	// 	val2 = $("#form-id2").validate({
	// 		rules: {
	// 			first_name: {
	// 				required: true,
	// 			},
	// 			last_name: {
	// 				required: true,
	// 			},
	// 			birth_date: {
	// 				required: true,
	// 			},
	// 			sex: {
	// 				required: true,
	// 			},
	// 			civil_status: {
	// 				required: true,
	// 			},
	// 			contact_no: {
	// 				required: true,
	// 			},
	// 		},
	// 		messages: {
	// 			first_name: "Please accept our terms",
	// 			last_name: "Please accept our terms",
	// 			birth_date: "Please accept our terms",
	// 			sex: "Please accept our terms",
	// 			civil_status: "Please accept our terms",
	// 			contact_no: "Please accept our terms",
	// 		},

	// 		errorElement: "div",
	// 		errorPlacement: function (error, element) {
	// 			error.addClass("invalid-feedback");
	// 			element.closest(".input-group").append(error);
	// 		},
	// 		highlight: function (element, errorClass, validClass) {
	// 			$(element).addClass("is-invalid");
	// 		},
	// 		unhighlight: function (element, errorClass, validClass) {
	// 			$(element).removeClass("is-invalid");
	// 		},
	// 	});

	// 	//Second and third modal valdiation in user employee profile and location
	// 	val3 = $("#form-id3").validate({
	// 		rules: {
	// 			province: {
	// 				required: true,
	// 			},
	// 			city: {
	// 				required: true,
	// 			},
	// 		},
	// 		messages: {
	// 			province: "Please accept our terms",
	// 			city: "Please accept our terms",
	// 		},

	// 		errorElement: "div",
	// 		errorPlacement: function (error, element) {
	// 			error.addClass("invalid-feedback");
	// 			element.closest(".input-group").append(error);
	// 		},
	// 		highlight: function (element, errorClass, validClass) {
	// 			$(element).addClass("is-invalid");
	// 		},
	// 		unhighlight: function (element, errorClass, validClass) {
	// 			$(element).removeClass("is-invalid");
	// 		},
	// 	});

	// 	/*
	// |--------------------------------------------------------------------------
	// | Add user credential to database
	// |--------------------------------------------------------------------------
	// */

	// 	$("#form-id1").on("submit", function (event) {
	// 		const form = document.getElementById("form-id1");
	// 		console.log(form);
	// 		var formData = new FormData(form);
	// 		var object = {};
	// 		formData.forEach((value, key) => (object[key] = value));
	// 		var json = JSON.stringify(object);
	// 		console.log(json);

	// 		event.preventDefault();
	// 		event.stopPropagation();

	// 		if (val.errorList.length === 0) {
	// 			$.ajax({
	// 				url: apiURL + "user_credentials",
	// 				type: "POST",
	// 				data: {
	// 					user_email: $("#user_email").val(),
	// 					user_password: $("#user_password").val(),
	// 					user_name: $("#user_name").val(),
	// 					user_type: $("#user_type").val(),
	// 				},
	// 				dataType: "json",
	// 				// contentType:false,
	// 				// processData: false,
	// 				// cache : false,
	// 				success: function (data) {
	// 					//saving the user_id to the local storage for referenc of the next form
	// 					localStorage.setItem("user_id", data.data.user_id);
	// 					_toastr("success", "", data.message.join());
	// 				},
	// 				error: function ({ responseJSON }) {
	// 					console.log(responseJSON.message);
	// 					_toastr("error", "", responseJSON.message.join());
	// 				},
	// 			});
	// 		}
	// 	});

	// 	/*
	// |--------------------------------------------------------------------------
	// | Add EMPLOYEE INFORMATION to database
	// |--------------------------------------------------------------------------
	// */

	// 	$("#form-id2").on("submit", function (event) {
	// 		event.preventDefault();
	// 		event.stopPropagation();
	// 		console.log(localStorage.getItem("user_id"));
	// 		if (val2.errorList.length === 0) {
	// 			$("#modal2").modal("hide");
	// 		}
	// 	});

	// 	$("#form-id3").on("submit", function (event) {
	// 		event.preventDefault();
	// 		event.stopPropagation();
	// 		console.log(localStorage.getItem("user_id"));
	// 		console.log($("#sex").val());
	// 		if (val3.errorList.length === 0) {
	// 			$.ajax({
	// 				url: apiURL + "employee",
	// 				type: "POST",
	// 				data: {
	// 					//need ui
	// 					//no civil status
	// 					//walang region sa address
	// 					// em_civilStatus : $("#civil_status").val(),
	// 					em_firstName: $("#first_name").val(),
	// 					em_middleName: $("#mid_name").val(),
	// 					em_lastName: $("#last_name").val(),
	// 					// em_position : $('Manager'),
	// 					em_sex: $("#sex").val(),
	// 					em_houseNo: $("#house_no").val(),
	// 					em_street: $("#street").val(),
	// 					em_city: $("#city").val(),
	// 					em_brgy: $("#brgy").val(),
	// 					em_zipcode: $("#zip_code").val(),
	// 					em_birthDate: $("#birth_date").val(),
	// 					em_hireDate: $("#hired_date").val(),
	// 					em_contactNo: $("#contact_no").val(),
	// 					// em_user_credential : localStorage.getItem("user_id"),
	// 				},
	// 				dataType: "json",
	// 				headers: {
	// 					Accept: "application/json",
	// 					Authorization: "Bearer " + localStorage.getItem("TOKEN"),
	// 				},
	// 				// crossDomain:true,
	// 				success: function (data) {
	// 					//saving the user_id to the local storage for referenc of the next form
	// 					localStorage.setItem("user_id", data.data.user_id);
	// 					_toastr("success", "", data.message.join());
	// 					$("#modal1").modal("hide");
	// 					$("#modal2").modal().show();
	// 				},
	// 				error: function ({ responseJSON }) {
	// 					console.log(responseJSON.message);
	// 					_toastr("error", "", responseJSON.message.join());
	// 				},
	// 			});
	// 		}
	// 	});
	// 	/*
	//   |--------------------------------------------------------------------------
	//   |  modal bottons
	//   |--------------------------------------------------------------------------
	//   */
	// 	//back button
	// 	$("#prev_modal").click(function () {
	// 		$("#modal3").modal("hide");
	// 		$("#modal2").modal().show();
	// 	});

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

	loadTable = () => {
		$.ajaxSetup({
			headers: {
				Accept: "application/json",
				Authorization: "Bearer " + token,
				ContentType: "application/x-www-form-urlencoded",
			},
		});

		$("#emp-table").dataTable().fnClearTable();
		$("#emp-table").dataTable().fnDraw();
		$("#emp-table").dataTable().fnDestroy();
		$("#emp-table").dataTable({
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
					data: "em_fullName",
					name: "em_fullName",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
				{
					data: "em_hireDate",
					name: "em_hireDate",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
				{
					data: "em_contactNo",
					name: "em_contactNo",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},

				{
					data: "em_status",
					name: "em_status",
					searchable: true,
					width: "5%",
					className: "dtr-control",
				},
				{
					data: "em_id",
					name: "em_id",
					// searchable: true,
					width: "0%",
					className: "dtr-control",
				},
			],
			ajax: {
				url: apiURL + "client/datatables",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				let buttons = "";
				let swicth = "";

				// buttons +=
				// 	'<button type="button" onClick = "return editData(\`' +
				// 	aData["user_name"] +
				// 	`\`,0)" class="btn btn-light" >EDIT<i class ="bx bx-info-circle font-size-16 align-middle></i></button>`;

				buttons +=
					`
					<button type="button" class="btn btn-primary" onClick="return editData(\'` +
					aData["user_email"] +
					`\',0)"><i class="bx bx-edit-alt"></i></button>	`;
				buttons +=
					`

			
				<button type="button" class="btn btn-primary" onClick="return editData(\'` +
					aData["user_email"] +
					`\',0)"><i class="bx bx-edit-alt"></i></button>	`;

				swicth += `  <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
				<input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked>
				<label class="form-check-label" for="SwitchCheckSizelg"></label>
				`;
				$("td:eq(0)", nRow).html(aData["em_fullName"]);
				$("td:eq(1)", nRow).html("User Role");
				$("td:eq(2)", nRow).html(aData["em_hireDate"]);
				$("td:eq(3)", nRow).html(buttons);
				$("td:eq(4)", nRow).html(swicth);
				// $("span:eq(1)", nRow).html(aData["user_email"]);
			},
			drawCallBack: function (settings) {
				// alert("heel");
			},
		});
	};
});

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
}
