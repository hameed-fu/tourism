@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('tripfeature.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Trip Features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Trip Feature Id</th>
                                <th scope="col">Trip Day</th>
                                <th scope="col">Trip Itinary</th>
                                <th scope="col">Night Stay</th>
                                <th scope="col">Spot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tripfeatures as $tripfeature )
                            <tr>
                                <td>{{$tripfeature->id}}</td>
                                <td>{{$tripfeature->day}}</td>
                                <td>{{$tripfeature->itenary}}</td>
                                <td>{{$tripfeature->nightstay}}</td>
                                <td>{{$tripfeature->spot}}</td>
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








