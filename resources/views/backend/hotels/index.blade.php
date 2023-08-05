@extends('backend.layout.index')
   @section('content')
         <div class="container">
                <a href="#" class="btn btn-primary mt-5">Hotel Form</a>
                <h1 class="text-center">Hotel Table</h1>
             <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Hotel Id</th>
                            <th scope="col">No Rooms</th>
                            <th scope="col">Hotel Name</th>
                            <th scope="col">Hotel Description</th>
                            <th scope="col">Hotel Image</th>
                            <th scope="col">Location Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotels as $hotel)
                        <tr>
                            <td>{{$hotel->id}}</td>
                            <td>{{$hotel->no_room}}</td>
                            <td>{{$hotel->hotel_name}}</td>
                            <td>{{$hotel->description}}</td>
                            <td>{{$hotel->hotel_img}}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
             </div>
             
         </div>
    @endsection