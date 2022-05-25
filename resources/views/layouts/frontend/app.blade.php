<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>TOGETTECH — Inspiring Africa, Building and Improving the Future</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/img/fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/assets/img/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/assets/img/fav/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{asset('frontend/assets/img/fav/safari-pinned-tab.svg')}}" color="#45B6E2">

    <meta name="msapplication-TileColor" content="#45B6E2">
    <meta name="theme-color" content="#45B6E2">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('frontend/dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/fontawesome/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/swiper/css/swiper.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/wow/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/magnific-popup/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/components-elegant-icons/css/elegant-icons.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/simple-line-icons/css/simple-line-icons.css')}}" type="text/css">


    <!-- Global site tag (gtag.js')}}) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EJXZWD0E0Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-EJXZWD0E0Y');
    </script>

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/app.css')}}" type="text/css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800;900&amp;family=Satisfy&amp;display=swap" rel="stylesheet">
    @yield('css')

</head>

<body id="home-version-1" class="home-color-two" data-style="default">

<a href="#main_content" data-type="section-switch" class="return-to-top">
    <i class="fa fa-chevron-up"></i>
</a>

<div class="page-loader">
    <div class="loader">
        <!-- Loader -->
        <div class="blobs">
            <div class="blob-center"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>

    </div>
</div><!-- /.page-loader -->

<div id="main_content">

    @include('layouts.frontend.navbar')

    @yield('content')

    @include('layouts.frontend.footer')


</div><!-- /#site -->

<!-- Dependency Scripts -->
<script src="{{asset('frontend/dependencies/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/jquery.appear/jquery.appear.js')}}"></script>
<script src="{{asset('frontend/dependencies/wow/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/countUp.js/countUp.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js')}}"></script>
<script src="{{asset('frontend/dependencies/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/gmap3/js/gmap3.min.js')}}"></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6'></script>


<!-- Site Scripts -->
<script src="{{asset('frontend/assets/js/header.js')}}"></script>
<script src="{{asset('frontend/assets/js/app.js')}}"></script>
@yield('js')

</body>

</html>
