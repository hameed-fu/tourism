@extends('frontend.layouts.master')
@section('content')
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('frontend/images/bg/bg1.jpg') }});">
    <div class="section-shape section-shape1 top-inherit bottom-0"
        style="background-image: url({{ asset('frontend/images/shape8.png') }});">
    </div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Destinations</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Destinations Lists</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>

<section class="trending pb-0 pt-6">
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Top Destinations</h4>
            <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
        </div>
        <div class="row align-items-center">
            @foreach ($cities as $city)
                
            
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="trend-item1">
                    <div class="trend-image position-relative rounded">
                        <img src="{{ asset('uploads/cities/' . $city->city_img) }}" alt="image">
                        <div
                            class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                            <div class="trend-content-title">
                                <h6 class="mb-0 white">{{$city->province->province_name }}</h6>
                                <h4 class="mb-0 white"><a href="{{ route('city.trips',$city->id) }}" >{{ $city->city_name }}</a></h4>
                            </div>
                        </div>
                        <div class="color-overlay"></div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    
</section>

@endsection