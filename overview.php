<!DOCTYPE html>
<html lang="en">

	<!-- Head -->
	<?php include './shared/head.html'; ?>

	<body id="company_overview" class="appear-animate child-page">
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
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Company Overview</h1>
					<div class="mod-breadcrumbs font-alt">
						<a href="index.php">Home</a> / <a href="#">About Us</a> / <span>Company Overview</span>
					</div>
				</div>
			</header>

			<main>
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h2 class="font-alt mt-0">Our Vision</h2>
							<p>
								To Provide an integrated professional design and
								construction philosophy based on:
							</p>
							<ul>
								<li>
									People (Flexibility, Skills, Ability)
								</li>
								<li>
									Expertise (Client’s objectives of functionality, Time)
								</li>
								<li>
									Budget Solutions (Flexibility that satisfies and exceeds
									client’s expectation).
								</li>
							</ul>

							<h2 class="font-alt">Our Mission</h2>
							<p>
								Our mission is to be the most unique service provider
								in the Engineering, Procurement and Construction
								Management (EPCM) arena in Bangladesh.
							</p>

							<h2 class="font-alt">Our Story</h2>
							<p>
								Established in September 2004, Next Spaces
								has been around in this business for nearly 17 years.
								From small scale refurbishments to major multi‐national
								developments, we manage projects of all sizes in
								foundation, construction, engineering and facilities
								management. By providing clear and concise project
								management information up front, and updated with
								constant communication. Next Spaces has helped our
								clients reduce and manage project costs, saving much
								time through effective project management and
								improving risk and cost analysis.
							</p>

							<h2 class="font-alt">Area of Expertise</h2>
							<p>
								Our range of techniques include but not limited to:
							</p>
							<ul>
								<li>
									Sheet/Shore Pile
								</li>
								<li>
									Secant Pile
								</li>
								<li>
									Jet Grouting
								</li>
								<li>
									Diaphragm Wall
								</li>
								<li>
									CFA (Contiguous Flight Auger) Pile
								</li>
								<li>
									LDA (Large Diameter Auger) Pile
								</li>
								<li>
									DSCM (Deep Soil Cement Mixing)
								</li>
								<li>
									Various Ground Improvement
								</li>
								<li>
									Civil Construction & Erection Works, etc.
								</li>
							</ul>

							<h2 class="font-alt">Sectors</h2>
							<p>
								We operate in most sectors such as:
							</p>
							<ul>
								<li>
									Residential (both Public and Private)
								</li>
								<li>
									Commercial
								</li>
								<li>
									Industrial
								</li>
								<li>
									Infrastructures (Road, Rail, Airport, Water Port, Power and Gas), etc.
								</li>
							</ul>
							<p>
								These works are carried out as a specialist subcontractor,
								as a principle or main contractor, even sometimes in joint
								ventures with other contractors.
							</p>
							<p>
								We employ in‐house architects & design engineers to enable
								us to offer cost effective sustainable and innovative solutions
								for both bored pile foundations and construction works.
								Furthermore, we have a proven track record in the delivery
								of sustainable foundation solutions to specific budgets,
								on time and to the required quality standards in a safe
								and efficient manner.
							</p>

							<h2 class="font-alt">Direct Contracts</h2>
							<p>
								Our philosophy in seeking work from this market has been that
								where a significant geotechnical input is required into a
								project, we will undertake the design and construction of
								this portion and manage the remainder of the works out of
								the ground.
							</p>
							<p>
								Clients can therefore ensure that the difficult interface
								between sub and super structure is managed by one contractor,
								minimising risk and consequential delay.
							</p>

							<h2 class="font-alt">Services</h2>
							<p>
								The company firmly believes that where a significant
								geotechnical requirement exists, there we have something
								to offer our clients and main contractors alike.
							</p>

						</div>
					</div>

					<!-- Clients Section -->
					<section class="small-section pt-70 pb-70">
						<div class="container relative">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<h2 class="section-title font-alt mb-70 mb-sm-40">
										Clients
									</h2>
									<div
										class="small-item-carousel black owl-carousel mb-0 animate-init"
										data-anim-type="fade-in-right-large" data-anim-delay="100">

										<div class="logo-item">
											<img src="dist/images/clients-logos/client-1.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-2.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-3.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-4.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-5.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-6.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-1.png" width="67" height="67" alt="" />
										</div>
										<div class="logo-item">
											<img src="dist/images/clients-logos/client-2.png" width="67" height="67" alt="" />
										</div>

									</div>
								</div>
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
				document.querySelector("#about a").classList.add("active");
				document.querySelectorAll("#about li")[0].querySelector("a").classList.add("active");
			}());
		</script>
		<?php include './shared/scripts.html'; ?>
	</body>
</html>
