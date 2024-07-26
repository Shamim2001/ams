@extends('frontend.layout.app')
@section('title',$title)
@section('content')

    <!-- Breadcrumb Area -->
    <div class="bixol-breadcrumb" data-background="{{$service->banner  ? asset($service->banner) : asset('assets/frontend/images/home1/breadcrumb.jpg')}}">
        <span class="breadcrumb-object"><img src="{{asset('assets/frontend/images/home1/slider-object.png')}}" alt=""></span>
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Services</h1>
                <a href="/">Home <i class="fas fa-angle-double-right"></i></a>
                <span>Services</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- service details -->
    <section class="service-details pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="{!! $service->description ?? "" !!}"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Details End -->

    <!-- Get In Tauch -->
    <section class="bixol-gta-area" data-background="{{asset('/')}}assets/frontend/images/home1/gt-bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6">
                    <div class="bixol-gt-right">
                        <h4>Get a estimate</h4>
                        <form action="#">
                            <input type="text" name="fname" placeholder="Your name*" required>
                            <input type="tel" name="pnumber" placeholder="Phone Number...">
                            <div class="bx-form-select">
                                <select>
                                    <option value="plumbing">Plumbing Service</option>
                                    <option value="office">Office cleaning</option>
                                    <option value="laundry">Laundry Service</option>
                                    <option value="toilet">Toilet Cleaning</option>
                                    <option value="kichen">Kitchen cleaning</option>
                                </select>
                            </div>
                            <textarea placeholder="Text..." rows="5"></textarea>
                            <button type="submit" class="bixol-primary-btn submit-btn">Get a Quote <span><i class="fab fa-telegram-plane"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get In Tauch End -->
@endsection
