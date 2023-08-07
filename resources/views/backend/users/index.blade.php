@extends('backend.layout.index')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Add new</a>
                </div>

            </div>
        </div>
    </section>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <!-- Main cfdontent -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">User Id</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">User Email</th>
                                    <th scope="col">User Image</th>
                                    <th scope="col">User Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->user_name }}</td>
                                        <td>{{ $user->user_email }}</td>
                                        <td>{{ $user->user_img }}</td>
                                        <td>{{ $user->user_address }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a onclick="return confirm('are you sure?')" href="{{ route('user.delete',$user->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
