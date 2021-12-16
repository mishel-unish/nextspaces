<!DOCTYPE html>
<html lang="en">

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
			<header class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Legal &amp; Compliance</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <span>Legal &amp; Compliance</span>
					</div>
				</div>
			</header>

			<main>
				<div class="container">
					<p class="font-alt">
						<a href="./terms-and-condition.php">Terms &amp; Conditions</a>
					</p>
					<p class="font-alt">
						<a href="privacy-policy.php">Privacy Policy</a>
					</p>
					<p class="font-alt">
						<a href="accessibility-statement.php">Accessibility Statement</a>
					</p>
					<p class="font-alt">
						<a href="disclaimer.php">Disclaimer</a>
					</p>
					<p class="font-alt">
						<a href="acknowledgement.php">Acknowledgement</a>
					</p>
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
