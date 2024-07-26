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
                        <a href="{{ route('admin.service.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Service Info</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Title <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="title"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   value="{{ old('title') }}"
                                                   placeholder="Enter Your Tag Name">
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Short Description</label>
                                            <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" rows="5">{!! old('short_description') !!}</textarea>
                                            @error('short_description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Service Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Service Icon (50 * 50) <span class="text-danger fw-bolder">*</span></label>
                                                <input type="file"
                                                       id="icon"
                                                       name="icon"
                                                       onchange="prevImage();"
                                                       class="form-control @error('icon') is-invalid @enderror">
                                                @error('icon')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Service Image (440 * 295) <span class="text-danger fw-bolder">*</span></label>
                                                <input type="file"
                                                       id="image"
                                                       name="image"
                                                       onchange="prevImage();"
                                                       class="form-control @error('image') is-invalid @enderror">
                                                @error('image')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Service Banner (440 * 295) <span class="text-danger fw-bolder">*</span></label>
                                                <input type="file"
                                                       id="banner"
                                                       name="banner"
                                                       onchange="prevImage();"
                                                       class="form-control @error('banner') is-invalid @enderror">
                                                @error('banner')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                            <div class="">
                                                <img class="img-fluid" id="showImage" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Service Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="description" class="form-control" id="description" rows="10">{!! old('description') !!}</textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary float-end">Sumbit</button>
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
@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
