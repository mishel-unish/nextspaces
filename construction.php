<!DOCTYPE html>
<html lang="en">

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
			<section class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Construction</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">Projects</a> / <span>Construction</span>
					</div>
				</div>
			</section>

			<!-- <nav>
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
			</nav> -->

			<!-- Tab panes -->
			<main>
				<div class="container">
					<div class="tab-content tpl-tabs-cont">

						<div class="tab-pane fade in active" id="completed">
							<div class="feature-cards">

								<a href="./bsmmu-hospital.php" class="card">
									<figure class="figure">
										<img
										class="img"
										src="dist/images/projects/construction/bsmmu-super-specialized-hospital/cover.jpg"
										alt="BSMMU Super Specialized Hospital">
										<figcaption class="caption">
											<h3 class="title">BSMMU Hospital</h3>
											<p class="description">
												<i class="fa fa-map-marker"></i> Shahbag, Dhaka, Bangladesh
												<br>
												<img
													class="client-logo"
													src="dist/images/contractor/hyundai-development-company.png"
													alt="Hyundai Development Company logo">
												Hyundai Development Company
											</p>
											<div class="visit">
												<i class="fa fa-hand-pointer-o" aria-hidden="true"></i
												>Visit Page
											</div>
										</figcaption>
									</figure>
								</a>

								<a href="./incepta-pharmaceuticals-limited-zirabo.php" class="card">
									<figure class="figure">
										<img
											class="img"
											src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/cover.jpg"
											alt="Unit 17, Incepta Pharmaceuticals Limited, Zirabo">
										<figcaption class="caption">
											<h3 class="title">Incepta Pharmaceuticals Ltd, Zirabo</h3>
											<p class="description">
												<i class="fa fa-map-marker"></i> Zirabo, Savar, Dhaka
												<br>
												<img
													class="client-logo"
													src="dist/images/contractor/incepta-pharmaceuticals-limited.png"
													alt="Incepta Pharmaceuticals Limited logo">
												Incepta Pharmaceuticals Limited
											</p>
											<div class="visit">
												<i class="fa fa-hand-pointer-o" aria-hidden="true"></i
												>Visit Page
											</div>
										</figcaption>
									</figure>
								</a>

								<a href="./maitree-power-plant-package-15.php" class="card">
									<figure class="figure">
										<img
											class="img"
											src="dist/images/projects/construction/maitree-power-plant-package-15/cover.jpg"
											alt="Maitree Super Thermal Power Plant Package-15">
										<figcaption class="caption">
											<h3 class="title">Maitree Power Plant Package-15</h3>
											<p class="description">
												<i class="fa fa-map-marker"></i>
												Rampal, Bagherhaat, Bangladesh
												<br>
												<img
													class="client-logo"
													src="dist/images/contractor/bharat-heavy-electricals-limited.png"
													alt="Bharat Heavy Electricals Limited logo">
												Bharat Heavy Electricals Limited
											</p>
											<div class="visit">
												<i class="fa fa-hand-pointer-o" aria-hidden="true"></i
												>Visit Page
											</div>
										</figcaption>
									</figure>
								</a>

							</div>
						</div>

						<!-- <div class="tab-pane fade" id="ongoing">
							<div class="feature-cards">


							</div>
						</div> -->

					</div>
				</div>
			</main>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(function() {
				document.querySelector("#projects a").classList.add("active");
				document.querySelectorAll("#projects li")[2].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
