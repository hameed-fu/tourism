@extends('backend.layout.index')
   @section('content')
         <div class="container">
                <a href="#" class="btn btn-primary mt-5">Trip Form</a>
                <h1 class="text-center">Trip Table</h1>
             <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Trip Id</th>
                            <th scope="col">Trip Name</th>
                            <th scope="col">Trip Start Date</th>
                            <th scope="col">Trip End Date</th>
                            <th scope="col">City ID</th>
                            <th scope="col">Trip Type ID</th>
                            <th scope="col">Transportation ID</th>
                            <th scope="col">Tripfeature ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trips as $trip )
                        <tr>
                            <td>{{$trip->id}}</td>
                            <td>{{$trip->trip_name}}</td>
                            <td>{{$trip->start_date}}</td>
                            <td>{{$trip->end_date}}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
             </div>
             
         </div>
    @endsection