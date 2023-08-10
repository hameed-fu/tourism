@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Province</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('province.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $province['province_name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="">Img</label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                <img width="150" src="{{ asset('uploads/provinces').'/'.$province['province_img'] }}" alt="">
                            </div>
                            <input type="hidden" name="id" value="{{ $province['id'] }}">
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
