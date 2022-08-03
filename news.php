<!DOCTYPE html>
<html lang="en">

	<head>
		<title>News</title>
		<meta name="description" content="News from Nextspaces Ltd." />
		<meta name="keywords" content="News" />
		<?php include './shared/meta_link.html'; ?>

		<meta property="og:title" content="News" />
		<meta property="og:description" content="News from Nextspaces Ltd." />
		<meta property="og:url" content="https://executionbd.com/nextspaces/v0.9-rc3/news.php" />
		<meta property="og:image" content="https://executionbd.com/nextspaces/v0.9-rc3/dist/images/social-media/rnpp.webp" />
		<meta property="og:image:type" content="image/webp" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<meta property="og:image:alt" content="Rooppur Nuclear Power Plant Project" />

		<meta name="twitter:card" content="summary_large_image" />
	</head>

	<body id="news_page" class="appear-animate child-page">
		<!-- Page Loader -->
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>
		<!-- End Page Loader -->

		<!-- Page Wrap -->
		<div class="page" id="top">

			<!-- Head -->
			<?php include './shared/header.html'; ?>

			<main>
				<div class="fullscreen-container">
					<?php include './components/news/aside.html'; ?>

					<section class="news-container">
						<div class="tab-content">

							<?php include './components/news/news4.html'; ?>
							<?php include './components/news/news3.html'; ?>
							<?php include './components/news/news2.html'; ?>
							<?php include './components/news/news1.html'; ?>

						</div>
					</section>
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

				document.getElementById("controller").addEventListener("click", (e) => {
					document.querySelector("aside").classList.toggle("closed");
				});

				function asideChecker () {
					const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
					if (vw < 768) {
						document.querySelector("aside").classList.add("closed");
					}
					else {
						document.querySelector("aside").classList.remove("closed");
					}
				}
				asideChecker();
				window.addEventListener("resize", (e) => {
					asideChecker();
				});

				document.querySelectorAll(".news-link").forEach(item => {
					item.addEventListener("click", (e) => {
						asideChecker();
					});
				});
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
