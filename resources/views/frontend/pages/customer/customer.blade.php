@extends('frontend.layout.app')
@section('title', $title = 'home')
@section('content')
 <section class="section bg-cta" style="margin-top: 70px;">
    <div class="bg-overlay"></div>
    <!--<div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="col-lg-8 d-flex justify-content-center align-items-center">-->
    <!--            <h3 class="text-center text-capitalize">-->
    <!--                 List of the local company we are dealing with -->
                   
    <!--            </h3>-->
               
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
     <br>
                <br>
</section>
<section class="section bg-light">
    <div class="container mt-4">
        {{--<br>
        <h4 class="text-center">List of the local company we are dealing with :</h4>
        <br>
         <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">

                    <tbody>
                        @foreach ($customers as $customer)

                                <tr>
                                    <td><a href="{{($customer->customer_website) }}">{{ $customer->customer_name }}</a></td>
                                    <td></td>
                                    <td class="text-end" style="margin: auto;"><a href="{{ ($customer->customer_website) }}"><img class="img-fluid"
                                            src="{{ $customer->logo ? asset($customer->logo) : defaultImage($customer->logo) }}"
                                            alt="" style="height: 70px; width: auto;"></a></td>
                                </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div> --}}

        <div class="row mt-3">
            <div class="col-12">
                <div class="our-customers">
                    @foreach ($customers as $customer)
                      <div class="logo-items">
                            <a class="" href="{{ ($customer->customer_website) }}" target="_blank">
                                <img class="img-fluid" src="{{ $customer->logo ? asset($customer->logo) : defaultImage($customer->logo) }}" alt="" style="width: 100%;height:auto;">
                            </a>
                      </div>        
                    @endforeach
                </div>    
            </div>
        </div>

    </div>
</section>    
@endsection
