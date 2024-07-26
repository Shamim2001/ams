@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All Country . There Have Total {{ $countrys->count() }} Country</p>
                        </div>
                        <a href="{{ route('admin.country.create') }}" class="btn btn-primary float-end">Create Country</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Country Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($countrys as $country)
                                <tr>
                                    <td>#{{ $loop->iteration  }}</td>
                                    <td>
                                        <p>{!! $country->country_name ?? "" !!}</p>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.country.edit',$country->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $country->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.country.destroy',$country->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$country->id}}">@csrf @method('DELEte')</form>
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
