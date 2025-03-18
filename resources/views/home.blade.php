@extends('layouts.app')

@section('head')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Yayasan Muhammad Mulia Indonesia",
      "url": "https://www.muhammadmulia.id",
      "logo": "https://www.muhammadmulia.id/img/logo.png",
      "description": "Connecting Hearts, Spreading the Lights. Together with Muhammad Mulia Indonesia Foundation, we are committed to creating a better future through Education, Economic Independence, Research, and Humanitarian Work.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62-819-2766-1977",
        "contactType": "Customer Support",
        "areaServed": "ID",
        "availableLanguage": "Indonesian"
      }
    }
    </script>
@endsection

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex align-items-center">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-lg-8">
						<div class="img-container">
							<img src="{{ URL::asset('img/hero/IndonesiaBerbagi.png') }}" alt="">
						</div>
						<h1>{!! __('home.hero') !!}</h1>
						<p>{!! __('home.hero-sub') !!}</p>
						<h3 class="fst-italic">{!! __('home.hero-small') !!}</h3>
						<div>
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
					<div class="col-lg-7 col-md-12 order-last">
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
					<div class="col-lg-5 col-md-12 vl order-first mb-5 mb-md-0">
						<h4>About us</h4>
						<h2>Get to <span>know</span> more about <br> Yayasan Muhammad Mulia Indonesia</h2>
						<a href="/about-us" class="text-anchor">Learn more <i class="bi bi-arrow-up-right"></i></a>
					</div>
				</div>
			</div>
		</section><!-- End Counts Section -->

		<!-- ecosystem Section -->
		<section id="our-ecosystem" class="our-ecosystem section">
			<header class="section-header">
				<h1>Our <span>Ecosystem</span></h1>
			</header>
			<div class="container">
				<div class="row our-ecosystem-container">
					<div class="col-md-12 col-lg-4">
						<header class="section-header text-start">
							<p>Our Ecosystem</p>
							<h2>Ecosystem of Muhammad Mulia Foundation</h2>
						</header>
						<!-- <a href="#" class="btn btn-second mb-5">Learn More</a> -->
					</div>

					<div class="col-md-12 col-lg-4">
						<div class="card our-ecosystem-card mb-4">
							<div class="img-container">
								<img src="{{ URL::asset('img/ecosystem/1.png') }}" class="img-fluid" alt="" width="50" height="50">
							</div>
							<h4>Education</h4>
							<p>Provides quality educational opportunities through scholarships, e-learning, and workshops to enhance access to education.</p>
						</div>
						<div class="card our-ecosystem-card mb-4">
							<div class="img-container">
								<img src="{{ URL::asset('img/ecosystem/2.png') }}" class="img-fluid" alt="" width="50" height="50">
							</div>
							<h4>Economic Empowerment</h4>
							<p>Fosters economic independence by offering training and support for micro, small, and medium enterprises (MSMEs).</p>
						</div>
					</div>

					<div class="col-md-12 col-lg-4">
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
					</div>
				</div>
			</div>
		</section><!-- /ecosystem Section -->

		<!-- ======= our-program Section ======= -->
		<section id="our-program" class="our-program">
			<div class="container">
				<header class="section-header">
					<p>Our Programs</p>
					<h1>Our current <span>initiatives</span></h1>
				</header>
				<div class="row">
					@if (!$latestPrograms->isEmpty())
						@foreach ($latestPrograms as $program)
							<div class="col-lg-3 col-md-6">
								<div class="box">
									<img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}">
									<div class="box-content">
										<h6>{{ $program->category }}</h6>
										<h5>{{ $program->title }}</h5>
										<p class="mb-2">
											{{ Str::limit($program->description, 100) }}
										</p>
										<a href="{{ route('our-programs.read', ['id' => $program->id]) }}" class="text-anchor">
											Read more <i class="bi bi-arrow-up-right"></i>
										</a>
										<button type="button" class="btn btn-primer mt-4 w-100" data-bs-toggle="modal" data-bs-target="#donateModal">
											DONATE NOW
										</button>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
				<div class="text-center mt-lg-5">
					<a class="btn btn-second" href="/our-programs">See All Programs <i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
		</section><!-- End our-program Section -->

		<!-- ======= Services Section ======= -->
		<section class="our-services">
			<div class="container">
				<header class="section-header">
					<p>Our Services</p>
					<h1>We're ready to <span>collaborate</span></h1>
				</header>
				<div class="swipers-wrapper">
					<div class="top-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide top-swiper-slide" style="background: url('{{ asset('img/page-services/education.png') }}') no-repeat center; background-size: cover;"></div>
							<div class="swiper-slide top-swiper-slide" style="background: url('{{ asset('img/page-services/economic.png') }}') no-repeat center; background-size: cover;"></div>
							<div class="swiper-slide top-swiper-slide" style="background: url('{{ asset('img/page-services/research.png') }}') no-repeat center; background-size: cover;"></div>
							<div class="swiper-slide top-swiper-slide" style="background: url('{{ asset('img/page-services/humanity.png') }}') no-repeat center; background-size: cover;"></div>
							<div class="swiper-slide top-swiper-slide" style="background: url('{{ asset('img/page-services/others.png') }}') no-repeat center; background-size: cover;"></div>
						</div>
					</div>
					<div class="bottom-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Education</h5>
								<p>
									These services are designed to position Yayasan Muhammad Mulia Indonesia as a strategic partner in the education sector, offering business opportunities while still supporting the foundation's social mission.
								</p>
							</div>
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Economic Empowerment</h5>
								<p>
									These services aim to establish Yayasan Muhammad Mulia Indonesia as a key player in fostering financial independence and sustainable livelihoods, providing business opportunities while advancing the foundation's mission to uplift communities.
								</p>
							</div>
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Research</h5>
								<p>
									Through these services, Yayasan Muhammad Mulia Indonesia positions itself as a thought leader in data-driven solutions, offering research-based insights that create business value while addressing social challenges.
								</p>
							</div>
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Humanity</h5>
								<p>
									These services reinforce Yayasan Muhammad Mulia Indonesia's commitment to humanitarian efforts, ensuring that business collaborations align with impactful social initiatives, creating sustainable change for those in need.
								</p>
							</div>
							<div class="swiper-slide">
								<img src="{{ URL::asset('img/our-services/1.png') }}" alt="">
								<h5>Others</h5>
								<p>
									A diverse range of services designed to expand Yayasan Muhammad Mulia Indonesia's reach, offering innovative solutions that balance commercial success with the foundation's dedication to social progress.
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
				<div class="text-center mt-lg-5">
					<a class="btn btn-third" href="/our-services">See All Services <i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
		</section><!-- End Services Section -->

		<!-- ======= Our Activities Section ======= -->
		<section id="our-activities" class="our-activities">
			<div class="container">
				<div class="header-container">
					<header class="section-header">
						<p>Our Activities</p>
						<h1>Explore our vibrant <span>activities</span></h1>
					</header>
					<a class="btn btn-third" href="/our-activities">See All Activities <i class="bi bi-arrow-right"></i></a>
				</div>
				<div class="row d-flex flex-column flex-lg-row" data-aos="fade-left">
					{{-- Big Card on the Left --}}
					<div class="col-lg-6 col-md-12 mb-3">
						@if ($latestActivities->isNotEmpty())
							<div class="card main h-100">
								<div class="img-container-activities">
									<img src="{{ asset('storage/' . $latestActivities[0]->image) }}" alt="{{ $latestActivities[0]->title }}">
								</div>
								<div class="card-body">
									<p>{{ $latestActivities[0]->created_at->format('F d, Y') }}</p>
									<h5>{{ $latestActivities[0]->title }}</h5>
									<p class="mb-2">{{ Str::limit($latestActivities[0]->description, 100) }}</p>
								</div>
							</div>
						@endif
					</div>

					{{-- Small Cards on the Right --}}
					<div class="col-lg-6 col-md-12 d-flex flex-column gap-3">
						@foreach ($latestActivities->skip(1) as $activity)
							<div class="card mb-3 h-100">
								<div class="row g-0 h-100">
									<div class="col-md-4">
										<div class="img-container-activities h-100">
											<img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}">
										</div>
									</div>
									<div class="col-md-8 d-flex align-items-center">
										<div class="card-body">
											<h5 class="card-title">{{ $activity->title }}</h5>
											<p class="card-text">{{ Str::limit($activity->description, 80) }}</p>
											<p class="card-text"><small class="text-body-secondary">{{ $activity->created_at->diffForHumans() }}</small></p>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section><!-- End Our Activities Section -->

		<!-- ======= Supported Business Section ======= -->
		<section id="supported-business" class="supported-business">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 d-flex justify-content-center align-items-center">
                        <img src="{{ URL::asset('img/hero-logo.png') }}" class="img-fluid" alt="" style="height: 200px;">
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
					<a class="btn btn-second" href="/our-businesses">See all Supported business <i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
		</section><!-- End Supported Business Section -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">
			<div class="container">
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

		<!-- <section class="support">
			<div class="container">
				<img src="{{ URL::asset('img/support/flow-1.png') }}" alt="" style="width: 100%; margin-bottom: 60px;">
				<img src="{{ URL::asset('img/support/flow-2.png') }}" alt="" style="width: 100%; margin-bottom: 60px;">
			</div>
		</section> -->
	</main><!-- End #main -->
@endsection