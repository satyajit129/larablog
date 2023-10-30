@extends('layouts.master')
@section('title', 'SubCategory ADD')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h4 class="card-title mb-0">
                        Add
                        <small class="text-muted"> Post SubCatgory</small>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Title</label>
                            <input type="text" required name="meta_title" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Meta Keyword</label>
                            <input type="text" required name="meta_keyword" class="form-control"
                                id="exampleInputPassword1">
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
                    {{-- <div class="col text-right">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div><!--col--> --}}
                    <div class="btn-group d-flex justify-content-between btn-group-sm" role="group" aria-label="Option">
                        <a href="" class="btn btn-success m-1">Add</a>
                        <a href=""  class="btn btn-danger m-1">Back</a>
                    </div>
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>
@endsection
