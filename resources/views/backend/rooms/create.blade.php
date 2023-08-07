@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Room</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Room N0</label>
                                <input type="number" class="form-control" name="roomno">
                            </div>
                            <div class="form-group">
                                <label for="">Ocuupancy</label>
                                <input type="number" class="form-control" name="occupancy">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="">Availability</label>
                                <input type="text" class="form-control" name="availabillity">
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
