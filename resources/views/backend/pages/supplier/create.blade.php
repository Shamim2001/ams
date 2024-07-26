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
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Submit All Information</p>
                        </div>
                        <a href="{{ route('admin.supplier.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.supplier.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Select Country <span class="text-danger fw-bolder">*</span></label>
                                            <select id="cars" class="form-control" name="country" id="country">
                                                @foreach ($countrys as $country)
                                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                                @endforeach
                                            </select>

                                            {{-- <div class="mb-3" id="otherctn">
                                                <label for="">Company Name</label>
                                                <input type="text" class="form-control">
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div> --}}

                                            {{-- <input type="text" name="country_name" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Enter country name">
                                            @error('country_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror --}}
                                        </div>

                                        <div class="mb-3">
                                            <label for="">Company Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" name="company_name" placeholder="Enter company name">
                                            @error('company_name')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                          <div class="mb-3">
                                            <label class="form-label">Company Website <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="company_website" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Enter company Website name">
                                            @error('company_website') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="">Company Logo</label>
                                            <input type="file" class="form-control" id="logo" name="logo" onchange="prevImage();" class="form-control @error('logo') is-invalid @enderror">
                                            @error('logo')<small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Serial </label>
                                            <input type="number" class="form-control @error('serial') is-invalid @enderror" value="{{ old('serial') }}" name="serial" placeholder="Enter number">
                                            @error('serial')<small class="text-danger">{{ $message }}</small>@enderror
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
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

    <script>


            $(document).on('change', '#countrjy', function() {
                alert('ss');

            })



    </script>
@endsection
@section('script')

@endsection
