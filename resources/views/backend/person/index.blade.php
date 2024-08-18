@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <p class="">Show Here All persons . There Have Total </p>
                        </div>
                        <a href="{{ route('admin.person.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody class="align-middle">
                            @forelse($persons as $key=>$person)
                                <tr>
                                    <td style="width: 5%" scope="row" class="text-center">
                                        {{ $persons->perPage() * ($persons->currentPage() - 1) + ++$key }}
                                    </td>
                                    <td>
                                        <a href="javascript: void(0);">
                                            <div class="d-flex">
                                                {{-- <div class="flex-shrink-0 align-self-center me-3">
                                                    <img src="{{ $person->image ? asset($person->image) : defaultImage($person->name) }}" class="rounded-circle avatar-xs" alt="">
                                                </div> --}}

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">{{ $person->name ?? '' }}</h5>
                                                    <p class="text-muted mb-0">{{ $person->created_at->diffForHumans() ?? '' }}</p>
                                                    <p class="mb-0">{{ $person->address }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td>{{ $person->phone }}</td>
                                    <td class="text-center">{{ $person->gender }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.person.edit',$person->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $person->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.person.destroy',$person->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$person->id}}">@csrf @method('DELEte')</form>
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
