@extends('backend.admin.layout.app')
@section('title',$title)
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <form action="{{ route('admin.question.update',$question->id) }}" method="post" class="card">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4 class="d-inline-block">{{ $title }}</h4>
                                <a href="{{ route('admin.quiz.show',[$question->quiz_id,'question']) }}" class="btn btn-danger waves-effect float-end">
                                    <i class="fa fa-arrow-left"></i> Go Back
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row" >
                                    <div id="addRowHere" class="">
                                        <div class="card border border-secondary mb-2">
                                            <div class="card-header">Question 1</div>
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control mb-1" name="title" value="{{ $question->title ?? '' }}" placeholder="Input Here Text Question">
                                                </div>
                                                <div class="mb-2">
                                                    <div class="row">
                                                        @foreach($question->options as $option)
                                                        <div class="col-md-6 mb-1">
                                                            <input type="text" name="option[{{ $option->key }}]" class="form-control mb-2" value="{{ $option->name }}" placeholder="Option One">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <select class="form-select" name="answer" id="inlineFormSelectPref">
                                                        <option selected="">Select Right Anser</option>
                                                        <option value="option_one" {{ $question->answer->answer == 'option_one' ? 'selected' : '' }}>Option One</option>
                                                        <option value="option_two" {{ $question->answer->answer == 'option_two' ? 'selected' : '' }}>Option Two</option>
                                                        <option value="option_three" {{ $question->answer->answer == 'option_three' ? 'selected' : '' }}>Option Three</option>
                                                        <option value="option_fore" {{ $question->answer->answer == 'option_fore' ? 'selected' : '' }}>Option Fore</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit Question</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
