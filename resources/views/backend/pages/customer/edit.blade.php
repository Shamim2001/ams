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
                        <a href="{{ route('admin.customer.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.customer.update',$customer->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Customer Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="customer_name" class="form-control @error('title') is-invalid @enderror" value="{{ $customer->customer_name }}" placeholder="Enter customer name">
                                            @error('customer_name') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Customer Website <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="customer_website" class="form-control @error('title') is-invalid @enderror" value="{{ $customer->customer_website }}" placeholder="Enter customer Website name">
                                            @error('customer_website') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Company Logo</label>
                                            <input type="file" class="form-control" id="logo" name="logo" onchange="prevImage();" class="form-control @error('logo') is-invalid @enderror">
                                            @error('logo')<small class="text-danger">{{ $message }}</small> @enderror
                                            @if(isset($customer->logo) && $customer->logo)
                                            <img class="table-list-image" src="{{ asset('/') }}/{{ $customer->logo }}" style="width: 80px; height: 80px">
                                            @else
                                            <img class="table-list-image" src="{{ asset('/') }}assets/frontend/images/no-image.jpg" style="width: 80px; height: 80px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-footer">
                                        <button class="btn btn-primary float-end">Update</button>
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
