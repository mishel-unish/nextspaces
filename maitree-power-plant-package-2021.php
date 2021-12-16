<!DOCTYPE html>
<html lang="en">

	<!-- Head -->
	<?php include './shared/head.html'; ?>

	<body id="single_project" class="appear-animate child-page">
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
			<header class="small-section mstpp-rc-p2021-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-10">Maitree Power Plant RMC</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="ready-mix-concrete.php">Ready-Mix Concrete</a> /
						<span>Maitree Power Plant RMC</span>
					</div>
				</div>
			</header>

			<nav>
				<div class="container">
					<ul class="nav nav-tabs tpl-alt-tabs font-alt">
						<li class="active">
							<a href="#info" data-toggle="tab">
								<i class="fa fa-info-circle"></i>
								<span class="hidden-480w">General</span> Info
							</a>
						</li>
						<li>
							<a href="#gallery_tab" data-toggle="tab">
								<i class="fa fa-picture-o"></i>
								Gallery
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Tab panes -->
			<main>
				<div class="container">
					<div class="tab-content tpl-tabs-cont">

						<div class="tab-pane fade in active" id="info">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th><i class="fa fa-file-text" aria-hidden="true"></i></th>
											<th>Project Name</th>
											<td>Maitree Super Thermal Power Plant</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Rampal, Bagherhaat, Khulna, Bangladesh</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												Bharat Heavy Electricals Limited
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Providing ready mix concrete for 2X660 MW maitree super
												thermal power project at moidara village, Rampal Upazilla,
												Bagherhaat District, Bangladesh.
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>July 2021 - Ongoing</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery_tab">
							<div id="gallery">
								<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/material-storage-for-batching-plant.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/material-storage-for-batching-plant-450w.jpg"
										alt="Maitree Super Thermal Power Plant"/>
									<p class="caption">Maitree Super Thermal Power Plant</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/organized-batching-plant-area.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/organized-batching-plant-area-450w.jpg"
										alt="Maitree Super Thermal Power Plant"/>
									<p class="caption">Maitree Super Thermal Power Plant</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/organized-plant-area.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/organized-plant-area-450w.jpg"
										alt="Maitree Super Thermal Power Plant"/>
									<p class="caption">Maitree Super Thermal Power Plant</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/silo-for-concrete-storage-and-disbursement-.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/silo-for-concrete-storage-and-disbursement--450w.jpg"
										alt="Maitree Super Thermal Power Plant"/>
									<p class="caption">Maitree Super Thermal Power Plant</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</main>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<?php include './shared/scripts.html'; ?>
		<script>
			lightGallery(document.getElementById("gallery"), {
				thumbnail:true,
				download: false,
				caption: true,
				subHtmlSelectorRelative: true
			});
		</script>
	</body>
</html>
