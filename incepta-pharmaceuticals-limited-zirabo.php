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
			<header class="small-section iplz-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-10">Incepta Pharmaceuticals Limited</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="construction.php">Construction</a> /
						<span>Incepta Pharmaceuticals Limited</span>
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
											<td>Unit 17, Incepta Pharmaceuticals Limited, Zirabo</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Zirabo, Savar, Dhaka</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												Incepta Pharmaceuticals Limited
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Construction of multi-storied pharmaceutical building
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery_tab">
							<div id="gallery">
								<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/basement-work-for-multistoried-pharmaceutical-building.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/basement-work-for-multistoried-pharmaceutical-building-450w.jpg"
										alt="Unit 17, Incepta Pharmaceuticals Limited, Zirabo"/>
									<p class="caption">Unit 17, Incepta Pharmaceuticals Limited, Zirabo</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/rendered-image-of-proposed-building.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/rendered-image-of-proposed-building-450w.jpg"
										alt="Unit 17, Incepta Pharmaceuticals Limited, Zirabo"/>
									<p class="caption">Unit 17, Incepta Pharmaceuticals Limited, Zirabo</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/scaffolding-and-shuttering-works-for-building-construction.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/scaffolding-and-shuttering-works-for-building-construction-450w.jpg"
										alt="Unit 17, Incepta Pharmaceuticals Limited, Zirabo"/>
									<p class="caption">Unit 17, Incepta Pharmaceuticals Limited, Zirabo</p>
									<div class="view">
										<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
										View Gallery
									</div>
								</a>
								<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/shutter-and-re-bar-works-for-roof-casting.jpg"
									data-sub-html=".caption">
									<img
										src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/shutter-and-re-bar-works-for-roof-casting-450w.jpg"
										alt="Unit 17, Incepta Pharmaceuticals Limited, Zirabo"/>
									<p class="caption">Unit 17, Incepta Pharmaceuticals Limited, Zirabo</p>
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
