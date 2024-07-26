@extends('frontend.layout.app')
@section('title',$title)
@section('content')
    @include('frontend.components.component.breadcome_section',['title'=>$title])
     <br>
    <br>
    <section class="section bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row">
                <div class="about-description">
                    <p>The Chemicals is one of the largest indenting house in Bangladesh specialized in International sourcing of Chemicals and Pharmaceutical Raw Materials for our customers in Home and Abroad. We supply the following quality raw materials for our valued customers:</p>
                </div>
            </div>
            <div class="row" style="margin-top: 50px">
                <div class="about-description">
                    <div class="syndicate col-md-12">
                        <ul>
                            <li><span class="number">1</span>Industrial Chemicals</li>
                            <li><span class="number">2</span>Pharmaceutical Raw Materials</li>
                            <li><span class="number">3</span>Veterinary Products</li>
                            <li><span class="number">4</span> Food Additives</li>
                            <li><span class="number">5</span>Agrochemicals and Fertilizers</li>
                        </ul>    
                    </div>    
                </div>
            </div>   
        </div>
    </section>         
@endsection


