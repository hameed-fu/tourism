@extends('frontend.layouts.master')
 @section('content')
 <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(http://127.0.0.1:8000/frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(http://127.0.0.1:8000/frontend/images/shape8.png);">
    </div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Review</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Review</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="" method="">
        <h1 class="text-cnter">Review Your Trips</h1>
        <div class="mb-3">
           <div class="mb-3">
             <label for="" class="form-label">Comments</label>
             <textarea class="form-control" name="comment" id="" rows="3"></textarea>
           </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">5 stars</label>
            <input type="number" class="form-control" name="star" id="">
        </div>
        <div class="form-group">
            <label for="">Trips</label>
            <select name="trip_id" id="" class="form-control form-select">
                <option value="">Please Select</option>
                @foreach ($bookings as $booking)
                    <option value="{{ $booking->trip->id }}">{{ $booking->trip->trip_name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary mt-3">Save</button>
    </form>
</div>


 @endsection