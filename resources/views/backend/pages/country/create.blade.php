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
                        <a href="{{ route('admin.country.index') }}" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.country.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="">Country Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text" name="country_name"  class="form-control @error('country_name') is-invalid @enderror" placeholder="Enter country name">
                                            @error('country_name') <small class="text-danger">{{ $message }}</small> @enderror
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
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
