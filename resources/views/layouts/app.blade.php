<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Yayasan Muhammad Mulia Indonesia</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{ asset('img/favicon.png') }}" rel="icon">
	<link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<!-- ======= Header ======= -->
	<div class="top-header">
		<div class="container">
			<div class="content">
				<p class="text-white">Committed to creating a better future</p>
				<div class="social-links">
					<!-- <a href="#" class="text-white"><i class="bi bi-facebook"></i></a> -->
					<a href="https://www.instagram.com/yammicenter/" class="text-white"><i class="bi bi-instagram"></i></a>
					<a href="https://wa.me/6281210001010/" class="text-white"><i class="bi bi-whatsapp"></i></a>
					<!-- <a href="#" class="text-white"><i class="bi bi-tiktok"></i></a> -->
				</div>
			</div>
		</div>
	</div>	
	<header id="header" class="header">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
			<nav id="navbar" class="navbar w-100">
				<a href="/" class="logo d-flex align-items-center">
					<img src="{{ URL::asset('img/logo.png') }}" alt="">
				</a>

				<ul style="z-index: 99;">
					<li><a class="nav-link" href="about-us">About Us</a></li>
					<li><a href="our-programs">Programs</a></li>
					<li><a href="our-services">Services</a></li>
					<li><a class="nav-link" href="our-businesses">Supported Businesses</a></li>
					<li><a class="nav-link" href="our-activities">Activities</a></li>
					<!-- <li><a class="nav-link scrollto" href="#">Contact</a></li> -->
				</ul>

				<div class="d-flex align-items-center">
					<button type="button" class="btn btn-primer d-none d-md-inline me-3" data-bs-toggle="modal" data-bs-target="#donateModal">Donate Now</button>
					<!-- <a class="btn btn-primer d-none d-md-inline me-3" href="#about">Donate Now</a> -->
					<!-- <div class="lang-dropdown" style="z-index: 2;">
						<button class="btn bg-none dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ URL::asset('img/header/' . app()->getLocale() . '.png') }}" alt="" style="border-radius: 8px; width: 30px;">
						</button>
						<ul>
							<li>
								<a class="dropdown-item" href="{{ route('switch-language', 'id') }}">
									<img src="{{ URL::asset('img/header/id.png') }}" alt="" style="border-radius: 8px; width: 30px;">&nbsp; Bahasa Indonesia
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ route('switch-language', 'en') }}">
									<img src="{{ URL::asset('img/header/en.png') }}" alt="" style="border-radius: 8px; width: 30px;">&nbsp; English
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ route('switch-language', 'ar') }}">
									<img src="{{ URL::asset('img/header/ar.png') }}" alt="" style="border-radius: 8px; width: 30px;">&nbsp; Arabic
								</a>
							</li>
						</ul>
					</div> -->
					<i class="bi bi-list mobile-nav-toggle"></i>
				</div>
			</nav><!-- .navbar -->
		</div>
	</header><!-- End Header -->

    @yield('content')

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-5 col-md-12 footer-info">
						<a href="/" class="logo d-flex align-items-center">
							<img src="{{ URL::asset('img/logo.png') }}" alt="">
						</a>
						<p>
							Jalan Tebet Timur Dalam <br>
							Jakarta Selatan, DKI Jakarta<br>
							Indonesia <br><br>
							<strong>Phone:</strong> +62 812 1000 1010<br>
							<strong>Email:</strong> contact@muhammadmulia.id<br>
						</p>
						<div class="social-links mt-3">
							<a href="https://www.instagram.com/yammicenter/" class="instagram"><i class="bi bi-instagram"></i></a>
							<a href="https://wa.me/6281210001010" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-6 footer-links">
						<h4>Supported Businesses</h4>
						<ul>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>Tour & Travel</li>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>Logistic</li>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>Food & Beverage</li>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>Herbal, Pharma, Cosmetic</li>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>IT & Eco-Technology</li>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>Creative Media Production</li>
							<li class="text-white pb-0"><i class="bi bi-chevron-right"></i>Fashion & Souvenir</li>
						</ul>
					</div>

					<div class="col-lg-3 col-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="about-us">About us</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="our-programs">Program</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="our-services">Services</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="our-business">Supported Business</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="our-activities">Activities</a></li>
							<!-- <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Yayasan Muhammad Mulia Indonesia</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				Designed by <a href="https://muhammadmulia.id/">YAMMI IT</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<!-- Donate Modal -->
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
					<h3 class="mt-5">7777756677</h3>
					<input type="text" value="7777756677" id="norek" hidden>
					<p class="mt-0">a.n. Muhammad Mulia Indonesia</p>
					<button onclick="salinNorek()" class="btn btn-sm btn-primer mb-4">Copy account number</button>
					<p>Every small step can make a big difference. With your donation, we can help more people, transform lives, and bring new hope.</p>
				</div>
			</div>
		</div>
	</div><!-- End Donate Modal -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{ URL::asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
	<script src="{{ URL::asset('vendor/aos/aos.js') }}"></script>
	<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>

	<!-- Template Main JS File -->
	<script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>