$(function () {
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
		//no validate
		$("#product-list").empty();
		$("#product-list").append(
			`<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="product-img position-relative">
								<div class="avatar-sm product-ribbon">
									<span class="avatar-title rounded-circle  bg-primary">
										- 1000 %
									</span>
								</div>
								<img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
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
								<h5 class="my-0"><span class="text-muted me-2"><del>$500</del></span> <b>$450</b></h5>
		
							</div>
						</div>
					</div>
				</div>`
		);
		$.ajax({
			url: apiURL + "user_credentials",
			type: "GET",
			data: { page: 2, title: "man" },
			// dataType: "json",
			ContentType: "application/x-www-form-urlencoded",
			success: function (data) {
				console.log(data);
				for (var i = 0; i < data.length; i++) {}
			},
			error: function ({ responseJSON }) {
				console.log(responseJSON);
				notification("error", " ", responseJSON.message.join());
			},
		});
	};

	loadProduct();

	// $("#product-list").append(
	// 	`<div class="col-xl-3 col-sm-6">
	// 		<div class="card">
	// 			<div class="card-body">
	// 				<div class="product-img position-relative">
	// 					<div class="avatar-sm product-ribbon">
	// 						<span class="avatar-title rounded-circle  bg-primary">
	// 							- 1000 %
	// 						</span>
	// 					</div>
	// 					<img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
	// 				</div>
	// 				<div class="mt-4 text-center">
	// 					<h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Half sleeve T-shirt </a></h5>

	// 					<p class="text-muted">
	// 						<i class="bx bxs-star text-warning"></i>
	// 						<i class="bx bxs-star text-warning"></i>
	// 						<i class="bx bxs-star text-warning"></i>
	// 						<i class="bx bxs-star text-warning"></i>
	// 						<i class="bx bxs-star text-warning"></i>
	// 					</p>
	// 					<h5 class="my-0"><span class="text-muted me-2"><del>$500</del></span> <b>$450</b></h5>

	// 				</div>
	// 			</div>
	// 		</div>
	// 	</div>`
	// );
});
