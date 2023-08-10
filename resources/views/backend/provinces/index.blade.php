@extends('backend.layout.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('province.create') }}" class="btn btn-primary">Add new</a>
                </div>

            </div>
        </div>
    </section>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <!-- Main cfdontent -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Provinces</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provinces as $province)
                                    <tr>
                                        <td>{{ $province->id }}</td>
                                        <td><img width="150" src="{{ asset('uploads/provinces').'/'.$province->province_img }}" alt=""></td>
                                        <td>{{ $province->province_name }}</td>
                                        <td>
                                            <a href="{{ route('province.edit',$province->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <a onclick="return confirm('are you sure?')" href="{{ route('province.delete',$province->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
