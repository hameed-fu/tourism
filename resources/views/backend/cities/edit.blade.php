@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update City</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('city.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="{{ $city->city_name }}" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Province</label>
                                <select name="province_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($provinces as $province)
                                        <option {{ $province->id === $city->province_id ? 'selected' : '' }} value="{{ $province->id }}">{{ $province->province_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                <img width="150" src="{{ asset('uploads/cities').'/'.$city->city_img }}" alt="">
                            </div>
                            <input type="hidden" name="id" value="{{ $city->id }}">
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
