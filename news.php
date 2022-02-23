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

			<!-- Head Section -->
			<!-- <header class="mt-70"></header> -->
			<!-- <header class="small-section header-container bg-gray-lighter mt-70">
				<div class="relative container align-left">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">News</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <span>News</span>
					</div>
				</div>
			</header> -->

			<main>
				<div class="fullscreen-container">
					<aside class="news-nav-container">
						<header>
							<h1 class="hs-line-11 font-alt">News</h1>
							<i id="controller" class="fa fa-sign-out" aria-hidden="true"></i>
						</header>
						<ul class="nav nav-tabs">
							<li class="active">
								<a class="news-link" href="#news3" data-toggle="tab">
									<img src="./dist/images/news/270w/rnpp1-270w.jpg" alt="">
									<h2>Rooppur Nuclear Power Plant</h2>
									<p class="author">
										<i class="fa fa-user" aria-hidden="true"></i>
										Admin
									</p>
									<p class="date">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<time datetime="2021-10-18">October 18, 2021</time>
									</p>
									<i class="fa fa-arrow-circle-o-down indicator" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a class="news-link" href="#news2" data-toggle="tab">
									<img src="./dist/images/news/270w/dhaka-metrorail-270w.jpg" alt="">
									<h2>Dhaka Mass Rapid Transit Project</h2>
									<p class="author">
										<i class="fa fa-user" aria-hidden="true"></i>
										Admin
									</p>
									<p class="date">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<time datetime="2021-08-29">August 29, 2021</time>
									</p>
									<i class="fa fa-arrow-circle-o-down indicator" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a class="news-link" href="#news1" data-toggle="tab">
									<img
										src="./dist/images/news/270w/diaphragm-wall-270w.jpg"
										alt="">
									<h2>"Diaphragm Wall" First Time Ever!</h2>
									<p class="author">
										<i class="fa fa-user" aria-hidden="true"></i>
										Admin
									</p>
									<p class="date">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<time datetime="2021-07-23">July 23, 2021</time>
									</p>
									<i class="fa fa-arrow-circle-o-down indicator" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</aside>

					<section class="news-container">
						<div class="tab-content">

							<div id="news3" class="tab-pane fade in active news-tab">
								<article>
									<header>
										<h2 class="font-alt">Rooppur Nuclear Power Plant</h2>
										<img
											class="news-image mb-10"
											src="./dist/images/news/960w/rnpp1-960w.jpg"
											alt="Rooppur Nuclear Power Plant">
										<p class="author">
											<i class="fa fa-user" aria-hidden="true"></i>
											Admin
										</p>
										<p class="date">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											<time datetime="2021-10-18">October 18, 2021</time>
										</p>
									</header>
									<p class="mb-0">
										A milestone for Next Spaces limited is the National Priority
										Project at Rooppur which is located in Ishwardi, Pabna. Next
										Spaces Limited is a sub-contractor under Joint Stock Company,
										Atomstroyexport, who is serving for the erection and foundation
										works such as soil consolidation, piling and other foundation
										related works.
									</p>
								</article>
							</div>

							<div id="news2" class="tab-pane fade news-tab">
								<article>
									<header>
										<h2 class="font-alt">Dhaka Mass Rapid Transit Project</h2>
										<img
											class="news-image mb-10"
											src="./dist/images/news/960w/dhaka-metrorail-960w.jpg"
											alt="Dhaka Mass Rapid Transit Project">
										<p class="author">
											<i class="fa fa-user" aria-hidden="true"></i>
											Admin
										</p>
										<p class="date">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											<time datetime="2021-08-29">August 29, 2021</time>
										</p>
									</header>
									<p class="mb-0">
										Dhaka Mass Rapid Transit Project is one of the current running
										projects of Next Spaces Limited. Next Spaces Limited is working
										as a sub-contractor under Italian-Thai Development Public
										Company Limited for this project.
									</p>
								</article>
							</div>

							<div id="news1" class="tab-pane fade news-tab">
								<article>
									<header>
										<h2 class="font-alt">"Diaphragm Wall" First Time Ever!</h2>
										<img
											class="news-image mb-10"
											src="./dist/images/news/960w/diaphragm-wall-960w.jpg"
											alt='"Diaphragm Wall" First Time Ever!'>
										<p class="author">
											<i class="fa fa-user" aria-hidden="true"></i>
											Admin
										</p>
										<p class="date">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											<time datetime="2021-07-23">July 23, 2021</time>
										</p>
									</header>
									<p>
										By completing the first "Diaphragm Wall" ever in Bangladesh,
										Next Spaces Limited successfully added another milestone to
										their very own achievement pouch!
									</p>
									<p>
										One of the awarded and signed projects called “BRAC University
										Institutional Building”, Next Spaces Limited has built the first
										time ever “Diaphragm Wall” in Bangladesh using brand new and highly
										sophisticated Machines & Equipment’s. The D-Wall was 600mm in width
										and 22.3 meters deep and continued for 513 (approx.) meters in length.
										This requirement goes over the top of any local company, unless of
										course taken necessary measures. Next Spaces Limited used a higher
										graded Hydraulic Rotary Rig - SR60 and GK-5 Grab (which was attached
										with the Hydraulic Rotary Rig SR30 for D-Wall). A skilled operator and
										an experienced supervisor were being appointed from Italy to carry out
										the jobs at the project under Next Spaces Management.  A very comfortable
										and experienced team assisted them alongside the regular required job at site.
									</p>
									<p class="mb-0">
										Next Spaces Limited was determined to finish and deliver the job within
										time with assured quality. Over the years, Next Space Limited has made
										a reputation on standardized working process and proper use of technological
										methods. The type and amount of work needs to be done at the project required
										a synchronized team-work from various teams working spontaneously to
										achieve their own goals. The expatriates joined the Next Spaces Team
										within a month after starting the job and it significantly boosted the
										pace of the work at site. A successful completion of the project added
										the final crown to Next Space Limited’s achievement ladder.
									</p>
								</article>
							</div>

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
