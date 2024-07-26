@extends('frontend.layout.app')
@section('title', $title)
@section('style')
    <style>
        .tag {
            display: flex;
            overflow-x: scroll;
        }

        .tag li a {
            display: block;
            background: #eaeaea;
            padding: 0 12px;
            border-radius: 5px;
            margin: 0px 6px;
            font-size: 20px;
            font-weight: bold;
        }

        .product-list {
            padding-bottom: 50px;
        }
    </style>
@endsection
@section('content')
    {{-- <section class="section bg-cta" style="margin-top: 70px;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 d-flex justify-content-center align-items-center">
                <h3 class="text-center text-capitalize">


                </h3>
            </div>
        </div>
    </div>
</section> --}}
    {{-- <section>
        <div class="container">

            <div class="my-5">
                <div class="w-50 mx-auto">
                    <form action="{{ route('product-search') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" name="query" class="form-control" placeholder="Search Any Product Here....." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
                <ul class="tag" >
                    <li><a href="#sectiona">A</a></li>
                    <li><a href="#sectionb">B</a></li>
                    <li><a href="#sectionc">C</a></li>
                    <li><a href="#sectiond">D</a></li>
                    <li><a href="#sectione">E</a></li>
                    <li><a href="#sectionf">F</a></li>
                    <li><a href="#sectiong">G</a></li>
                    <li><a href="#sectionh">H</a></li>
                    <li><a href="#sectioni">I</a></li>
                    <li><a href="#sectionj">J</a></li>
                    <li><a href="#sectionk">K</a></li>
                    <li><a href="#sectionl">L</a></li>
                    <li><a href="#sectionm">M</a></li>
                    <li><a href="#sectionn">N</a></li>
                    <li><a href="#sectiono">O</a></li>
                    <li><a href="#sectionp">P</a></li>
                    <li><a href="#sectionq">Q</a></li>
                    <li><a href="#sectionr">R</a></li>
                    <li><a href="#sections">S</a></li>
                    <li><a href="#sectiont">T</a></li>
                    <li><a href="#sectionu">U</a></li>
                    <li><a href="#sectionv">V</a></li>
                    <li><a href="#sectionw">W</a></li>
                    <li><a href="#sectionx">X</a></li>
                    <li><a href="#sectiony">Y</a></li>
                    <li><a href="#sectionz">Z</a></li>
                </ul>
            </div>

        </div>
    </section>
    <section class="mb-4">
        <div class="container">
            @foreach ($products as $key => $product)
                <div class="" id="section{{$key}}">
                <div class="py-2" style="background: #ececec">
                    <a href="" class="text-uppercase" style="display: inline-block;border-right: 4px solid blue;font-size: 23px;font-weight: bold;padding: 0 10px;">{{$key}}</a>
                </div>
                <div class="row my-3">
                    @foreach ($product as $item)
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('product-details',$item->slug) }}">
                                <div class="card rounded-0 shadow h-100">
                                    <!--<img class="img-fluid card-img-top rounded-0" src="{{$item->image ? asset($item->image) : asset('assets/frontend/images/product/pro.jpg') }}" alt="">-->
                                    <div class="card-body">
                                        <h5 class="mb-2" style="color: blue;">{{ $item->name }}</h5>
                                        <p class="m-0">Technical name : {{ $item->technical_name }}</p>
                                        <div class="mt-2">
                                            <a href="{{ route('product-details',$item->slug) }}" class="float-end">More Info...</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section> --}}

    <section class="product-list" style="width: 80%; margin: auto;">

        <div class="container">
            <div class="mt-3" style="text-align: right;">
                <a href="{{ route('products') }}" class="btn btn-primary">Search By Product</a>
            </div>
            {{-- <ul>
                    @foreach ($products as $product)
                        <li>{{ $product->company_name }} - {{ $product->serial_number }}</li>
                    @endforeach
                </ul> --}}
            @foreach ($product_company as $productcompany)
                <div class="row">
                    <div class="col-12">
                        @foreach ($companys as $company)
                            @if ($productcompany->company_id == $company->id)
                                <div class="company_title text-center">
                                    <h5>{{ $company->name }}</h5>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">

                    <!--<div class="card" style="width: 18rem;">-->

                    <div class="items-wrapper">
                        @foreach ($products as $item)
                            @if ($item->company_id == $productcompany->company_id)
                                <a class="product-card" href="{{ route('product-details', $item->slug) }}">
                                    <!--<img class="img-fluid card-img-top rounded-0" style="height:70px;" src="{{ $item->image ? asset($item->image) : asset('assets/frontend/images/product/pro.jpg') }}" alt="">-->
                                    <div class="title-part">
                                        <h3>{{ $item->name }}</h3>

                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
        </div>
        </div>
        @endforeach
        </div>

        </div>
    </section>
@endsection
