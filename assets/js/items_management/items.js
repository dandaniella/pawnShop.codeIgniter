$(function () {
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
				{ sClass: "text-left" },
			],
			columns: [
				
				{
					data: "it_name",
					name: "it_name",
					searchable: true,
					width: "25%",
					className: "dtr-control",
				},
				{
					data: "it_type",
					name: "it_type",
					searchable: true,
					width: "25%",
					className: "dtr-control",
				},
				{
					data: "it_description",
					name: "it_description",
					searchable: true,
					width: "25%",
					className: "dtr-control",
				},
				{
					data: "it_status",
					name: "it_status",
					searchable: true,
					width: "25%",
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
				url: apiURL + "item/datatables",
				// Authorization: "Bearer " + token,
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			fnRowCallback: function (nRow, bData, iDisplayIndex, iDisplayIndexFull) {
				let buttons = "";

				buttons +=
					'<button type= "button" onClick = "return editData(\'' +
					aData["id"] +
					'\',0)" class="btn btn-light" >EDIT<i class ="bx bx-info-circle font-size-16 align-middle></i></button>';

				$("td:eq(0)", nRow).html(bData["it_name"]);
				$("td:eq(1)", nRow).html(bData["it_type"]);
				$("td:eq(2)", nRow).html(bData["it_description"]);
				$("td:eq(3)", nRow).html(bData["it_status"]);
				// $("span:eq(1)", nRow).html(aData["user_email"]);
			},
			drawCallBack: function (settings) {
				// alert("heel");
			},
		});
	};

	loadTable();
});


