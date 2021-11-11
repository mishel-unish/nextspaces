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
			<section class="small-section rnpp-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Maitree Power Plant RMC</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="ready-mix-concrete.php">Ready-Mix Concrete</a> /
						<span>Maitree Power Plant RMC</span>
					</div>
				</div>
			</section>

			<nav>
				<div class="container">
					<ul class="nav nav-tabs tpl-alt-tabs font-alt">
						<li class="active">
							<a href="#info" data-toggle="tab">
								<i class="fa fa-info-circle"></i>
								General Info
							</a>
						</li>
						<li>
							<a href="#map" data-toggle="tab">
								<i class="fa fa-map"></i>
								Map
							</a>
						</li>
						<li>
							<a href="#gallery" data-toggle="tab">
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
											<th>Contractor</th>
											<td>
												<img src="dist/images/contractor/bharat-heavy-electricals-limited.png"
													alt="Bharat Heavy Electricals Limited logo">
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

						<div class="tab-pane fade" id="map">
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13032.47298623047!2d89.56082298378553!3d22.59349041098829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0027ded876dfd5%3A0x5e99f547b4dbb2f9!2sBangladesh%20India%20Friendship%20Power%20company%20(Private)%20Limited!5e0!3m2!1sen!2sbd!4v1636609792503!5m2!1sen!2sbd"
								allowfullscreen="" loading="lazy"></iframe>
						</div>

						<div class="tab-pane fade" id="gallery">
							<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/material-storage-for-batching-plant.jpg"
								data-sub-html="#c1">
								<img
									src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/material-storage-for-batching-plant-450w.jpg"
									alt="Material storage for batching plant"/>
								<p class="caption" id="c1"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/organized-batching-plant-area.jpg"
								data-sub-html="#c2">
								<img
									src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/organized-batching-plant-area-450w.jpg"
									alt="Organized batching plant area"/>
								<p class="caption" id="c2"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/organized-plant-area.jpg"
								data-sub-html="#c3">
								<img
									src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/organized-plant-area-450w.jpg"
									alt="Organized plant area"/>
								<p class="caption" id="c3"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/silo-for-concrete-storage-and-disbursement-.jpg"
								data-sub-html="#c4">
								<img
									src="dist/images/projects/ready-mix-concrete/maitree-power-plant-package-2021/thumb/silo-for-concrete-storage-and-disbursement--450w.jpg"
									alt="Silo for concrete storage and disbursement"/>
								<p class="caption" id="c4"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
						</div>

					</div>
				</div>
			</main>

			<!-- Call to Action -->
			<?php include './shared/cta.html'; ?>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(() => {
				let captions = document.querySelectorAll("#gallery .caption");
				captions.forEach(caption => {
					caption.textContent = caption.parentNode.querySelector("img").alt;
				})
			})();
		</script>
		<?php include './shared/scripts.html'; ?>
		<script>
			lightGallery(document.getElementById("gallery"), {
				thumbnail:true,
				download: false,
				caption: true
			});
		</script>
	</body>
</html>
