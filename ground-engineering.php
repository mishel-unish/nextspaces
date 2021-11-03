<!DOCTYPE html>
<html>

	<!-- Head -->
	<?php include './shared/head.html'; ?>

	<body id="project_showcase" class="appear-animate child-page">
		<!-- Page Loader -->
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>
		<!-- End Page Loader -->

		<!-- Page Wrap -->
		<div class="page" id="top">

			<!-- Head -->
			<?php include './shared/header.html'; ?>

			<!-- Head Section -->
			<section class="small-section topbar-bg mt-70">
				<div class="relative container align-left">
					<div class="row">
						<div class="col-md-8">
							<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Ground Engineering</h1>
							<div class="mod-breadcrumbs font-alt">
							<a href="index.php">Home</a> / <a href="#">Projects</a> / <span>Ground Engineering</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<ul class="nav nav-tabs tpl-alt-tabs font-alt">
				<li class="active">
					<a href="#completed" data-toggle="tab">
						<img class="cap-icons dark" src="dist/images/icons/completed-dark.png" alt="">
						<img class="cap-icons light" src="dist/images/icons/completed-light.png" alt="">
						Completed
					</a>
				</li>
				<li>
					<a href="#ongoing" data-toggle="tab">
						<img class="cap-icons dark" src="dist/images/icons/ongoing-dark.png" alt="">
						<img class="cap-icons light" src="dist/images/icons/ongoing-light.png" alt="">
						Ongoing
					</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content tpl-tabs-cont">
				<!-- Service Item -->
				<div class="tab-pane fade in active" id="completed">
					<section class="page-section">
						<div class="container">
							<div class="project">
								<img class="img img-responsive"
									src="dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-06.jpg"
									alt="Ground Engineering for Rooppur Nuclear Power Plant">

								<button id="rnpp" class="btn">View Gallery</button>

								<div class="details">
									<h2 class="title">Rooppur Nuclear Power Plant</h2>
									<div class="table-responsive">
										<table class="table table-borderedx">
											<tbody>
												<tr>
													<th>Location</th>
													<td>Rooppur, Ishwardi, Pabna</td>
												</tr>
												<tr>
													<th>Scope of Work</th>
													<td>Priority construction and installation work of preparatory period at the site of Rooppur Nuclear Power Plant and supply equipment including performance of construction and erection works</td>
												</tr>
												<tr>
													<th>Contractor</th>
													<td>Atomstroyexport, Joint Stock Company, Russian Federation</td>
												</tr>
												<tr>
													<th>Duration</th>
													<td>October, 2016 - June, 2019</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<button class="toggle-details"><span>See</span><span class="hidden">Close</span> Details</button>
							</div>

							<div class="project">
								<img class="img img-responsive"
									src="dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-06.jpg"
									alt="Ground Engineering for Maitree Super Thermal Power Plant">

								<button id="mstpp" class="btn">View Gallery</button>

								<div class="details">
									<h2 class="title">Maitree Super Thermal Power Plant</h2>
									<div class="table-responsive">
										<table class="table table-borderedx">
											<tbody>
												<tr>
													<th>Location</th>
													<td>Rampal, Bagherhaat, Khulna, Bangladesh</td>
												</tr>
												<tr>
													<th>Scope of Work</th>
													<td>Package – 9A: Civil Works for (Pile, Pile Cap, Pedestal etc, for) CHP, AAHP and Misc. Work for 2X660 MW Maitree STPP Rampal, Bangladesh</td>
												</tr>
												<tr>
													<th>Contractor</th>
													<td>Bharat Heavy Electricals Limited</td>
												</tr>
												<tr>
													<th>Duration</th>
													<td>February, 2019 - May, 2020</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<button class="toggle-details"><span>See</span><span class="hidden">Close</span> Details</button>
							</div>
						</div>
					</section>
				</div>
				<!-- Service Item -->
				<div class="tab-pane fade" id="ongoing">
					<section class="page-section">
						<div class="container">
							<div class="project">
								<img class="img img-responsive"
									src="dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-07.jpg"
									alt="Ground Engineering for Dhaka Mass Rapid Transit Development">

								<button id="dmrtd" class="btn">View Gallery</button>

								<div class="details">
									<h2 class="title">Dhaka Mass Rapid Transit Project <small>Line 06 (CP03-CP04)</small></h2>
									<div class="table-responsive">
										<table class="table table-borderedx">
											<tbody>
												<tr>
													<th>Location</th>
													<td>Mirpur, Dhaka, Bangladesh</td>
												</tr>
												<tr>
													<th>Scope of Work</th>
													<td>Subcontract for trial pit cutting for boring and permanent piling, bored cast in situ piles, rebar fabrication works, superstructure works (Pile Cap, Pier/Column & Pier head), portal pier substruction works (pier/column and cross beam) and production of precast viaduct segment (Single and Double Track)</td>
												</tr>
												<tr>
													<th>Contractor</th>
													<td>Italian-Thai Development Public Company Limited</td>
												</tr>
												<tr>
													<th>Duration</th>
													<td>October, 2017 - October, 2020</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<button class="toggle-details"><span>See</span><span class="hidden">Close</span> Details</button>
							</div>
						</div>
					</section>
				</div>
				<!-- End Service Item -->
			</div>

			<!-- Call to Action -->
			<?php include './shared/cta.html'; ?>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(function() {
				document.querySelector("#projects a").classList.add("active");
				document.querySelectorAll("#projects li")[0].querySelector("a").classList.add("active");
			}());
		</script>
		<script>
			document.getElementById("rnpp").addEventListener("click", function() {
				lightGallery(document.getElementById("rnpp"), {
					dynamic: true,
					thumbnail:true,
					dynamicEl: [{
							"src": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-01.jpg",
							"thumb": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-01.jpg",
							"subHtml": "<h4>Rooppur Nuclear Power Plant</h4><p>Rooppur Nuclear Power Plant</p>"
					}, {
							"src": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-02.jpg",
							"thumb": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-02.jpg",
							"subHtml": "<h4>Rooppur Nuclear Power Plant</h4><p>Rooppur Nuclear Power Plant</p>"
					}, {
							"src": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-03.jpg",
							"thumb": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-03.jpg",
							"subHtml": "<h4>Rooppur Nuclear Power Plant</h4><p>Rooppur Nuclear Power Plant</p>"
					}, {
							"src": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-04.jpg",
							"thumb": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-04.jpg",
							"subHtml": "<h4>Rooppur Nuclear Power Plant</h4><p>Rooppur Nuclear Power Plant</p>"
					}, {
							"src": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-05.jpg",
							"thumb": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-05.jpg",
							"subHtml": "<h4>Rooppur Nuclear Power Plant</h4><p>Rooppur Nuclear Power Plant</p>"
					}, {
							"src": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-06.jpg",
							"thumb": "dist/images/projects/rooppur-nuclear-power-plant/rooppur-nuclear-power-plant-06.jpg",
							"subHtml": "<h4>Rooppur Nuclear Power Plant</h4><p>Rooppur Nuclear Power Plant</p>"
					}]
				})

			});


			document.getElementById("mstpp").addEventListener("click", function() {
				lightGallery(document.getElementById("mstpp"), {
					dynamic: true,
					thumbnail:true,
					dynamicEl: [{
							"src": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-01.jpg",
							"thumb": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-01.jpg",
							"subHtml": "<h4>Maitree Super Thermal Power Plant</h4><p>Maitree Super Thermal Power Plant</p>"
					}, {
							"src": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-02.jpg",
							"thumb": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-02.jpg",
							"subHtml": "<h4>Maitree Super Thermal Power Plant</h4><p>Maitree Super Thermal Power Plant</p>"
					}, {
							"src": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-03.jpg",
							"thumb": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-03.jpg",
							"subHtml": "<h4>Maitree Super Thermal Power Plant</h4><p>Maitree Super Thermal Power Plant</p>"
					}, {
							"src": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-04.jpg",
							"thumb": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-04.jpg",
							"subHtml": "<h4>Maitree Super Thermal Power Plant</h4><p>Maitree Super Thermal Power Plant</p>"
					}, {
							"src": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-05.jpg",
							"thumb": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-05.jpg",
							"subHtml": "<h4>Maitree Super Thermal Power Plant</h4><p>Maitree Super Thermal Power Plant</p>"
					}, {
							"src": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-06.jpg",
							"thumb": "dist/images/projects/maitree-super-thermal-power-plant/maitree-super-thermal-power-plant-06.jpg",
							"subHtml": "<h4>Maitree Super Thermal Power Plant</h4><p>Maitree Super Thermal Power Plant</p>"
					}]
				})

			});

			document.getElementById("dmrtd").addEventListener("click", function() {
				lightGallery(document.getElementById("dmrtd"), {
					dynamic: true,
					thumbnail:true,
					dynamicEl: [{
							"src": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-01.jpg",
							"thumb": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-01.jpg",
							"subHtml": "<h4>Dhaka Mass Rapid Transit Development</h4><p>Dhaka Mass Rapid Transit Development</p>"
					}, {
							"src": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-02.jpg",
							"thumb": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-02.jpg",
							"subHtml": "<h4>Dhaka Mass Rapid Transit Development</h4><p>Dhaka Mass Rapid Transit Development</p>"
					}, {
							"src": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-03.jpg",
							"thumb": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-03.jpg",
							"subHtml": "<h4>Dhaka Mass Rapid Transit Development</h4><p>Dhaka Mass Rapid Transit Development</p>"
					}, {
							"src": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-04.jpg",
							"thumb": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-04.jpg",
							"subHtml": "<h4>Dhaka Mass Rapid Transit Development</h4><p>Dhaka Mass Rapid Transit Development</p>"
					}, {
							"src": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-05.jpg",
							"thumb": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-05.jpg",
							"subHtml": "<h4>Dhaka Mass Rapid Transit Development</h4><p>Dhaka Mass Rapid Transit Development</p>"
					}, {
							"src": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-06.jpg",
							"thumb": "dist/images/projects/dhaka-mass-rapid-transit-development/dhaka-mass-rapid-transit-development-06.jpg",
							"subHtml": "<h4>Dhaka Mass Rapid Transit Development</h4><p>Dhaka Mass Rapid Transit Development</p>"
					}]
				})

			});
		</script>
		<script>
			document.addEventListener("click", function(e) {
				let elem;
				if (e.target.tagName == "SPAN") {
					elem = e.target.parentNode;
				} else {
					elem = e.target;
				}

				if (elem.className === "toggle-details") {
					elem.parentNode.classList.toggle("active");
					elem.querySelectorAll("span")[0].classList.toggle("hidden");
					elem.querySelectorAll("span")[1].classList.toggle("hidden");
				}
			})
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
