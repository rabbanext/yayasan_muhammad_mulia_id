@extends('layouts.app')

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="page-about" class="d-flex align-items-center">
		<div class="container">
			<div class="content">
				<h1 class="d-block d-md-none">Our Activities</h1>
				<div class="row d-flex align-items-center justify-content-center">
					<div class="col-12 col-lg-6 order-last order-md-last">
						<h1 class="d-none d-md-block">Our Activities</h1>
						<div class="tab d-inline-flex">
							<h2>YAMMI</h2>
						</div>
					</div>
					<div class="col-12 col-lg-5 order-first order-md-last">
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
								<img src="assets/img/page-program/ecosystem/1.png" alt="" height="100" width="100">
								<p>Education</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="assets/img/page-program/ecosystem/2.png" alt="" height="100" width="100">
								<p>Economic <br> Empowerment</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="assets/img/page-program/ecosystem/3.png" alt="" height="100" width="100">
								<p>Research</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="assets/img/page-program/ecosystem/4.png" alt="" height="100" width="100">
								<p>Humanity</p>
							</div>
							<div class="ecosystem-box mx-2 mt-2">
								<img src="assets/img/page-program/ecosystem/5.png" alt="" height="100" width="100">
								<p>Others</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Ecosystem Section -->

		<!-- ======= Business Section ======= -->
		<section id="activities" class="activities">
			<div class="container">
				<header class="section-header">
					<p>Our Activities</p>
					<h2>Explore our vibrant <span>Activity</span></h2>
				</header>

				<div class="row gy-4">
					@forelse ($activities as $activity)
						<div class="col-lg-3 col-md-6">
							<div class="box">
								<div class="img-container">
									<img  src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}">
									<div class="overlay">
										<p>{{ $activity->title }}</p>
									</div>
								</div>
							</div>
						</div>
					@empty
						<div class="col-lg-3 col-md-6">
							<div class="box">
								<div class="img-container">
									<img src="404" alt="">
									<div class="overlay">
										<p>No Activity Found</p>
									</div>
								</div>
							</div>
						</div>
					@endforelse
				</div>
			</div>
		</section><!-- End Clients Section -->

		<section id="banner">
			<div class="container">
				<img src="assets/img/page-activities/banner.png" class="w-100" alt="">
			</div>
		</section>
	</main><!-- End #main -->
@endsection