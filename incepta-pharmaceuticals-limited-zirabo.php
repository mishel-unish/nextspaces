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
			<section class="small-section iplz-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Incepta Pharmaceuticals Limited</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="construction.php">Construction</a> /
						<span>Incepta Pharmaceuticals Limited</span>
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
											<td>Unit 17, Incepta Pharmaceuticals Limited, Zirabo.</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Zirabo, Savar, Dhaka</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Contractor</th>
											<td>
												<img src="dist/images/contractor/incepta-pharmaceuticals-limited.png"
													alt="Incepta Pharmaceuticals Limited logo">
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

						<div class="tab-pane fade" id="map">
							<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.364099790229!2d90.30066641463749!3d23.912157784509795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c30dae42f579%3A0x46d5bae2131bd464!2sIncepta%20Pharmaceuticals%20Ltd%20%2C%20Zirabo%20Savar!5e0!3m2!1sen!2sbd!4v1636622874360!5m2!1sen!2sbd"
								allowfullscreen="" loading="lazy"></iframe>
						</div>

						<div class="tab-pane fade" id="gallery">
							<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/basement-work-for-multistoried-pharmaceutical-building.jpg"
								data-sub-html="#c1">
								<img
									src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/basement-work-for-multistoried-pharmaceutical-building-450w.jpg"
									alt="Basement work for multistoried pharmaceutical building"/>
								<p class="caption" id="c1"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/rendered-image-of-proposed-building.jpg"
								data-sub-html="#c2">
								<img
									src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/rendered-image-of-proposed-building-450w.jpg"
									alt="Rendered image of proposed building"/>
								<p class="caption" id="c2"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/scaffolding-and-shuttering-works-for-building-construction.jpg"
								data-sub-html="#c3">
								<img
									src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/scaffolding-and-shuttering-works-for-building-construction-450w.jpg"
									alt="Scaffolding and shuttering works for building construction"/>
								<p class="caption" id="c3"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/shutter-and-re-bar-works-for-roof-casting.jpg"
								data-sub-html="#c4">
								<img
									src="dist/images/projects/construction/incepta-pharmaceuticals-limited-zirabo/thumb/shutter-and-re-bar-works-for-roof-casting-450w.jpg"
									alt="Shutter and re-bar works for roof casting"/>
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
