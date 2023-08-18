@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Location</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('location.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $location->location_name }}">
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <select name="city_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($cities as $city)
                                        <option {{ $city->id === $location->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                <img width="150" src="{{ asset('uploads/locations').'/'.$location->location_img }}" alt="">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control"name="description" id="" cols="30" rows="5">{{$location->location_description}}</textarea>

                            </div>
                            <input type="hidden" name="id" value="{{ $location->id }}">
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
