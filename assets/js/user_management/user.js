$(function () {
	loadTable = () => {
		$.ajaxSetup({
			headers: {
				Accept: "application/json",
				// Authorization: "Bearer " + token,
				ContentType: "application/x-www-form-urlencoded",
			},
		});

		$("#user").dataTable().fnClearTable();
		$("#user").dataTable().fnDraw();
		$("#user").dataTable().fnDestroy();
		$("#user").dataTable({
			responsive: true,
			serverSide: true,
			order: [[0, "asc"]],
			aLengthMenu: [5, 10, 20, 30, 40, 50, 100],
			aoColumns: [
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
					width: "20%",
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
					data: "user_status",
					name: "user_status",
					searchable: true,
					width: "30%",
					className: "dtr-control",
				},
				// {
				// 	data: "user_email",
				// 	name: "user_email",
				// 	searchable: true,
				// 	width: "30%",
				// 	className: "dtr-control",
				// },
			],
			ajax: {
				url: apiURL + "user_credentials/datatables",
				// Authorization: "Bearer " + token,
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				let view = "";
				let edit = "";
				let aDelete = "";

				view +=
					'<button type= "button" onClick = "return editData(\'' +
					aData["id"] +
					'\',0)" class="btn btn-light" >View<i class ="bx bx-info-circle font-size-16 align-middle></i></button>';
				

					edit +=
					'<button type= "button" onClick = "return editData(\'' +
					aData["id"] +
					'\',0)" class="btn btn-light" >EDIT<i class ="bx bx-info-circle font-size-16 align-middle></i></button>';
					aDelete +=
					'<button type= "button" onClick = "return editData(\'' +
					aData["id"] +
					'\',0)" class="btn btn-light" >Delete<i class ="bx bx-info-circle font-size-16 align-middle></i></button>';
					
					

				$("td:eq(0)", nRow).html(aData["user_name"]);
				$("td:eq(1)", nRow).html(aData["user_email"]);
				$("td:eq(2)", nRow).html(aData["user_status"]);
				$("td:eq(3)", nRow).html(view,edit,aDelete);
				// $("td:eq(1)", nRow).html(buttons);
				// $("span:eq(1)", nRow).html(aData["user_email"]);
			},
			drawCallBack: function (settings) {
				// alert("heel");
			},
		});
	};

	loadTable();
});


