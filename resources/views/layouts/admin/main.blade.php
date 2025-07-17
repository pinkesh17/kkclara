<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<title>@yield('title')</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="canonical" href="" />

<link rel="icon" type="image/png" href="{{asset('assets/admin/images/favicon.png')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="robots" content="noindex, nofollow" />

<link rel="stylesheet" href="{{asset('assets/admin/css/sidebar-menu.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/simplebar.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/apexcharts.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/prism.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/rangeslider.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/quill.snow.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/google-icon.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/remixicon.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/swiper-bundle.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/fullcalendar.main.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/jsvectormap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/lightpick.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">

@yield('stylesheet')

</head>

<body>
<div class="wrapper">
  <div class="preloader"></div>

  @include('includes.dashboard.header-main')

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">

      @include('includes.dashboard.sidebar-left')


      @yield('layoutContent')
    </div>
  </div>

  <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>






    <script src="{{asset('assets/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mmenu.all.js')}}"></script>
    <script src="{{asset('assets/js/ace-responsive-menu.js')}}"></script>
    <script src="{{asset('assets/js/jquery-scrolltofixed-min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/parallax.js')}}"></script>
    <!-- Custom script for all pages -->
    <script src="{{asset('assets/js/script.js')}}"></script>


    @yield('scripts')



</body>

</html>



