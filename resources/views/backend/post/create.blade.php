@extends('backend.app')
@section('title', 'Post Create')

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto col-md-6">

            <div class="d-flex justify-content-between py-4">
                <a class="btn btn-sm btn-danger" href="{{ route('admin.posts') }}">Back</a>
                <a class="btn btn-sm btn-success" href="{{ route('admin.post.create') }}">Create</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <Label>Meta Title</Label>
                            <input class="form-control mb-3" type="text" placeholder="Enter meta_title"
                                name="meta_title">
                            <p style="color: red">

                                {{ $errors->has('meta_title') ? $errors->first('meta_title') : '' }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <Label>Meta Keyword</Label>
                            <input class="form-control mb-3" type="text" placeholder="Enter meta_keyword"
                                name="meta_keyword">
                            <p style="color: red">

                                {{ $errors->has('meta_keyword') ? $errors->first('meta_keyword') : '' }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <Label>Meta Description</Label>
                            <textarea name="meta_description" class="form-control" id="" placeholder="meta description..." rows="3"></textarea>
                            <p style="color: red">

                                {{ $errors->has('meta_description') ? $errors->first('meta_description') : '' }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <Label>Title</Label>
                            <input class="form-control mb-3" type="text" placeholder="Enter title" name="title">
                            <p style="color: red">

                                {{ $errors->has('title') ? $errors->first('title') : '' }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <Label>Image</Label>
                            <input class="form-control mb-3" type="file" name="image">
                            <p style="color: red">

                                {{ $errors->has('image') ? $errors->first('image') : '' }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <Label>Description</Label>

                            <textarea name="description" class="form-control" id="" placeholder="description..." rows="3"></textarea>

                            <p style="color: red">

                                {{ $errors->has('description') ? $errors->first('description') : '' }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <Label>Select Category Name</Label>

                            <select name="category_id" class="form-select form-select-sm mb-3"
                                aria-label=".form-select-sm example">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>

                            <p style="color: red">

                                {{ $errors->has('category_id') ? $errors->first('category_id') : '' }}
                            </p>
                        </div>


                        <button type="submit" class="btn btn-info btn-sm">
                            Create
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
