@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Trip Type</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('triptype.add') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Trip Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="status">
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
