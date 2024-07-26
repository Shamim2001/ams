@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All Members . There Have Total {{ $members->count() }} Members</p>
                        </div>
                        <a href="{{ route('admin.team-member.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Member</th>
                                <th>Social Media</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($members as $member)
                                <tr>
                                    <td>#{{ $loop->iteration  }}</td>
                                    <td>
                                        <a href="{{ route('admin.team-member.show',$member->id) }}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 align-self-center me-3">
                                                    <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                        <img src="{{ $member->image ? asset($member->image) : defaultImage($member->name) }}" class="rounded img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">{{ $member->name ?? '' }}</h5>
                                                    <p class="text-muted mb-0">{{ $member->created_at->diffForHumans() ?? '' }}</p>
                                                    <p>Position : {{ $member->position ?? "" }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        @if($member->fb_url)
                                        <a href="{{ $member->fb_url }}" class="btn btn-primary"><i class="mdi mdi-facebook"></i></a>
                                        @endif
                                        @if($member->youtube_url)
                                            <a href="{{ $member->youtube_url }}"  class="btn btn-danger"><i class="mdi mdi-youtube"></i></a>
                                        @endif
                                        @if($member->insta_url)
                                            <a href="{{ $member->insta_url }}" class="btn btn-info"><i class="mdi mdi-instagram"></i></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.team-member.edit',$member->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $member->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.team-member.destroy',$member->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$member->id}}">@csrf @method('DELEte')</form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="p-5 text-center">
                                            <h1 class="display-4 font-bold">No Data Found</h1>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
