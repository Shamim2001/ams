@extends('frontend.layout.app')
@section('title',$title)
@section('content')
    <!-- Breadcrumb Area -->
    <div class="bixol-breadcrumb" data-background="{{asset('/')}}assets/frontend/images/login-banner.webp">
        <span class="breadcrumb-object"><img src="{{asset('/')}}assets/frontend/images/home1/slider-object.png" alt=""></span>
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Login</h1>
                <a href="/">Home <i class="fas fa-angle-double-right"></i></a>
                <span>Login</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Area V2 -->
    <section class="contact-v2 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Login Now</h4>
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="mb-2">
                                    <label for="">Email Address</label>
                                    <input type="email"
                                           name="email"
                                           class="form-control border border-primary @error('email') is-invalid @enderror"
                                           placeholder="Enter Your Email Address">
                                    @error('email')
                                    <small class="text-danger"></small>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Password</label>
                                    <input type="password"
                                           name="password"
                                           class="form-control border border-primary @error('password') is-invalid @enderror"
                                           placeholder="Enter Your Password">
                                    @error('password')
                                    <small class="text-danger"></small>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <button class="float-end btn btn-dark btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact V2 End -->
@endsection
