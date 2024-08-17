@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All patient investigation.</p>
                        </div>
                        <a href="{{ route('admin.patient.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>Patient Id</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($patients as $patient)
                                <tr>
                                    <td>
                                        <p>{!! $patient->patient_id ?? "" !!}</p>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.patient.edit',$patient->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $patient->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.patient.destroy',$patient->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$patient->id}}">@csrf @method('DELEte')</form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="p-5 text-center">
                                            <h1 class="display-4 font-bold">No Data Found</h1>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
