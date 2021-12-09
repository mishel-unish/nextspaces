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
			<section class="small-section hsia-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Hazrat Shahjalal Intl. Airport Expansion</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="ground-engineering.php">Ground Engineering</a> /
						<span>Hazrat Shahjalal Intl. Airport Expansion</span>
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
											<td>Hazrat Shahjalal International Airport Expansion Project</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Uttara, Dhaka</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												Aviation Dhaka Consortium (ADC)
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Bored pile works at Cargo Terminal (Import Cargo Terminal
												and Export Cargo Terminal) and T3 Center Area including load
												tests and pile head breaking.
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>August, 2020  - August, 2021</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery">
							<a href="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/borehole-cleaning-with-bucket.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/thumb/borehole-cleaning-with-bucket-450w.jpg"
									alt="Hazrat Shahjalal International Airport Expansion Project"/>
								<p class="caption">Hazrat Shahjalal International Airport Expansion Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/drilling-borehole-with-hydraulic-rotary-rig.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/thumb/drilling-borehole-with-hydraulic-rotary-rig-450w.jpg"
									alt="Hazrat Shahjalal International Airport Expansion Project"/>
								<p class="caption">Hazrat Shahjalal International Airport Expansion Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/machines-at-operation.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/thumb/machines-at-operation-450w.jpg"
									alt="Hazrat Shahjalal International Airport Expansion Project"/>
								<p class="caption">Hazrat Shahjalal International Airport Expansion Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/pile-head-breaking.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/thumb/pile-head-breaking-450w.jpg"
									alt="Hazrat Shahjalal International Airport Expansion Project"/>
								<p class="caption">Hazrat Shahjalal International Airport Expansion Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/re-bar-lowering-before-concrete-casting.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/hazrat-shahjalal-international-airport/thumb/re-bar-lowering-before-concrete-casting-450w.jpg"
									alt="Hazrat Shahjalal International Airport Expansion Project"/>
								<p class="caption">Hazrat Shahjalal International Airport Expansion Project</p>
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
