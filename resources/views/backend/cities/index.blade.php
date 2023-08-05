@extends('backend.layout.index')
   @section('content')
         <div class="container">
                <a href="#" class="btn btn-primary mt-5">City Form</a>
                <h1 class="text-center">City Table</h1>
             <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">City Id</th>
                            <th scope="col">City Name</th>
                            <th scope="col">City Image</th>
                            <th scope="col">Province Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                        <tr>
                            <td>{{$city->id}}</td>
                            <td>{{$city->city_name}}</td>
                            <td>{{$city->city_img}}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
             </div>
             
         </div>
    @endsection