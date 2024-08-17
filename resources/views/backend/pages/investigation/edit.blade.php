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
                            <p class="">All Information</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('admin.patient.update',$patient->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="">Patient Id <span class="text-danger fw-bolder">*</span></label>
                                            <input type="number" name="patient_id" value="{{ $patient->patient_id ?? old('patient_id') }}" class="form-control @error('patient_id') is-invalid @enderror" placeholder="Enter patient id">
                                            @error('patient_id')<small class="text-danger">{{ $message }}</small>@enderror
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
