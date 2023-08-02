<!DOCTYPE html>
<html lang="en">

<head>
	<title>Services</title>
	<meta name="description" content="Services of Nextspaces Ltd." />
	<meta name="keywords"
		content="Foundation works, construction and erection works, ready-mix concrete, project management" />
	<?php include './shared/meta_link.html'; ?>

	<meta property="og:title" content="Services" />
	<meta property="og:description" content="Services of Nextspaces Ltd." />
	<meta property="og:url" content="https://nextspaces.net/services.php" />

	<meta name="twitter:card" content="summary" />
</head>

<body id="capabilities_page" class="appear-animate child-page">
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>

	<!-- Page Wrap -->
	<div class="page" id="top">

		<?php include './shared/header.html'; ?>

		<header class="small-section header-container bg-gray-lighter mt-70">
			<div class="relative container align-left">
				<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Services</h1>
				<div class="mod-breadcrumbs font-alt">
					<a href="index.php">Home</a> / <a href="#">About Us</a> / <span>Services</span>
				</div>
			</div>
		</header>

		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php include './components/services/foundation-works.html'; ?>
						<?php include './components/services/construction.html'; ?>
						<?php include './components/services/ready‐mix-concrete.html'; ?>
						<?php include './components/services/project-management.html'; ?>
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
</body>

</html>