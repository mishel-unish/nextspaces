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
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
				document.querySelectorAll("#projects li")[0].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
