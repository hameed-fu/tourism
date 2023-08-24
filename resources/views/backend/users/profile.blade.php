@extends('backend.layout.index')
@section('content')
    <div class="justify-content-center align-items-center">
        @foreach ($errors->all() as $error)
        <p class="text-danger">{{ $error }}</p>
     @endforeach

        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header bg-primary my-text-container" style="text-align: left;">
                        <h5> General information</h5>
                    </div>
                    <div class="card-body">


                        <div class="form-group">
                            <form action="{{ route('profile.edit') }}" method="post" enctype="multipart/form-data">
                                @csrf
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

                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.col -->
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header bg-primary my-text-container" style="text-align: left;">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">


                        <div class="form-group">
                            <form action="{{ route('edit.password') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-4">
                                    <label for="" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" name="current_password" id="">
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="">
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="" class="form-label">Retype New Password</label>
                                    <input type="password" class="form-control" name="new_confirm_password" id="">
                                </div>
        
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
