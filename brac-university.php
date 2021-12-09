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
			<section class="small-section brac-bg mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">BRAC University Campus</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> /
						<a href="ground-engineering.php">Ground Engineering</a> /
						<span>BRAC University Campus</span>
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
											<td>BRAC University New Campus Project</td>
										</tr>
										<tr>
											<th><i class="fa fa-map-marker" aria-hidden="true"></i></th>
											<th>Location</th>
											<td>Kha – 224, Merul Badda, Dhaka - 1212, Bangladesh</td>
										</tr>
										<tr>
											<th><i class="fa fa-user" aria-hidden="true"></i></th>
											<th>Client</th>
											<td>
												BRAC University
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-files-o" aria-hidden="true"></i></th>
											<th>Scope of Work</th>
											<td>
												Construction of foundation Pile, Diaphragm Walls and other
												related works for 13 storied (with 3 basements) institutional
												building for BRAC University.
											</td>
										</tr>
										<tr>
											<th><i class="fa fa-clock-o" aria-hidden="true"></i></th>
											<th>Duration</th>
											<td>March, 2016 - June, 2017</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="tab-pane fade" id="gallery">
							<a href="dist/images/projects/ground-engineering/brac-university/borehole-drilling-with-hydraulic-rig.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/brac-university/thumb/borehole-drilling-with-hydraulic-rig-450w.jpg"
									alt="BRAC University New Campus Project"/>
								<p class="caption">BRAC University New Campus Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/brac-university/crawler-cranes-in-operation.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/brac-university/thumb/crawler-cranes-in-operation-450w.jpg"
									alt="BRAC University New Campus Project"/>
								<p class="caption">BRAC University New Campus Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/brac-university/excavation-with-grab-gk-5.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/brac-university/thumb/excavation-with-grab-gk-5-450w.jpg"
									alt="BRAC University New Campus Project"/>
								<p class="caption">BRAC University New Campus Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/brac-university/excavation-with-grab-gk-5-for-d-wall.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/brac-university/thumb/excavation-with-grab-gk-5-for-d-wall-450w.jpg"
									alt="BRAC University New Campus Project"/>
								<p class="caption">BRAC University New Campus Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/brac-university/re-bar-for-d-wall.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/brac-university/thumb/re-bar-for-d-wall-450w.jpg"
									alt="BRAC University New Campus Project"/>
								<p class="caption">BRAC University New Campus Project</p>
								<div class="view">
									<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
									View Gallery
								</div>
							</a>
							<a href="dist/images/projects/ground-engineering/brac-university/re-bar-lowering-and-welding.jpg"
								data-sub-html=".caption">
								<img
									src="dist/images/projects/ground-engineering/brac-university/thumb/re-bar-lowering-and-welding-450w.jpg"
									alt="BRAC University New Campus Project"/>
								<p class="caption">BRAC University New Campus Project</p>
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
