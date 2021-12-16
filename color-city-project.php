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
			<header class="small-section color-city-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-10">Color City Piling Project</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="ground-engineering.php">Ground Engineering</a> /
						<span>Color City Piling Project</span>
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
											<td>Color City Piling Project</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Nayapara, Kashimpur, Gazipur</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												Color City Limited
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Construction of Cast-in-situ RCC pile by Hydraulic Rotary
												Rig. Boring including concreting by RMC (supplied by Color
												City Limited), rebar (supplied by Color City Limited),
												Fabrication with welding (including of all materials
												and tools and equipment’s) and soil removing to a safe
												distance (within 01 Km) by dump truck and Pile integrity
												test for all piles
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>October, 2014 - March, 2015</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery_tab">
							<div id="gallery">
								<a href="dist/images/projects/ground-engineering/color-city-project/borehole-drilling-with-hydraulic-rig.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ground-engineering/color-city-project/thumb/borehole-drilling-with-hydraulic-rig-450w.jpg"
										alt="Color City Piling Project"/>
									<p class="caption">Color City Piling Project</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ground-engineering/color-city-project/casting-via-transit-mixer.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ground-engineering/color-city-project/thumb/casting-via-transit-mixer-450w.jpg"
										alt="Color City Piling Project"/>
									<p class="caption">Color City Piling Project</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ground-engineering/color-city-project/cleaning-borehole-with-bucket.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ground-engineering/color-city-project/thumb/cleaning-borehole-with-bucket-450w.jpg"
										alt="Color City Piling Project"/>
									<p class="caption">Color City Piling Project</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ground-engineering/color-city-project/re-bar-fabrication-yard-at-site.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ground-engineering/color-city-project/thumb/re-bar-fabrication-yard-at-site-450w.jpg"
										alt="Color City Piling Project"/>
									<p class="caption">Color City Piling Project</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ground-engineering/color-city-project/re-bar-lowering.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ground-engineering/color-city-project/thumb/re-bar-lowering-450w.jpg"
										alt="Color City Piling Project"/>
									<p class="caption">Color City Piling Project</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/ground-engineering/color-city-project/re-bar-welding.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/ground-engineering/color-city-project/thumb/re-bar-welding-450w.jpg"
										alt="Color City Piling Project"/>
									<p class="caption">Color City Piling Project</p>
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
