@extends('layouts.master')

@section('title', 'SubCategory')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Post SubCatgory
                        <small class="text-muted"> View All</small>
                    </h4>
                </div><!--col-->
                <div class="col-sm-7">
                    <div class="btn-toolbar float-end" role="toolbar">
                        <a href="{{ route('admin.PostSubCategory.create') }}" class="btn btn-success ml-1" data-toggle="tooltip"
                            title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
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
                                    <th class="text-center align-middle"> Meta title</th>
                                    <th class="text-center align-middle"> Meta keyword</th>
                                    <th class="text-center align-middle"> Meta description</th>
                                    <th class="text-center align-middle">Active</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
