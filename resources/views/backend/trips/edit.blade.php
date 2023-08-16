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
                        <form action="{{ route('trip.update') }}" method="post" enctype="multipart/form-data">
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
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" value="{{ $trip->price }}">
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <select name="city_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($cities as $city)
                                        <option {{ $city->id === $trip->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip Type</label>
                                <select name="triptype_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($triptypes as $triptype)
                                        <option {{ $triptype->id === $trip->triptype_id ? 'selected' : '' }} value="{{ $triptype->id }}">{{ $triptype->triptype_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Transports</label>
                                <select name="transportation_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($transports as $transport)
                                        <option {{ $transport->id === $trip->transportation_id ? 'selected' : '' }} value="{{ $transport->id }}">{{ $transport->transport_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="">No of Days</label>
                                <select name="" id="days" class="form-control form-select">
                                    @for ($i = 1; $i <= 30; $i++)
                                        <option value="{{  }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div> --}}
                            <hr>
                            <div id="features">
                                @php
                                    $tripfeatures = App\Models\TripFeature::where('trip_id',$trip->id)->get();
                                @endphp
                                  @foreach ($tripfeatures as $key => $tripfeature)
                                  
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="">Day</label>
                                                <input type="number" value="{{ $tripfeature->day}}" class="form-control" name="day[]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Itinerary</label>
                                                <input type="text"  value="{{ $tripfeature->itenary}}" class="form-control" name="itinerary[]">
                                            </div>
                                        </div>
                    
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Night Stay</label>
                                                <input type="text" value="{{ $tripfeature->nightstay}}" class="form-control" name="stay[]">
                                            </div>
                                        </div>
                    
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Spot</label>
                                                <input type="text" value="{{ $tripfeature->spot}}" class="form-control" name="spot[]">
                                            </div>
                                        </div>
                                      </div>
                                  
                                  @endforeach
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description"  id="" cols="30" rows="5" >{{$trip->trip_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                <img width="150" src="{{ asset('uploads/trips').'/'.$trip->trip_img }}" alt="">
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

    <script>
            

    </script>