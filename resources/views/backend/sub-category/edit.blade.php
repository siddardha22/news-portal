@extends('backend.app')

@section('title','Sub Category Edit')
@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto col-md-6">

            <div class="d-flex justify-content-between py-4">
                <a class="btn btn-sm btn-danger" href="{{ route('admin.sub.categories') }}">Back</a>
                <a class="btn btn-sm btn-success" href="{{ route('admin.sub.category.create') }}">Create</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.sub.category.update',$sub_categories->id) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                        <input class="form-control mb-3" type="text" placeholder="Enter Name" name="name" value="{{ $sub_categories->name }}">
                        <p style="color: red">
                            
                            {{ $errors->has('name')?$errors->first('name'):'' }}
                        </p>
                    </div>
                        <div class="mb-3">
                            <Label>Select Category Name</Label>

                            <select name="category_id" class="form-select form-select-sm mb-3"
                                aria-label=".form-select-sm example">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if($sub_categories->category_id == $category->id)  selected @endif>{{ $category->name }}</option>
                                @endforeach

                            </select>

                            <p style="color: red">

                                {{ $errors->has('category_id') ? $errors->first('category_id') : '' }}
                            </p>
                        </div>

                        <button type="submit" class="btn btn-info btn-sm">
                            Update
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
