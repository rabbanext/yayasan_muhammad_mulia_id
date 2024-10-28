@extends('layouts.app')

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="program" class="program d-flex align-items-center">
		<div class="container">
			<div class="content">
				<h1 class="d-block d-md-none">Our Supported Business</h1>
				<div class="row d-flex align-items-center justify-content-center">
					<div class="col-12 col-lg-7 order-last order-md-last">
						<h1 class="d-none d-md-block">Our Supported Business</h1>
						<div class="program-tabs">
							<div class="tab">
								<h6>Other businesses that we support</h6>
							</div>
							<div class="tab-outline">
								<h6>Discover our network of supported businesses</h6>
							</div>
						</div>
						<p>
							Discover our network of supported businesses, each contributing to various sectors with excellence and innovation. From Zhafer Herbal's range of natural products to Karinova's comprehensive tech solutions, Taqwa Travel's exceptional Umrah services, and more, these businesses represent our commitment to fostering growth and success across different industries. Explore their unique offerings and how they align with our mission to create positive impacts through collaboration and support.
						</p>
					</div>
					<div class="col-12 col-lg-5 order-first order-md-last">
						<img src="{{ URL::asset('img/page-program/hero/hero.png') }}" alt="" height="200" width="200">
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="program">
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

		<!-- Business Section -->
		<section id="business" class="business">
			<div class="container">
				<header class="section-header">
					<p>Supported Businesses</p>
					<h2>Other businesses that we support</h2>
				</header>

				<div class="row gy-4">
					@if ($businesses->isEmpty())
						<p>No businesses available at the moment.</p>
					@else
						@foreach($businesses as $business)
							<div class="col-lg-3 col-md-6">
								<div class="box">
									<div class="img-container" style="width: 100%; height: 200px; overflow: hidden; position: relative;">
										<img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->title }}" 
											style="width: 100%; height: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
										<div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; 
											background: rgba(0, 0, 0, 0.5); color: white; display: flex; align-items: center; 
											justify-content: center; opacity: 0; transition: opacity 0.3s;">
											<p>{{ $business->category }}</p>
										</div>
									</div>
									<div class="box-content">
										<h5>{{ $business->title }}</h5>
										<p class="mb-2">{!! \Illuminate\Support\Str::limit($business->body, 100, '...') !!}</p>
										
										<a href="{{ $business->url }}">
											@if ($business->url_type == 'instagram')
												<i class="bi bi-instagram"></i> instagram
											@elseif ($business->url_type == 'website')
												<i class="bi bi-globe"></i> website
											@endif
										</a>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</section>

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
	</main><!-- End #main -->
@endsection