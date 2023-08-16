@extends('frontend.layouts.master')
@section('content')

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
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-8 px-4">
                        <div class="form-content-in d-lg-flex align-items-center">
                            <div class="form-group me-2">
                                <div class="input-box">
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group me-2">
                                <div class="input-box">
                                    <select class="form-control form-select">
                                        <option value="1">Destination</option>
                                        <option value="2">Argentina</option>
                                        <option value="3">Belgium</option>
                                        <option value="4">Canada</option>
                                        <option value="5">Denmark</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group mb-0 text-center">
                                <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="trend-box">
                <div class="row item-slider">

                    @foreach ($trips as $key => $trip)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item rounded box-shadow">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('uploads/trips') . '/' . $trip->trip_img }}" alt="image"
                                        class="">
                                    <div class="color-overlay"></div>
                                </div>
                                @php
                                    $startDate = Carbon\Carbon::parse($trip->start_date);
                                    $endDate = Carbon\Carbon::parse($trip->end_date);
                                    $difference = $startDate->diff($endDate);
                                    $daysDifference = $difference->days;
                                @endphp

                                <div class="trend-content p-4 pt-5 position-relative">
                                    <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                        <div class="entry-author">
                                            <i class="icon-calendar"></i>
                                            <span class="fw-bold"> {{ $daysDifference }} Days Tours</span>
                                        </div>
                                    </div>
                                    <h5 class="theme mb-1"><i class="flaticon-location-pin"></i>
                                        {{ $trip->city->city_name }}</h5>
                                    <h3 class="mb-1"><a href="{{ route('trip.detail',$trip->id) }}">{{ $trip->trip_name }}</a></h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ms-2">(12)</span>
                                    </div>
                                    <p class=" border-b pb-2 mb-2">{{ Str::words($trip->trip_description, 20, '...') }}</p>
                                    <div class="entry-meta">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0"><span class="theme fw-bold fs-5"> {{ $trip->price }}</span>
                                                |
                                                Per person
                                            </p>
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
@endsection
