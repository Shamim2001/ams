@extends('frontend.layout.app')
@section('title', $title)
@section('content')
    @include('frontend.components.component.breadcome_section', ['title' => $title])
    <br>
    <br>
    <section class="section bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row">
                <div class="member-detail md">
                    @foreach ($members as $key => $member)
                        @if ($key == 0)
                            <div class="content">
                                <div class="img-part">
                                    <img src="{{ $member->image ? asset($member->image) : asset('assets/frontend/images/home1/team-1.jpg') }}"
                                        style="height:600px;" alt="">
                                </div>
                                <div class="text-part">
                                    <h2 class="name">{{ $member->name ?? '' }}</h2>
                                    <h6>{{ $member->position ?? '' }}</h6>
                                    <hr>
                                    <!--<div class="social-links-wrapper">-->
                                    <!--    <a class="instagram" href="{{ $member->insta_url }}"><i class="fab fa-instagram"></i></a>-->
                                    <!--    <a class="youtube" href="{{ $member->youtube_url }}"><i class="fab fa-youtube"></i></a>-->
                                    <!--    <a class="facebook" href="{{ $member->fb_url }}"><i class="fab fa-facebook-f"></i></a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="row" style="margin-top: 100px">
                @foreach ($members as $key => $member)
                    @if ($key != 0)
                        <div class="col-md-4">
                            <div class="img-part">
                                <img src="{{ $member->image ? asset($member->image) : asset('assets/frontend/images/home1/team-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="text-part">
                                <h2 class="name">{{ $member->name ?? '' }}</h2>
                                <h6>{{ $member->position ?? '' }}</h6>
                                <hr>
                                <!--<div class="social-links-wrapper">-->
                                <!--    <a class="instagram" href="{{ $member->insta_url }}"><i class="fab fa-instagram"></i></a>-->
                                <!--    <a class="youtube" href="{{ $member->youtube_url }}"><i class="fab fa-youtube"></i></a>-->
                                <!--    <a class="facebook" href="{{ $member->fb_url }}"><i class="fab fa-facebook-f"></i></a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


        </div>
    </section>



@endsection
