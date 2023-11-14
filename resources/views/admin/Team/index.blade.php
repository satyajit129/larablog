@extends('layouts.master')

@section('title', 'Team')
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
                        Team Member
                        <small class="text-muted"> View All</small>
                    </h4>
                </div><!--col-->
                <div class="col-sm-7">
                    <div class="btn-toolbar float-end" role="toolbar">
                        <a href="{{ route('admin.Team.create') }}" class="btn btn-success ml-1" data-toggle="tooltip"
                           title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
                    </div><!--btn-toolbar-->

                </div><!--col-->
            </div><!--row-->
        </div>
        <div class="card-body">
            

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">S/N</th>
                                    <th class="text-center align-middle">Picture</th>
                                    <th class="text-center align-middle">Name</th>
                                    <th class="text-center align-middle">Email</th>
                                    <th class="text-center align-middle"> Position </th>
                                    <th class="text-center align-middle"> About Member</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)

                              <tr>
                                <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                <td><img src="{{ asset('storage/images/' . $team->picture) }}" width="50px" height="60px" alt="Member picture"></td>
                                <td class="text-center align-middle">{{ $team->name }}</td>
                                <td class="text-center align-middle">{{ $team->email }}</td>
                                <td class="text-center align-middle">{{ $team->Position }}</td>
                                <td class="text-center align-middle">{{ $team->about_member }}</td>
                                <td class="btn-td text-center align-middle">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                                        <a href="{{ route('admin.Team.edit',['id'=>$team->id]) }}" class="btn btn-success m-1">Edit</a>
                                        <a href="{{ route('admin.Team.destroy',$team->id) }}" onclick="return confirm('Are you really want to delete the data ?')" class="btn btn-danger m-1">Delete</a>
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