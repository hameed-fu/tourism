@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Trip</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('trip.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Trip Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $trip->trip_name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="startdate" value="{{ $trip->start_date }}">
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" class="form-control" name="enddate" value="{{ $trip->end_date }}">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="status" value="{{ $trip->status }}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description" value="{{ $trip->trip_description }}">
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <select name="city_id" id="" class="form-control">
                                    <option value="">Please Select</option>
                                    @foreach ($cities as $city)
                                        <option {{ $city->id === $trip->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip Type</label>
                                <select name="triptype_id" id="" class="form-control">
                                    <option value="">▽ Please Select</option>
                                    @foreach ($triptypes as $triptype)
                                        <option {{ $triptype->id === $trip->triptype_id ? 'selected' : '' }} value="{{ $triptype->id }}">{{ $triptype->triptype_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Transports</label>
                                <select name="transportation_id" id="" class="form-control">
                                    <option value="">▽ Please Select</option>
                                    @foreach ($transports as $transport)
                                        <option {{ $transport->id === $trip->transportation_id ? 'selected' : '' }} value="{{ $transport->id }}">{{ $transport->transport_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="id" value="{{ $trip->id }}">
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
