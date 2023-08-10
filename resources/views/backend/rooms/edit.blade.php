@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Room</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('room.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Room N0</label>
                                <input type="number" class="form-control" name="roomno" value="{{ $room->room_no }}">
                            </div>
                            <div class="form-group">
                                <label for="">Ocuupancy</label>
                                <input type="number" class="form-control" name="occupancy" value="{{ $room->occupancy }}">
                            </div>
                            <div class="form-group">
                                <label for="">Availability</label>
                                <input type="text" class="form-control" name="availabillity" value="{{ $room->availability }}">
                            </div>
                            <div class="form-group">
                                <label for="">Room Type</label>
                                <select name="roomtype_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($roomtypes as $roomtype)
                                        <option {{ $roomtype->id===$room->roomtype_id ? 'selected' :"" }} value="{{ $roomtype->id }}">{{ $roomtype->room_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Hotel</label>
                                <select name="hotel_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($hotels as $hotel)
                                        <option  {{ $hotel->id===$room->hotel_id ? 'selected' :"" }}  value="{{ $hotel->id }}">{{ $hotel->hotel_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" value="{{ $room->room_description}}" name="description" id="" cols="30" rows="5"></textarea>

                            </div>
                            <input type="hidden" name="id" value="{{ $room->id }}">
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
