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
                <h1 class="mb-3">Profile</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<div class="container">
    <h1 class="mb-3">My Profile</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td><img width="150" src="{{ asset('uploads/users').'/'.$user->user_img }}" alt=""></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->user_contact }}</td>
                            <td>
                                <a href="{{ route('update.profile',$user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection