@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Hotel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route("hotel.create") }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">No Rooms</label>
                                <input type="number" class="form-control" name="noroom">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Facilities</label>
                                <input type="text" class="form-control" name="facility">
                            </div>
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="number" class="form-control" name="contact">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="">Img</label>
                                <input type="text" class="form-control" name="img">
                            </div>
                            <div class="form-group">
                                <label for="">Price Range</label>
                                <input type="number" class="form-control" name="range">
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
