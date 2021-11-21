<!DOCTYPE html>
<html>

	<!-- Head -->
	<?php include './shared/head.html'; ?>

	<body id="company_overview" class="appear-animate child-page">
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
			<header class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Company Overview</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">About Us</a> / <span>Company Overview</span>
					</div>
				</div>
			</header>

			<main>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<figure>
								<figcaption>Nextspaces office</figcaption>
								<img class="w-100" src="dist/images/misc/office.jpg" alt="">
							</figure>
						</div>
						<div class="clearfix"></div>

						<div class="col-md-8">
							<p class="para-left">
								Next Spaces Limited was formed in the 2004 by consolidating
								the experience and accomplishments of the engineering and
								management of infrastructure projects. We are specialized
								in project management, construction of commercial and
								industrial buildings, tall buildings with basement floors
								and especially deep foundation technology (CFA, secant pile,
								diaphragm wall, cast-in-situ pile, deep cement soil mixing etc.).
							</p>
						</div>
						<div class="clearfix"></div>

						<div class="col-md-8 col-md-offset-4">
							<p class="para-right">
								All the engineers and architects of Next Spaces Limited have
								outstanding experience and unique history in the field of
								modern-day construction. We always respond to the everchanging
								market requirements through continuous research and
								development of new technologies and improvement of
								existing ones. The company delivers timely and if possible,
								early completion of projects too.
							</p>
						</div>
						<div class="clearfix"></div>

						<div class="col-md-8">
							<p class="para-left">
								Next Spaces Limited has the experience of government and
								private high priority construction projects such as Rooppur
								Nuclear Power Plant, Maitree Super Thermal Power Plant,
								Dhaka Metro Rail Project, Dhaka International Airport
								Terminal 03 Extension Project, BSMMU Super Specialized
								Hospital Project, Buildings for Incepta Pharmaceuticals
								Manufacturing Facilities etc.
							</p>
						</div>
						<div class="clearfix"></div>

					</div>
				</div>
			</main>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(function() {
				document.querySelector("#about a").classList.add("active");
				document.querySelectorAll("#about li")[0].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
