<!DOCTYPE html>
<html lang="en">

<head>
	<title>Career</title>
	<meta name="description" content="Life at Nextspaces Ltd." />
	<meta name="keywords" content="Career, Job" />
	<?php include './shared/meta_link.html'; ?>

	<meta property="og:title" content="Career" />
	<meta property="og:description" content="Life at Nextspaces Ltd." />
	<meta property="og:url" content="https://nextspaces.net/career.php" />
	<!-- <meta property="og:image" content="https://nextspaces.net/dist/images/social-media/IMG_NAME" />
		<meta property="og:image:type" content="image/webp" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<meta property="og:image:alt" content="IMG_ALT_TEXT" /> -->

	<meta name="twitter:card" content="summary_large_image" />
</head>

<body id="career_page" class="appear-animate child-page">
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>

	<!-- Page Wrap -->
	<div class="page" id="top">

		<?php include './shared/header.html'; ?>

		<header class="small-section header-container bg-gray-lighter mt-70">
			<div class="relative container align-left">
				<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Career</h1>
				<div class="mod-breadcrumbs font-alt">
					<a href="index.php">Home</a> / <span>Career</span>
				</div>
			</div>
		</header>

		<main>
			<section class="mb-50">
				<div class="container">
					<h2 class="font-alt mt-0">Who we are</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi at, odit officia sed cum dolorem
						laborum nihil accusantium corporis expedita atque numquam nobis eligendi nisi in doloribus eum
						debitis.
					</p>
					<p>
						<a class="link" href="overview.php">More about us &rightarrow;</a>
					</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div>
								<img src="./dist/images/career/off1.jpg" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="mb-50">
				<div class="container">
					<h2 class="font-alt mt-0">Life at NSL</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam veritatis adipisci iure dolores et
						possimus quis ullam pariatur vel debitis. Velit eos minus impedit commodi amet voluptatum voluptates
						magnam id.
					</p>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nesciunt sed hic asperiores
						doloremque harum numquam quidem reprehenderit quas ut sint labore repellendus, facilis assumenda
						dolore! Voluptas modi obcaecati delectus!
					</p>
					<div class="nsl-life">
						<img src="./dist/images/career/c1.jpg" alt="">
						<img src="./dist/images/career/c2.jpg" alt="">
						<img src="./dist/images/career/c3.jpg" alt="">
						<img src="./dist/images/career/c4.jpg" alt="">
					</div>
				</div>
			</section>

			<section class="mb-50">
				<div class="container">
					<h2 class="font-alt mt-0">What is the NSL team like?</h2>
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur porro laudantium veritatis
						repellat, nisi explicabo quia quam consequatur aut pariatur impedit perspiciatis consequuntur omnis
						sunt odio optio. Repellat, numquam.
					</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div>
								<figure>
									<img src="./dist/images/career/c5.jpg" alt="" class="img-responsive">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="mb-50">
				<div class="container">
					<h2 class="font-alt mt-0">Our values</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolorem, quia tenetur illo ullam
						voluptates ipsam tempore ea, nesciunt aut ipsum aperiam. Consequuntur cupiditate consequatur,
						laudantium maxime assumenda distinctio nostrum!
					</p>
					<ul class="mb-0">
						<li>Lorem ipsum dolor sit</li>
						<li>amet consectetur adipisicing</li>
						<li>elit. Nobis, ipsa nesciunt</li>
					</ul>
				</div>
			</section>

			<section class="mb-50">
				<div class="container">
					<h2 class="font-alt mt-0">Perks &amp; Benefits</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente id repellendus eum assumenda. Porro
						mollitia velit in possimus officia minima placeat tempora, odit perferendis asperiores temporibus.
						Iusto, dolorum debitis! Debitis.</p>
					<ul class="mb-0 perks-ul">
						<li>
							<i class="fa fa-usd" aria-hidden="true"></i>
							Competitive salary
						</li>
						<li>
							<i class="fa fa-medkit" aria-hidden="true"></i>
							Health insurance
						</li>
						<li>
							<i class="fa fa-plane" aria-hidden="true"></i>
							Vacation
						</li>
					</ul>
				</div>
			</section>

			<?php include './components/career/section-job-opening.html'; ?>
		</main>

		<?php include './shared/footer.html'; ?>
	</div>
	<!-- End Page Wrap -->

	<script>
	(function() {
		document.querySelector("#career a").classList.add("active");
	}());
	</script>
	<?php include './shared/scripts.html'; ?>
</body>

</html>