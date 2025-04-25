@extends('backend.app')


@section('title','Sub Categories')

@section('content')


<div class="row">
    <div class="col-xl-12 mx-auto col-md-12  px-5">
     
        <div class="d-flex justify-content-between py-4">
            <a class="btn btn-sm btn-danger" href="{{ route('admin.sub.categories') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ route('admin.sub.category.create') }}">Create</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Sub Category Name</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sub_categories as $key=>$sub_category)
                            

                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $sub_category->category->name }}</td>
                            <td>{{ $sub_category->name }}</td>
                            <td>{{ $sub_category->created_at }}</td>
                            <td>
                                <a class="btn btn-sm" href="{{ route('admin.sub.category.edit',$sub_category->id) }}">Edit</a>
                                <a class="btn btn-sm" href="{{ route('admin.sub.category.destroy',$sub_category->id) }}" >Delete</a>
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
