@extends('backend.layout.index')
   @section('content')
         <div class="container">
                <a href="#" class="btn btn-primary mt-5">Location Form</a>
                <h1 class="text-center">Location Table</h1>
             <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Location Id</th>
                            <th scope="col">Location Name</th>
                            <th scope="col">Location Description</th>
                            <th scope="col">Location Image</th>
                            <th scope="col">City Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                        <tr>
                            <td>{{$location->id}}</td>
                            <td>{{$location->location_name}}</td>
                            <td>{{$location->location_description}}</td>
                            <td>{{$location->location_img}}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
             </div>
             
         </div>
    @endsection