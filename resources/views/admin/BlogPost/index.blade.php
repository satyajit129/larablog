@extends('layouts.master')
@section('title', 'Post ADD')

@section('content')
    <div class="card">
        @if (session()->has('success'))
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
                                    <th> Meta title </th>
                                    <th> meta keyword </th>
                                    <th> Meta Description </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($posts as $post)
                                    
                                
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td> <details> {{ $post->category->name }}</details> </td>
                                    <td> <details> {{ $post->subcategory->name }}</details> </td>
                                    <td><img src="{{ asset('storage/images/' . $post->thumb_image) }}" width="50px" alt="Thumbnail Image"></td>
                                    <td><img src="{{ asset('storage/images/' . $post->banner_image) }}" width="50px" alt="Banner Image"></td>
                                    <td> <details> {!! $post->description  !!}</details> </td>
                                    <td> <details> {{ $post->meta_title }}</details> </td>
                                    <td> <details> {{ $post->meta_keyword }}</details> </td>
                                    <td> <details> {{ $post->meta_description }}</details> </td>
                                    <td>{{ $post->status == 1? "Active":"InActive" }}</td>

                                    <td class="btn-td">                                                                             
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                                            {{-- <a href="{{ route('admin.BlogPost.show',$post->id)}}" class="btn btn-info m-1">Show</a> --}}
                                            <a href="{{ route('admin.BlogPost.edit',$post->id) }}" class="btn btn-success m-1">Edit</a>
                                            <a href="{{ route('admin.BlogPost.destroy',$post->id) }}"onclick="return confirm('Are you really want to delete the data ?')" class="btn btn-danger m-1">Delete</a>
            
                                         </div>

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                            
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
            

        </div><!--card-body-->
    </div><!--card-->
@endsection
