@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Booking</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('booking.add') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="status">
                            </div>
                    
                            <div class="form-group">
                                <label for="">User</label>
                                <select name="user_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="">Trip</label>
                                <select name="trip_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($trips as $trip)
                                        <option value="{{ $trip->id }}">{{ $trip->trip_name}}</option>
                                    @endforeach
                                </select>
                            </div>
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
