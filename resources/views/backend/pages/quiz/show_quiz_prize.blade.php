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
                        <h4 class="d-inline-block">All Prize - {{ $prizes->count() ?? "" }}</h4>
                        <a href="{{ route('admin.prize.create',$quiz->id) }}" class="btn btn-primary float-end"><i class="fa fa-plus-circle"></i> Add Prize</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Prize Position</th>
                                    <th>Prize Name</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prizes as $prize)
                                    <tr>
                                        <td>{{ $prize->serial ?? "" }}</td>
                                        <td>{{ $prize->name }}</td>
                                        <td>
                                            <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                <img  class="rounded img-fluid"  src="{{ asset($prize->image) ?? defaultImage($prize->name)}}" alt="{{ $prize->name ?? "" }}">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.prize.edit',$prize->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a onclick="deleteData({{ $prize->id }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            <form action="{{ route('admin.prize.destroy',$prize->id) }}" class="d-none" id="delete-form-{{$prize->id}}" method="post">@csrf @method('DELETE')</form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-end">{!! $prizes->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
