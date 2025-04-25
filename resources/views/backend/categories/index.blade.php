@extends('backend.app')


@section('title','Categories')

@section('content')


<div class="row">
    <div class="col-xl-12 mx-auto col-md-12  px-5">
     
        <div class="d-flex justify-content-between py-4">
            <a class="btn btn-sm btn-danger" href="{{ route('admin.categories') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ route('admin.category.create') }}">Create</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key=>$category)
                            

                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a class="btn btn-sm" href="{{ route('admin.category.edit',$category->id) }}">Edit</a>
                                <a class="btn btn-sm" href="{{ route('admin.category.destroy',$category->id) }}" >Delete</a>
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
