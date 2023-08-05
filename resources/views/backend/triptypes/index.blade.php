@extends('backend.layout.index')
   @section('content')
         <div class="container">
                <a href="#" class="btn btn-primary mt-5">Trip Type Form</a>
                <h1 class="text-center">Trip Type Table</h1>
             <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Trip Type Id</th>
                            <th scope="col">Trip Type Name</th>
                            <th scope="col">Trip Type Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($triptypes as $triptype )
                        <tr>
                            <td>{{$triptype->id}}</td>
                            <td>{{$triptype->triptype_name}}</td>
                            <td>{{$triptype->triptype_status}}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
             </div>
             
         </div>
    @endsection