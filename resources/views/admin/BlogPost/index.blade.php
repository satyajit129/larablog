@extends('layouts.master')
@section('title', 'Post ADD')

@section('content')
    <div class="card">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Post 
                        <small class="text-muted"> View All</small>
                    </h4>
                </div><!--col-->
                <div class="col-sm-7">
                    <div class="btn-toolbar float-end" role="toolbar">
                        <a href="{{ route('admin.BlogPost.create') }}" class="btn btn-success ml-1"
                            data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->
        </div>
        <div class="card-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table text-center" id="data_table">
                            <thead>
                                <tr>
                                    <th> S/N </th>
                                    <th> Title </th>
                                    <th> Category Name </th>
                                    <th> Subcategory Name </th>
                                    <th> Thumb Image </th>
                                    <th> Banner Image </th>
                                    <th> Post Description </th>
                                    <th> Meta_title </th>
                                    <th> meta_keyword </th>
                                    <th> Meta Description </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->

        </div><!--card-body-->
    </div><!--card-->
@endsection
