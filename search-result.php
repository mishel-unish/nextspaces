<!DOCTYPE html>
<html>

	<!-- Head -->
	<?php include './shared/head.html'; ?>

	<body id="legal" class="appear-animate child-page">
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
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Search Result</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <span>Search Result</span>
					</div>
				</div>
			</header>

			<main>
				<div class="container">
					<script
						async
						src="https://cse.google.com/cse.js?cx=27f35b7c8e02c3756"
					></script>
					<div class="gcse-searchresults-only"></div>
				</div>
			</main>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(function() {
				document.querySelector("#news a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
