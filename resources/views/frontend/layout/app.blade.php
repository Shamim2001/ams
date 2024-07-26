<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ setting('web_name') ?? config('app.name') }} || @yield('title')</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/odometer-theme-car.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/rs6.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @yield('style')
</head>

<body>
    @include('sweetalert::alert')

    @include('frontend.components.utils.preloader')

<a href="#" class="scrolltop-btn"><span><i class="flaticon-arrow"></i></span></a>
@include('frontend.includes.header')
@yield('content')
@include('frontend.components.home.about_two')
@include('frontend.includes.footer')

<script src="{{ asset('assets/frontend/') }}/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/slick.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/easing.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/wow.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/before-after.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/odometer.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/isotope.pkgd.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/piechart.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/appear.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/rbtools.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/vendor/rs6.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


{{--<script>
    var	tpj = jQuery;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider31"] = {init:function() {
            window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3_1") : window.revapi3;
            if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider31"].init()}); return;}
            window.revapi3 = jQuery(window.revapi3);
            if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3_1"); return;}
            revapi3.revolutionInit({
                revapi:"revapi3",
                sliderLayout:"fullwidth",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:"1230,1024,778,480",
                gridheight:"600,600,600,540",
                spinner:"spinner0",
                perspective:600,
                perspectiveType:"global",
                keepBPHeight:true,
                editorheight:"600,600,600,540",
                responsiveLevels:"1240,1024,778,480",
                progressBar:{disableProgressBar:true},
                navigation: {
                    onHoverStop:false,
                    arrows: {
                        enable:true,
                        style:"custom",
                        hide_onleave:true,
                        left: {
                            h_offset:30
                        },
                        right: {
                            h_offset:30
                        }
                    }
                },
                parallax: {
                    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
                    type:"scroll",
                    origo:"slidercenter",
                    speed:0
                },
                viewPort: {
                    global:false,
                    globalDist:"-200px",
                    enable:false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
            });

        }}
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>--}}

<script>
    var	tpj = jQuery;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {init:function() {
            window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
            if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
            window.revapi1 = jQuery(window.revapi1);
            if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
            revapi1.revolutionInit({
                revapi:"revapi1",
                sliderLayout:"fullwidth",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:"1230,1024,778,480",
                gridheight:"676,676,560,520",
                spinner:"spinner0",
                perspective:600,
                perspectiveType:"global",
                keepBPHeight:true,
                editorheight:"676,676,560,520",
                responsiveLevels:"1240,1024,778,480",
                progressBar:{disableProgressBar:true},
                navigation: {
                    onHoverStop:false,
                    bullets: {
                        enable:true,
                        tmp:"",
                        style:"bixol-bullet-number",
                        hide_onleave:true,
                        h_align:"left",
                        v_align:"center",
                        h_offset:30,
                        v_offset:0,
                        direction:"vertical"
                    }
                },
                viewPort: {
                    global:false,
                    globalDist:"-200px",
                    enable:false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
            });

        }} // End of RevInitScript
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>



@yield('script')
@stack('js')
</body>
</html>

