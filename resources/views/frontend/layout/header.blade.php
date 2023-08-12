<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/travelin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 07:01:02 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travelin - Travel Tour Booking HTML Templates</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}">

	<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css">

	<link href="{{ asset('frontend/css/plugin.css') }}" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="{{ asset('../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css') }}">
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
									<a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Home <i class="icon-arrow-down"
											aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index.html">Homepage Default</a></li>
										<li><a href="index-1.html">Homepage 1</a></li>
										<li><a href="index-2.html">Homepage 2</a></li>
										<li><a href="index-3.html">Homepage 3</a></li>
										<li><a href="index-4.html">Homepage 4</a></li>
										<li><a href="index-5.html">Homepage 5</a></li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle d-flex align-items-center"
												data-toggle="dropdown" role="button" aria-haspopup="true"
												aria-expanded="false">Flights <i class="fa fa-angle-right"
													aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="index-flight.html">Flight Homepage</a></li>
												<li><a href="flight-grid.html">Flight Grid</a></li>
												<li><a href="flight-list.html">Flight List</a></li>
												<li><a href="flight-detail.html">Flight Detail</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle d-flex align-items-center"
												data-toggle="dropdown" role="button" aria-haspopup="true"
												aria-expanded="false">Cars <i class="fa fa-angle-right"
													aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="index-car.html">Car Homepage</a></li>
												<li><a href="car-grid.html">Car Grid</a></li>
												<li><a href="car-list.html">Car List</a></li>
												<li><a href="car-detail.html">Car Detail</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle d-flex align-items-center"
												data-toggle="dropdown" role="button" aria-haspopup="true"
												aria-expanded="false">Cruise <i class="fa fa-angle-right"
													aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="index-cruise.html">Cruise Homepage</a></li>
												<li><a href="cruise-grid.html">Cruise Grid</a></li>
												<li><a href="cruise-list.html">Cruise List</a></li>
												<li><a href="cruise-detail.html">Cruise Detail</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="about.html">About Us</a></li>
								<li class="submenu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Destinations <i
											class="icon-arrow-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="destination-list.html">Destination List</a></li>
										<li><a href="destination-detail.html">Destination Detail</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Tours <i class="icon-arrow-down"
											aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Tour List<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="tour-list.html">Tour List Leftsidebar</a></li>
												<li><a href="tour-list1.html">Tour List Rightsidebar</a></li>
												<li><a href="tour-list2.html">Tour List Fullwidth</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Tour Grid<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="tour-grid.html">Tour Grid Leftsidebar</a></li>
												<li><a href="tour-grid1.html">Tour Grid Rightsidebar</a></li>
												<li><a href="tour-grid2.html">Tour Grid Fullwidth</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Tour Single<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="tour-single.html">Tour Single Leftsidebar</a></li>
												<li><a href="tour-single1.html">Tour Single Rightsidebar</a></li>
												<li><a href="tour-single2.html">Tour Single Fullwidth</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Pages <i class="icon-arrow-down"
											aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="team.html">Our Guide</a></li>
										<li><a href="booking.html">Booking</a></li>
										<li><a href="confirmation.html">confirmation</a></li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Services<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="services.html">Services Lists</a></li>
												<li><a href="services-detail.html">Service Detail</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown"
												role="button" aria-haspopup="true" aria-expanded="false">Gallery<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="gallery.html">Gallery</a></li>
												<li><a href="gallery1.html">Gallery Masonry</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="404.html" class="dropdown-toggle" data-toggle="dropdown"
												role="button" aria-haspopup="true" aria-expanded="false">Error<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="404.html">Error Page 1</a></li>
												<li><a href="404-1.html">Error Page 2</a></li>
											</ul>
										</li>
										<li><a href="login.html">Login|Register</a></li>
										<li><a href="comingsoon.html">Coming Soon</a></li>
										<li><a href="testimonials.html">Testimonials</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="dashboard/dashboard.html">Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Blog <i class="icon-arrow-down"
											aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Blog Grid<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="post-grid-1.html">Blog Grid 1</a></li>
												<li><a href="post-grid-2.html">Blog Grid 2</a></li>
												<li><a href="post-grid-3.html">Blog Grid 3</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Blog List<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="post-list-1.html">Blog List 1</a></li>
												<li><a href="post-list-2.html">Blog List 2</a></li>
												<li><a href="post-list-3.html">Blog List 3</a></li>
											</ul>
										</li>
										<li class="submenu dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-haspopup="true" aria-expanded="false">Blog Single<i
													class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="detail-1.html">Blog Single 1</a></li>
												<li><a href="detail-2.html">Blog Single 2</a></li>
												<li><a href="detail-3.html">Blog Single 3</a></li>
											</ul>
										</li>
									</ul>
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