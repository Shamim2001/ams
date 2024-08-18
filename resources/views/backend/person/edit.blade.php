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
                            <h3 class="">Edit Person</h3>
                        </div>
                        <a href="{{ route('admin.person.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">

                        <form class="row" action="{{ route('admin.person.update', $person->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="text-white" for="name">রোগীর নাম <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="name"
                                                        class="form-control border-dark @error('name') is-invalid @enderror"
                                                        placeholder="Enter patient name" value="{{ $person->name }}">

                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="text-white" for="age">বয়স <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="number" name="age"
                                                        class="form-control border-dark @error('age') is-invalid @enderror"
                                                        placeholder="Enter patient age" value="{{ $person->age }}">

                                                    @error('age')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="text-white" for="name">জেন্ডার <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <select name="gender" class="form-select border-dark" id="gender">
                                                        <option value="">Enter select gender</option>
                                                        <option value="male" {{ $person->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                        <option value="female" {{ $person->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                    </select>

                                                    @error('gender')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="text-white" for="father_name">পিতার নাম <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="father_name"
                                                        class="form-control border-dark @error('father_name') is-invalid @enderror"
                                                        placeholder="Enter patient father name" value="{{ $person->father_name }}">

                                                    @error('father_name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="text-white" for="phone">নাম্বার <span
                                                            class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="phone"
                                                        class="form-control  border-dark @error('phone') is-invalid @enderror"
                                                        placeholder="Enter patient phone" value="{{ $person->phone }}">

                                                    @error('phone')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="text-white" for="address">ঠিকানা
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <textarea class="form-control border-dark" name="address" id="address" rows="4">{{ $person->address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="text-white" for="upazila">থানা/উপজেলা
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="upazila"
                                                        class="form-control border-dark @error('upazila') is-invalid @enderror"
                                                        placeholder="Enter upazila name" value="{{ $person->upazila }}">

                                                    @error('upazila')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="text-white" for="zila">জেলা
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="zila"
                                                        class="form-control border-dark @error('zila') is-invalid @enderror"
                                                        placeholder="Enter zila name" value="{{ $person->zila }}">

                                                    @error('zila')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="text-white" for="division">বিভাগ
                                                        <span class="text-danger fw-bolder">*</span></label>
                                                    <input type="text" name="division"
                                                        class="form-control border-dark @error('division') is-invalid @enderror"
                                                        placeholder="Enter division name" value="{{ $person->division }}">

                                                    @error('division')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="text-end mt-3">
                                                <button type="submit" class="btn btn-primary">Update</button>
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
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
