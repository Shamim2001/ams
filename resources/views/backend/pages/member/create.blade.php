@extends('backend.layout.app')
@section('style')
    <style>
        .ql-toolbar.ql-snow{
            background: white !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Submit All Information</p>
                        </div>
                        <a href="{{ route('admin.team-member.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.team-member.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Member Info</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ old('name') }}"
                                                   placeholder="Enter Member Name">
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Position Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="position"
                                                   class="form-control @error('position') is-invalid @enderror"
                                                   value="{{ old('position') }}"
                                                   placeholder="Enter Member Position Name">
                                            @error('position')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="mdi mdi-facebook"></i></div>
                                                    <input type="text" name="fb_url" class="form-control" placeholder="FB URL">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="mdi mdi-youtube"></i></div>
                                                    <input type="text" name="youtube_url" class="form-control" placeholder="Youtube URL">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="mdi mdi-instagram"></i></div>
                                                    <input type="text" name="insta_url" class="form-control" placeholder="Instagram URL">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary float-end">Sumbit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Member Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <label for="">Member Image</label>
                                        <label for="image" class="d-block">
                                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                                <div class="">
                                                    <img class="image img-fluid">
                                                    <input type="file"
                                                           id="image"
                                                           onchange="prevImage('image');"
                                                           class="sr-only"
                                                           name="image">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
