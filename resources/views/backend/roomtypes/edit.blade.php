@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Room Type</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('roomtype.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Room Type</label>
                                <input type="text" class="form-control" name="roomtype" value="{{ $roomtype->room_type }}">
                            </div>
                            <input type="hidden" name="id" value="{{ $roomtype->id }}">
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
