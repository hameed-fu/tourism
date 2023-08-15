@extends('backend.layout.index')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Trip</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('trip.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="startdate">
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" class="form-control" name="enddate">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                            <div class="form-group">
                                <label for="">City</label>
                                <select name="city_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip Type</label>
                                <select name="triptype_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($triptypes as $triptype)
                                        <option value="{{ $triptype->id }}">{{ $triptype->triptype_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Transports</label>
                                <select name="transportation_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($transports as $transport)
                                        <option value="{{ $transport->id }}">{{ $transport->transport_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">No of Days</label>
                                <select name="" id="days" class="form-control form-select">
                                    @for ($i = 1; $i <= 30; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <hr>
                            <div id="features">

                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="img">
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

    <script>
       $("#days").on('change', function() {
            var day = $(this).val();
            var html = '';

            for (i = 1; i <= day; i++) {
                html += `
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="">Day</label>
                            <input type="number" value="${i}" readonly  class="form-control" name="day[]">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Itinerary</label>
                            <input type="text" class="form-control" name="itinerary[]">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Night Stay</label>
                            <input type="text" class="form-control" name="stay[]">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Spot</label>
                            <input type="text" class="form-control" name="spot[]">
                        </div>
                    </div>
                </div>`;
            }

            $("#features").html(html);
        });

    </script>
@endsection
