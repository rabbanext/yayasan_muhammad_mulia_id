@extends('layouts.app')

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex align-items-center">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-lg-8">
						<div class="img-container">
							<img data-aos="fade-up" src="{{ URL::asset('img/hero/IndonesiaBerbagi.png') }}" alt="">
						</div>
						<h1 data-aos="fade-up" data-aos-delay="100">Connecting Hearts, <br> Spreading the Lights</h1>
						<h5 data-aos="fade-up" data-aos-delay="200">Together with Muhammad Mulia Indonesia Foundation, we are committed to creating a better future through: Education, Economic Independence, Research, and Humanitarian Work.</h5>
						<h3 data-aos="fade-up" data-aos-delay="300" class="fst-italic">Start with Small Steps, Create a Big Impact!</h3>
						<div data-aos="fade-up">
							<button type="button" class="btn btn-primer scrollto d-inline-flex align-items-center justify-content-center align-self-center mb-3" data-bs-toggle="modal" data-bs-target="#donateModal">DONATE NOW</button>
							<a href="#counts" class="btn btn-outline-third scrollto d-inline-flex align-items-center justify-content-center align-self-center mb-3">
								Learn more
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= Counts Section ======= -->
		<section id="counts" class="counts">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-12 order-last" data-aos="fade-up" data-aos-delay="100">
						<div class="row">
							<div class="col-lg-3 col-6 mb-lg-0 mb-5">
								<div class="count-box">
								<img src="{{ URL::asset('img/counts/1.png') }}" alt="" height="60" width="60">
								<p>Years of Experience</p>
								<div class="ox"></div>
								<div class="d-flex justify-content-center">
									<h3 data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter">+</h3>
									<h3>+</h3>
								</div>
								</div>
							</div>

							<div class="col-lg-3 col-6 mb-lg-0 mb-5">
								<div class="count-box">
								<img src="{{ URL::asset('img/counts/2.png') }}" alt="" height="60" width="60">
								<p>Team Members</p>
								<div class="ox"></div>
								<div class="d-flex justify-content-center">
									<h3 data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter">+</h3>
									<h3>+</h3>
								</div>
								</div>
							</div>

							<div class="col-lg-3 col-6 mb-lg-0 mb-5">
								<div class="count-box">
								<img src="{{ URL::asset('img/counts/3.png') }}" alt="" height="60" width="60">
								<p>Current Projects</p>
								<div class="ox"></div>
								<div class="d-flex justify-content-center">
									<h3 data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter">+</h3>
									<h3>+</h3>
								</div>
								</div>
							</div>

							<div class="col-lg-3 col-6 mb-lg-0 mb-5">
								<div class="count-box">
								<img src="{{ URL::asset('img/counts/4.png') }}" alt="" height="60" width="60">
								<p>Partner & Client</p>
								<div class="ox"></div>
								<div class="d-flex justify-content-center">
									<h3 data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter">+</h3>
									<h3>+</h3>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 vl order-first mb-5 mb-md-0" data-aos="fade-up">
						<h4>About us</h4>
						<h2>Get to <span>know</span> more about <br> Yayasan Muhammad Mulia Indonesia</h2>
						<a href="#" class="text-anchor">Learn more <i class="bi bi-arrow-up-right"></i></a>
					</div>
				</div>
			</div>
		</section><!-- End Counts Section -->

		<!-- ecosystem Section -->
		<section id="our-ecosystem" class="our-ecosystem section">
			<header class="section-header" data-aos="fade-up">
				<h1>Our <span>Ecosystem</span></h1>
			</header>
			<div class="container">
				<div class="row our-ecosystem-container">
					<div class="col-md-12 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<div class="text-start" data-aos="fade-up">
						<p>Our Ecosystem</p>
						<h2>Ecosystem of Muhammad Mulia Foundation</h2>
					</div>
					<a href="#" class="btn btn-second mb-5">Learn More</a>
					</div><!-- End Card Item -->

					<div class="col-md-12 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<div class="card our-ecosystem-card mb-4">
						<div class="img-container">
							<img src="{{ URL::asset('img/ecosystem/1.png') }}" class="img-fluid" alt="" width="50" height="50">
						</div>
						<h4>Education</h4>
						<p>Provides quality educational opportunities through scholarships, e-learning, and workshops to enhance access to education.</p>
					</div>
					</div><!-- End Card Item -->

					<div class="col-md-12 col-lg-3" data-aos="fade-up" data-aos-delay="200">
					<div class="card our-ecosystem-card mb-4">
						<div class="img-container">
							<img src="{{ URL::asset('img/ecosystem/2.png') }}" class="img-fluid" alt="" width="50" height="50">
						</div>
						<h4>Economic Empowerment</h4>
						<p>Fosters economic independence by offering training and support for micro, small, and medium enterprises (MSMEs).</p>
					</div>
					<div class="card our-ecosystem-card mb-4">
						<div class="img-container">
							<img src="{{ URL::asset('img/ecosystem/2.png') }}" class="img-fluid" alt="" width="50" height="50">
						</div>
						<h4>Economic Empowerment</h4>
						<p>Fosters economic independence by offering training and support for micro, small, and medium enterprises (MSMEs).</p>
					</div>
					</div><!-- End Card Item -->

					<div class="col-md-12 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="card our-ecosystem-card mb-4">
						<div class="img-container">
							<img src="{{ URL::asset('img/ecosystem/3.png') }}" class="img-fluid" alt="" width="50" height="50">
						</div>
						<h4>Humanity</h4>
						<p>Promotes innovative research initiatives to address social issues and generate solutions through collaboration with academic institutions.</p>
					</div>
					<div class="card our-ecosystem-card mb-4">
						<div class="img-container">
							<img src="{{ URL::asset('img/ecosystem/3.png') }}" class="img-fluid" alt="" width="50" height="50">
						</div>
						<h4>Research</h4>
						<p>Promotes innovative research initiatives to address social issues and generate solutions through collaboration with academic institutions.</p>
					</div>
					</div><!-- End Card Item -->
				</div>
			</div>
		</section><!-- /ecosystem Section -->

		<!-- ======= our-program Section ======= -->
		<section id="our-program" class="our-program">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<p>Our Program</p>
					<h1>Our current <span>initiatives</span></h1>
				</header>
				<div class="row">
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="box">
							<img src="{{ URL::asset('img/our-program/1.png') }}" alt="">
							<div class="box-content">
								<h6>Education</h6>
								<h5>Muhammad Mulia Boarding School Development</h5>
								<p class="mb-2">
								The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
								</p>
								<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
								<button type="button" class="btn btn-primer mt-4 w-100" data-bs-toggle="modal" data-bs-target="#donateModal">DONATE NOW</button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="box">
							<img src="{{ URL::asset('img/our-program/1.png') }}" alt="">
							<div class="box-content">
								<h6>Economic Empowerment</h6>
								<h5>Muhammad Mulia Boarding School Development</h5>
								<p class="mb-2">
								The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
								</p>
								<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
								<button type="button" class="btn btn-primer mt-4 w-100" data-bs-toggle="modal" data-bs-target="#donateModal">DONATE NOW</button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="box">
							<img src="{{ URL::asset('img/our-program/1.png') }}" alt="">
							<div class="box-content">
								<h6>Research</h6>
								<h5>Muhammad Mulia Boarding School Development</h5>
								<p class="mb-2">
								The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
								</p>
								<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
								<button type="button" class="btn btn-primer mt-4 w-100" data-bs-toggle="modal" data-bs-target="#donateModal">DONATE NOW</button>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="box">
							<img src="{{ URL::asset('img/our-program/1.png') }}" alt="">
							<div class="box-content">
								<h6>Humanity</h6>
								<h5>Muhammad Mulia Boarding School Development</h5>
								<p class="mb-2">
								The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
								</p>
								<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
								<button type="button" class="btn btn-primer mt-4 w-100" data-bs-toggle="modal" data-bs-target="#donateModal">DONATE NOW</button>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center mt-5">
					<div class="btn btn-second">See All Programs <i class="bi bi-arrow-right"></i></div>
				</div>
			</div>
		</section><!-- End our-program Section -->

		<!-- ======= Services Section ======= -->
		<section class="our-services">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<p>Our Services</p>
					<h1>We're ready to <span>collaborate</span></h1>
				</header>
				<div class="swipers-wrapper">
					<div class="top-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide top-swiper-slide" style="background: url('https://via.placeholder.com/700x400/32cd32') no-repeat center; background-size: cover;"></div>
							<div class="swiper-slide top-swiper-slide" style="background: url('https://via.placeholder.com/700x400/fed200') no-repeat center; background-size: cover;"></div>
							<div class="swiper-slide top-swiper-slide" style="background: url('https://via.placeholder.com/700x400/455455') no-repeat center; background-size: cover;"></div>
						</div>
					</div>
					<div class="bottom-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Educational Service</h5>
								<p>
									These services are designed to position Yayasan Muhammad Mulia Indonesia as a strategic partner in the education sector, offering business opportunities while still supporting the foundation's social mission.
								</p>
							</div>
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Educational Service</h5>
								<p>
									These services are designed to position Yayasan Muhammad Mulia Indonesia as a strategic partner in the education sector, offering business opportunities while still supporting the foundation's social mission.
								</p>
							</div>
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Educational Service</h5>
								<p>
									These services are designed to position Yayasan Muhammad Mulia Indonesia as a strategic partner in the education sector, offering business opportunities while still supporting the foundation's social mission.
								</p>
							</div>
						</div>
						<div class="navigation-container">
							<div class="pagination-container">
								<div class="swiper-pagination"></div>
							</div>
							<div class="navigation">
								<button class="btn btn-sm py-1 btn-primer" id="prev-button">Prev</button>
								<button class="btn btn-sm py-1 btn-primer" id="next-button">Next</button>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center mt-5">
					<div class="btn btn-third">See All Services <i class="bi bi-arrow-right"></i></div>
				</div>
			</div>
		</section><!-- End Services Section -->

		<section id="our-activities" class="our-activities">
			<div class="container" data-aos="fade-up">
				<div class="header-container">
					<header class="section-header">
						<p>Our Activities</p>
						<h1>Explore our vibrant <span>activities</span></h1>
					</header>
					<div class="btn btn-third">See All Activities <i class="bi bi-arrow-right"></i></div>
				</div>
				<div class="row" data-aos="fade-left">
					<div class="col-lg-6 col-md-12 mb-3">
						<div class="card main">
							<img src="https://via.placeholder.com/400x300/fed200" alt="">
							<div class="card-body">
								<p>October 19, 2022</p>
								<h5>Muhammad Mulia Indonesia</h5>
								<p class="mb-2">The initiative began with a land endowment of 9,000 square meters in the ...</p>
								<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mb-3">
							<div class="row g-0">
								<div class="col-md-4">
									<img src="https://via.placeholder.com/150x200/fed200" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
										<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
						</div>
						<div class="card mb-3">
							<div class="row g-0">
								<div class="col-md-4">
									<img src="https://via.placeholder.com/150x200/fed200" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
										<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</section><!-- End our-activities Section -->

		<!-- ======= Supported Business Section ======= -->
		<section id="supported-business" class="supported-business">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-4">
						<img src="{{ URL::asset('img/features.png') }}" class="img-fluid" alt="">
					</div>

					<div class="col-lg-8">
						<header class="section-header text-start py-4">
							<p>Supported Business</p>
							<h2>Other businesses that <br> we <span>Support</span></h2>
						</header>
						<p class="mb-3">
							Dedicated to uplifting lives globally, we provide aid to individuals navigating diverse challenges. Our mission is to empower, inspire resilience, and foster positive change, creating a brighter future for communities worldwide.
						</p>
					</div>
					<div class="row align-self-center gy-4">
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>1</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>Tour & Travel</h5>
									<p>Umrah travel with premium facilities and excellent service.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>2</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>Logistic</h5>
									<p>Services with coverage across Indonesia and abroad.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>3</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>Food & Beverage</h5>
									<p>Offering premium and Authentic Food & Beverage.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>4</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>Herbal, Pharma, Cosmetic</h5>
									<p>Providing herbal products containing 39 natural ingredients.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>5</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>IT & Eco-Technology</h5>
									<p>Providing comprehensive technology solutions.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>6</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>Creative Media Production</h5>
									<p>Offering Many creative Solution services.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<div class="feature-icon">
									<h5>7</h5>
								</div>
								<div class="d-flex flex-column">
									<h5>Fashion & Souvenir</h5>
									<p>Offering customizable premium Fashion & Souvenir.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="text-center mt-5">
					<div class="btn btn-second">See all Supported business <i class="bi bi-arrow-right"></i></div>
				</div>
			</div>
		</section><!-- End Supported Business Section -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<h2>Our <span>Partner & Client</span></h2>
				</header>
				<div class="row mb-4">
					<div class="col-6 col-lg-2 mb-3">
						<img src="{{ URL::asset('img/clients/1.png') }}" alt="">
					</div>
					<div class="col-6 col-lg-2 mb-3">
						<img src="{{ URL::asset('img/clients/2.png') }}" alt="">
					</div>
					<div class="col-6 col-lg-2 mb-3">
						<img src="{{ URL::asset('img/clients/3.png') }}" alt="">
					</div>
					<div class="col-6 col-lg-2 mb-3">
						<img src="{{ URL::asset('img/clients/4.png') }}" alt="">
					</div>
					<div class="col-6 col-lg-2 mb-3">
						<img src="{{ URL::asset('img/clients/5.png') }}" alt="">
					</div>
					<div class="col-6 col-lg-2 mb-3">
						<img src="{{ URL::asset('img/clients/6.png') }}" alt="">
					</div>
				</div>
				<div class="clients-slider swiper">
					<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide"><img src="{{ URL::asset('img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="{{ URL::asset('img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="{{ URL::asset('img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
					<div class="swiper-slide"><img src="{{ URL::asset('img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section><!-- End Clients Section -->

		<section class="support">
			<div class="container">
				<img src="{{ URL::asset('img/support/flow-1.png') }}" alt="" style="width: 100%; margin-bottom: 60px;">
				<img src="{{ URL::asset('img/support/flow-2.png') }}" alt="" style="width: 100%; margin-bottom: 60px;">
			</div>
		</section>

		<div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="donateModalLabel"></h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body text-center">
						<p>#IndonesiaSharing</p>
						<p>Let's Make Dreams and Hopes Come True Together!</p>
						<p>Join Us in Making a Difference!</p>
						<img src="{{ URL::asset('img/donate/bsi.svg') }}" alt="" width="372" height="100" style="width: 100%;" />
						<h3 class="mt-5">7202105097</h3>
						<input type="text" value="7202105097" id="norek" hidden>
						<p class="mt-0">a.n. Yayasan Muhammad Mulia Indonesia</p>
						<button onclick="salinNorek()" class="btn btn-sm btn-primer mb-4">Copy account number</button>
						<p>Every small step can make a big difference. With your donation, we can help more people, transform lives, and bring new hope.</p>
					</div>
				</div>
			</div>
		</div>
	</main><!-- End #main -->
@endsection