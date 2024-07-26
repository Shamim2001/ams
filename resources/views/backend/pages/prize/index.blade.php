@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All Roles And Permissions . There Have Total {{ $categories->count() }} Categories</p>
                        </div>
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Category</th>
                                <th>Quiz</th>
                                <th>Featured Status</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>#{{ $category->serial  }}</td>
                                    <td>
                                        <a href="javascript: void(0);">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 align-self-center me-3">
                                                    <img src="{{ $category->image ? asset($category->image) : defaultImage($category->name) }}" class="rounded-circle avatar-xs" alt="">
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">{{ $category->name ?? '' }}</h5>
                                                    <p class="text-muted mb-0">{{ $category->created_at->diffForHumans() ?? '' }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <p>{{ $category->quizzes->count() }}</p>
                                    </td>
                                    <td>
                                        <a href="">
                                            <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                <input class="form-check-input" type="checkbox" {{ $category->is_featured == true ? 'checked' : '' }} id="pending">
                                                <label class="form-check-label" for="">{{$category->is_featured == true ?'Featured' : 'Not Featured'}}</label>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-{{$category->status == true ? 'primary' : 'warning' }}">
                                            <i class="mdi mdi-arrow-{{ $category->status == true  ? 'up' : 'down' }}-bold"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $category->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.category.destroy',$category->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$category->id}}">@csrf @method('DELEte')</form>
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
