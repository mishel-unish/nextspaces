<!DOCTYPE html>
<html>

<!-- Head -->
<?php include './shared/head.html'; ?>

<body class="appear-animate child-page">
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
		<section class="small-section topbar-bg mt-70">
			<div class="relative container align-left">
				<div class="row">
					<div class="col-md-8">
						<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Core Value</h1>
						<div class="mod-breadcrumbs font-alt">
							<a href="index.php">Home</a> / <a href="#">About Us</a> / <span>Core Value</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="page-section">
			<div class="container">
				<p class="lead">
					Next Spaces Limited was formed in 2004 by merging and consolidating the solid background and successful
					accomplishment in the Engineering and Management of infrastructure projects and large-scale building
					projects. Next Spaces Limited is specialized in construction management especially in construction of
					commercial and industrial buildings, tall buildings with basement floors and especially deep foundation
					technology. Next Spaces Limited has dedicated to develop and manage the planning and construction of
					infrastructure project with the introduction of modern construction technology. The company is
					specialized in foundation construction, pile foundation, basement construction.
				</p>
				<p>
					Next Spaces Limited introduces hydraulic rotary system in bored pile construction in Bangladesh. The
					company has the scope of doing CFA, secant pile, diaphragm wall in foundation technology. All the
					engineers and architects of Next Spaces Limited have outstanding experiences and unique background in the
					field of construction project.
				</p>
				<p>
					Next Spaces Limited always respond to the ever-changing market requirements through continuous research
					and development to new technologies and improvement of the existing ones. The company delivers timely and
					early completion of projects.
				</p>
				<p>
					Next Spaces Limited has its head office in Dhaka city, Bangladesh, and been engaging in the construction
					of large projects, commercial and industrial buildings, residential buildings, multilevel basement
					project for the last decade. Pioneering in the field of foundation engineering, Next Spaces Limited has
					introduced technological innovations on foundation methods and technologies, such as large diameter bored
					pile, CFA pile, secant pile, diaphragm wall, tie back anchor system, jet grout, and micro piles. Next
					Spaces Limited has been known since inception for targeting and consistently achieving a high degree of
					customer satisfaction, early project completion, high quality of work standard, sound management.
				</p>
			</div>
		</section>

		<!-- Footer -->
		<?php include './shared/footer.html'; ?>
	</div>
	<!-- End Page Wrap -->

	<!-- JS -->
	<script>
	(function() {
		document.querySelector("#about a").classList.add("active");
		document.querySelectorAll("#about li")[1].querySelector("a").classList.add("active");
	}());
	</script>
	<?php include './shared/scripts.html'; ?>
</body>

</html>
