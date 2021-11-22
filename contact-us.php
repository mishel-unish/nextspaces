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
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Contact Us</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <span>Contact Us</span>
					</div>
				</div>
			</header>

			<main>
				<section class="page-section pt-0 pb-70" id="contact">
					<div class="container relative">
						<h2 class="section-title font-alt mb-50 mb-sm-40 mt-0">
							Have a question?
						</h2>
						<div class="row mb-60 mb-xs-40">
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
										<div class="contact-item">
											<div class="ci-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="ci-title font-alt">
												Call Us
											</div>
											<div class="ci-text">
												+88 02 1234 5678
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
										<div class="contact-item">
											<div class="ci-icon">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="ci-title font-alt">
												Address
											</div>
											<div class="ci-text">
												Dhaka, Bangladesh
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
										<div class="contact-item">
											<div class="ci-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="ci-title font-alt">
												Email
											</div>
											<div class="ci-text">
												<a href="mailto:support@nextspaces.net">support@nextspaces.net</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cta" class="row mb-0">
							<div class="col-md-8 col-md-offset-2">
								<form class="form contact-form" id="contact_form">
									<div class="clearfix">
										<div class="cf-left-col">
											<!-- Name -->
											<div class="form-group">
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

				<div class="google-map">
					<a href="#" class="map-section">
						<div class="map-toggle">
							<div class="mt-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="mt-text font-alt">
								<div class="mt-open">Open the map <i class="fa fa-angle-down"></i></div>
								<div class="mt-close">Close the map <i class="fa fa-angle-up"></i></div>
							</div>
						</div>
					</a>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.448651875092!2d90.39787391481562!3d23.767032884581212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a705cb1295%3A0xcfab11be4324e7f1!2sNext%20Spaces%20Limited!5e0!3m2!1sen!2sbd!4v1584301350558!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12286.715636833376!2d-75.59837531200412!3d39.65694025682884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3d191cf13%3A0xf4674106f987fe3a!2s245+Quigley+Blvd+Ste+K%2C+New+Castle%2C+DE+19720%2C+USA!5e0!3m2!1sen!2sua!4v1530266633608" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
				</div>
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
