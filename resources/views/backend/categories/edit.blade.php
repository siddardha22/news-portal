@extends('backend.app')

@section('title','Category Edit')
@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto col-md-6">

            <div class="d-flex justify-content-between py-4">
                <a class="btn btn-sm btn-danger" href="{{ route('admin.categories') }}">Back</a>
                <a class="btn btn-sm btn-success" href="{{ route('admin.category.create') }}">Create</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                        @csrf
                        <input class="form-control mb-3" type="text" placeholder="Enter Name" name="name" value="{{ $category->name }}">
                        <p style="color: red">
                            
                            {{ $errors->has('name')?$errors->first('name'):'' }}
                        </p>

                        <button type="submit" class="btn btn-info btn-sm">
                            Update
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
