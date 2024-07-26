@extends('frontend.layout.app')
@section('title',$title)
@section('content')
    @include('frontend.components.component.breadcome_section',['title'=>$title])
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                @forelse($services as $service)
                    @include('frontend.components.component.single_service',['service'=>$service])
                @empty
                    <div class="my-5 py-5">
                        <h1>No Data Found</h1>
                    </div>
                @endforelse
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="float-end">
                        {!! $services->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
