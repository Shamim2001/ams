<div class="col-lg-4 mb-2">
    <div class="mt-4 card shadow h-100">
        <img style="height: 200px;object-fit: cover;" src="{{ asset($service->image) ?? defaultImage() }}" class="img-fluid rounded-3" alt="">
        <div class="card-body">
            <h4>
                <a href="{{ route('service-details',$service->slug) }}" class="blog-title d-block mt-4 fs-18">{{ \Illuminate\Support\Str::limit($service->title,50) ?? "Service Title" }}</a>
            </h4>
            <!--<p class="lh-base fs-15 mt-2 text-muted">{!! \Illuminate\Support\Str::limit($service->short_description,120) ?? "Short Description" !!}</p>-->
            <div class="mt-3">
                <a href="{{ route('service-details',$service->slug) }}" class="text-primary fw-medium fs-13">Read More <i class="mdi mdi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
