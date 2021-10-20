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
							<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog, Workshop &amp; Seminar</h1>
							<div class="mod-breadcrumbs font-alt">
							<a href="index.php">Home</a> / <a href="#">News &amp; Events</a> / <span>Blog, Workshop &amp; Seminar</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(function() {
				document.querySelector("#news a").classList.add("active");
				document.querySelectorAll("#news li")[2].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
