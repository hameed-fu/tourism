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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">No Rooms</th>
                                <th scope="col">Description</th>
                                <th scope="col">City</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hotels as $hotel)
                            <tr>
                                <td>{{$hotel->id}}</td>
                                <td>{{$hotel->hotel_name}}</td>
                                <td><img width="150" src="{{ asset('uploads/hotels').'/'.$hotel->hotel_img }}" alt=""></td>
                                <td>{{$hotel->no_room}}</td>
                                <td>{{$hotel->description}}</td>
                                <td>{{ $hotel->city->city_name }}</td>
                                 <td>
                                    <a href="{{ route('hotel.edit',$hotel->id) }}" class="btn btn-sm btn-warning">Edit</a>
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
