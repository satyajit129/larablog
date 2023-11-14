@extends('layouts.master')
@section('title', 'Team Member Update')

@section('content')
    <form action="{{ route('admin.Team.update',$editdata->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h4 class="card-title mb-0">
                        Update
                        <small class="text-muted"> Team Member</small>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" value="{{ old('name',$editdata->name) }}" class="form-control" id="exampleInputEmail1" name="name"
                                aria-describedby="emailHelp">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" value="{{ old('email',$editdata->email) }}"  name="email" class="form-control"
                                id="exampleInputPassword1">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-control">
                                <option value="" disabled>Select a position</option>
                                <option value="manager" {{ old('position', $editdata->position) == 'manager' ? 'selected' : '' }}>Manager</option>
                                <option value="developer" {{ old('position', $editdata->position) == 'developer' ? 'selected' : '' }}>Developer</option>
                                <option value="designer" {{ old('position', $editdata->position) == 'designer' ? 'selected' : '' }}>Designer</option>
                                <option value="analyst" {{ old('position', $editdata->position) == 'analyst' ? 'selected' : '' }}>Analyst</option>
                                <option value="sales" {{ old('position', $editdata->position) == 'sales' ? 'selected' : '' }}>Sales</option>
                                <option value="marketing" {{ old('position', $editdata->position) == 'marketing' ? 'selected' : '' }}>Marketing</option>
                            </select>
                            @error('position')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">About Member</label>
                            <textarea  name="about_member" class="form-control" rows="3">{{ old('about_member',$editdata->about_member) }}</textarea>
                            @error('about_member')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Member Image</label>
                            <input type="file" name="picture" class="form-control" id="exampleInputPassword2"
                                required>
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

                        <button type="submit" class="btn btn-success m-1">Update</button>
                        <a href="{{ route('admin.Team.index') }}" class="btn btn-danger m-1">Back</a>

                    </div>
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>
@endsection
