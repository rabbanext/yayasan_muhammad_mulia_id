@extends('layouts.app')

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="program" class="program d-flex align-items-center">
		<div class="container">
			<div class="content">
				<h1 class="d-block d-md-none">Our Programs</h1>
				<div class="row d-flex align-items-center justify-content-center">
					<div class="col-12 col-lg-7 order-last order-md-last">
						<h1 class="d-none d-md-block">Our Programs</h1>
						<div class="program-tabs">
							<div class="tab">
								<h6>Our current initiatives</h6>
							</div>
							<div class="tab-outline">
								<h6>Programs of Yayasan Muhammad Mulia Indonesia</h6>
							</div>
						</div>
						<p>
							<b>In Education</b>, we focus on improving access to quality education through school construction, mentorship, and e-learning initiatives. 
						</p>
						<p>
							<b>Our Economic Empowerment programs</b> aim to foster sustainable livelihoods by supporting MSMEs, promoting entrepreneurship, and running financial literacy workshops. 
						</p>
						<p>
							<b>Through Research</b>, we drive social innovation, focusing on environmental sustainability, public health, and community development. 
						</p>
						<p>
							<b>Our Humanity programs</b> include providing emergency relief, disaster preparedness training, and healthcare services to those in need. Each program is designed to create lasting change and uplift communities.
						</p>
					</div>
					<div class="col-12 col-lg-5 order-first order-md-last">
						<img src="assets/img/page-program/hero/hero.png" alt="" height="200" width="200">
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
		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container">
			<header class="section-header">
				<p>Our Programs</p>
				<h2>Our current <span>initiatives</span></h2>
			</header>

			<ul id="portfolio-filters">
				<!-- <li data-filter="*" class="filter-active">All</li> -->
				<li data-filter=".filter-education">Education</li>
				<li data-filter=".filter-economic">Economic Empowerment</li>
				<li data-filter=".filter-research">Research</li>
				<li data-filter=".filter-humanity">Humanity</li>
				<li data-filter=".filter-other">Others</li>
			</ul>

			<div class="row gy-4 portfolio-container">
				<div class="col-lg-3 col-md-6 portfolio-item filter-education">
					<div class="box">
						<img src="assets/img/our-program/1.png" alt="">
						<div class="box-content">
							<h6>Education</h6>
							<h5>Muhammad Mulia Boarding School Development</h5>
							<p class="mb-2">
							The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
							</p>
							<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
							<a href="#" class="btn btn-primer mt-4 w-100">DONATE NOW</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-economic">
					<div class="box">
						<img src="assets/img/our-program/1.png" alt="">
						<div class="box-content">
							<h6>Education</h6>
							<h5>Muhammad Mulia Boarding School Development</h5>
							<p class="mb-2">
							The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
							</p>
							<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
							<a href="#" class="btn btn-primer mt-4 w-100">DONATE NOW</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-research">
					<div class="box">
						<img src="assets/img/our-program/1.png" alt="">
						<div class="box-content">
							<h6>Education</h6>
							<h5>Muhammad Mulia Boarding School Development</h5>
							<p class="mb-2">
							The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
							</p>
							<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
							<a href="#" class="btn btn-primer mt-4 w-100">DONATE NOW</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-humanity">
					<div class="box">
						<img src="assets/img/our-program/1.png" alt="">
						<div class="box-content">
							<h6>Education</h6>
							<h5>Muhammad Mulia Boarding School Development</h5>
							<p class="mb-2">
							The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
							</p>
							<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
							<a href="#" class="btn btn-primer mt-4 w-100">DONATE NOW</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-other">
					<div class="box">
						<img src="assets/img/our-program/1.png" alt="">
						<div class="box-content">
							<h6>Education</h6>
							<h5>Muhammad Mulia Boarding School Development</h5>
							<p class="mb-2">
							The initiative began with a land endowment of 9,000 square meters in the heart of Jambi City, and Yayasan Muhammad Mulia Indonesia quickly took the lead in ...
							</p>
							<a href="#" class="text-anchor">Read more <i class="bi bi-arrow-up-right"></i></a>
							<a href="#" class="btn btn-primer mt-4 w-100">DONATE NOW</a>
						</div>
					</div>
				</div>

			</div>

			</div>

		</section><!-- End Portfolio Section -->
	</main><!-- End #main -->
@endsection