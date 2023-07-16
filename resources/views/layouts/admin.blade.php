<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Instructor Dashboard - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sal.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/euclid-circulara.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnify.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnigy-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @livewireStyles
</head>
<body>
@include('layouts.inc.admin.header')
@include('layouts.inc.admin.mobile-menu')
@include('layouts.inc.admin.side-menu')


<!-- Start Card Style -->
<div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom" style="padding: 220px 30px 30px 40px">
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-5 ">
                    <div class="col-lg-2">
                        @include('layouts.inc.admin.side-bar')
                    </div>

                    <div class="col-lg-10 ">
                        {{--content--}}
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
</div>
@include('layouts.inc.admin.footer')
<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr.min.js')}}"></script>
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<!-- sal.js -->
<script src="{{ asset('assets/js/vendor/sal.js')}}"></script>
<script src="{{ asset('assets/js/vendor/swiper.js')}}"></script>
<script src="{{ asset('assets/js/vendor/magnify.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-appear.js')}}"></script>
<script src="{{ asset('assets/js/vendor/odometer.js')}}"></script>
<script src="{{ asset('assets/js/vendor/backtotop.js')}}"></script>
<script src="{{ asset('assets/js/vendor/isotop.js')}}"></script>
<script src="{{ asset('assets/js/vendor/imageloaded.js')}}"></script>

<script src="{{ asset('assets/js/vendor/wow.js')}}"></script>
<script src="{{ asset('assets/js/vendor/waypoint.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/easypie.js')}}"></script>
<script src="{{ asset('assets/js/vendor/text-type.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js')}}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/js/vendor/magnify-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/paralax-scroll.js')}}"></script>
<script src="{{ asset('assets/js/vendor/paralax.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/countdown.js')}}"></script>
<script src="{{ asset('assets/js/vendor/plyr.js')}}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>
@livewireScripts
</body>
