@extends('layouts.app')

@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="page-about" class="d-flex align-items-center">
		<div class="container">
			<div class="content">
				<h1 class="d-block d-md-none">About Yayasan Muhammad Mulia Indonesia</h1>
				<div class="row d-flex align-items-center justify-content-center">
					<div class="col-12 col-lg-6 order-last order-md-last">
						<h1 class="d-none d-md-block">About <br> Yayasan Muhammad Mulia Indonesia</h1>
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
		<section id="about">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 col-lg-6">
						<img src="{{ URL::asset('img/page-about/1.png') }}" class="img-fluid rounded" alt="...">
					</div>
					<div class="col-12 col-lg-6">
						<header class="section-header text-start">
							<p>About Us</p>
							<h3>About <br> Yayasan Muhammad Mulia Indonesia (YAMMI)</h3>
						</header>
						<p>
							Yayasan Muhammad Mulia Indonesia (YAMMI) is a non-profit organization dedicated to creating positive change through four key pillars: education, economic empowerment, research, and Humanity efforts. We focus on empowering communities by providing quality educational access, skills training, and support for research and Humanity initiatives. With the spirit of ukhuwah islamiyah, we strive to build a self-reliant and competitive civil society. Join us in this journey to realize shared aspirations and make a meaningful impact on the world.
						</p>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12 col-lg-6">
						<header class="section-header text-start">
							<h3>Our Values</h3>
						</header>
						<img src="{{ URL::asset('img/page-about/impact.png') }}" class="img-fluid mb-4" alt="...">
						<p class="my-2"><b>Integrity</b> - Upholding the highest ethical standards and honesty in all our actions.</p>
						<p class="my-2"><b>Motivation</b> - Driven by a passion to make a positive difference and achieve our mission.</p>
						<p class="my-2"><b>Perseverance</b> - Demonstrating resilience and determination in the face of challenges.</p>
						<p class="my-2"><b>Accountability</b> - Upholding the highest ethical standards and honesty in all our actions.</p>
						<p class="my-2"><b>Compassion</b> - Upholding the highest ethical standards and honesty in all our actions.</p>
						<p class="my-2"><b>Teamwork</b> - Upholding the highest ethical standards and honesty in all our actions.</p>
					</div>
					<div class="col-12 col-lg-6">
						<header class="section-header text-start">
							<h3>Legal Permit</h3>
						</header>
						<p>
							Deed of Establishment: Ministry of Law and Human Rights Decree Number AHU-00079.AH.02.01 of 2015
						</p>
						<p>
							Deed of Amendment: Ministry of Law and Human Rights Decree Number AHU-0003346.AH.01.04 of 2020
						</p>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12 col-lg-4 left order-2 order-md-1 p-0">
						<div class="vision">
							<h3>Our Vision</h3>
							<p>
								Yayasan Muhammad Mulia Indonesia (YAMMI) is a non-profit organization dedicated to creating posi.
							</p>
						</div>
					</div>
					<div class="col-12 col-lg-4 d-flex align-items-center justify-content-center order-1 order-md-2 p-0">
						<img src="{{ URL::asset('img/hero-logo.png') }}" style="height: 300px" alt="...">
					</div>
					<div class="col-12 col-lg-4 right order-3 p-0">
						<div class="mission">
							<h3>Our Mission</h3>
							<div class="mission-item">
								<img src="{{ URL::asset('img/page-about/vision/1.png') }}" alt="">
								<p>To provide quality educational access for children and communities in need.</p>
							</div>
							<div class="mission-item">
								<img src="{{ URL::asset('img/page-about/vision/2.png') }}" alt="">
								<p>To promote economic empowerment through training and empowerment programs.</p>
							</div>
							<div class="mission-item">
								<img src="{{ URL::asset('img/page-about/vision/3.png') }}" alt="">
								<p>To support research and innovation that positively impacts society.</p>
							</div>
							<div class="mission-item">
								<img src="{{ URL::asset('img/page-about/vision/4.png') }}" alt="">
								<p>To disseminate Humanity values and assist those in need around the world.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="ecosystem rounded mb-5">
					<div class="container">
						<div class="row d-flex align-items-center px-5">
							<div class="col-lg-4 col-md-12 mb-5 mb-md-0">
								<h3 class="text-warning mb-1">Connecting Hearts,</h3>
								<h3>Spreading the Lights</h3>
							</div>
							<div class="col-lg-4 d-none d-lg-block">
								<div class="ox"></div>
							</div>
							<div class="col-lg-4 col-md-12">
								<p>Yayasan Muhammad Mulia Indonesia</p>
							</div>
						</div>
					</div>
				</div>
				<header class="section-header">
					<p>About Us</p>
					<h3>Board Profile</h3>
				</header>
				<div class="row mb-5">
					<div class="col-12 col-lg-6">
						<h2>Chairman of the Advisory Board of YAMMI</h2>
						<h2>Ust. H. M. Irawan Taqwa, Lc., M.M.</h2>
						<p class="my-5">
							Ustadz Taqwa focuses on preaching to develop the empowerment of the community since adolescence. Ustadz Taqwa's vision is to establish a civil society community that is self-reliant and able to stand on its own feet with the spirit of ukhuwah islamiyah (Islamic brotherhood).
						</p>
						<div class="row">
							<div class="col-12 col-lg-6">
								<h3>
									Personal Information
								</h3>
								<p>Ust. H. Muhammad Irawan Taqwa, Lc., M.M.</p>
								<p>Ustadz Taqwa</p>
								<p>Palembang, July 5, 1977</p>

								<h3>
									Education
								</h3>
								<p><b>Bachelor's Degree</b> - Al-Azhar University, Cairo, Egypt</p>
								<p><b>Master's Degree</b> - Bina Darma University, Palembang, Indonesia</p>
							</div>
							<div class="col-12 col-lg-6">
								<h3>
									Organization
								</h3>
								<p class="mb-0"><b>Secretary General of DPP JATTI</b></p>
								<p>(Indonesian Middle Eastern Alumni Network Central Board)</p>
								<p class="mb-0"><b>Vice Chairman of DPP PEKNAS Network Central Board</b></p>
								<p>(National People's Economic Strengthening)</p>
								<p class="mb-0"><b>General Treasurer of YP3I</b></p>
								<p>(Indonesian Islamic Boarding School Role Strengthening Foundation)</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<img src="{{ URL::asset('img/page-about/ustadztaqwa.png') }}" class="img-fluid rounded w-100" alt="Ust. H. Muhammad Irawan Taqwa, Lc., M.M.">
					</div>
				</div>
				<div class="container">
					<img src="{{ URL::asset('img/page-activities/banner.png') }}" class="w-100" alt="" style="width: 100%; margin: 60px 0; box-shadow: 0px 0px 15px rgba(48, 48, 48, 0.1); border-radius: 24px">
				</div>
			</div>
		</section>
	</main><!-- End #main -->
@endsection