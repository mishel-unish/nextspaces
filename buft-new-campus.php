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
			<header class="small-section buft-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-10">BUFT Campus Project</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="foundation-works.php">Foundation Works</a> /
						<span>BUFT Campus Project</span>
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
											<td>BGMEA University of Fashion & Technology New Campus</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Valuria, Turag, Uttara, Dhaka</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												BGMEA University of Fashion & Technology (BUFT)
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Construction of Pile Foundation by Hydraulic Rotary Rig
												of BGMEA University of Fashion & Technology (BUFT) at
												Valuria, Turag, Uttara, Dhaka. Boring including concreting
												by RMC, Rebar Fabrication with welding 9including of all
												materials and tools and equipments and soil removing
												to a safe distance (within 01 km) by dump truck
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-cogs" aria-hidden="true"></i></th>
											<th>Type of Work</th>
											<td></td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>January, 2013 - July, 2014</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery_tab">
							<div id="gallery">
								<a href="dist/images/projects/foundation-works/buft-new-campus/crawler-crane-in-operation.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/foundation-works/buft-new-campus/thumb/crawler-crane-in-operation-450w.jpg"
										alt="BGMEA University of Fashion & Technology New Campus"/>
									<p class="caption">BGMEA University of Fashion & Technology New Campus</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/foundation-works/buft-new-campus/excavation-of-site-area.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/foundation-works/buft-new-campus/thumb/excavation-of-site-area-450w.jpg"
										alt="BGMEA University of Fashion & Technology New Campus"/>
									<p class="caption">BGMEA University of Fashion & Technology New Campus</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/foundation-works/buft-new-campus/hydraulic-rig-in-operation.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/foundation-works/buft-new-campus/thumb/hydraulic-rig-in-operation-450w.jpg"
										alt="BGMEA University of Fashion & Technology New Campus"/>
									<p class="caption">BGMEA University of Fashion & Technology New Campus</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/foundation-works/buft-new-campus/re-bar-lowering-with-crane.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/foundation-works/buft-new-campus/thumb/re-bar-lowering-with-crane-450w.jpg"
										alt="BGMEA University of Fashion & Technology New Campus"/>
									<p class="caption">BGMEA University of Fashion & Technology New Campus</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/foundation-works/buft-new-campus/site-survey-with-total-station.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/foundation-works/buft-new-campus/thumb/site-survey-with-total-station-450w.jpg"
										alt="BGMEA University of Fashion & Technology New Campus"/>
									<p class="caption">BGMEA University of Fashion & Technology New Campus</p>
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
