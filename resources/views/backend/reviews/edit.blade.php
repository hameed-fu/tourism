@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Review</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('review.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Rating</label>
                                <input type="number" class="form-control" name="rating" value="{{ $review->rating }}">
                            </div>
                            <div class="form-group">
                                <label for="">Review Date</label>
                                <input type="date" class="form-control" name="reviewdate" value="{{ $review->review_date }}">
                            </div>
                            <div class="form-group">
                                <label for="">Comments</label>
                                <textarea class="form-control" name="comments"  id="" cols="30" rows="5" >{{$review->comments}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">User</label>
                                <select name="user_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($users as $user)
                                        <option {{ $user->id===$review->user_id ? 'selected' :'' }} value="{{ $user->id }}">{{ $user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip</label>
                                <select name="trip_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($trips as $trip)
                                        <option {{ $trip->id===$review->trip_id ? 'selected' :'' }} value="{{ $trip->id }}">{{ $trip->trip_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="id" value="{{ $review->id }}">
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>

                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
