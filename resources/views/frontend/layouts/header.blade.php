<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travelin - Travel Tour Booking HTML Templates</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}">

	<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css">

	<link href="{{ asset('frontend/css/plugin.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
	<link rel="stylesheet" href="{{ asset('fonts/line-icons.css') }}" type="text/css">
</head>

<body>

	<div id="preloader">
		<div id="status"></div>
	</div>


	<header class="main_header_area">
		<div class="header-content py-1 bg-theme">
			<div class="container d-flex align-items-center justify-content-between">
				<div class="links">
					<ul>
						<li><a href="#" class="white"><i class="icon-calendar white"></i> Thursday, Mar 26, 2021</a>
						</li>
						<li><a href="#" class="white"><i class="icon-location-pin white"></i> Hollywood, America</a>
						</li>
						<li><a href="#" class="white"><i class="icon-clock white"></i> Mon-Fri: 10 AM – 5 PM</a></li>
					</ul>
				</div>
				<div class="links float-right">
					<ul>
						<li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="header_menu" id="header_menu">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

						<div class="navbar-header">
							<a class="navbar-brand" href="index.html">
								<img src="{{ asset('frontend/images/logo.png') }}" alt="image">
							</a>
						</div>

						<div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" id="responsive-menu">
								<li class="dropdown submenu active">
									<a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Home <i class="icon-arrow-down"
											aria-hidden="true"></i></a>
								</li>
								<li><a href="{{ route('frontend.aboutus') }}">About Us</a></li>
								<li class="submenu dropdown">
									<a href="{{ route('all.cities') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Destinations <i
											class="icon-arrow-down" aria-hidden="true"></i></a>
								</li>
								<li class="submenu dropdown">
									<a href="{{ route('all.trip') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Tours <i class="icon-arrow-down"
											aria-hidden="true"></i></a>
								</li>
								<li class="submenu dropdown">
									<a href="{{ route('all.hotel') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Hotels <i class="icon-arrow-down"
											aria-hidden="true"></i></a>

								</li>
								<li class="submenu dropdown">
									<a href="{{ route('contact.us') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Contact Us <i class="icon-arrow-down"
											aria-hidden="true"></i></a>

								</li>

								<li class="search-main"><a href="#search1" class="mt_search"><i
											class="fa fa-search"></i></a></li>
							</ul>
						</div>
						<div class="register-login d-flex align-items-center">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
								<i class="icon-user"></i> Login/Register
							</a>
							<a href="#" class="nir-btn white">Book Now</a>
						</div>
						<div id="slicknav-mobile"></div>
					</div>
				</div>
			</nav>
		</div>

	</header>
