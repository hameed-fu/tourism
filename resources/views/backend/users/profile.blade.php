@extends('backend.layout.index')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class=" d-flex justify-content-center align-items-center">

    <div class="row">
        <div class="col-md-5 mt-3 ml-3 mr-3 bg-white">
            <div class="card-header bg-primary mt-3 my-text-container" style="text-align: left;">
                <h5> General information</h5>
            </div>

            <div class="form-group">
                <form action="{{ route('profile.edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Choose Image</label>
                        <input type="file" class="form-control" name="img" id="">
                        <br>
                                <img width="150" src="{{ asset('uploads/users').'/'.$user->user_img }}" alt="">
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-5 mt-3 ml-3 bg-white">
            <div class="card-header bg-primary mt-3 my-text-container" style="text-align: left;">
                <h5>Change Password</h5>
            </div>
            <div class="form-group">
                <form action="{{ route('edit.password') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Old Password</label>
                        <input type="password" class="form-control" name="old_password" id="">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="new_password" id="">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Retype New Password</label>
                        <input type="password" class="form-control" name="renew_password" id="">
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>




@endsection