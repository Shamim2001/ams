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
                        <a href="{{ route('admin.quiz.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.quiz.update',$quiz->id) }}" method="post" class="row" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Quiz Info</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label">Select Category <span class="text-danger fw-bolder">*</span></label>
                                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="">
                                                <option value="" disabled selected>Select Category </option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $quiz->category_id == $category->id ?? old('category_id') == $category->id ? 'selected' : '' }}> {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Title <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="title"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   value="{{ $quiz->title ?? old('title') }}"
                                                   placeholder="Enter Your Tag Name">
                                            @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="mb-3">
                                                    <label for="formrow-inputCity" class="form-label">Quiz End Time <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="datetime-local"
                                                           name="end_time"
                                                           class="form-control @error('end_time') is-invalid @enderror"
                                                           value="{{ $quiz->end_time ?? old('end_time') }}"
                                                           placeholder="Tag Serial Number">
                                                    @error('end_time')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="mb-3">
                                                    <label class="form-label">Quiz Image (100 * 100) <span class="text-danger fw-bolder">*</span></label>
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
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Quiz Details</label>
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5">{!! $quiz->description ?? old('description') !!}</textarea>
                                            @error('description')
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
                                        <h4>Quiz Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <label for="">Video Url <span class="text-danger fw-bolder">*</span></label>
                                            <textarea name="video" class="form-control @error('video') is-invalid @enderror" rows="3">{!! $quiz->video ?? old('video') !!}</textarea>
                                            @error('video')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                            <div class="">
                                                <img class="img-fluid" src="{{ asset($quiz->image) }}" id="showImage" alt="">
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
