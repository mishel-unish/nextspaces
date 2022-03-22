<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project Management</title>
		<meta name="description" content="From conception to completion, construction project management implies directing and organizing each stage of the project life cycle. It's a comprehensive approach with the goal of completing projects on time and on budget. Cost control, scheduling, procurement, and risk assessment are all important aspects of construction project management. From architects to owners to contractors, project managers interact with all team members involved in a construction project." />
		<meta name="keywords" content="Project Management" />
		<?php include './shared/meta_link.html'; ?>

		<meta property="og:title" content="Project Management" />
		<meta property="og:description" content="From conception to completion, construction project management implies directing and organizing each stage of the project life cycle. It's a comprehensive approach with the goal of completing projects on time and on budget. Cost control, scheduling, procurement, and risk assessment are all important aspects of construction project management. From architects to owners to contractors, project managers interact with all team members involved in a construction project." />
		<meta property="og:url" content="https://executionbd.com/nextspaces/v0.9-rc3/project-management.php" />
		<meta property="og:image" content="https://executionbd.com/nextspaces/v0.9-rc3/dist/images/social-media/project-management.webp" />
		<meta property="og:image:type" content="image/webp" />
		<meta property="og:image:width" content="1140" />
		<meta property="og:image:height" content="600" />
		<meta property="og:image:alt" content="Project Management" />

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
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Project Management</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">Projects</a> / <span>Project Management</span>
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
							<div class="projects">
								<!-- <a href="plant.php" class="project">
									<img class="img img-responsive"
										src="dist/images/projects"
										alt="Cement">
									<h2>RooppurNuclearPowerPlant</h2>
									<p class="desc">
										<i class="fa fa-map-marker"></i> RooppurIshwardiBangladesh
										<br>
										<img src="dist/images/contractor" alt="Atomstroyexport logo">
										Atomstroyexport
									</p>
									<div class="visit">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										Visit Page
									</div>
									<div class="layer"></div>
								</a> -->
							</div>
						</div>

						<div class="tab-pane fade" id="ongoing">
						</div>

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
				document.querySelectorAll("#projects li")[3].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
