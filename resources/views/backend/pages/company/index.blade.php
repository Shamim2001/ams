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
                            <p class="">Show Here All Company . There Have Total {{ $companies->count() }} Company</p>
                        </div>
                        <a href="{{ route('admin.company.create') }}" class="btn btn-primary float-end">Add Company</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Company name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($companies as $company)
                                <tr>
                                    <td>#{{ $loop->iteration  }}</td>
                                    <td>
                                        <a href="{{ route('product-details',$company->slug) }}" target="_blank">
                                            <div class="d-flex">
                                                {{--<div class="flex-shrink-0 align-self-center me-3">
                                                    <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                        <img src="{{ $company->image ? asset($company->image) : defaultImage($company->name) }}" class="rounded img-fluid" alt="">
                                                    </div>
                                                </div> --}}
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">{{ $company->name ?? '' }}</h5>
                                                    <p class="text-muted mb-0">{{ $company->created_at->diffForHumans() ?? '' }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                   <td>
                                        <div class="flex-shrink-0 align-self-center me-3">
                                            <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                <img src="{{ $company->image ? asset($company->image) : defaultImage($company->name) }}" class="rounded img-fluid" alt="">
                                            </div>
                                        </div>
                                   </td>
                                    <td>
                                        <a href="{{ route('admin.company.edit',$company->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $company->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.company.destroy',$company->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$company->id}}">@csrf @method('DELEte')</form>
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
