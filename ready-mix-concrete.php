<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Ready-mix Concrete</title>
		<meta name="description" content="Ready‐mix Concrete refers to concrete that is made specifically for a customer's construction project and delivered to them as a single product on site." />
		<meta name="keywords" content="Ready‐mix Concrete" />
		<?php include './shared/meta_link.html'; ?>

		<meta property="og:title" content="Ready-mix Concrete" />
		<meta property="og:description" content="Ready‐mix Concrete refers to concrete that is made specifically for a customer's construction project and delivered to them as a single product on site." />
		<meta property="og:url" content="https://executionbd.com/nextspaces/v0.9-rc3/ready-mix-concrete.php" />
		<meta property="og:image" content="https://executionbd.com/nextspaces/v0.9-rc3/dist/images/social-media/mstpp-2021.webp" />
		<meta property="og:image:type" content="image/webp" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<meta property="og:image:alt" content="Ready‐mix Concrete Silo" />

		<meta name="twitter:card" content="summary_large_image" />
	</head>

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
			<header class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Ready-Mix Concrete</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">Projects</a> / <span>Ready-Mix Concrete</span>
					</div>
				</div>
			</header>

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
					<div class="tab-content tpl-tabs-cont pt-0 pb-0">

						<div class="tab-pane fade in active" id="completed">
							<div class="feature-cards">

								<a href="./ashuganj-450mw-ccpp-south.php" class="card">
									<figure class="figure">
										<img
											class="img"
											src="dist/images/projects/ready-mix-concrete/ashuganj-450mw-ccpp-south/cover.jpg"
											alt="Ashuganj 450MW Power Plant">
										<figcaption class="caption">
											<h2 class="title">Ashuganj 450MW Power Plant</h2>
											<p class="description">
												<i class="fa fa-map-marker"></i> Ashuganj, Brahmanbaria, Bangladesh
												<br>
												<i class="fa fa-user" aria-hidden="true"></i>
												TSK Electronica y Electricidad e Inelectra Internation AB
											</p>
											<div class="visit">
												<i class="fa fa-hand-pointer-o" aria-hidden="true"></i
												>Visit Page
											</div>
										</figcaption>
									</figure>
								</a>

								<a href="./maitree-power-plant-package-bc.php" class="card">
									<figure class="figure">
										<img
											class="img"
											src="dist/images/projects/ready-mix-concrete/maitree-power-plant/cover.jpg"
											alt="Maitree Power Plant Package B, C">
										<figcaption class="caption">
											<h2 class="title">Maitree Power Plant Package B, C</h2>
											<p class="description">
												<i class="fa fa-map-marker"></i> Rampal, Bagherhaat, Bangladesh.
												<br>
												<i class="fa fa-user" aria-hidden="true"></i>
												Bharat Heavy Electricals Limited
											</p>
											<div class="visit">
												<i class="fa fa-hand-pointer-o" aria-hidden="true"></i
												>Visit Page
											</div>
										</figcaption>
									</figure>
								</a>

								<a href="./maitree-power-plant-package-2021.php" class="card">
									<figure class="figure">
										<img
											class="img"
											src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/cover.jpg"
											alt="Maitree Power Plant Package 2021">
										<figcaption class="caption">
											<h2 class="title">Maitree Power Plant Package 2021</h2>
											<p class="description">
												<i class="fa fa-map-marker"></i> Rampal, Bagherhaat, Bangladesh.
												<br>
												<i class="fa fa-user" aria-hidden="true"></i>
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
				document.querySelectorAll("#projects li")[1].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
