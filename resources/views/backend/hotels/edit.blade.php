@extends('backend.layout.index')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Hotel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('hotel.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">No Rooms</label>
                            <input type="number" class="form-control" name="noroom" value="{{$hotel->no_room}}">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $hotel->hotel_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Facilities</label>
                            <input type="text" class="form-control" name="facility" value="{{ $hotel->facilities }}">
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $hotel->contact }}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $hotel->email }}">
                        </div>
    
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="img">
                            <br>
                            <img width="150" src="{{ asset('uploads/hotels').'/'.$hotel->hotel_img }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="">Price Range</label>
                            <input type="number" class="form-control" name="range" value="{{ $hotel->price_range }}">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <select name="city_id" id="" class="form-control form-select">
                                <option value="">Please Select</option>
                                @foreach ($cities as $city)
                                <option {{ $city->id === $hotel->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->city_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$hotel->description}}</textarea>

                        </div>
                        <input type="hidden" name="id" value="{{ $hotel->id }}">
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