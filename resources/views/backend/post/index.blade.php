@extends('backend.app')


@section('title','Posts')

@section('content')


<div class="row">
    <div class="col-xl-12 mx-auto col-md-12  px-5">

        <div class="d-flex justify-content-between py-4">
            <a class="btn btn-sm btn-danger" href="{{ route('admin.posts') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ route('admin.post.create') }}">Create</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key=>$post)


                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ Str::limit($post->description,100) }}</td>
                            <td>
                                <img width="100" height="100" src="{{ asset($post->image) }}" alt="" srcset="">
                            </td>
                            <td>
                                <a class="btn btn-sm" href="{{ route('admin.post.edit',$post->id) }}">Edit</a>
                                <a class="btn btn-sm" href="{{ route('admin.post.destroy',$post->id) }}" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
