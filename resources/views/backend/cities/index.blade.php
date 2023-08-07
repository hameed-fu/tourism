@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('city.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Cities</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">City Id</th>
                                <th scope="col">City Name</th>
                                <th scope="col">City Image</th>
                                <th scope="col">Province Id</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $city)
                            <tr>
                                <td>{{$city->id}}</td>
                                <td>{{$city->city_name}}</td>
                                <td>{{$city->city_img}}</td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a onclick="return confirm('are you sure?')" href="{{ route('city.delete',$city->id) }}" class="btn btn-sm btn-danger">Delete</a>
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






