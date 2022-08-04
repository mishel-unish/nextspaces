<!DOCTYPE html>
<html lang="en">

<head>
	<title>Search Result</title>
	<meta name="description" content="Search Result" />
	<meta name="keywords" content="Search Result" />
	<?php include './shared/meta_link.html'; ?>

	<meta property="og:title" content="Search Result" />
	<meta property="og:description" content="Search Result" />
	<meta property="og:url" content="https://executionbd.com/nextspaces/v0.9-rc3/search-result.php" />

	<meta name="twitter:card" content="summary" />
</head>

<body id="search_result" class="appear-animate child-page">
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
				<script async src="https://cse.google.com/cse.js?cx=b004198c317a54dce">
				</script>
				<div class="gcse-searchresults-only"></div>
			</div>
		</main>

		<!-- Footer -->
		<?php include './shared/footer.html'; ?>
	</div>
	<!-- End Page Wrap -->
	<?php include './shared/scripts.html'; ?>
</body>

</html>
