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
                        <a href="{{ route('admin.category.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Category Info</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Category Name</label>
                                                <input type="text"
                                                       name="name"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       value="{{ old('name') }}"
                                                       placeholder="Enter Your Tag Name">
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Serial Number</label>
                                                        <input type="number"
                                                               name="serial"
                                                               class="form-control @error('serial') is-invalid @enderror"
                                                               value="{{ old('serial') }}"
                                                               min="1"
                                                               placeholder="Tag Serial Number">
                                                        @error('serial')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category Image (100 * 100)</label>
                                                        <input type="file"
                                                               id="image"
                                                               name="image"
                                                               onchange="prevImage();"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary float-end">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Category Image</h4>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
