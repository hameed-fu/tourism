@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Transport</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('transport.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Transport Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $transport->transport_name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Transport Model</label>
                                <input type="number" class="form-control" name="model" value="{{ $transport->transport_model }}">
                            </div>
                            <div class="form-group">
                                <label for="">N0 Seats</label>
                                <input type="number" class="form-control" name="seats" value="{{ $transport->no_seats }}">
                            </div>
                            <input type="hidden" name="id" value="{{ $transport->id }}">
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
