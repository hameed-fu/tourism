@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('hotel.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Hotels</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Hotel Id</th>
                                <th scope="col">No Rooms</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col">Hotel Description</th>
                                <th scope="col">Hotel Image</th>
                                <th scope="col">Location Id</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hotels as $hotel)
                            <tr>
                                <td>{{$hotel->id}}</td>
                                <td>{{$hotel->no_room}}</td>
                                <td>{{$hotel->hotel_name}}</td>
                                <td>{{$hotel->description}}</td>
                                <td>{{$hotel->hotel_img}}</td>
                                <td></td>
                                 <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a onclick="return confirm('are you sure?')" href="{{ route('hotel.delete',$hotel->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
