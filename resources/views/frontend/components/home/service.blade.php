<section class="bixol-services">
    <div class="container">
        <div class="bixol-service-wrapper bixol-service-slider">
            @foreach($services as $service)
                <div class="bixol-single-item">
                    <div class="bixol-icon-wrapper">
                        <img src="{{$service->icon ? asset($service->icon) : asset('assets/frontend/images/services/icon-1.png')}}" alt="">                        </div>
                    <div class="bixol-sr-content">
                        <a href="{{ route('service-details',$service->slug) }}"><h6>{{ $service->title ?? "" }}</h6></a>
                        <p>{{ $service->short_description ?? "" }}</p>
                        <a href="{{ route('service-details',$service->slug) }}" class="bixol-readmore-btn">Read More</a>
                    </div>

                    <div class="bixol-sr-hover">
                        <div class="img-wrapper">
                            <img src="{{$service->image ? asset($service->image) : asset('assets/frontend/images/services/01.jpg')}}" alt="">
                            <span class="img-shadow"></span>
                        </div>
                        <div class="icon-wrapper">
                            <div class="bixol-img">
                                <img src="{{$service->icon ? asset($service->icon) : asset('assets/frontend/images/services/icon-1.png')}}" style="width: 50px;height: 50px;" alt="">
                            </div>
                            <span class="bixol-icon-shadow"></span>
                        </div>
                        <div class="bixol-sr-content">
                            <a href="{{ route('service-details',$service->slug) }}"><h6>{{ $service->title ?? "" }}</h6></a>
                            <p>{{ $service->short_description ?? "" }}</p>
                            <a href="{{ route('service-details',$service->slug) }}" class="bixol-readmore-btn">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
