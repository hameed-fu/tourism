@extends('frontend.layouts.master')
@section('content')
<script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
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
                        <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark white">
            <h1 class="mb-3 white">Update Profile</h1>
            <form action="{{ route('change.profile') }}" method="post" enctype="multipart/form-data" id="review_form">
                @csrf
                <div id="msg"></div>
                <div class="mb-3 mt-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id=""
                        value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3 mt-4">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id=""
                        value="{{ auth()->user()->email  }}">
                </div>
                <div class="mb-3 mt-4">
                    <label for="" class="form-label">Choose Image</label>
                    <input type="file" class="form-control" name="img" id="">
                    <br>
                    <img width="150" src="{{ asset('uploads/users') . '/' . auth()->user()->user_img  }}" alt="">
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Submit">
            </form>
        </div>
    </div>
</div>

<script>
     $(document).ready(function() {
         $("#review_form").submit(function(){
            $.ajax({
                type: "POSt",
                url: "{{ route('change.profile') }}",
                data: $(this).serialize(),

            }).done(function(response) {
                if(response){
                    $("#msg").html(response.message).addClass("alert alert-success")
                }
                $("#review_form")[0].reset()
                    console.log(response)
                }).fail(function(data) {

            });
        })
     })
</script>
@endsection