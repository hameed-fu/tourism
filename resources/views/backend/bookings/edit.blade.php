@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Booking</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('booking.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="date" value="{{ $booking->date }}">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="status" value="{{ $booking->status }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="">User</label>
                                <select name="user_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($users as $user)
                                        <option {{ $user->id===$booking->user_id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip</label>
                                <select name="trip_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($trips as $trip)
                                        <option {{ $trip->id===$booking->trip_id ? 'selected' : '' }} value="{{ $trip->id }}">{{ $trip->trip_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="id" value="{{ $booking->id }}">
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
