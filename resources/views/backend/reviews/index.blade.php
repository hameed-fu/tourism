@extends('backend.layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{ route('review.create') }}" class="btn btn-primary">Add new</a>
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
                    <h3 class="card-title">Review</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Date</th>
                                <th scope="col">comments</th>
                                <th scope="col">User</th>
                                <th scope="col">Trip</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review )
                            <tr>
                                <td>{{$review->id}}</td>
                                <td>
                                    {{ $review->rating }}
                                    @for ($i=1; $i<=$review->rating; $i++)
                                        <i class="fa fa-star text-warning"></i>
                                    @endfor
                                </td>
                                <td>{{$review->review_date}}</td>
                                <td>{{$review->comments}}</td>
                                <td>{{ $review->user->name }}</td>
                                <td>{{ $review->trip->trip_name }}</td>
                                <td>
                                    <a href="{{ route('review.edit',$review->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a onclick="return confirm('are you sure?')" href="{{ route('review.delete',$review->id) }}" class="btn btn-sm btn-danger">Delete</a>
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




