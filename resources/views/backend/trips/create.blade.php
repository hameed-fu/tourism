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
                        <form action="{{ route('trip.add') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Trip Name</label>
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
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="status">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <select name="city_id" id="" class="form-control">
                                    <option value="">Please Select</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip Type</label>
                                <select name="triptype_id" id="" class="form-control">
                                    <option value="">Please Select</option>
                                    @foreach ($triptypes as $triptype)
                                        <option value="{{ $triptype->id }}">{{ $triptype->triptype_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Transports</label>
                                <select name="transportation_id" id="" class="form-control">
                                    <option value="">Please Select</option>
                                    @foreach ($transports as $transport)
                                        <option value="{{ $transport->id }}">{{ $transport->transport_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trip Feature</label>
                                <select name="tripfeature_id" id="" class="form-control">
                                    <option value="">Please Select</option>
                                    @foreach ($tripfeatures as $tripfeature)
                                        <option value="{{ $tripfeature->id }}">{{ $tripfeature->id}}</option>
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
