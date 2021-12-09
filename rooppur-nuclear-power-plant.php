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
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Rooppur Nuclear Power Plant</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="ground-engineering.php">Ground Engineering</a> / <span>Rooppur Nuclear Power Plant</span>
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
											<td>Rooppur Nuclear Power Plant Project</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Rooppur, Ishwardi, Pabna</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												Atomstroyexport, Joint Stock Company, Russian Federation
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Priority construction and installation work of preparatory
												period at the site of Rooppur Nuclear Power Plant and supply
												equipment including performance of construction and erection works
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>October, 2016 - June, 2019</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery">
							<a href="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/cement-storage-facility-at-site-for-uninterrupted-supply-with-weighing-scale.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/thumb/cement-storage-facility-at-site-for-uninterrupted-supply-with-weighing-scale-450w.jpg"
									alt="Rooppur Nuclear Power Plant"/>
								<p class="caption">Rooppur Nuclear Power Plant</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/deep-cement-soil-mixing-with-hyhdraulic-rig-machine.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/thumb/deep-cement-soil-mixing-with-hyhdraulic-rig-machine-450w.jpg"
									alt="Rooppur Nuclear Power Plant"/>
								<p class="caption">Rooppur Nuclear Power Plant</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/deployment-of-multiple-hydraulic-rig-machines.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/thumb/deployment-of-multiple-hydraulic-rig-machines-450w.jpg"
									alt="Rooppur Nuclear Power Plant"/>
								<p class="caption">Rooppur Nuclear Power Plant</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/hydraulic-rotary-rig-and-excavators-in-operation.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/thumb/hydraulic-rotary-rig-and-excavators-in-operation-450w.jpg"
									alt="Rooppur Nuclear Power Plant"/>
								<p class="caption">Rooppur Nuclear Power Plant</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/simultaneously-working-hydraulic-rig-machines-at-site.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/rooppur-nuclear-power-plant/thumb/simultaneously-working-hydraulic-rig-machines-at-site-450w.jpg"
									alt="Rooppur Nuclear Power Plant"/>
								<p class="caption">Rooppur Nuclear Power Plant</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
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
