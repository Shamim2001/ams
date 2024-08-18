@extends('backend.layout.app')
@section('style')
    <style>
        .ql-toolbar.ql-snow {
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
                            <h3 class="">Edit Type</h3>
                        </div>
                        <a href="{{ route('admin.type.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">

                        <form class="row" action="{{ route('admin.type.update', $type->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-7 col-md-7 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="text-white" for="name">টাইপের নাম <span
                                                    class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="name"
                                                class="form-control border-dark @error('name') is-invalid @enderror"
                                                placeholder="Enter type here" value="{{ $type->name }}">

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <hr class="border-dark">
                                        <div class="mt-3 text-end">
                                            <button type="submit" class="btn btn-primary">Create</button>
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
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
