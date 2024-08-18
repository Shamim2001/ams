@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h3 class="">Show Here All Type data.</h3>
                        </div>
                        <a href="{{ route('admin.type.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody class="align-middle">
                            @forelse($types as $key=>$type)
                                <tr>
                                    <td style="width: 5%" scope="row" class="text-center">
                                        {{ $types->perPage() * ($types->currentPage() - 1) + ++$key }}
                                    </td>
                                    <td>{{ $type->name }}</td>
                                    <td class="text-center">{{ $type->updated_at->diffForHumans() }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.type.edit',$type->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $type->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.type.destroy',$type->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$type->id}}">@csrf @method('DELEte')</form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
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
