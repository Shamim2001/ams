@extends('backend.layout.app')
@section('style')
    <style>
        .ql-toolbar.ql-snow {
            background: white !important;
        }

        .ck-editor__editable_inline {
            min-height: 400px;
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
                            {{-- <h2 class="font-bold">{{ $title }}</h2> --}}
                            <p class="">All Information</p>
                        </div>
                        <a href="{{ route('admin.investigation.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.investigation.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <h4 class="font-bold">{{ __('Create Patient') }}</h4>
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="name">রোগীর নাম <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="Enter patient name">

                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="age">বয়স <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="number" name="age"
                                                        class="form-control @error('age') is-invalid @enderror"
                                                        placeholder="Enter patient age">

                                                    @error('age')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="name">জেন্ডার <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <select name="gender" class="form-select" id="gender">
                                                        <option value="">Enter select gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>

                                                    @error('gender')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="father_name">পিতার নাম <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="father"
                                                        class="form-control @error('father_name') is-invalid @enderror"
                                                        placeholder="Enter patient father name">

                                                    @error('father_name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="village">গ্রাম/বাড়ি নং
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="village"
                                                        class="form-control @error('village') is-invalid @enderror"
                                                        placeholder="Enter patient village name">

                                                    @error('village')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="post_office">ডাকঘর
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="post_office"
                                                        class="form-control @error('post_office') is-invalid @enderror"
                                                        placeholder="Enter post office name">

                                                    @error('post_office')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="upzila">থানা/রোড
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="upzila"
                                                        class="form-control @error('upzila') is-invalid @enderror"
                                                        placeholder="Enter post office name">

                                                    @error('upzila')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="zila">জেলা
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="zila"
                                                        class="form-control @error('zila') is-invalid @enderror"
                                                        placeholder="Enter post office name">

                                                    @error('zila')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="telephone">টেলিফোন নিজ
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="telephone"
                                                        class="form-control @error('telephone') is-invalid @enderror"
                                                        placeholder="Enter telephone">

                                                    @error('telephone')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="Telephone_request">টেলিফোন অনুরোধ
                                                        <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="Telephone_request"
                                                        class="form-control @error('Telephone_request') is-invalid @enderror"
                                                        placeholder="Enter Telephone_request">

                                                    @error('gender')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
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
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
