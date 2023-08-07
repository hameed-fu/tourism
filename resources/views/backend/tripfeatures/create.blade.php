@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Trip Features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Day</label>
                                <input type="number" class="form-control" name="day">
                            </div>
                            <div class="form-group">
                                <label for="">Itenary</label>
                                <input type="text" class="form-control" name="itenary">
                            </div>
                            <div class="form-group">
                                <label for="">Night Stay</label>
                                <input type="text" class="form-control" name="stay">
                            </div>
                            <div class="form-group">
                                <label for="">Spot</label>
                                <input type="text" class="form-control" name="spot">
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
