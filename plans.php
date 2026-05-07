<?php
require 'config/Controller.php';
$Controller = new Controller()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.2/animation_utility.css">
	<link rel="icon" type="image/x-icon" href="icon.png">
	<title>Revolut Invests - Investment Plans</title>
</head>

<body>
	<!-- Header -->
	<?php include 'inc/header.php'; ?>
	<!-- End Header -->

	<!-- Main -->
	<main>
		<!-- Banner -->
		<div class="section mt-5 position-relative bg-attach-fixed overflow-hidden mx-auto rounded-4"
			style="background-image: url(image/img35.png); height: 70vh; max-width: 1816px;">
			<div class="bg-overlay"></div>
			<div class="r-container h-100 position-relative" style="z-index: 2;">
				<div class="d-flex flex-column w-100 h-100 justify-content-center mx-auto align-items-center text-white gap-3"
					style="max-width: 895px;">
					<h2 class="m-0 text-white">Investment Plans</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Investment Plans</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<!-- Section Pricing Plan -->
		<div class="section">
			<div class="r-container d-flex flex-column gap-3">
				<div class="d-flex flex-column gap-2 align-items-center justify-content-center mx-auto text-center"
					style="max-width: 700px;">
					<div class="sub-heading">
						<h6 class="m-0">Investment Plans</h6>
					</div>
					<h3>Choose the Perfect Plan for Your Financial Success</h3>
					<p>Select from our flexible investment options. We have the right plan to help you grow your wealth and
						achieve financial success.</p>
				</div>
				<div class="row row-cols-xl-3 row-cols-1" style="margin-top: 50px;">
					<?php
					$counter = 1;
					foreach ($Controller->Plans() as $key => $value) {
						?>
					<div class="col mb-xl-3 mt-xl-0 mb-5 mt-3 scrollanimation animated fadeInLeft">
						<div class="card card-pricing mb-4">
							<div class="d-flex flex-column gap-3 align-items-center" style="margin-top: -80px;">
								<div class="bg-accent-color-2 custom-border-3">
									<i class="rtmicon rtmicon-<?php echo $value['icon']; ?>"></i>
								</div>
								<div class="sub-heading rounded-pill">
									<h6 class="m-0"><?php echo $value['name']; ?> Plan</h6>
								</div>
								<div class="d-flex flex-row heading mb-3 align-items-end">
									<h3 class="m-0"><?php echo $value['interest']; ?>%</h3>
									<span><?php echo $value['duration']; ?> month(s)</span>
								</div>
								<div class="d-flex flex-column gap-2">
									<div class="d-flex flex-row gap-3 align-items-center">
										<i class="rtmicon rtmicon-check-circle fs-4"></i>
										<span>Minimum Capital: $<?php echo number_format($value['min_limit']); ?></span>
									</div>
									<div class="d-flex flex-row gap-3 align-items-center">
										<i class="rtmicon rtmicon-check-circle fs-4"></i>
										<span>Monthly Market Insights</span>
									</div>
									<div class="d-flex flex-row gap-3 align-items-center">
										<i class="rtmicon rtmicon-check-circle fs-4"></i>
										<span>Access to Basic Financial Tools</span>
									</div>
									<div class="d-flex flex-row gap-3 align-items-center">
										<i class="rtmicon rtmicon-check-circle fs-4"></i>
										<span>Quality Investment Experience</span>
									</div>
								</div>
								<a href="#" class="btn btn-accent d-flex flex-row gap-3 w-100">
									<span class="accent-primary">Select Package</span>
									<i class="rtmicon rtmicon-arrow-up-right fw-bold"></i>
								</a>
							</div>
						</div>
					</div>
						<?php
						$counter++;
					}
					?>
				</div>
				<div
					class="d-flex flex-xl-row flex-column gap-3 rounded-5 p-3 border border-green justify-content-between align-items-center scrollanimation animated fadeInUp">
					<span class="m-0 ps-5">Any question about our package? Ask Us</span>
					<div class="w-max-content">
						<a href="./contact" class="btn btn-accent d-flex flex-row gap-2 px-4 py-3">
							<span>Contact Us</span>
							<i class="rtmicon rtmicon-arrow-up-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Section Services -->
		<div class="section d-none d-sm-block">
			<div class="r-container">
				<div class="row row-cols-xl-2 row-cols-1 align-items-end">
					<div class="col mb-3">
						<div class="d-flex flex-column gap-3">
							<div class="sub-heading">
								<h6 class="m-0">Our Services</h6>
							</div>
							<h3>Unlock financial freedom with smart choices</h3>
						</div>
					</div>
					<div class="col mb-3 scrollanimation animated fadeInRight adr-7">
						<div class="w-max-content" style="justify-self: end;">
							<a href="services.html" class="btn btn-accent d-flex flex-row gap-3">
								<span>All Services</span>
								<i class="rtmicon rtmicon-arrow-up-right fw-bold"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="position-relative">
					<!-- Swiper content (should be at the bottom) -->
					<div class="swiper swiperService pt-5" style="z-index: 1;">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="card-service">
									<h5>Financial Planning</h5>
									<p>Offering tailored financial advice for clients, covering retirement planning.</p>
									<div class="position-relative h-100">
										<img src="image/img3.png" class="img-fluid h-100 w-100"
											style="aspect-ratio: 3/2; border-radius: 10px;" alt="">
										<div class="custom-border-2 position-absolute bottom-0 end-0">
											<div class="d-flex justify-content-center">
												<a href="service_detail.html" class="icon-box link">
													<i class="rtmicon rtmicon-arrow-up-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card-service">
									<h5>Portfolio Management</h5>
									<p>Helps individuals and institutions manage their investment portfolios</p>
									<div class="position-relative h-100">
										<img src="image/img4.png" class="img-fluid h-100 w-100"
											style="aspect-ratio: 3/2; border-radius: 10px;" alt="">
										<div class="custom-border-2 position-absolute bottom-0 end-0">
											<div class="d-flex justify-content-center">
												<a href="service_detail.html" class="icon-box link">
													<i class="rtmicon rtmicon-arrow-up-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card-service">
									<h5>Wealth Management</h5>
									<p>Managing all aspects of a client's wealth, including investments, taxes, etc</p>
									<div class="position-relative h-100">
										<img src="image/img34.png" class="img-fluid h-100 w-100"
											style="aspect-ratio: 3/2; border-radius: 10px;" alt="">
										<div class="custom-border-2 position-absolute bottom-0 end-0">
											<div class="d-flex justify-content-center">
												<a href="service_detail.html" class="icon-box link">
													<i class="rtmicon rtmicon-arrow-up-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card-service">
									<h5>Real Estate Investment</h5>
									<p>Providing opportunities and advice for investing in real estate</p>
									<div class="position-relative h-100">
										<img src="image/img3.png" class="img-fluid h-100 w-100"
											style="aspect-ratio: 3/2; border-radius: 10px;" alt="">
										<div class="custom-border-2 position-absolute bottom-0 end-0">
											<div class="d-flex justify-content-center">
												<a href="service_detail.html" class="icon-box link">
													<i class="rtmicon rtmicon-arrow-up-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Section FAQs -->
		<div class="section">
			<div class="r-container">
				<div class="row row-cols-xl-2 row-cols-1">
					<div class="col mb-3 scrollanimation animated fadeInLeft adr-7">
						<div class="position-relative h-100">
							<img src="image/img14.png" class="img-fluid rounded-4 h-100 w-100"
								style="aspect-ratio: 9/10;" alt="">
							<div class="custom-border-2 accent position-absolute bottom-0 end-0">
								<a href="#" class="icon-box-2">
									<i class="rtmicon rtmicon-classic-phone"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col mb-3">
						<div class="d-flex flex-column gap-2 ps-xl-5">
							<div class="sub-heading">
								<h6 class="m-0">FAQs</h6>
							</div>
							<h3>See Most Popular Question About Finance</h3>
							<p>
								Answers the most frequently asked questions about finance and investment, helping both
								beginners and seasoned investors.
							</p>
							<div class="d-flex flex-column gap-4 w-100">
								<div class="accordion mt-3 d-flex flex-column gap-4" id="faqAccordion1">
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse"
												data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
												What are the basics of investing?
											</button>
										</h2>
										<div id="faq1" class="accordion-collapse collapse show"
											data-bs-parent="#faqAccordion1">
											<div class="accordion-body">
												Investing involves putting money into assets like stocks, bonds, or real
												estate to generate returns. Key basics include setting financial goals,
												diversifying your investments to manage risk, and balancing risk with
												potential rewards.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button"
												data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
												aria-controls="faq2">
												How do I start investing with a small budget?
											</button>
										</h2>
										<div id="faq2" class="accordion-collapse collapse"
											data-bs-parent="#faqAccordion1">
											<div class="accordion-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel erat
												nibh. Sed rutrum turpis quis lacinia sollicitudin. Sed ac neque cursus,
												ornare augue pellentesque, elementum turpis.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button"
												data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
												aria-controls="faq3">
												How do I assess my tisk Tolerance?
											</button>
										</h2>
										<div id="faq3" class="accordion-collapse collapse"
											data-bs-parent="#faqAccordion1">
											<div class="accordion-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel erat
												nibh. Sed rutrum turpis quis lacinia sollicitudin. Sed ac neque cursus,
												ornare augue pellentesque, elementum turpis.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button"
												data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
												aria-controls="faq4">
												What are Exchange-Traded Funds (ETFs)?
											</button>
										</h2>
										<div id="faq4" class="accordion-collapse collapse"
											data-bs-parent="#faqAccordion1">
											<div class="accordion-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel erat
												nibh. Sed rutrum turpis quis lacinia sollicitudin. Sed ac neque cursus,
												ornare augue pellentesque, elementum turpis.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

	<!-- Footer -->
	<?php include 'inc/footer.php'; ?>
	<!-- End Footer -->


	<!-- Scripts -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.bundle.min.js"></script>
	<script src="js/vendor/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/swiper-script.js"></script>
	<script src="js/submit-form.js"></script>
	<script src="js/vendor/isotope.pkgd.min.js"></script>
	<script src="js/video_embedded.js"></script>
	<script src="js/vendor/fslightbox.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.0/oyethemes_onscroll_animation.js"></script>
</body>

</html>