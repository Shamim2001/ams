@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All Customer . There Have Total {{ $customers->count() }} Customer</p>
                        </div>
                        <a href="{{ route('admin.customer.create') }}" class="btn btn-primary float-end">Create Customer</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Customer Name</th>
                                <th>Customer Url</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($customers as $customer)
                                <tr>
                                    <td>#{{ $loop->iteration  }}</td>
                                    <td>{{ $customer->customer_name }}</td>
                                    <td>{{ $customer->customer_website }}</td>
                                    @if(isset($customer->logo) && $customer->logo)
                                    <td><img class="table-list-image" src="{{ asset('/') }}/{{ $customer->logo }}" style="width: 80px; height: 80px"></td>
                                    @else
                                    <td><img class="table-list-image" src="{{ asset('/') }}assets/frontend/images/no-image.jpg" style="width: 80px; height: 80px"></td>
                                    @endif
                                    <td>
                                        <a href="{{ route('admin.customer.edit',$customer->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $customer->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.customer.destroy',$customer->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$customer->id}}">@csrf @method('DELEte')</form>
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
