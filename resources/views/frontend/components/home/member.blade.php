<section class="bixol-team-area pt-100 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="bixol-title-area">
                    <span class="bixol-subtitle">Team Members</span>
                    <h3>We have an expert team <span>to serve you.</span></h3>
                </div>
            </div>
        </div>
        <div class="bixol-team-container bixol-team-slider">
            @foreach($members as $member)
                <div class="bixol-team-single">
                    <div class="bixol-img-wrapper">
                        <img src="{{ $member->image ? asset($member->image) : asset('assets/frontend/images/home1/team-1.jpg') }}" alt="">
                    </div>
                    <div class="bixol-team-content">
                        <a href="#"><h5>{{ $member->name ?? "" }}</h5></a>
                        <span>{{ $member->position ?? "" }}</span>
                        <span class="team-social-link"><i class="fas fa-share-alt"></i></span>
                        <div class="bixol-team-social-items">
                            <a href="{{ $member->insta_url }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $member->youtube_url }}"><i class="fab fa-youtube"></i></a>
                            <a href="{{ $member->fb_url }}"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
