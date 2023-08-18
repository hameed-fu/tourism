@extends('frontend.layouts.master')
@section('content')
<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
        border-radius: 10px;
        /* height: 300px; */
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .text-green-600{
        margin-top: 30px
    }
</style>
    <div class="banner trending overflow-hidden">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{ asset('frontend/images/shape8.png') }});">
        </div>
        <div class="banner-slide">
            <div class="row shop-slider slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track"
                        style="opacity: 1; width: 5992px; transform: translate3d(-3424px, 0px, 0px); transition: transform 2000ms ease 0s;">
                        <div class="col-lg-4 p-0 slick-slide slick-cloned" data-slick-index="-4" id=""
                            aria-hidden="true" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal2.jpg" alt="image"
                                        class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned" data-slick-index="-3" id=""
                            aria-hidden="true" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal3.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned" data-slick-index="-2" id=""
                            aria-hidden="true" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal4.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned" data-slick-index="-1" id=""
                            aria-hidden="true" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal5.jpg" alt="image"
                                        class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide" data-slick-index="0" aria-hidden="true" style="width: 428px;"
                            tabindex="-1">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal1.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 428px;"
                            tabindex="-1">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal2.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide" data-slick-index="2" aria-hidden="true" style="width: 428px;"
                            tabindex="-1">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal3.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal4.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-current slick-active" data-slick-index="4"
                            aria-hidden="false" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal5.jpg" alt="image"
                                        class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned slick-active" data-slick-index="5"
                            id="" aria-hidden="false" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal1.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned slick-active" data-slick-index="6"
                            id="" aria-hidden="false" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal2.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned slick-active" data-slick-index="7"
                            id="" aria-hidden="false" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal3.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned" data-slick-index="8" id=""
                            aria-hidden="true" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal4.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0 slick-slide slick-cloned" data-slick-index="9" id=""
                            aria-hidden="true" tabindex="-1" style="width: 428px;">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('frontend') }}/images/new-deal/deal5.jpg" alt="image"
                                        class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="banner-breadcrum position-absolute top-50 mx-auto w-50 start-50 text-center translate-middle">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-0 white">{{ $trip->trip_name }}</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $trip->trip_name }} Tour Single One</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="trending pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="single-content">
                        <div id="highlight">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1">{{ $trip->trip_name }}</h2>
                                    <div class="rating-main d-md-flex align-items-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i>
                                            {{ $trip->city->city_name }}</p>
                                        <div class="rating me-2">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span>(1,186 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-images mb-4">
                                <img src="{{ asset('uploads/trips').'/'.$trip->trip_img }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="description mb-2">
                                <h4>Description</h4>
                                <p>{{ $trip->trip_description }}</p>
                            </div>

                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="tour-includes mb-4">
                                @auth
                                <div class="d-flex justify-content-end mb-2">
                                    <button class="nir-btn white" id="myBtn">Book Now</button>

                                </div>

                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <h3 class="-xl">Book Your Trip!</h3>

                                        <form action="{{ route('booking.book') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" readonly value="{{ auth()->user()->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" readonly value="{{ auth()->user()->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="text" class="form-control" readonly value="{{ auth()->user()->user_contact }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="date" class="form-control" name="booking_date">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Trip</label>
                                                <input type="text" class="form-control" readonly value="{{ $trip->trip_name }}">
                                            </div>

                                            <div class="form-group">

                                                <input type="hidden" class="form-control" name="trip_id" value="{{ $trip->id }}">
                                            </div>
                                            <input type="submit" value="Submit" class="nir-btn white mt-3">
                                        </form>
                                    </div>

                                </div>
                                @endauth

                                @guest
                                    <div class="d-flex justify-content-end mb-2">
                                        <a href="{{ route('login') }}" class="nir-btn white">Book Now</a>
                                    </div>
                                @endguest




                                <table>
                                    <tbody>
                                        <tr>
                                            <th><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i>Day</th>
                                            <th><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Night Stay</th>
                                            <th><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Itenary</th>
                                            <th><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Spot</th>
                                        </tr>
                                        @foreach ($trip->tripfeatures as $feature)
                                            <tr>
                                                <td>{{ $feature->day }}</td>
                                                <td>{{ $feature->itenary }}</td>
                                                <td>{{ $feature->nightstay }}</td>
                                                <td>{{ $feature->spot }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>



                        <div id="single-comments" class="single-comments single-box mb-4">
                            <h5 class="border-b pb-2 mb-2">Reviews</h5>
                            @foreach ($trip->reviews as $review)
                                <div class="comment-box">
                                    <div class="comment-image">
                                        <img src="images/reviewer/1.jpg" alt="image">
                                    </div>
                                    <div class="comment-content rounded">
                                        <h5 class="mb-1">User name</h5>
                                        <p class="comment-date">{{ $review->review_date }}</p>
                                        <div class="comment-rate">
                                            <div class="rating mar-right-15">
                                                @for ($i = 1; $i <= $review->rating;$i++)
                                                    <span class="fa fa-star checked"></span>
                                                @endfor
                                            </div>

                                        </div>
                                        <p class="comment">comment hereThe worst hotel everThe worst hotel everThe worst hotel everThe worst hotel everThe worst hotel everThe worst hotel ever</p>

                                    </div>
                                </div>
                            @endforeach

                        </div>


                    </div>
                </div>

            </div>

        </div>
    </section>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
