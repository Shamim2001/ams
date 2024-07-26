@extends('backend.layout.app')
@section('title',$title)
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
                        <a href="{{ route('admin.company.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.company.update',$company->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Company Info</h4>
                                    </div>
                                    <div class="card-body">

                                        {{-- <div class="mb-3">
                                            <label class="form-label">Company Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="company_name"
                                                   class="form-control @error('company_name') is-invalid @enderror"
                                                   value="{{ $product->company_name ?? old('company_name') }}"
                                                   placeholder="Enter Company Name">
                                            @error('company_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div> --}}


                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ $company->name ?? old('name') }}"
                                                   placeholder="Enter Company Name">
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label class="form-label">Technical Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="technical_name"
                                                   class="form-control @error('technical_name') is-invalid @enderror"
                                                   value="{{ $product->technical_name ?? old('technical_name') }}"
                                                   placeholder="Enter Technical Name">
                                            @error('technical_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div> --}}
                                        <button class="btn btn-primary float-end">Sumbit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Company Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <label for="">Company Image</label>
                                        <label for="image" class="d-block">
                                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                                <div class="">
                                                    <img class="image img-fluid" src="{{ $company->image ? asset($company->image) :" "}}">
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Service Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="description" class="form-control" id="description" rows="10">{!! $company->description ?? old('description') !!}</textarea>
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
