<!DOCTYPE html>
<html lang="en">

	<?php include './shared/head.html'; ?>

	<body id="capabilities_page" class="appear-animate child-page">
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>

		<!-- Page Wrap -->
		<div class="page" id="top">

			<?php include './shared/header.html'; ?>

			<header class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Services &amp; Equipments</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">About Us</a> / <span>Services &amp; Equipments</span>
					</div>
				</div>
			</header>

			<main>
				<div class="container">
					<div class="row">

						<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
							<p class="para-middle">
								Next Spaces Limited has always been dedicated to developing
								and managing the planning and construction of infrastructure
								& building projects with the introduction of innovative modern
								technology. Professionals who have already scored their mark
								of excellence in the field of engineering & construction
								are always dedicated to ensure quality and on time delivery
								according to our commitment. Enthusiastic supervising with a
								vision to look forward to take any challenge makes us unique
								and capable around the country for any construction or ground
								engineering project.
							</p>
						</div>
						<div class="clearfix"></div>

						<div class="col-md-12">
							<?php include './components/services/foundation-works.html'; ?>
							<?php include './components/services/construction.html'; ?>
							<?php include './components/services/ready‐mix-concrete.html'; ?>
							<?php include './components/services/project-management.html'; ?>
							<?php include './components/services/major-equipments.html'; ?>
						</div>

					</div>
				</div>
			</main>

			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<script>
			(function() {
				document.querySelector("#about a").classList.add("active");
				document.querySelectorAll("#about li")[2].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
		<script>
			lightGallery(document.getElementById("equipments"), {
				thumbnail:true,
				download: false,
				caption: true,
				subHtmlSelectorRelative: true
			});
		</script>
	</body>
</html>
