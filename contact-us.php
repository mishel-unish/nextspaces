<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Nextspaces Contacts</title>
		<meta name="description" content="Contact information for Nextspaces Ltd." />
		<meta name="keywords" content="Address, Phone, Email" />
		<?php include './shared/meta_link.html'; ?>

		<meta property="og:title" content="Nextspaces Contacts" />
		<meta property="og:description" content="Contact information for Nextspaces Ltd." />
		<meta property="og:url" content="https://executionbd.com/nextspaces/v0.9-rc3/contact-us.php" />

		<meta name="twitter:card" content="summary" />
	</head>

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
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Contact Us</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <span>Contact Us</span>
					</div>
				</div>
			</header>

			<main>
				<section class="page-section pt-0 pb-0" id="contact">
					<div class="container relative">
						<h2 id="have_a_q" class="section-title font-alt mb-30 mb-xs-20 mt-0">
							Have a question?
						</h2>
						<div class="row mb-50 mb-xs-40">
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-sm-6 col-lg-4 pt-0 pb-20">
										<div class="contact-item">
											<a href="tel:+8809609222556">
												<div class="ci-icon">
													<i class="fa fa-phone"></i>
												</div>
												<div class="ci-title font-alt">
													Call Us
												</div>
												<div class="ci-text">
													+88 096 092 22556
												</div>
											</a>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4 pt-0 pb-20">
										<div class="contact-item">
											<a href="mailto:mail@nextspaces.net">
												<div class="ci-icon">
													<i class="fa fa-envelope"></i>
												</div>
												<div class="ci-title font-alt">
													Email
												</div>
												<div class="ci-text">
													mail@nextspaces.net
												</div>
											</a>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4 pt-0 pb-20">
										<div class="contact-item">
											<a
											href="http://maps.google.com/?q=Next Spaces Limited"
											target="_blank"
											rel="noopener noreferrer">
												<div class="ci-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<div class="ci-title font-alt">
													Corporate office
												</div>
												<div class="ci-text">
													339/B, Tejgaon I/A
													<br>
													Dhaka-1208, Bangladesh
												</div>
											</a>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4 col-lg-offset-8 pt-0 pb-20">
										<div class="contact-item">
											<a
											href="http://maps.google.com/?q=Next Spaces Limited"
											target="_blank"
											rel="noopener noreferrer">
												<div class="ci-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<div class="ci-title font-alt">
													Registered Address
												</div>
												<div class="ci-text">
													40, Shahid Tajuddin Ahmed Sarani
													<br>
													Tejgaon I/A
													<br>
													Dhaka-1208, Bangladesh
												</div>
											</a>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4 col-lg-offset-8 pt-0 pb-20">
										<div class="contact-item">
											<a
											href="http://maps.google.com/?q=Next Spaces Limited"
											target="_blank"
											rel="noopener noreferrer">
											<!-- 23.9127221829158, 90.07151141533076 -->
											<!-- next to Swiss Biohygienic Equipment -->
												<div class="ci-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<div class="ci-title font-alt">
													Base Station Location
												</div>
												<div class="ci-text">
													Barobaria, Dhamrai, Savar
													<br>
													Dhaka, Bangladesh.
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cta" class="row mb-0">
							<div class="col-md-8 col-md-offset-2">
								<form class="form contact-form pt-0 pb-0" id="contact_form">
									<div class="clearfix">
										<div class="cf-left-col">
											<!-- Name -->
											<div class="form-group">
												<label for="name" class="sr-only">Name</label>
												<input
													type="text"
													name="name"
													id="name"
													class="input-md round form-control"
													placeholder="Name (Required)"
													pattern=".{3,100}"
													required=""
												/>
											</div>
											<!-- Email -->
											<div class="form-group">
												<label for="email" class="sr-only">Email</label>
												<input
													type="email"
													name="email"
													id="email"
													class="input-md round form-control"
													placeholder="EMAIL (REQUIRED)"
													pattern=".{5,100}"
													required=""
												/>
											</div>
											<!-- Phone -->
											<div class="form-group">
												<label for="phone" class="sr-only">Phone</label>
												<input
													type="text"
													name="phone"
													id="phone"
													class="input-md round form-control"
													placeholder="Phone (Optional)"
												/>
											</div>
										</div>
										<div class="cf-right-col">
											<!-- Message -->
											<div class="form-group">
												<label for="message" class="sr-only">Message</label>
												<textarea
													name="message"
													id="message"
													class="input-md round form-control"
													placeholder="Message (Required)"
												></textarea>
											</div>
										</div>
									</div>
									<div class="clearfix">
										<div class="cf-col">
											<!-- Send Button -->
											<div class="align-right pt-10">
												<button
													class="submit_btn btn btn-mod btn-medium btn-round"
													id="submit_btn"
												>
													Submit Message
												</button>
											</div>
										</div>
									</div>
									<div id="result"></div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</main>

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script>
			(function() {
				document.querySelector("#contact_us a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
