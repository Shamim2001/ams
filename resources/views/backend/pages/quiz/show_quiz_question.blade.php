@extends('backend.layout.app')
@section('title',$title)
@section('style')
    <style>
        .prizeImage{
            width: 150px;
            height: 100px;
            overflow: hidden;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                @include('backend.components.quiz.quiz',['quiz'=>$quiz])
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline-block">All Question - {{ $questions->count() ?? "" }}</h4>
                        <a href="{{ route('admin.question.create',$quiz->id) }}" class="btn btn-primary float-end"><i class="fa fa-plus-circle"></i> Add Question</a>
                    </div>
                    <div class="card-body">
                        @forelse($questions as $key => $question)
                            <div class="mb-2">
                                <h5 class="d-inline"> {{$key+1}} . {{ $question->title ?? "" }} </h5>
                                <input type="hidden" name="questions[question{{ $question->id }}][title]">
                                <a onclick="deleteData({{ $question->id }})" class="float-end btn btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>
                                <form action="{{ route('admin.question.destroy',$question->id) }}" class="d-none" id="delete-form-{{$question->id}}" method="post">@csrf @method('DELETE')</form>
                                <a href="{{ route('admin.question.edit',$question->id) }}" class="float-end btn btn-primary btn-sm"><i class="mdi mdi-book-edit"></i></a>
                                <div class="" style="margin-left: 30px;">
                                    @foreach($question->options as $option)
                                        <div class="form-check form-radio form-radio-primary mb-1" >
                                            <input class="form-check-input" type="radio" name="questions[question{{$question->id}}][option][option_one]" id="{{ $option->key.$question->id }}" {{ $question->answer->answer == $option->key ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ $option->key.$question->id }}">
                                                {{ $option->name ?? "" }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
