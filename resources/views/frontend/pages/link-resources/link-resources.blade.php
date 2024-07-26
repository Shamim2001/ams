@extends('frontend.layout.app')
@section('title',$title)
@section('content')
     @include('frontend.components.component.breadcome_section',['title'=>$title])
     <br>
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="syndicate col-md-12">
                    <div class="row">
                        @foreach($link_resources as $link_resource)
                        <div class="col-md-3">
                        <ul>
                            <li>
                                <span class="number">{{ $loop->iteration  }}</span>
                                <a href="http://{{ $link_resource->link_resource }}">{{ $link_resource->link_resource }}</a>
                            </li>
                        </ul>
                    </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="float-end">
                        {!! $link_resources->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
