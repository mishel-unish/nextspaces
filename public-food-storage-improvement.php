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
			<section class="small-section pfsi-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Public Food Storage SILO</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="ground-engineering.php">Ground Engineering</a> /
						<span>Public Food Storage SILO</span>
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
											<td>Public Food Storage SILO, Santahar</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Shantahar, Naogaon, Bangladesh</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Contractor</th>
											<td>
												<!-- <img src="dist/images/contractor"
													alt="The Union Construction Limited logo"> -->
												The Union Construction Limited
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Improvement of the capacity of Public Food Storage in
												the People’s Republic of Bangladesh, Shantahar, Naogaon
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>February, 2013 - August, 2013</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="map">
							<!-- <iframe class="map" src="https"
								allowfullscreen="" loading="lazy"></iframe> -->
						</div>

						<div class="tab-pane fade" id="gallery">
							<a href="dist/images/projects/ground-engineering/public-food-storage-improvement/cleaning-with-cleaning-bucket.jpg"
								data-sub-html="#c1">
								<img
									src="dist/images/projects/ground-engineering/public-food-storage-improvement/thumb/cleaning-with-cleaning-bucket-450w.jpg"
									alt="Cleaning with cleaning bucket"/>
								<p class="caption" id="c1"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/public-food-storage-improvement/concrete-casting-with-transit-mixer.jpg"
								data-sub-html="#c2">
								<img
									src="dist/images/projects/ground-engineering/public-food-storage-improvement/thumb/concrete-casting-with-transit-mixer-450w.jpg"
									alt="Concrete casting with transit mixer"/>
								<p class="caption" id="c2"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/public-food-storage-improvement/inspection-before-concrete-casting.jpg"
								data-sub-html="#c3">
								<img
									src="dist/images/projects/ground-engineering/public-food-storage-improvement/thumb/inspection-before-concrete-casting-450w.jpg"
									alt="Inspection before concrete casting"/>
								<p class="caption" id="c3"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/public-food-storage-improvement/placing-koden-test-machine.jpg"
								data-sub-html="#c4">
								<img
									src="dist/images/projects/ground-engineering/public-food-storage-improvement/thumb/placing-koden-test-machine-450w.jpg"
									alt="Placing koden test machine"/>
								<p class="caption" id="c4"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/public-food-storage-improvement/quality-check-at-re-bar-fabrication-yard.jpg"
								data-sub-html="#c5">
								<img
									src="dist/images/projects/ground-engineering/public-food-storage-improvement/thumb/quality-check-at-re-bar-fabrication-yard-450w.jpg"
									alt="Quality check at re-bar fabrication yard"/>
								<p class="caption" id="c5"></p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/public-food-storage-improvement/reinforcement-insertion-with-crawler-crane.jpg"
								data-sub-html="#c6">
								<img
									src="dist/images/projects/ground-engineering/public-food-storage-improvement/thumb/reinforcement-insertion-with-crawler-crane-450w.jpg"
									alt="Reinforcement insertion with crawler crane"/>
								<p class="caption" id="c6"></p>
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
