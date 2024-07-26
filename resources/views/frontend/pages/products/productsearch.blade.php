@extends('frontend.layout.app')
@section('title',$title)
@section('style')
    <style>
        .tag{
            display: flex;
            overflow-x: scroll;
        }

        .tag li a{
            display: block;
            background: #eaeaea;
            padding: 0 12px;
            border-radius: 5px;
            margin: 0px 6px;
            font-size: 20px;
            font-weight: bold;
        }
        .product-list{
            padding-bottom: 50px;
        }
    </style>
@endsection
@section('content')
    <section class="product-list" style="width: 80%; margin: auto;">

        <div class="container">
            <div class="mt-3" style="text-align: right;">
                <a href="{{ route('search.products') }}" class="btn btn-primary">Search By ABCD</a>
            </div>

                        <div class="row mt-2">
                        <div class="items-wrapper">
                            @foreach ($products as $product)
                            <a class="product-card" href="{{ route('product-details',$product->slug) }}">
                                <div class="title-part">
                                    <h3>{{ $product->name }}</h3>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>

               </div>
        </div>
    </section>
@endsection
