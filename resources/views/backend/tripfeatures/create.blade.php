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
                        <form action="{{ route('tripfeature.add') }}" method="post">
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
                            <div class="form-group">
                                <label for="">Trip</label>
                                <select name="trip_id" id="" class="form-control form-select">
                                    <option value="">Please Select</option>
                                    @foreach ($trips as $trip)
                                        <option value="{{ $trip->id }}">{{ $trip->trip_name}}</option>
                                    @endforeach
                                </select>
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
