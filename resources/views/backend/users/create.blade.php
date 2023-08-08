@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('user.add') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <input type="text" class="form-control" name="gender">
                            </div>
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="number" class="form-control" name="contact">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <input type="text" class="form-control" name="role">
                            </div>
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
