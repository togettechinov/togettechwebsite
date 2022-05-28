<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eduzone.dexignzone.com/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 14:07:56 GMT -->
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

    <link rel="stylesheet" href="{{asset('backend/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist.min.css')}}">
	<!-- Summernote -->
	<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/skin-3.css')}}">
    @yield('css')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layouts.backend.header')

        @include('layouts.backend.sidebar')
		
        @yield('content')


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>© 2022 All Rights Reserved Design by <a href="https://togettechinov.com" target="_blank">TOGETTECH Design</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required backend/vendors -->
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('backend/js/deznav-init.js')}}"></script>	
	<script src="{{asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	
	<!-- Chart sparkline plugin files -->
    <script src="{{asset('backend/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('backend/js/plugins-init/sparkline-init.js')}}"></script>
	
	<!-- Chart Morris plugin files -->
    <script src="{{asset('backend/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/vendor/morris/morris.min.js')}}"></script> 
	
	<script src="{{asset('backend/vendor/ckeditor/ckeditor.js')}}"></script>
	
    <!-- Init file -->
    <script src="{{asset('backend/js/plugins-init/widgets-script-init.js')}}"></script>
	
	<!-- Demo scripts -->
    <script src="{{asset('backend/js/dashboard/dashboard.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>

    @yield('js')
	
	
	<!-- Svganimation scripts -->
    <script src="{{asset('backend/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('backend/vendor/svganimation/svg.animation.js')}}"></script>
		
</body>

</html>