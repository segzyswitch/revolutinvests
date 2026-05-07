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
	<title>Revolut Invests - Homepage</title>
</head>

<body>
	<!-- Header -->
	<?php include 'inc/header.php'; ?>
	<!-- End Header -->

	<!-- Main -->
	<main>
		<!-- Banner -->
		<div class="section pt-5 position-relative">
			<div class="mx-auto" style="max-width: 1816px;">
				<img src="image/img1.png" class="img-fluid rounded-4 w-100" style="height: 100vh;" alt="">
			</div>
			<div class="mx-xl-5 overflow-visible position-absolute bottom-0 start-0 end-0">
				<div class="d-flex flex-xl-row flex-column gap-3" style="padding-bottom: 6em;">
					<div class="col mb-3 mb-xl-0">
						<div class="py-5 ps-5 pe-4 text-xl-start text-center">
							<h1 class="accent-primary">Realize Your Potential With the Right Investment</h1>
							<p class="d-block d-sm-none text-center mt-4">
								<a href="/account/login" class="btn btn-accent d-inline-flex flex-row gap-3 w-75">
									<span>Get Started</span>
									<i class="rtmicon rtmicon-arrow-up-right fw-bold"></i>
								</a>
							</p>
						</div>
					</div>
					<div class="col mb-3 mb-xl-0 scrollanimation animated fadeInRight d-none d-sm-block">
						<div
							class="text-xl-start text-center gap-xl-5 gap-3 p-5 bg-accent-primary"
							style="border-radius: 20px 0 0 20px;">
							<h5>We make use of the best trading strategies to ensure the safety of your capital and consistent growth.</h5>
							<p class="lead my-3">Our company knows how to safely increase your capital We are fully automated!</p>
							<div class="d-flex flex-xl-row flex-column gap-5 align-items-center">
								<div class="w-max-content">
									<a href="./account/login" class="btn btn-accent d-flex flex-row gap-3">
										<span>Get Started</span>
										<i class="rtmicon rtmicon-arrow-up-right fw-bold"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Section About Us -->
		<div class="section bg-attach-cover" style="background-image: url(image/bg_about.html);">
			<div class="r-container">
				<div class="row row-cols-xl-2 row-cols-1">
					<div class="col mb-3 scrollanimation animated fadeInLeft adr-7">
						<div class="position-relative h-100">
							<img src="image/img2.png" class="img-fluid rounded-4 h-100 w-100" style="aspect-ratio: 1/1;" alt="">
							<div class="bg-accent-primary pt-4 pe-4 text-center position-absolute bottom-0 start-0"
								style="border-top-right-radius: 20px;">
								<div class="d-flex flex-row gap-3 align-items-center green">
									<i class="rtmicon rtmicon-profit" style="font-size: 94px;"></i>
									<div class="d-flex flex-column">
										<h1>15%</h1>
										<h5>Annual ROI</h5>
									</div>
								</div>
							</div>
							<div class="custom-border position-absolute top-0 end-0">
								<button type="button" class="request-loader">
									<i class="rtmicon rtmicon-play-button" style="font-size: 50px;"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="col mb-3">
						<div class="d-flex flex-column gap-3 text-xl-start text-center ps-xl-4 pe-3 h-100 justify-content-between">
							<div class="sub-heading">
								<h6 class="m-0">About Company</h6>
							</div>
							<h3>Pioneering Strategies for Your Financial Success</h3>
							<p>
								Founded by a team of seasoned financial experts, we specialize in delivering
								personalized investment strategies that cater to your unique goals.
							</p>
							<div class="d-flex flex-column gap-4">
								<div class="d-flex flex-xl-row flex-column align-items-xl-start align-items-center gap-3">
									<div class="icon-box">
										<i class="rtmicon rtmicon-saving"></i>
									</div>
									<div class="d-flex flex-column align-items-xl-start align-items-center gap-2">
										<h5 class="m-0 green">Expert Guidance</h5>
										<p class="m-0">Our team is composed of experienced financial advisors, analysts,
											and
											market experts dedicated to helping you succeed.</p>
									</div>
								</div>
								<div class="d-flex flex-xl-row flex-column align-items-xl-start align-items-center gap-3">
									<div class="icon-box">
										<i class="rtmicon rtmicon-growth"></i>
									</div>
									<div class="d-flex flex-column align-items-xl-start align-items-center gap-2">
										<h5 class="m-0 green">Personalized Plans</h5>
										<p class="m-0">We create customized strategies that reflect your financial goals
											and
											risk appetite.</p>
									</div>
								</div>
								<div class="d-flex flex-xl-row flex-column align-items-xl-start align-items-center gap-3">
									<div class="icon-box">
										<i class="rtmicon rtmicon-target"></i>
									</div>
									<div class="d-flex flex-column align-items-xl-start align-items-center gap-2">
										<h5 class="m-0 green">Comprehensive Solutions</h5>
										<p class="m-0">Comprehensive wealth management, we offer a wide range of
											services
											designed to meet your financial needs.</p>
									</div>
								</div>
							</div>
							<div class="w-max-content">
								<a href="./about" class="btn btn-accent d-flex flex-row gap-3">
									<span>Learn More</span>
									<i class="rtmicon rtmicon-arrow-up-right fw-bold"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="modal fade" id="e119" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content bg-dark-color">
						<iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
					</div>
				</div>
			</div> -->
		</div>

		<!-- Section Marquee 
		<div class="section p-0">
			<div
				class="d-flex flex-column gap-3 text-center align-items-center justify-content-center mx-auto position-relative my-5 accent-primary">
				<div class="marquee-container bg-gradient-right" style="transform: rotate(3deg); position: relative;">
					<div class="marquee-content green-neon">
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center ">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
					</div>
				</div>
				<div class="marquee-container reverse bg-gradient-left" style="transform: rotate(-3deg); position: absolute;">
					<div class="marquee-content">
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Finance</h3>
						</div>
						<div class="marquee-item py-2 align-items-center">
							<i class="rtmicon rtmicon-insurance" style="font-size: 45px;"></i>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center justify-content-center">
							<h3 class="m-0">Invesment</h3>
						</div>
						<div class="marquee-item py-2 d-flex align-items-center">
							<i class="rtmicon rtmicon-global-economy" style="font-size: 45px;"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		-->

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

		<!-- Section Counter -->
		<div class="section">
			<div class="r-container d-flex flex-column gap-3 bg-gradient-right pt-5 px-5 accent-primary"
				style="border-radius: 50px;">
				<div class="row row-cols-xl-4 row-cols-1 w-100 align-items-center">
					<div class="col d-flex flex-column align-items-center gap-2 mb-3 accent-primary">
						<div class="d-flex justify-content-center num-hover">
							<h3 class="number" data-target="25" data-duration="1000">0</h3>
							<h3>K</h3>
							<h3>+</h3>
						</div>
						<h5 class="text-color-2">Years Experience</h5>
					</div>
					<div class="col d-flex flex-column align-items-center gap-2 mb-3 accent-primary">
						<div class="d-flex justify-content-center num-hover">
							<h3 class="number" data-target="98" data-duration="1000">0</h3>
							<h3>%</h3>
						</div>
						<h5 class="text-color-2">Client Satisfaction</h5>
					</div>
					<div class="col d-flex flex-column align-items-center gap-2 mb-3 accent-primary">
						<div class="d-flex justify-content-center num-hover">
							<h3 class="number" data-target="150" data-duration="1000">0</h3>
							<h3>+</h3>
						</div>
						<h5 class="text-color-2">Expert Team</h5>
					</div>
					<div class="col d-flex flex-column align-items-center gap-2 mb-3 accent-primary">
						<div class="d-flex justify-content-center num-hover">
							<h3 class="number" data-target="15" data-duration="1000">0</h3>
							<h3>%</h3>
						</div>
						<h5 class="text-color-2">Annual ROI</h5>
					</div>
				</div>
				<div class="row row-cols-xl-2 row-cols-1 align-items-center floating-counter">
					<div class="col mb-4 text-center">
						<h4>We Collaborate With <span class="text-accent">1500+</span> Companies</h4>
					</div>
				</div>
			</div>
		</div>

		<!-- Section Pricing Plan -->
		<div class="section pb-0">
			<div class="r-container d-flex flex-column gap-3 mb-0">
				<div class="d-flex flex-column gap-2 align-items-center justify-content-center mx-auto text-center"
					style="max-width: 700px;">
					<div class="sub-heading">
						<h6 class="m-0">Pricing Plan</h6>
					</div>
					<h3>Choose the Perfect Plan for Your Financial Success</h3>
					<p>Select from our flexible pricing options. We have the right plan to help you grow your wealth and
						achieve financial success.</p>
				</div>
				<div class="row row-cols-xl-3 row-cols-1" style="margin-top: 50px;">
					<?php
					$counter = 1;
					foreach ($Controller->Plans(3) as $key => $value) {
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
			</div>
		</div>

		<!-- Section CTA -->
		<div class="section pt-5">
			<div class="r-container position-relative">
				<div class="d-flex flex-column gap-3 accent-primary position-relative p-5 overflow-hidden bg-attach-cover"
					style="z-index: 2; background-image: url(image/img12.png); border-radius: 30px;">
					<div class="bg-overlay"></div>
					<div class="d-flex flex-column gap-3 position-relative" style="max-width: 700px; z-index: 2;">
						<div class="sub-heading cta">
							<h6 class="m-0">Pricing Plan</h6>
						</div>
						<h3>Choose the Perfect Plan for Your Financial Success</h3>
						<p class="accent-primary">Select from our flexible pricing options. We have the right plan to
							help you grow your wealth
							and
							achieve financial success.</p>
						<div class="w-max-content">
							<a href="./plans" class="btn btn-accent d-flex flex-row gap-2 px-4 py-3">
								<span>Explore plans</span>
								<i class="rtmicon rtmicon-arrow-up-right"></i>
							</a>
						</div>
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
							<img src="image/img14.png" class="img-fluid rounded-4 h-100 w-100" style="aspect-ratio: 9/10;" alt="">
							<div class="custom-border-2 accent position-absolute bottom-0 end-0">
								<a href="" class="icon-box-2">
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
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
												aria-expanded="true" aria-controls="faq1">
												What are the basics of investing?
											</button>
										</h2>
										<div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion1">
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
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
												How do I start investing with a small budget?
											</button>
										</h2>
										<div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
											<div class="accordion-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel erat
												nibh. Sed rutrum turpis quis lacinia sollicitudin. Sed ac neque cursus,
												ornare augue pellentesque, elementum turpis.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
												How do I assess my tisk Tolerance?
											</button>
										</h2>
										<div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
											<div class="accordion-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel erat
												nibh. Sed rutrum turpis quis lacinia sollicitudin. Sed ac neque cursus,
												ornare augue pellentesque, elementum turpis.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
												What are Exchange-Traded Funds (ETFs)?
											</button>
										</h2>
										<div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
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