@extends('backend.layout.app')
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
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.slider.store') }}" method="post" class="row" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Slider Info</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="">Slider Title</label>
                                            <textarea name="title"
                                                      class="form-control @error('title') is-invalid @enderror"
                                                      rows="2">{!! old('title') !!}</textarea>
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Slider Title Two
                                            <!--<span class="text-danger fw-bolder">*</span>   -->
                                            </label>
                                            <textarea name="title_two"
                                                      class="form-control @error('title') is-invalid @enderror"
                                                      rows="2"></textarea>
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Slider Short Description<span class="text-danger fw-bolder">*</span></label>
                                            <textarea name="description"
                                                      class="form-control @error('description') is-invalid @enderror"
                                                      rows="2">{!! old('description') !!}</textarea>
                                            @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Slider Image (1920 * 600)  <span class="text-danger fw-bolder">*</span></label>
                                            <input type="file"
                                                   id="image"
                                                   name="image"
                                                   onchange="prevImage();"
                                                   class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Redirect URL
                                            <!--<span class="text-danger fw-bolder">*</span>-->
                                            </label>
                                            <input type="text"
                                                   name="url"
                                                   value="{{ $slider->url ?? old('$url') }}"
                                                   class="form-control @error('url') is-invalid @enderror">
                                            @error('url')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Slider Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                            <div class="">
                                                <img class="img-fluid" id="showImage" alt="">
                                            </div>
                                        </div>
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
