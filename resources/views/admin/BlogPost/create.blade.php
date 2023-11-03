@extends('layouts.master')
@section('title', 'Post Create')

@section('content')
    <form action="{{ route('admin.BlogPost.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h4 class="card-title mb-0">
                        Add 
                        <small class="text-muted"> Post </small>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row mt-4 mb-4">
                    <div class="col">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category</label>
                            <select class="form-select form-control" name="post_category_id" id="post_category_id" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                {{-- @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sub-Category</label>
                            <select class="form-select form-control" name="post_sub_category_id" id="post_sub_category_id" aria-label="Default select example">
                                <option selected>Select Category At first</option>
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tag</label>
                            <select class="form-select form-control" name="tag_id[]" id="select_two" multiple aria-label="Default select example">
                                {{-- @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach --}}

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Thumb. Image</label>
                            <input type="file"  name="thumb_image" class="form-control"
                                   id="exampleInputPassword2" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Banner Image</label>
                            <input type="file"  name="banner_image" class="form-control"
                                   id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea required name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Title</label>
                            <input type="text" required name="meta_title" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Keyword</label>
                            <input type="text" required name="meta_keyword" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Description</label>
                            <textarea required name="meta_description" class="form-control" rows="3"></textarea>
                        </div>
                        
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            {{-- <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.post_banner.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer--> --}}
        </div><!--card-->
    </form>

@endsection
@push('after-scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush

