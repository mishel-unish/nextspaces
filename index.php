<!DOCTYPE html>
<html>

	<!-- Head -->
	<?php include './shared/head.html'; ?>

	<body class="appear-animate">
		<!-- Page Loader -->
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>
		<!-- End Page Loader -->

		<!-- Page Wrap -->
		<div class="page" id="top">

			<!-- Head -->
			<?php include './shared/header.html'; ?>

			<!-- Home Section -->
			<section
				class="home-section bg-dark-alfa-30 parallax-2"
				data-background="images/full-width-images/section-bg-1.jpg"
				id="home"
			>
				<div class="js-height-full container">
					<!-- Hero Content -->
					<div class="home-content">
						<div class="home-text">
							<h1
								class="hs-line-1 font-alt mb-80 mb-xs-30 mt-50 mt-sm-0"
							>
								Next Spaces
							</h1>

							<div class="hs-line-6">
								[Company Slogan Goes Here]
							</div>
						</div>
					</div>
					<!-- End Hero Content -->

					<!-- Scroll Down -->
					<div class="local-scroll">
						<a href="#about" class="scroll-down"
							><i class="fa fa-angle-down scroll-down-icon"></i
						></a>
					</div>
					<!-- End Scroll Down -->
				</div>
			</section>
			<!-- End Home Section -->

			<!-- About Section -->
			<section class="page-section pb-0" id="about">
				<div class="container relative">
					<h2 class="section-title font-alt align-left mb-70 mb-sm-40">
						About Next Spaces
					</h2>
					<div class="section-text mb-50 mb-sm-20">
						<div class="row">
							<div class="col-md-4">
								<blockquote>
									<p>
										Create with the heart; build with the mind.
									</p>
									<footer>
										Criss Jami
									</footer>
								</blockquote>
							</div>
							<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
							</div>
							<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
								Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End About Section -->
			<!-- Call Action Section -->
			<section class="small-section bg-dark">
				<div class="container relative">
					<div class="align-center">
						<h3 class="banner-heading font-alt">Wants to know more about us?</h3>
						<div class="local-scroll">
							<a href="corporate-overview.php" class="btn btn-mod btn-w btn-medium btn-round">Corporate Overview</a>
						</div>
					</div>
				</div>
			</section>

			<!-- Projects Section -->
			<section class="page-section pb-0" id="portfolio">
				<div class="relative">
					<h2 class="section-title font-alt mb-70 mb-sm-40">
						Projects
					</h2>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="section-text align-center mb-70 mb-xs-40">
									In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet,
									consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.
									Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
									consectetur fermentum nibh volutpat, accumsan purus.
								</div>
							</div>
						</div>
					</div>
					<!-- Works Filter -->
					<div class="works-filter font-alt align-center">
						<a href="#" class="filter active" data-filter="*">All works</a>
						<a href="#ongoing" class="filter" data-filter=".ongoing">Ongoing</a>
						<a href="#upcoming" class="filter" data-filter=".upcoming">Upcoming</a>
						<a href="#completed" class="filter" data-filter=".completed">Completed</a>
					</div>
					<!-- Works Grid -->
					<ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
						<!-- Work Item (External Page) -->
						<li class="work-item mix ongoing">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/1.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (External Page) -->
						<li class="work-item mix completed">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/2.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (External Page) -->
						<li class="work-item mix upcoming">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/3.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (Lightbox) -->
						<li class="work-item mix completed">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/4.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (Lightbox) -->
						<li class="work-item mix ongoing">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/5.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (Lightbox) -->
						<li class="work-item mix completed">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/6.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (External Page) -->
						<li class="work-item mix upcoming">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/7.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (External Page) -->
						<li class="work-item mix completed">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/8.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
						<!-- Work Item (Lightbox) -->
						<li class="work-item mix ongoing">
							<a href="single-project.php" class="work-ext-link">
								<div class="work-img">
									<img class="work-img" src="images/projects/9.jpg" alt="Work" />
								</div>
								<div class="work-intro">
									<h3 class="work-title">PPHL Residence</h3>
									<div class="work-descr">
										Uttara
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
			<!-- End Portfolio Section -->

			<!-- Capabilities Section -->
			<section class="page-section" id="services">
				<div class="container relative">
					<h2 class="section-title font-alt mb-70 mb-sm-40">
						Services
					</h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0">
						<li class="active">
							<a href="#service-branding" data-toggle="tab">
								<div class="alt-tabs-icon">
									<span class="icon-strategy"></span>
								</div>
								Branding
							</a>
						</li>
						<li>
							<a href="#service-web-design" data-toggle="tab">
								<div class="alt-tabs-icon">
									<span class="icon-desktop"></span>
								</div>
								Web Design
							</a>
						</li>
						<li>
							<a href="#service-graphic" data-toggle="tab">
								<div class="alt-tabs-icon">
									<span class="icon-tools"></span>
								</div>
								Graphic Design
							</a>
						</li>
					</ul>
					<!-- End Nav tabs -->
					<!-- Tab panes -->
					<div class="tab-content tpl-tabs-cont">
						<!-- Service Item -->
						<div class="tab-pane fade in active" id="service-branding">
							<div class="section-text">
								<div class="row">
									<div class="col-md-4 mb-md-40 mb-xs-30">
											<blockquote class="mb-0">
												<p>
													A&nbsp;brand for a&nbsp;company is&nbsp;like a&nbsp;reputation
													for a&nbsp;person. You earn reputation by&nbsp;trying to&nbsp;do&nbsp;hard
													things well.
												</p>
												<footer>
													Jeff Bezos
												</footer>
											</blockquote>
									</div>
									<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
											Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum
											volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit.
											In maximus ligula metus pellentesque mattis.
									</div>
									<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
											Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus.
											Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus.
											Praesent sed nisi eleifend, fermentum orci amet, iaculis libero.
									</div>
								</div>
							</div>
						</div>
						<!-- End Service Item -->
						<!-- Service Item -->
						<div class="tab-pane fade" id="service-web-design">
							<div class="section-text">
								<div class="row">
									<div class="col-md-4 mb-md-40 mb-xs-30">
											<blockquote class="mb-0">
												<p>
													It&nbsp;doesn&rsquo;t matter how many times&nbsp;I have to&nbsp;click, as&nbsp;long
													as&nbsp;each click is&nbsp;a&nbsp;mindless, unambiguous choice.
												</p>
												<footer>
													Steve Krug
												</footer>
											</blockquote>
									</div>
									<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
											Cras mi tortor, laoreet id ornare et, accumsan non magna. Maecenas vulputate accumsan velit.
											Curabitur a nulla ex. Nam a tincidunt ante. Vitae gravida turpis. Vestibulum varius
											nulla non nulla scelerisque tristique.
									</div>
									<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
											Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum.
											Nam varius at ipsum id dignissim. Nam a tincidunt ante lorem. Pellentesque suscipit ante
											at ullamcorper pulvinar neque porttitor.
									</div>
								</div>
							</div>
						</div>
						<!-- End Service Item -->
						<!-- Service Item -->
						<div class="tab-pane fade" id="service-graphic">
							<div class="section-text">
								<div class="row">
									<div class="col-md-4 mb-md-40 mb-xs-30">
											<blockquote class="mb-0">
												<p>
													Never fall in&nbsp;love with an&nbsp;idea. They&rsquo;re whores. If&nbsp;the one you&rsquo;re with isn&rsquo;t doing the job, there&rsquo;s always another.
												</p>
												<footer>
													Chip Kidd
												</footer>
											</blockquote>
									</div>
									<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
											Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque
											mattis. Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Praesent sed nisi eleifend,
											fermentum orci amet, iaculis libero.
									</div>
									<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">

											Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Etiam sit amet
											fringilla lacus. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id&nbsp;dolor
											consectetur fermentum volutpat nibh, accumsan purus.
									</div>
								</div>
							</div>
						</div>
						<!-- End Service Item -->
					</div>
					<!-- End Tab panes -->
				</div>
			</section>
			<!-- End Services Section -->
			<!-- Call Action Section -->
			<section
				class="page-section pt-0 pb-0 banner-section bg-dark"
				data-background="images/full-width-images/section-bg-2.jpg">
				<div class="container relative">
					<div class="row">
						<div class="col-sm-6">
							<div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
								<div class="banner-content">
									<h3 class="banner-heading font-alt">Looking for exclusive digital services?</h3>
									<div class="banner-decription">
										Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor.
										Integer non dapibus diam, ac eleifend lectus.
									</div>
									<div class="local-scroll">
										<a href="#contact" class="btn btn-mod btn-w btn-medium btn-round">Lets talk</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 banner-image wow fadeInUp">
							<img src="images/promo-1.png" alt="" />
						</div>
					</div>
				</div>
			</section>
			<!-- End Call Action Section -->

			<!-- Features Section -->
			<section class="page-section">
				<div class="container relative">
					<h2 class="section-title font-alt mb-70 mb-sm-40">
						Why Choose Us?
					</h2>
					<!-- Features Grid -->
					<div class="row multi-columns-row alt-features-grid">
						<!-- Features Item -->
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="alt-features-item align-center">
								<div class="alt-features-icon">
									<span class="icon-flag"></span>
								</div>
								<h3 class="alt-features-title font-alt">We’re Creative</h3>
								<div class="alt-features-descr align-left">
									Lorem ipsum dolor sit amet, c-r adipiscing elit.
									In maximus ligula semper metus pellentesque mattis.
									Maecenas  volutpat, diam enim.
								</div>
							</div>
						</div>
						<!-- End Features Item -->
						<!-- Features Item -->
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="alt-features-item align-center">
								<div class="alt-features-icon">
									<span class="icon-clock"></span>
								</div>
								<h3 class="alt-features-title font-alt">We’re Punctual</h3>
								<div class="alt-features-descr align-left">
									Proin fringilla augue at maximus vestibulum.
									Nam pulvinar vitae neque et porttitor. Praesent sed
									nisi eleifend, lorem fermentum orci sit amet, iaculis libero.
								</div>
							</div>
						</div>
						<!-- End Features Item -->
						<!-- Features Item -->
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="alt-features-item align-center">
								<div class="alt-features-icon">
									<span class="icon-hotairballoon"></span>
								</div>
								<h3 class="alt-features-title font-alt">We have magic</h3>
								<div class="alt-features-descr align-left">
									Curabitur iaculis accumsan augue, nec finibus mauris pretium eu.
									Duis placerat ex gravida nibh tristique porta. Nulla facilisi.
									Suspendisse ultricies eros blandit.
								</div>
							</div>
						</div>
						<!-- End Features Item -->
						<!-- Features Item -->
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="alt-features-item align-center">
								<div class="alt-features-icon">
									<span class="icon-heart"></span>
								</div>
								<h3 class="alt-features-title font-alt">We love minimalism</h3>
								<div class="alt-features-descr align-left">
									Cras luctus interdum sodales. Quisque quis odio dui. Sedes sit
									amet neque malesuada, lobortis  commodo magna ntesque pharetra
									metus vivera sagittis.
								</div>
							</div>
						</div>
						<!-- End Features Item -->
						<!-- Features Item -->
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="alt-features-item align-center">
								<div class="alt-features-icon">
									<span class="icon-linegraph"></span>
								</div>
								<h3 class="alt-features-title font-alt">We’re responsible</h3>
								<div class="alt-features-descr align-left">
									Fusce aliquet quam eget neque ultrices elementum. Nulla posuere
									felis id arcu blandit sagittis. Eleifender vestibulum purus, sit
									amet vulputate risus.
								</div>
							</div>
						</div>
						<!-- End Features Item -->
						<!-- Features Item -->
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="alt-features-item align-center">
								<div class="alt-features-icon">
									<span class="icon-chat"></span>
								</div>
								<h3 class="alt-features-title font-alt">We're Friendly</h3>
								<div class="alt-features-descr align-left">
									Pulvinar vitae neque et porttitor. Integer non dapibus diam, ac
									eleifend lectus. Praesent sed nisi eleifend, fermentum orci sit
									amet, iaculis libero interdum.
								</div>
							</div>
						</div>
						<!-- End Features Item -->
					</div>
					<!-- End Features Grid -->
				</div>
			</section>
			<!-- End Features Section -->

			<!-- Testimonials Section -->
			<section
				class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider"
				data-background="images/full-width-images/section-bg-3.jpg">
				<!-- Slide Item -->
				<div>
					<div class="container relative">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 align-center">
								<div class="section-icon">
									<span class="icon-quote"></span>
								</div>
								<h3 class="small-title font-alt">What people say?</h3>
								<blockquote class="testimonial white">
									<p>
										Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
										risus utaliquam dapibus. Thanks!
									</p>
									<footer class="testimonial-author">
										John Doe, doodle inc.
									</footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<!-- End Slide Item -->
				<!-- Slide Item -->
				<div>
					<div class="container relative">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 align-center">
								<div class="section-icon">
									<span class="icon-quote"></span>
								</div>
								<h3 class="small-title font-alt">What people say?</h3>
								<blockquote class="testimonial white">
									<p>
										Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
										risus utaliquam dapibus. Thanks!
									</p>
									<footer class="testimonial-author">
										John Doe, doodle inc.
									</footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<!-- End Slide Item -->
				<!-- Slide Item -->
				<div>
					<div class="container relative">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 align-center">
								<div class="section-icon">
									<span class="icon-quote"></span>
								</div>
								<h3 class="small-title font-alt">What people say?</h3>
								<blockquote class="testimonial white">
									<p>
										Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
										risus utaliquam dapibus. Thanks!
									</p>
									<footer class="testimonial-author">
										John Doe, doodle inc.
									</footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<!-- End Slide Item -->
			</section>
			<!-- End Testimonials Section -->

			<!-- Contact Section -->
			<section class="page-section" id="contact">
				<div class="container relative">
					<h2 class="section-title font-alt mb-70 mb-sm-40">
						Contact
					</h2>
					<div class="row mb-60 mb-xs-40">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<!-- Phone -->
								<div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
									<div class="contact-item">
										<div class="ci-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="ci-title font-alt">
											Call Us
										</div>
										<div class="ci-text">
											+61 3 8376 6284
										</div>
									</div>
								</div>
								<!-- Address -->
								<div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
									<div class="contact-item">
										<div class="ci-icon">
											<i class="fa fa-map-marker"></i>
										</div>
										<div class="ci-title font-alt">
											Address
										</div>
										<div class="ci-text">
											245 Quigley Blvd, Ste K
										</div>
									</div>
								</div>
								<!-- Email -->
								<div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
									<div class="contact-item">
										<div class="ci-icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="ci-title font-alt">
											Email
										</div>
										<div class="ci-text">
											<a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Contact Form -->
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<form class="form contact-form" id="contact_form">
								<div class="clearfix">
									<div class="cf-left-col">
										<!-- Name -->
										<div class="form-group">
											<input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required>
										</div>
										<!-- Email -->
										<div class="form-group">
											<input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
										</div>
									</div>
									<div class="cf-right-col">
										<!-- Message -->
										<div class="form-group">
											<textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
										</div>
									</div>
								</div>
								<div class="clearfix">
									<div class="cf-left-col">
										<!-- Inform Tip -->
										<div class="form-tip pt-20">
											<i class="fa fa-info-circle"></i> All the fields are required
										</div>
									</div>
									<div class="cf-right-col">
										<!-- Send Button -->
										<div class="align-right pt-10">
											<button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Submit Message</button>
										</div>
									</div>
								</div>
								<div id="result"></div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End Contact Section -->
			<!-- Google Map -->
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12286.715636833376!2d-75.59837531200412!3d39.65694025682884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3d191cf13%3A0xf4674106f987fe3a!2s245+Quigley+Blvd+Ste+K%2C+New+Castle%2C+DE+19720%2C+USA!5e0!3m2!1sen!2sua!4v1530266633608" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- End Google Map -->

			<!-- Footer -->
			<?php include './shared/footer.html'; ?>

			<!-- Buy Button -->
			<a
				href="https://themeforest.net/item/rhythm-multipurpose-onemulti-page-template/10140354"
				target="_blank"
				class="buy-button"
				><i class="fa fa-shopping-cart" aria-hidden="true"></i>
				<span>Buy</span></a
			>
			<!-- End Buy Button -->
		</div>
		<!-- End Page Wrap -->

		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/SmoothScroll.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
		<script
			type="text/javascript"
			src="js/jquery.localScroll.min.js"
		></script>
		<script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
		<script type="text/javascript" src="js/jquery.countTo.js"></script>
		<script type="text/javascript" src="js/jquery.appear.js"></script>
		<script type="text/javascript" src="js/jquery.sticky.js"></script>
		<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.fitvids.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
		<script
			type="text/javascript"
			src="js/jquery.magnific-popup.min.js"
		></script>
		<script type="text/javascript" src="js/wow.min.js"></script>
		<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
		<script
			type="text/javascript"
			src="js/jquery.simple-text-rotator.min.js"
		></script>
		<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
		<script type="text/javascript" src="js/all.js"></script>
		<script type="text/javascript" src="js/contact-form.js"></script>
		<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
		<!--[if lt IE 10
			]><script type="text/javascript" src="js/placeholder.js"></script
		><![endif]-->
	</body>
</html>
