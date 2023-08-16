@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('trip.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Trips</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">City </th>
                                <th scope="col">Trip Type</th>
                                <th scope="col">Transportation</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trips as $trip )
                            <tr>
                                <td>{{$trip->id}}</td>
                                <td><img width="150" src="{{ asset('uploads/trips').'/'.$trip->trip_img }}" alt=""></td>
                                <td>{{$trip->trip_name}}</td>
                                <td>{{$trip->start_date}}</td>
                                <td>{{$trip->end_date}}</td>
                                <td>{{$trip->price}}</td>
                                <td>{{ Str::words($trip->trip_description, 50, '...') }}</td>
                                <td>{{$trip->city->city_name }}</td>
                                <td>{{ $trip->triptype->triptype_name }}</td>
                                <td>{{ $trip->transport->transport_name }}</td>
                                <td>
                                    <a href="{{ route('trip.edit',$trip->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a onclick="return confirm('are you sure?')" href="{{ route('trip.delete',$trip->id) }}" class="btn btn-sm btn-danger">Delete</a>
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




