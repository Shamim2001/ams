@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                            <p class="">Show Here All Roles And Permissions . There Have Total {{ $quizzes->count() }} Quiz</p>
                        </div>
                        <a href="{{ route('admin.quiz.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Quiz</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Participant</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($quizzes as $quiz)
                                <tr>
                                    <td>#{{ $loop->iteration  }}</td>
                                    <td>
                                        <a href="{{ route('admin.quiz.show',[$quiz->id,'prize']) }}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 align-self-center me-3">
                                                    <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                        <img src="{{ $quiz->image ? asset($quiz->image) : defaultImage($quiz->title) }}" class="rounded img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">{{ $quiz->title ?? '' }}</h5>
                                                    <p class="text-muted mb-0">{{ $quiz->created_at->diffForHumans() ?? '' }}</p>
                                                    <p class="text-muted fw-bolder">End Time : {{ $quiz->end_time }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="fw-bolder">{{ $quiz->category->name ?? '' }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                          <p class="fw-bolder text-capitalize">{{$quiz->status}}</p>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="fw-bolder">{{ $quiz->userQuiz->count() ?? '' }}</p>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.quiz.edit',$quiz->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $quiz->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="{{ route('admin.quiz.destroy',$quiz->id) }}"
                                                  method="post"
                                                  id="delete-form-{{$quiz->id}}">@csrf @method('DELEte')</form>
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
