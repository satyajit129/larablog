@extends('layouts.master')

@section('title', 'SubCategory')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Post SubCatgory
                        <small class="text-muted"> View All</small>
                    </h4>
                </div><!--col-->
                <div class="col-sm-7">
                    <div class="btn-toolbar float-end" role="toolbar">
                        <a href="{{ route('admin.PostSubCategory.create') }}" class="btn btn-success ml-1"
                            data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
                    </div><!--btn-toolbar-->

                </div><!--col-->
            </div><!--row-->
        </div>
        <div class="card-body">


            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">S/N</th>
                                    <th class="text-center align-middle">Title</th>
                                    <th class="text-center align-middle">Category</th>
                                    <th class="text-center align-middle"> Meta title</th>
                                    <th class="text-center align-middle"> Meta keyword</th>
                                    <th class="text-center align-middle"> Meta description</th>
                                    <th class="text-center align-middle">Active</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post_sub_categories as $subcategory)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $subcategory->name }}</td>
                                        <td class="text-center align-middle">{{ $subcategory->category->name }} </td>
                                        <td class="text-center align-middle">
                                            <details>{{ $subcategory->meta_title }}</details>
                                        </td>
                                        <td class="text-center align-middle">
                                            <details>{{ $subcategory->meta_keyword }}</details>
                                        </td>
                                        <td class="text-center align-middle">
                                            <details>{{ $subcategory->meta_description }}</details>
                                        </td>
                                        <td class="text-center align-middle">{{ $subcategory->status == 1 ? 'Active' : 'InActive' }}</td>
                                        <td class="btn-td text-center align-middle">
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                                                <a href="{{ route('admin.PostSubCategory.edit',['id'=>$subcategory->id]) }}" class="btn btn-success m-1">Edit</a>
                                                <a href="{{ route('admin.PostSubCategory.destroy',$subcategory->id) }}" onclick="return confirm('Are you really want to delete the data ?')" class="btn btn-danger m-1">Delete</a>
                                            </div>
        
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
