@extends('layouts.master')
@section('title', 'Tag Update')

@section('content')
    <form action="{{ route('admin.PostTag.update',$editdata->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h4 class="card-title mb-0">
                        Update
                        <small class="text-muted"> Post Catgory</small>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" value="{{ old('title', $editdata->name) }}" id="exampleInputEmail1" name="title"
                                aria-describedby="emailHelp">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Title</label>
                            <input type="text" required name="meta_title" class="form-control" value="{{ old('meta_title', $editdata->meta_title) }}"
                                id="exampleInputPassword1">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Keyword</label>
                            <input type="text" required name="meta_keyword" class="form-control" value="{{ old('meta_keyword', $editdata->meta_keyword) }}"
                                id="exampleInputPassword1">
                            @error('meta_keyword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Description</label>
                            <textarea required name="meta_description" class="form-control" rows="3">{{ old('meta_description', $editdata->meta_description) }}</textarea>
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
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>
@endsection
