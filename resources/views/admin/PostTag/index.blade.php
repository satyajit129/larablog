@extends('layouts.master')

@section('title', 'Tag')
@section('content')
    <div class="card">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Post Tag
                        <small class="text-muted"> View All</small>
                    </h4>
                </div><!--col-->
                <div class="col-sm-7">
                    <div class="btn-toolbar float-end" role="toolbar">
                        <a href="{{ route('admin.PostTag.create') }}" class="btn btn-success ml-1" data-toggle="tooltip"
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
                            @foreach($post_tags as $tags)

                              <tr>
                                <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                <td class="text-center align-middle">{{ $tags->name }}</td>
                                <td class="text-center align-middle"><details>{{ $tags->meta_title }}</details></td>
                                <td class="text-center align-middle"><details>{{ $tags->meta_keyword }}</details></td>
                                <td class="text-center align-middle"><details>{{ $tags->meta_description }}</details></td>
                                <td class="text-center align-middle">{{ $tags->status == 1? "Yes":"No" }}</td>
                                <td class="btn-td text-center align-middle">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                                        <a href="{{ route('admin.PostTag.edit',['id'=>$tags->id]) }}" class="btn btn-success m-1">Edit</a>
                                        <a href="{{ route('admin.PostTag.destroy',$tags->id) }}" onclick="return confirm('Are you really want to delete the data ?')" class="btn btn-danger m-1">Delete</a>
                                    </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>

                          </table>
                    </div>
                </div><!--col-->
            </div><!--row-->

        </div><!--card-body-->
    </div><!--card-->
@endsection