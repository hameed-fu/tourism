@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('user.update') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $users['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $users['email'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                <img width="150" src="{{ asset('uploads/users').'/'.$users['user_img'] }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" value="{{$users['password'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <input type="text" class="form-control" name="gender" value="{{ $users['gender'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="number" class="form-control" name="contact" value="{{ $users['user_contact'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $users['user_address'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <input type="text" class="form-control" name="role" value="{{ $users['user_role'] }}">
                            </div>
                            <input type="hidden" name="id" value="{{ $users['id'] }}">
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>

                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
