@extends('frontend.layouts.master')
@section('content')
<section class="banner overflow-hidden">
    <div class="slider top50">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image: url(frontend/images/slider/1.jpg)"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <h5 class="entry-category mb-0 white">Amazing Places</h5>
                            </div>
                            <h1 class="mb-2">
                                <a href="tour-single.html" class="white">Make Your Trip Fun & Noted</a>
                            </h1>
                            <p class="white mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua
                            </p>
                            <a href="tour-single.html" class="nir-btn">Discover More</a>
                        </div>
                        <div class="dot-overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image: url(frontend/images/slider/2.jpg)"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <h5 class="entry-category mb-0 white">Explore Travel</h5>
                            </div>
                            <h1 class="mb-2">
                                <a href="tour-single.html" class="white">Start Planning Your Dream Trip</a>
                            </h1>
                            <p class="white mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua
                            </p>
                            <div class="slider-button d-flex justify-content-center">
                                <a href="tour-single1.html" class="nir-btn me-4">Read More</a>
                                <a href="tour-single.html" class="nir-btn-black">Contact Us</a>
                            </div>
                        </div>
                        <div class="dot-overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image: url(frontend/images/slider/3.jpg)"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <h5 class="entry-category mb-0 white">Road To Travel</h5>
                            </div>
                            <h1 class="mb-2">
                                <a href="tour-single.html" class="white">Begin your adventure with us</a>
                            </h1>
                            <p class="white mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua
                            </p>
                            <a href="tour-single.html" class="nir-btn">Make An Enquiry</a>
                        </div>
                        <div class="dot-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>


<section class="trending pb-5 pt-0">
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Top Destinations</h4>
            <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>

        </div>
        <div class="row align-items-center">


            @foreach ($citeis as $key => $city)
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">


                <div class="trend-item1">
                    <div class="trend-image position-relative rounded">
                        <img src="{{ asset('uploads/cities').'/'.$city->city_img }}" alt="image">
                        <div
                            class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                            <div class="trend-content-title">

                                <h3 class="mb-0 white">
                                    <a href="{{ route('city.trips',$city->id) }}" class="white">{{ $city->city_name }}</a>
                                </h3>
                            </div>
                            {{-- <span class="white bg-theme p-1 px-2 rounded">18 Tours</span> --}}
                        </div>
                        <div class="color-overlay"></div>
                    </div>
                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>


<section class="trending pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-between mb-6 ">
            <div class="col-lg-7">
                <div class="section-title text-center text-lg-start">
                    <h4 class="mb-1 theme1">Top Pick</h4>
                    <h2 class="mb-1">Best <span class="theme">Trips</span></h2>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
        <div class="trend-box">
            <div class="row item-slider">
                @foreach ($trips as $key => $trip)
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item rounded box-shadow">
                        <div class="trend-image position-relative">
                            <img src="{{ asset('uploads/trips').'/'.$trip->trip_img }}" alt="image" class>
                            <div class="color-overlay"></div>
                        </div>
                        <div class="trend-content p-4 pt-5 position-relative">
                            <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                <div class="entry-author">
                                    <i class="icon-calendar"></i>
                                    @php
                                    $startDate = Carbon\Carbon::parse($trip->start_date);
                                    $endDate = Carbon\Carbon::parse($trip->end_date);
                                    $difference = $startDate->diff($endDate);
                                    $daysDifference = $difference->days;
                                    @endphp
                                    <span class="fw-bold">{{$daysDifference}}Days Tours</span>
                                </div>
                            </div>
                            <h3 class="mb-1"><a href="{{ route('trip.detail',$trip->id) }}">{{ $trip->trip_name }}</a></h3>
                            <div class="rating-main d-flex align-items-center pb-2">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>



<section class="our-team pb-6">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">

            <h2 class="mb-1">Famous<span class="theme">Hotels</span></h2>
        </div>
        <div class="team-main">
            <div class="row shop-slider">
                @foreach ($hotels as  $key => $hotel )
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="{{ asset('uploads/hotels').'/'.$hotel->hotel_img }}" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white"><a href="{{ route('hotel.detail',$hotel->id) }}" class="mb-0 white">{{ $hotel->hotel_name }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="frontend/images/team/img2.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Horke Pels</h4>
                            <p class="mb-0 white">Head Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="frontend/images/team/img4.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Solden kalos</h4>
                            <p class="mb-0 white">Supervisor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="frontend/images/team/img3.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Nelson Bam</h4>
                            <p class="mb-0 white">Quality Assurance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="frontend/images/team/img4.jpg" alt="team">
                        </div>
                        <div class="team-content text-center bg-theme p-3">
                            <h4 class="mb-0 white">Cacics Coold</h4>
                            <p class="mb-0 white">Asst. Manager</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection
