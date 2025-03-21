@extends('layouts.app')

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="program" class="program d-flex align-items-center">
		<div class="container">
			<div class="content">
				<h1 class="d-block d-md-none">Our Services</h1>
				<div class="row d-flex align-items-center justify-content-center">
					<div class="col-12 col-lg-7 order-last order-md-last">
						<h1 class="d-none d-md-block">Our Services</h1>
						<div class="program-tabs">
							<div class="tab">
								<h6>We're Ready to Collaborate</h6>
							</div>
							<div class="tab-outline">
								<h6>Services of Yayasan Muhammad Mulia Indonesia</h6>
							</div>
						</div>
						<p>
							Yayasan Muhammad Mulia Indonesia provides strategic services across four main areas: Education, Economic empowerment, Research, and Humanity Efforts. We offer consultancy for school development, e-learning platform development, and educational digital transformation. In economic empowerment, we support MSME development, CSR programs, and digital marketing. For research, we focus on health, environmental issues, and social innovation. In Humanity efforts, our services include CSR consulting, public health programs, and disaster preparedness support. We are committed to creating positive impacts and significant change through integrated and sustainable solutions.
						</p>
					</div>
					<div class="col-12 col-lg-5 order-first order-md-last">
						<img src="{{ URL::asset('img/hero-logo.png') }}" alt="" height="200" width="200">
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="services">
		<!-- ======= Ecosystem Section ======= -->
		<section id="ecosystem" class="ecosystem">
			<div class="container py-3">
				<div class="row d-flex align-items-center">
					<div class="col-lg-3 col-md-12 mb-5 mb-md-0">
						<h2><span>Ecosystem of</span> <br> Muhammad Mulia Foundation</h2>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<div class="ox"></div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="box">
							<div class="ecosystem-box mx-2 mt-2">
								<img src="{{ URL::asset('img/page-program/ecosystem/1.png') }}" alt="" height="100" width="100">
								<p>Education</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="{{ URL::asset('img/page-program/ecosystem/2.png') }}" alt="" height="100" width="100">
								<p>Economic <br> Empowerment</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="{{ URL::asset('img/page-program/ecosystem/3.png') }}" alt="" height="100" width="100">
								<p>Research</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="{{ URL::asset('img/page-program/ecosystem/4.png') }}" alt="" height="100" width="100">
								<p>Humanity</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="{{ URL::asset('img/page-program/ecosystem/5.png') }}" alt="" height="100" width="100">
								<p>Others</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Ecosystem Section -->

		<!-- ======= Services Section ======= -->
		<section id="service" class="service">
			<div class="container">
				<header class="section-header">
					<p>Our Services</p>
					<h2>We're ready to <span>collaborate</span></h2>
				</header>
				<ul id="service-filters">
					<li data-filter=".filter-education">Education</li>
					<li data-filter=".filter-economic">Economic Empowerment</li>
					<li data-filter=".filter-research">Research</li>
					<li data-filter=".filter-humanity">Humanity</li>
				</ul>
				<div class="service-container">
					<div class="services-banner">
						<div class="service-item filter-education">
							<div class="services-container">
								<h2 class="services-item"><span>Education of</span> <br> Muhammad Mulia Foundation</h2>
								<p class="services-item">
									These services are designed to position Yayasan Muhammad Mulia Indonesia as a strategic partner in the education sector, offering business opportunities while still supporting the foundation's social mission.
								</p>
							</div>
						</div>
						<div class="service-item filter-economic">
							<div class="services-container">
								<h2 class="services-item"><span>Economic Empowerment of</span> <br> Muhammad Mulia Foundation</h2>
								<p class="services-item">
									These services aim to establish Yayasan Muhammad Mulia Indonesia as a key player in fostering financial independence and sustainable livelihoods, providing business opportunities while advancing the foundation's mission to uplift communities.
								</p>
							</div>
						</div>
						<div class="service-item filter-research">
							<div class="services-container">
								<h2 class="services-item"><span>Research of</span> <br> Muhammad Mulia Foundation</h2>
								<p class="services-item">
									Through these services, Yayasan Muhammad Mulia Indonesia positions itself as a thought leader in data-driven solutions, offering research-based insights that create business value while addressing social challenges.
								</p>
							</div>
						</div>
						<div class="service-item filter-humanity">
							<div class="services-container">
								<h2 class="services-item"><span>Humanity of</span> <br> Muhammad Mulia Foundation</h2>
								<p class="services-item">
									These services reinforce Yayasan Muhammad Mulia Indonesia's commitment to humanitarian efforts, ensuring that business collaborations align with impactful social initiatives, creating sustainable change for those in need.
								</p>
							</div>
						</div>
					</div>
					<div class="row gy-4">
    					<div class="services-grid">
    						@foreach($services as $service)
    							<div class="service-item filter-{{ strtolower($service->category) }}">
    								<img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="service-img">
    								<div class="service-text">
    									<h5>{{ $service->title }}</h5>
    									<p class="mb-2">{{ $service->body }}</p>
    								</div>
    							</div>
    						@endforeach
    					</div>
					</div>
				</div>
			</div>
		</section><!-- End Services Section -->
	</main><!-- End #main -->
	
	<style>
		.services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .service-item {
            display: flex;
            align-items: center;
            gap: 15px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            width: 100%;    
        }
        
        .service-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        .service-text {
            flex: 1;
            text-align: left;
        }

	</style>
@endsection