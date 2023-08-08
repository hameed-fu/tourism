@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('roomtype.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Room Type</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roomtypes as $roomtype )
                            <tr>
                                <td>{{$roomtype->id}}</td>
                                <td>{{$roomtype->room_type}}</td>
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








