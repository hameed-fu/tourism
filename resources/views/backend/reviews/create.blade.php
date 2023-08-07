@extends('backend.layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Review</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Rating</label>
                                <input type="text" class="form-control" name="rating">
                            </div>
                            <div class="form-group">
                                <label for="">Review Date</label>
                                <input type="date" class="form-control" name="reviewtdate">
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
