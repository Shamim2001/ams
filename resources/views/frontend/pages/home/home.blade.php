@extends('frontend.layout.app')
@section('title',$title = "home")
@section('content')
    @include('frontend.components.home.hero',['sliders'=>$sliders])
    @if($services->count() > 0)
        @include('frontend.components.home.service',['services'=>$services])
    @endif 

     @include('frontend.components.home.about')

     @include('frontend.components.home.info')

    @include('frontend.components.home.member',['members'=>$members])
    @include('frontend.components.home.get_in_touch')
    <div class="bixol-footer-top">
        @if(setting('google_map'))
            {!! setting('google_map') !!}
        @else
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.0478472451387!2d89.52051241542163!3d22.87469082757795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9b22f47801e5%3A0x35d43df27f4bfa29!2sThemeXriver!5e0!3m2!1sen!2sbd!4v1628338847721!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        @endif
    </div>

    <style>
        .slider-container {
    width: 100% !important;
    height: 100% !important;
    /* Other styles... */
    }

    @media (max-width: 768px) {
    .rs_splitted_words {
        font-size: 33px;
        /* Modify styles for smaller screens */
    }
}
    </style>
@endsection
