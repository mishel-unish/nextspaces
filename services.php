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
			<header class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Services</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">About Us</a> / <span>Services</span>
					</div>
						</div>
					</div>
				</div>
			</header>

			<main>
				<div class="container">
					<div class="nsl-services">
						<a href="ground-engineering.php" class="nsl-service">
							<h2>Ground Engineering</h2>
							<img src="dist/images/services/ground-engineering.jpg" alt="">
							<p>Cas‐in‐Situ Pile, Sheet Pile, Shore Pile, Jet Grouting, CFA Pile etc.</p>
							<span class="visit">
								<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
							</span>
						</a>
						<a href="construction.php" class="nsl-service">
							<h2>Construction</h2>
							<img src="dist/images/services/construction.jpg" alt="">
							<p>Construction of multi‐storied industrial and commercial buildings.</p>
							<span class="visit">
								<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
							</span>
						</a>
						<a href="ready-mix-concrete.php" class="nsl-service">
							<h2>Ready‐Mix Concrete</h2>
							<img src="dist/images/services/ready-mix-concrete.jpg" alt="">
							<p>Production and supply of ready‐mix concrete from mobile and stationary batching plants.</p>
							<span class="visit">
								<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
							</span>
						</a>
						<a href="project-management.php" class="nsl-service">
							<h2>Project Management</h2>
							<img src="dist/images/services/project-management.png" alt="">
							<p>Management of industrial and commercial projects for national and international clients.</p>
							<span class="visit">
								<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
							</span>
						</a>
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
				document.querySelectorAll("#about li")[2].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
