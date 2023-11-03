@extends('layouts.master')
@section('title', 'Tag ADD')

@section('content')
    <form action="{{ route('admin.PostTag.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h4 class="card-title mb-0">
                        Add
                        <small class="text-muted"> Post Tag</small>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tag Title</label>
                            <input type="text" value="{{ old('title') }}" class="form-control" id="exampleInputEmail1" name="title"
                                aria-describedby="emailHelp">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tag Meta Title</label>
                            <input type="text" value="{{ old('meta_title') }}"  name="meta_title" class="form-control"
                                id="exampleInputPassword1">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tag Meta Keyword</label>
                            <input type="text" value="{{ old('meta_keyword') }}"  name="meta_keyword" class="form-control"
                                id="exampleInputPassword1">
                            @error('meta_keyword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tag Meta Description</label>
                            <textarea  name="meta_description" class="form-control" rows="3">{{ old('meta_description') }}</textarea>
                            @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    {{-- <div class="col text-right">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div><!--col--> --}}
                    <div class="btn-group d-flex justify-content-between btn-group-sm" role="group" aria-label="Option">
                        
                        {{-- <a href="" class="btn btn-success m-1">Add</a>
                        <a href="{{ route('admin.PostCategory.index') }}"  class="btn btn-danger m-1">Back</a> --}}

                        <button type="submit" class="btn btn-success m-1">Add</button>
                        <a href="{{ route('admin.PostTag.index') }}" class="btn btn-danger m-1">Back</a>

                    </div>
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>
@endsection
