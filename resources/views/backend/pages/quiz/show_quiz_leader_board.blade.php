@extends('backend.layout.app')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                @include('backend.components.quiz.quiz',['quiz'=>$quiz,'usersFrequency'=>$quiz->userQuiz])
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline-block">All Participating Member - {{$quiz->userQuiz->count() ?? ""}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive"></div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Unique Id</th>
                                <th>Name</th>
                                <th>Rank / Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($quiz->userQuiz as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->unique_id ?? "" }}</td>
                                    <td>
                                        <div class="" style="display: flex;align-items: center;gap: 20px;">
                                            <div class="">
                                                <img style="border-radius: 50px;" src="https://ui-avatars.com/api/?name={{$user->name}}&format=svg&background=random&size=35&bold=true" alt="">
                                            </div>
                                            <div class="">
                                                <p class="fw-bolder">{{ $user->name ?? "" }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user->pivot->right_answer }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
