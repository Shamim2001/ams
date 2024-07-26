@extends('frontend.layout.app')
@section('title',$title)
@section('style')
    <style>
        .product-name:first-letter{
            color: red;
            font-size: 35px !important;
        }

        .description h1{
            margin-bottom: 10px !important;
        }
        .description h2{
            margin: 10px 0 !important;
        }
        .description h3{
            margin-bottom: 10px !important;
        }
        .description h4{
            margin-bottom: 10px !important;
        }
        .description h5{
            margin-bottom: 10px !important;
        }
        .description h6{
            margin-bottom: 10px !important;
        }

        description p{
            margin-bottom: 20px !important;
        }

        .description table{
            border: 1px solid #c7c7c7;
            width: 100%;
        }

        .description table tr td{
            padding: 10px 5px;
            border: 1px solid #c7c7c7;
        }
    </style>
@endsection
@section('content')
<br>

<div class="container">
    <div class="row justify-content-around">
       <h6>Company Name : {{ $product->company_name ?? "" }}</h6> 
    </div>
</div>


  <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="p-3 shadow border">
                        <img class="img-fluid" src="{{$product->image ? asset($product->image) : asset('assets/frontend/images/product/pro.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="card rounded-0 shadow">
                        <div class="card-header" style="background: #0066ff;">
                            <h4 class="product-name font-bold text-center text-white">{{ $product->name ?? "" }}</h4>
                        </div>
                        <div class="card-body">
                            <table>
                                
                                <tr>
                                    <th>Technical Name : {{ $product->technical_name ?? "" }}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                @if($product->description)
                    <div class="col-md-12 mt-4">
                        <div class="p-3 description">
                            {!! $product->description ?? "" !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
