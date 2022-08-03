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

	//Initialize Select2 Elements
	$(".select2").select2({
		theme: "bootstrap4",
		dropdownParent: $("#staticBackdrop"),
	});

	/*
  |--------------------------------------------------------------------------
  | data table for employee #emp-table
  |--------------------------------------------------------------------------
  */
	// $('#emp-table').DataTable({
	//   processing: true,
	//   serverSide: true,
	//   ajax : {
	//         url : apiURL + "user_credentials",
	//         type : "GET",
	//         ContentType : "application/x-www-form-urlencoded",
	//         headers:{
	//           Accept: "application/json",
	//           Authorization: "Bearer " + token,
	//           ContentType: "application/x-www-form-urlencoded",
	//         },
	//       },
	// });

	//   $("#emp-table").DataTable({
	//     "responsive": true,
	//     "lengthChange": false,
	//     "autoWidth": false,
	//     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
	// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

	// $("#emp-table").DataTable({
	//   "processing": true,
	//   "serverSide": true,
	//   "ajax": {
	//             "url": apiURL +"user_credentials",
	//           },
	//   "responsive": true,
	//   "lengthChange": false,
	//   "autoWidth": false,
	//   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
	//   "columns": [
	//     { "data": "user_name" }, { "data": "user_id" }, { "data": "user_email" }
	//   ],
	// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

	// $(document).ready(function () {
	// 	$("#datatable-buttons").DataTable({
	// 		processing: true,
	// 		serverSide: true,
	// 		ajax: "http://localhost:3600/epawn/user",
	// 	});
	// });

	$("#login_id").on("submit", function (e) {
		e.preventDefault();

		if ($("#login_id").parsley().validate()) {
			// no validate
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

	$("#form_addUser_id").on("submit", function (e) {
		e.preventDefault();

		if ($("#form_addUser_id;").parsley().validate()) {
			//no validate
			// $.ajax({
			// 	url: apiURL + "login",
			// 	type: "POST",
			// 	data: {
			// 		user_email: $("#user_email").val(),
			// 		user_password: $("#user_password").val(),
			// 	},
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
			// 		notification("error", " ", responseJSON.message.join());
			// 	},
			// });
			alert("hello");
		}
	});

	// data table

	loadTable = () => {
		$.ajaxSetup({
			headers: {
				Accept: "application/json",
				// Authorization: "Bearer " + token,
				ContentType: "application/x-www-form-urlencoded",
			},
		});

		$("#datatable-buttons").dataTable().fnClearTable();
		$("#datatable-buttons").dataTable().fnDraw();
		$("#datatable-buttons").dataTable().fnDestroy();
		$("#datatable-buttons").dataTable({
			responsive: true,
			serverSide: true,
			order: [[0, "asc"]],
			aLengthMenu: [5, 10, 20, 30, 40, 50, 100],
			aoColumns: [
				{ sClass: "text-left" },
				{ sClass: "text-left" },
				{ sClass: "text-left" },
			],
			columns: [
				{
					data: "user_email",
					name: "user_email",
					searchable: true,
					width: "20%",
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
					data: "user_email",
					name: "user_email",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
			],
			ajax: {
				// ajax: "http://localhost:3600/epawn/user/datatable",
				url: apiURL + "user_credentials/datatable",
				// url: "http://localhost:3600/epawn/user/datatable",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				let buttons = "";
				buttons +=
					'<button type= "button" onClick = "return editData(\'' +
					aData["id"] +
					'\',0)" class="btn btn-light" >EDIT<i class ="bx bx-info-circle font-size-16 align-middle></i></button>';

				$("td:eq(0)", nRow).html(aData["user_status"]);
				$("td:eq(1)", nRow).html(aData["user_email"]);
				$("td:eq(1)", nRow).html(buttons);
			},
			drawCallBack: function (settings) {
				// alert("heel");
			},
		});
	};

	loadTable();

	// 	//   $(document).ready(function() {
	// 	//     $('#emp-table').dataTable( {
	// 	//         "bProcessing": true,
	// 	//         "sAjaxSource": '../ajax/sources/arrays.txt'
	// 	//     } );
	// 	// } );
	// 	/*
	//   |--------------------------------------------------------------------------
	//   | modal prev button
	//   |--------------------------------------------------------------------------
	//   */

	// 	/*
	//   |--------------------------------------------------------------------------
	//   | calendar input
	//   |--------------------------------------------------------------------------
	//   */
	// 	$("#date_1").datetimepicker({
	// 		format: "L",
	// 	});

	// 	$("#date_2").datetimepicker({
	// 		format: "L",
	// 	});

	// 	$("#date_3").datetimepicker({
	// 		format: "L",
	// 	});

	// 	$("#example2").DataTable({
	// 		paging: true,
	// 		lengthChange: false,
	// 		searching: false,
	// 		ordering: true,
	// 		info: true,
	// 		autoWidth: false,
	// 		responsive: true,
	// 	});

	// 	// modal dropdown
	// 	$(".js-example-basic-single").select2({
	// 		dropdownParent: $("#modal3"),
	// 	});

	// 	//Initialize Select2 Elements
	// 	$(".select2").select2({
	// 		theme: "bootstrap4",
	// 		dropdownParent: $("#modal3"),
	// 	});

	// 	//Datemask dd/mm/yyyy
	// 	$("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
	// 	//Datemask2 mm/dd/yyyy
	// 	$("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
	// 	//Money Euro
	// 	$("[data-mask]").inputmask();

	// 	//Date picker
	// 	$("#reservationdate").datetimepicker({
	// 		format: "L",
	// 	});

	// 	//Date and time picker
	// 	$("#reservationdatetime").datetimepicker({ icons: { time: "far fa-clock" } });

	// 	//Date range picker
	// 	$("#reservation").daterangepicker();
	// 	//Date range picker with time picker
	// 	$("#reservationtime").daterangepicker({
	// 		timePicker: true,
	// 		timePickerIncrement: 30,
	// 		locale: {
	// 			format: "MM/DD/YYYY hh:mm A",
	// 		},
	// 	});
	// 	//Date range as a button
	// 	$("#daterange-btn").daterangepicker(
	// 		{
	// 			ranges: {
	// 				Today: [moment(), moment()],
	// 				Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
	// 				"Last 7 Days": [moment().subtract(6, "days"), moment()],
	// 				"Last 30 Days": [moment().subtract(29, "days"), moment()],
	// 				"This Month": [moment().startOf("month"), moment().endOf("month")],
	// 				"Last Month": [
	// 					moment().subtract(1, "month").startOf("month"),
	// 					moment().subtract(1, "month").endOf("month"),
	// 				],
	// 			},
	// 			startDate: moment().subtract(29, "days"),
	// 			endDate: moment(),
	// 		},
	// 		function (start, end) {
	// 			$("#reportrange span").html(
	// 				start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
	// 			);
	// 		}
	// 	);

	// 	//Timepicker
	// 	$("#timepicker").datetimepicker({
	// 		format: "LT",
	// 	});

	// 	$("input[data-bootstrap-switch]").each(function () {
	// 		$(this).bootstrapSwitch("state", $(this).prop("checked"));
	// 	});
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

	//load data table
	// loadTable();
}
