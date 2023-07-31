
    @extends('frontend.layouts.app')

    @section('content')

        <div class="container">
            <h1>Category Form</h1>
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
            <form action="{{ route('category_save') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1">
                    {{-- @error('name')
                        <div class="text-danger ">{{ $message }}</div>
                    @enderror --}}
                    <div class="text-danger ">{{ $errors->first('name') }}</div>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Save" class="btn btn-primary" name="" id="">
                </div>
            </form>

            <hr>
            <h2>Categories</h2>

            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}">Edit</a>
                            <a onclick="return confirm('Are you sure to delete this record?')" class="btn btn-danger"
                                href="{{ route('category_delete', $category->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    @endsection
