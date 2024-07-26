@extends('frontend.layout.app')
@section('title',$title)
@section('content')

<style>
    .front{
        front-size:8px;
    }
</style>
     <section class="section bg-cta" style="margin-top: 70px;">
    <div class="bg-overlay"></div>
    <!--<div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="col-lg-8 d-flex justify-content-center align-items-center">-->
    <!--            <h3 class="text-center text-capitalize">-->
    <!--                 {{ $title }}-->

    <!--            </h3>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <br>
    <br>
</section>
<section class="section bg-light">
    <div class="container">
        <div class="row">

            {{-- <div class="p-5 d-flex align-items-start">
              <ul class="nav nav-pills flex-column nav-pills border-end border-3 me-3" id="pills-tab" role="tablist">
                @foreach($countrys as $key=> $country)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-primary fw-semibold {{$key == 0 ? 'active':''}} position-relative" id="pills-{{ $country->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $country->id }}" type="button" role="tab" aria-controls="pills-{{ $country->id }}" aria-selected="true">{{ $country->country_name }}</button>
                    </li>
                @endforeach
              </ul>
              <div class="tab-content border rounded-3 border-primary p-3 text-danger w-100" id="pills-tabContent">
                @foreach($countrys as $key=> $country)
                    <div class="tab-pane fade show {{$key == 0 ? 'active':''}}" id="pills-{{ $country->id }}" role="tabpanel" aria-labelledby="pills-{{ $country->id }}-tab">
                      <h2>{{ $country->country_name }}</h2>
                      <table class="supplier-table">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Logo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suppliers as $supplier)
                                    @if($supplier->country_id==$country->id)
                                        <tr>
                                            <td>{{ $supplier->company_name }}</td>
                                            @if(isset($supplier->logo) && $supplier->logo)
                                            <td><img class="table-list-image" src="{{ asset('/') }}images/{{ $supplier->logo }}" style="width: 100px; height: 80px"></td>
                                            @else
                                            <td>&nbsp;</td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
                </div>
              </div> --}}


                   <!--@foreach($countrys as $key=> $country)-->
                   <!--  @if($suppliers->count() > 0)-->
                   <!--  <div class="p-5 align-items-start">-->
                   <!--     <h2>{{ $country->country_name }}</h2>-->
                   <!--     <table class="supplier-table">-->
                   <!--         <thead>-->
                   <!--             <tr>-->
                   <!--                 <th>Company Name</th>-->
                   <!--                 <th>Logo</th>-->
                   <!--             </tr>-->
                   <!--         </thead>-->
                   <!--         <tbody>-->
                   <!--             @foreach($suppliers as $supplier)-->
                   <!--                 @if($supplier->country_id==$country->id)-->
                   <!--                     <tr>-->
                   <!--                         <td>{{ $supplier->company_name }}</td>-->
                   <!--                         @if(isset($supplier->logo) && $supplier->logo)-->
                   <!--                         <td><img class="table-list-image" src="{{ asset('/') }}images/{{ $supplier->logo }}" style="width: 100px; height: 80px"></td>-->
                   <!--                         @else-->
                   <!--                         <td>&nbsp;</td>-->
                   <!--                         @endif-->
                   <!--                     </tr>-->
                   <!--                 @endif-->
                   <!--             @endforeach-->
                   <!--         </tbody>-->
                   <!--     </table>-->
                   <!--  </div>-->
                   <!--  @else-->
                   <!--    <div class="p-5 align-items-start">-->
                   <!--         No Data Found-->
                   <!--     </div>-->
                   <!--  @endif-->

                   <!--@endforeach-->


                    <div class="p-8 align-items-start">
                        <div class="our-supplier">
                        @foreach($suppliers as $supplier)
                          <div class="logo-items">
                       <a class="" href="{{ ($supplier->company_website) }}" target="_blank">
                          <img class="img-fluid" src="{{ asset('/') }}images/{{ $supplier->logo }}" alt="{{ $supplier->company_name }}" style="height: 100px">
                             <p class="m-0 p-0 fs-8">{{ $supplier->company_name }}</p>
                          </a>
                          </div>
                        @endforeach
                        </div>
                    </div>



            </div>
        </div>
        {{-- <div class="row mt-5">
            <div class="col-md-12">
                <div class="float-end">
                    {!! $suppliers->links() !!}
                </div>
            </div>
        </div>--}}
    </div>
</section>
@endsection
