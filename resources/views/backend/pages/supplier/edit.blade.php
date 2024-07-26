@extends('backend.layout.app')
@section('style')
    <style>
        .ql-toolbar.ql-snow{
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
                        <form class="row" action="{{ route('admin.supplier.update',$supplier->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Select Country <span class="text-danger fw-bolder">*</span></label>
                                            <select id="cars" class="form-control" name="country" id="country">
                                                @foreach ($countrys as $country)
                                                    <option value="{{ $country->id }}"  {{ $country->id == $supplier->country_id ? 'selected' : '' }}>{{ $country->country_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ $supplier->company_name ?? old('company_name') }}" placeholder="Enter company name">
                                            @error('company_name')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Company Website <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="company_website" class="form-control @error('title') is-invalid @enderror" value="{{ $supplier->company_website }}" placeholder="Enter company Website name">
                                            @error('company_website') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Company Logo</label>
                                            <input type="file" class="form-control" id="logo" name="logo" onchange="prevImage();" class="form-control @error('logo') is-invalid @enderror">
                                            @error('logo')<small class="text-danger">{{ $message }}</small> @enderror
                                            @if(isset($supplier->logo) && $supplier->logo)
                                            <img class="table-list-image" src="{{ asset('/') }}images/{{ $supplier->logo }}" style="width: 80px; height: 80px">
                                            @else
                                            <img class="table-list-image" src="{{ asset('/') }}assets/frontend/images/no-image.jpg" style="width: 80px; height: 80px">
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Serial </label>
                                            <input type="number" class="form-control @error('serial') is-invalid @enderror" value="{{ old('serial') }}" name="serial" value="{{ $supplier->serial ?? old('serial') }}" placeholder="Enter number">
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
@endsection
@section('script')
@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

@endsection
