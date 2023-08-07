@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('room.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Room</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Room Id</th>
                                <th scope="col">Room N0</th>
                                <th scope="col">Occupancy</th>
                                <th scope="col">Description</th>
                                <th scope="col">Avaialability</th>
                                <th scope="col">Room Type Id</th>
                                <th scope="col">Hotel Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room )
                            <tr>
                                <td>{{$room->id}}</td>
                                <td>{{$room->room_no}}</td>
                                <td>{{$room->occupancy}}</td>
                                <td>{{$room->room_description}}</td>
                                <td>{{$room->availability}}</td>

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








