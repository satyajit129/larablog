@extends('layouts.master')
@section('title', 'Service ADD')

@section('content')
    <form action="{{ route('admin.Service.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h4 class="card-title mb-0">
                        Add
                        <small class="text-muted"> Services</small>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Service Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword2"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Service Name</label>
                            <input type="text" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" name="name"
                                aria-describedby="emailHelp">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                                      
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Service Descrption</label>
                            <textarea  name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                            @error('description')
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
                        <a href="{{ route('admin.Service.index') }}" class="btn btn-danger m-1">Back</a>

                    </div>
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>
@endsection
