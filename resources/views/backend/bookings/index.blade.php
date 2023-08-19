@extends('backend.layout.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('booking.create') }}" class="btn btn-primary">Add new</a>
                </div>

            </div>
        </div>
    </section>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <!-- Main cfdontent -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Booking</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User </th>
                                    <th scope="col">Trip</th>
                                    <th scope="col"> Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->id }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->trip->trip_name }}</td>
                                        <td>{{ $booking->date }}</td>
                                        <td>

                                            <div class="dropdown show">
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if ($booking->status == 0)
                                                     <span>Pending</span>
                                                    @elseif ($booking->status == 1)
                                                        <span>Active</span>
                                                    @else
                                                    <span>Completed</span>
                                                    @endif

                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                    <a class="dropdown-item" href="{{ route('booking.status',['id' => $booking->id, 'status' => 0]) }}">Pending</a>
                                                    <a class="dropdown-item" href="{{ route('booking.status',['id' => $booking->id, 'status' => 1]) }}">Active</a>
                                                    <a class="dropdown-item" href="{{ route('booking.status',['id' => $booking->id, 'status' => 2]) }}">Completed</a>


                                                </div>
                                              </div>


                                        </td>
                                        <td>
                                            <a href="{{ route('booking.edit', $booking->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <a onclick="return confirm('are you sure?')"
                                                href="{{ route('booking.delete', $booking->id) }}"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
