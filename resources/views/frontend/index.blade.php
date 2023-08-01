@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        {{-- <h1>Category Form</h1> --}}
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif --}}
        <form action="{{ route('post.save') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1">

                <div class="text-danger ">{{ $errors->first('title') }}</div>
            </div>
            <div>
                <select name="category_id" id="" class="form-control">
                    <option value="">Please Select</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="btn btn-primary" name="" id="">
            </div>
        </form>

        <hr>
        <h2>Posts</h2>

        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $key => $post)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $post->title }}</td>
                    {{-- <td>{{ $post->category->name }}</td> --}}
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('category.edit', $post->id) }}">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this record?')" class="btn btn-danger"
                            href="{{ route('category_delete', $post->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
