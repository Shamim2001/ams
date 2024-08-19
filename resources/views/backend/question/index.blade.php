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
                        <a href="" class="btn btn-primary float-end">Create</a>
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
                            @forelse($questions as $key=>$question)
                                <tr>
                                    <td style="width: 5%" scope="row" class="text-center">
                                        {{ $questions->perPage() * ($questions->currentPage() - 1) + ++$key }}
                                    </td>
                                    <td>{{ $question->name }}</td>
                                    <td class="text-center">{{ $question->updated_at->diffForHumans() }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.question.edit',$question->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $question->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.question.destroy',$question->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$question->id}}">@csrf @method('DELEte')</form>
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
