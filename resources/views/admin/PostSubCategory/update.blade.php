@extends('layouts.master')
@section('title', 'SubCategory Edit')

@section('content')
    <form  action="{{ route('admin.PostSubCategory.update',$subcategoryedit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card">
        <div class="card-body">
            Post SubCategory Edit
            <hr>
            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" value="{{ $subcategoryedit->name ? $subcategoryedit->name : old('name') }}" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category</label>
                        <select class="form-select form-control" name="post_category_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $subcategoryedit->post_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('post_category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Meta Title</label>
                        <input type="text" value="{{ $subcategoryedit->meta_title ? $subcategoryedit->meta_title : old('meta_title') }}" required name="meta_title" class="form-control" id="exampleInputPassword1">
                        @error('meta_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Meta Keyword</label>
                        <input type="text" value="{{ $subcategoryedit->meta_keyword ? $subcategoryedit->meta_keyword : old('meta_keyword') }}" required name="meta_keyword" class="form-control" id="exampleInputPassword1">
                        @error('meta_keyword')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Meta Description</label>
                        <textarea required name="meta_description" class="form-control" rows="3">{{ $subcategoryedit->meta_description ? $subcategoryedit->meta_description : old('meta_description') }}</textarea>
                        @error('meta_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div><!--col-->
            </div><!--row-->
            
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="btn-group d-flex justify-content-between btn-group-sm" role="group" aria-label="Option">
                    <button type="submit" class="btn btn-success m-1">Add</button>
                    <a href="{{ route('admin.PostSubCategory.index') }}" class="btn btn-danger m-1">Back</a>

                </div>
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    </form>
@endsection
