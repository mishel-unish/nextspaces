<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Error 404</title>
		<meta name="description" content="404 Error page for Nextspaces Ltd. website" />
		<meta name="keywords" content="Error 404" />
		<?php include './shared/meta_link.html'; ?>

		<meta property="og:title" content="Error 404" />
		<meta property="og:description" content="404 Error page for Nextspaces Ltd. website" />
		<meta property="og:url" content="https://executionbd.com/nextspaces/v0.9-rc3/404.php" />

		<meta name="twitter:card" content="summary" />
	</head>

	<body id="legal" class="appear-animate child-page">
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>

		<!-- Page Wrap -->
		<div class="page" id="top">

			<?php include './shared/header.html'; ?>

			<header class="mt-70">
				<h1 class="sr-only">Error 404</h1>
			</header>

			<main>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div>
								<img class="error-404 img-responsive" src="./dist/images/icons/404.png" alt="error 404 icon">
							</div>
							<p class="font-alt error-text">
								Oops! Looks like either you misspelled the url or the page
								you requested has been removed from the server. You can
								visit our <a href="index.php">HOME PAGE</a> instead or learn
								about our <a href="services.php">SERVICES</a>.
							</p>
						</div>
					</div>
				</div>
			</main>

			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
