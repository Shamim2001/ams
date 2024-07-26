@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All Supplier . There Have Total {{ $suppliers->count() }} Supplier</p>
                        </div>
                        <a href="{{ route('admin.supplier.create') }}" class="btn btn-primary float-end">Create Supplier</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Country Name</th>
                                <th>Company Name</th>
                                 <th>Company Website</th>
                                <th>Company Logo</th>
                                <th>Priority Serial</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($suppliers as $supplier)
                                <tr>
                                    <td>#{{ $loop->iteration  }}</td>
                                     @foreach ($countrys as $country)
                                       @if($country->id==$supplier->country_id)
                                         <td>{{ $country->country_name}}</td>
                                       @endif  
                                    @endforeach
                                    <td>{{ $supplier->company_name }}</td>
                                      <td>{{ $supplier->company_website }}</td>
                                    @if(isset($supplier->logo) && $supplier->logo)
                                    <td><img class="table-list-image" src="{{ asset('/') }}images/{{ $supplier->logo }}" style="width: 80px; height: 80px"></td>
                                    @else
                                    <td><img class="table-list-image" src="{{ asset('/') }}assets/frontend/images/no-image.jpg" style="width: 80px; height: 80px"></td>
                                    @endif
                                    <td>{{ $supplier->serial }}</td>
                                    <td>
                                        <a href="{{ route('admin.supplier.edit',$supplier->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $supplier->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.supplier.destroy',$supplier->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$supplier->id}}">@csrf @method('DELEte')</form>
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
