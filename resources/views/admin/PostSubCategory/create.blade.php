@extends('layouts.master')
@section('title', 'Sub Category ADD')

@section('content')
    <form  action="{{ route('admin.PostSubCategory.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card">
        <div class="card-body">
            Post SubCategory Add
            <hr>
            <div class="row mt-4 mb-4">
                <div class="col">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text"  class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category</label>
                            <select class="form-select form-control" name="post_category_id" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
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
