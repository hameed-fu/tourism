@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <h1>Update Category</h1>

        <form action="{{ route('cat.update') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" value="{{ $category->name }}"
                    class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1">
                <input type="hidden" value="{{ $category->id }}" name="id" id="">
                <div class="text-danger ">{{ $errors->first('name') }}</div>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="btn btn-primary" name="" id="">
            </div>
        </form>

    </div>
@endsection
