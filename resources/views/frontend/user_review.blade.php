@extends('frontend.layouts.master')
 @section('content')
 <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(http://127.0.0.1:8000/frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(http://127.0.0.1:8000/frontend/images/shape8.png);">
    </div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Review</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Review</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
 <table>
    <tbody>
        <tr>
            <th><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i>Col 1</th>
            <th><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Col 2</th>
            <th><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Col 3</th>
            <th><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Col 4</th>
        </tr>
        
    </tbody>
</table>

 @endsection