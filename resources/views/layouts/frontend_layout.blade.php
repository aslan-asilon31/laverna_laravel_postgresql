<!DOCTYPE html>
<html lang="en">
<head>
<title>Laverna</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Laverna">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/animate.css') }}">
<link href="{{ asset('assets/frontend/plugins/jquery-datepicker/jquery-ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/frontend/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/responsive.css') }}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Laverna</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="#">Rooms</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>


                        {{-- // CART --}}
                        <li>
                            <a href="" >
                                <span class="badge rounded-pill bg-danger" style="color:white;"> 0 </span>
                                <svg
                                    width="24"
                                    height="20"
                                    viewBox="0 0 24 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M7.5 6.39167V5.58334C7.5 3.70834 9.31 1.86667 11.56 1.69167C14.24 1.47501 16.5 3.23334 16.5 5.42501V6.57501"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-miterlimit="10"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    />
                                    <path
                                    d="M3.81007 13.8001L4.04007 15.3584C4.26007 16.9917 4.98007 18.3334 9.00007 18.3334H15.0001C19.0201 18.3334 19.7401 16.9917 19.9501 15.3584L20.7001 10.3584C20.9701 8.32508 20.2701 6.66675 16.0001 6.66675H8.00007C3.73007 6.66675 3.03007 8.32508 3.30007 10.3584"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-miterlimit="10"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    />
                                    <path
                                    d="M15.4955 9.99992H15.5045"
                                    stroke="white"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    />
                                    <path
                                    d="M8.49451 9.99992H8.50349"
                                    stroke="white"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    />
                                </svg>
                                </button>
                                <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasExample"
                                >
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                        {{-- // END CART --}}


					</ul>
				</nav>
				<div class="book_button"><a href="booking.html">Book Online</a></div>
				<div class="header_phone d-flex flex-row align-items-center justify-content-center">
					<img src="{{ asset('assets/frontend/images/phone.png') }}" alt="">
					<span>0183-12345678</span>
				</div>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="#">Rooms</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>

                    {{-- // CART --}}
                    <button class="btn btn-transparent">
                        <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M9.58342 1.66675C13.9584 1.66675 17.5001 5.20842 17.5001 9.58342C17.5001 13.9584 13.9584 17.5001 9.58342 17.5001C5.20842 17.5001 1.66675 13.9584 1.66675 9.58342C1.66675 6.50008 3.42508 3.83341 6.00008 2.52508"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            />
                            <path
                            d="M18.3334 18.3334L16.6667 16.6667"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            />
                        </svg>
                        </button>
                        <button class="btn btn-transparent">
                        <span class="badge rounded-pill bg-danger" style="color:white;"> 0 </span>
                        <svg
                            width="24"
                            height="20"
                            viewBox="0 0 24 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M7.5 6.39167V5.58334C7.5 3.70834 9.31 1.86667 11.56 1.69167C14.24 1.47501 16.5 3.23334 16.5 5.42501V6.57501"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            />
                            <path
                            d="M3.81007 13.8001L4.04007 15.3584C4.26007 16.9917 4.98007 18.3334 9.00007 18.3334H15.0001C19.0201 18.3334 19.7401 16.9917 19.9501 15.3584L20.7001 10.3584C20.9701 8.32508 20.2701 6.66675 16.0001 6.66675H8.00007C3.73007 6.66675 3.03007 8.32508 3.30007 10.3584"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            />
                            <path
                            d="M15.4955 9.99992H15.5045"
                            stroke="white"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            />
                            <path
                            d="M8.49451 9.99992H8.50349"
                            stroke="white"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            />
                        </svg>
                        </button>
                        <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample"
                        >
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    {{-- // END CART --}}
				</ul>
			</nav>
		</div>
		<div class="menu_extra">
			<div class="menu_book text-right"><a href="#">Book online</a></div>
			<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
				<img src="{{ asset('assets/frontend/images/phone-2.png') }}" alt="">
				<span>0183-12345678</span>
			</div>
		</div>
	</div>

    @yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo_container text-center">
							<div class="footer_logo">
								<a href="#"></a>
								<div>Laverna</div>
								<div>since 1945</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer_row">
					
					<!-- Address -->
					<div class="col-lg-3">
						<div class="footer_title">Our Address</div>
						<div class="footer_list">
							<ul>
								<li>Beach Str. 345</li>
								<li>67559 Miami</li>
								<li>USA</li>
							</ul>
						</div>
					</div>

					<!-- Reservations -->
					<div class="col-lg-3">
						<div class="footer_title">Reservations</div>
						<div class="footer_list">
							<ul>
								<li>Tel: 345 5667 889</li>
								<li>Fax; 6783 4567 889</li>
								<li>reservations@hotelriver.com</li>
							</ul>
						</div>
					</div>

					<!-- Newsletter -->
					<div class="col-lg-3">
						<div class="footer_title">Newsletter</div>
						<div class="newsletter_container">
							<form action="#" class="newsletter_form" id="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your email address" required="required">
								<button class="newsletter_button">Subscribe</button>
							</form>
						</div>
					</div>

					<!-- Footer images -->
					<div class="col-lg-3">
						<div class="certificates d-flex flex-row align-items-start justify-content-lg-between justify-content-start flex-lg-nowrap flex-wrap">
							<div class="cert"><img src="{{ asset('assets/frontend/images/cert_1.png') }}" alt=""></div>
							<div class="cert"><img src="{{ asset('assets/frontend/images/cert_2.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	</footer>
</div>

@yield('js')

<script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/jquery-datepicker/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
</body>
</html>