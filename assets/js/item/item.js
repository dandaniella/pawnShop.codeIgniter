$(function () {
	hello = () => alert("hel");

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

	loadProduct = () => {
		// alert($("#search").val());
		//no validate
		$("#product-list").empty();
		$.ajax({
			url: apiURL + "item/sale",
			type: "GET",
			data: {
				size: 6,
				title: $("#search").va,
			},
			dataType: "json",
			ContentType: "application/x-www-form-urlencoded",
			success: function (data) {
				let datas = data.datas;
				for (let x in datas) {
					// alert(datas[x].currentPage);

					$("#product-list").append(
						`<div class="col-xl-3 col-sm-6">
								<div class="card zoom-box">
									<div class="card-body">
										<div class="product-img position-relative">
											
											<img src=" http://` +
							datas[x].it_pic +
							`" alt="" class="img-fluid mx-auto d-block">
										</div>
										<div class="mt-4 text-center">
											<h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Half sleeve T-shirt </a></h5>
					
											<p class="text-muted">
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
											</p>
											<h5 class="my-0"><span class="text-muted me-2">&#8369</span> <b>` +
							datas[x].it_price +
							`</b></h5>
					
										</div>
									</div>
								</div>
							</div>`
					);

					// localStorage.setItem('page', '1');
				}
			},
			error: function ({ responseJSON }) {
				console.log(responseJSON);
				notification("error", " ", responseJSON.message.join());
			},
		});
	};

	loadProduct();
});
