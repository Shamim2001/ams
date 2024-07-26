<header class="bixol-header bg-sticky-white">
    <!-- <div class="bixol-info-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="bixol-info-left">
                        <p style="font-size:larger">Walecome to <span>The Chemicals Ltd.</span></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="bixol-info-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="bixol-header-top">
        <div class="container">
            <div class="bixol-header-top-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bixol-header-top-left1">
                            {{-- <a href="{{ route('home') }}">
                                <div class="bixol-header-item">
                                    <!--<span class="bixol-icon-wrapper">
                                        <i class="flaticon flaticon-phone"></i>  </span>-->
                                    <div class="bixol-item-content">


                                        <img src="{{ asset('assets/frontend/') }}/logo.png">
                                        <!--<label>Requesting a Call:</label>
                                        <span>(210) 123 451</span>-->
                                    </div>

                                </div>

                            </a> --}}

                            <a href="{{ route('home') }}" style="width: 100%">
                                <div class="bixol-header-item" style="width: 100%">
                                    <div class="bixol-item-content-logo">
                                        <img src="{{ asset('assets/frontend/') }}/logo_thechemi.png">
                                    </div>
                                    <div class="bixol-item-content-text" style="width: 100%; height: 80px">
                                        <h1>The Chemicals Ltd. </h1>

                                        <!--<img src="{{ asset('assets/frontend/') }}/logo-text.png" style="height: 100%">-->
                                    </div>
                                </div>

                            </a>


                            <!-- <div class="bixol-header-item">
                                 <span class="bixol-icon-wrapper">
                                     <i class="flaticon flaticon-alarm-clock"></i>                                        </span>
                                 <div class="bixol-item-content">
                                     <label>Sunday - Friday:</label>
                                     <span>(210) 123 451</span>                                        </div>
                             </div>-->
                        </div>
                    </div>
                    {{-- <!--<div class="col-lg-6">
                        <div class="bixol-header-top-right">
                            <!-- <div class="bixol-header-item">
                                 <span class="bixol-icon-wrapper">
                                     <i class="flaticon flaticon-mail"></i>                                        </span>
                                 <div class="bixol-item-content">
                                     <label>info@thechemicals.net</label>
                                     <span>Mail to us</span>
                                 </div>

                                 <a href="tel:1234563257"></a>
                                 </div>-->


                            <!--<div class="bixol-header-item">
                                <!--<span class="bixol-icon-wrapper">
                                    <i class="flaticon flaticon-pin"></i>
                                </span>-->
                               <!-- <div class="bixol-item-content">
                                    <label>69/C Green Road, 3rd Floor Panthapath</label>
                                    <span>Dhanmondi</span>
                                </div>
                            </div>
                        </div>
                    </div>--> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Menu -->
    <div class="bixol-navigation">
        <div class="container">
            <div class="bixol-nav">
                <!--<a href="index.html" class="bixol-header-logo"><img src="{{ asset('assets/frontend/') }}/images/logo.png" alt=""></a>-->
                <nav class="desktop-menu" x-data="{ isOpen: false }">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="has-submenu">
                            <a href="{{ url('about') }}">About Us</a>
                            <ul>
                                <!--<li><a class="{{ Route::is('who-we-are') ? 'active' : '' }}" href="{{ route('who-we-are') }}">Who We Are</a></li>-->
                                <li><a class="{{ Route::is('leadership-team') ? 'active' : '' }}"
                                        href="{{ route('leadership-team') }}">Leadership Team</a></li>
                                <li><a class="{{ Route::is('why-the-chemical') ? 'active' : '' }}"
                                        href="{{ route('why-the-chemical') }}">Why The Chemical</a></li>
                                <!--<li><a class="{{ Route::is('our-certification') ? 'active' : '' }}" href="{{ route('our-certification') }}">Our Certifications</a></li>-->
                            </ul>
                        </li>
                        <li><a href="{{ url('service') }}">Services</a></li>
                        <!--<li><a href="{{ route('products') }}">Products</a>-->
                        <li><a href="{{ route('we-present') }}">We Represent</a>

                        <li><a href="{{ route('our-customer') }}">Our Customer</a>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('link-resource') }}">Link & Resources</a>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li>
                            <a href="javascript:void(0)" x-on:click.prevent="$dispatch('open-modal')">Patient Status</a>

                            <div x-data="{ isOpen: false }" class="mb-3">

                                <div x-show="isOpen" x-on:open-modal.window="isOpen = true"
                                    x-on:close-modal.window="isOpen = false" style="display: none;">

                                    <!-- Modal content -->
                                    <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Patient Status Check</h5>
                                                    <button type="button" class="btn-close"
                                                        x-on:click="$dispatch('close-modal')"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('patient.status') }}" method="POST">
                                                        @csrf

                                                        <div class="fs-5 mb-3 text-start">
                                                            <label for="patient-id" class="form-label">Patient
                                                                ID</label>
                                                            <input type="text" id="patient-id" name="patient_id"
                                                                class="form-control"
                                                                placeholder="Type here patient id..">
                                                        </div>
                                                        <div class="mt-1">
                                                            <button type="submit"
                                                                class="border-0 bixol-readmore-btn">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-backdrop fade show"></div>
                                </div>
                            </div>
                        </li>

                    </ul>


                </nav>

            </div>
            <div class="bixol-mobile-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <a href="index.html" class="bixol-logo"><img src="{{ asset('assets/frontend/') }}/logo.png"
                                alt=""></a>
                    </div>

                    <div class="col-6">
                        <div class="bixol-mobile-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Mobile Menu -->
<div class="bixol-mobile-menu">
    <a href="index.html" class="mobile-menu-logo"> <img src="{{ asset('assets/frontend/') }}/logo_thechemi.png"
            alt=""></a>
    <!--<ul>-->
    <!--    <li class="has-submenu"><a href="{{ url('/') }}">Home</a></li>-->
    <!--    <li class="has-submenu"><a href="{{ url('about') }}">About Us</a></li>-->
    <!--    <li class="has-submenu"><a href="{{ url('service') }}">Services</a></li>-->
    <!--    <li class="has-submenu"><a href="{{ route('products') }}">Products</a>-->
    <!--    <li class="has-submenu"><a href="{{ route('our-customer') }}">Our Customer</a>-->
    <!--    <li class="has-submenu"><a href="{{ route('we-present') }}">We Represent</a>-->
    <!--    <li class="has-submenu"><a href="{{ route('link-resource') }}">Link & Resources</a>-->
    <!--    <li class="has-submenu"><a href="{{ route('contact') }}">Contact</a></li>-->
    <!--</ul>-->
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="has-submenu">
            <a href="#">About Us</a>
            <ul>
                <!--<li><a class="{{ Route::is('who-we-are') ? 'active' : '' }}" href="{{ route('who-we-are') }}">Who We Are</a></li>-->
                <li><a class="{{ Route::is('leadership-team') ? 'active' : '' }}"
                        href="{{ route('leadership-team') }}">Leadership Team</a></li>
                <li><a class="{{ Route::is('why-the-chemical') ? 'active' : '' }}"
                        href="{{ route('why-the-chemical') }}">Why The Chemical</a></li>
                <!--<li><a class="{{ Route::is('our-certification') ? 'active' : '' }}" href="{{ route('our-certification') }}">Our Certifications</a></li>-->
            </ul>
        </li>
        <li><a href="{{ url('service') }}">Services</a></li>
        <li><a href="{{ route('we-present') }}">We Represent</a>
        <li><a href="{{ route('our-customer') }}">Our Customer</a>

        <li><a href="{{ route('products') }}">Products</a>
        <li><a href="{{ route('link-resource') }}">Link & Resources</a>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>

@push('js')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('modal', () => ({
                isOpen: false,
                init() {
                    this.$root.addEventListener('open-modal', () => this.isOpen = true);
                    this.$root.addEventListener('close-modal', () => this.isOpen = false);
                }
            }));
        });
    </script>
@endpush
