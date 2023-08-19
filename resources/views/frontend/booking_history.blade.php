@extends('frontend.layouts.master')
@section('content')

<section class="breadcrumb-main pb-20 pt-14"
    style="background-image: url(http://127.0.0.1:8000/frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0"
        style="background-image: url(http://127.0.0.1:8000/frontend/images/shape8.png);">
    </div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Booking</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Booking History</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">Phone N0</th>
                        <th scope="col">Email</th>
                        <th scope="col">Trip Name</th>
                        <th scope="col">Trip Date</th>
                        <th scope="col">Booking Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $key => $booking)
                    <tr>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->user->user_contact }}</td>
                        <td>{{ $booking->user->email }}</td>
                        <td>{{ $booking->trip->trip_name }}</td>
                        <td>{{ $booking->trip->start_date }}</td>
                        <td>{{ $booking->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection