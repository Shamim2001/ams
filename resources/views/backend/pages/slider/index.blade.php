@extends('backend.layout.app')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline-block">{{ $title }}</h4>
                        <a href="{{ route('admin.slider.create') }}"
                           class="btn btn-primary waves-effect float-end">
                            <i class="fa fa-plus-circle"></i>
                            Slider Create
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($sliders as $slider)
                                <div class="col-md-4 mb-2 h-100">
                                    <div class="card h-100 border shadow">
                                        <img class="img-fluid" src="{{ asset($slider->image) }}" alt="Slider Image">
                                        <div class="card-body">
                                            <a href="{{ route('admin.slider.edit',$slider->id) }}"><h5>{{ $slider->title ?? '' }}</h5></a>
                                            <a href="{{ route('admin.slider.edit',$slider->id) }}"><h5>{{ $slider->title_two ?? '' }}</h5></a>
                                            <small>{{ $slider->description ?? '' }}</small>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('admin.slider.edit',$slider->id) }}" class="btn btn-sm btn-primary float-start"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteData({{ $slider->id }})" class="btn btn-sm btn-danger float-end"><i class="fa fa-trash"></i></a>
                                            <form action="{{ route('admin.slider.destroy',$slider->id) }}" class="d-none" id="delete-form-{{$slider->id}}" method="post">@csrf @method('DELETE')</form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
