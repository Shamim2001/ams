@extends('backend.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">{{ $title }}</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="list-group">
                                    <li class="list-group-item {{ Route::is('admin.setting.pages')  ? 'bg-primary' : '' }}"><a class="d-block nav-link" href="{{ route('admin.setting.pages') }}">Home Page</a></li>
                                    <li class="list-group-item {{ Route::is('admin.setting.get-in-touch')  ? 'bg-primary' : '' }}"><a class="d-block nav-link" href="{{ route('admin.setting.get-in-touch') }}">Get in touch</a></li>
                                    <li class="list-group-item {{ Route::is('admin.setting.web-settings')  ? 'bg-primary' : '' }}"><a class="d-block nav-link" href="{{ route('admin.setting.web-settings') }}">Web Settings</a></li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                @yield('page_content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


