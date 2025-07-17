<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<title>@yield('title')</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="canonical" href="" />
<link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />



<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link href="{{asset('assets/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{asset('assets/images/favicon.ico')}} images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="{{asset('assets/images/apple-touch-icon-60x60.png')}}" sizes="60x60" rel="apple-touch-icon">
<link href="{{asset('assets/images/apple-touch-icon-72x72.png')}} " sizes="72x72" rel="apple-touch-icon">
<link href="{{asset('assets/images/apple-touch-icon-114x114.png')}}" sizes="114x114" rel="apple-touch-icon">
<link href="{{asset('assets/img/images/apple-touch-icon-180x180.png')}}" sizes="180x180" rel="apple-touch-icon">

<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="robots" content="noindex, nofollow" />

<!-- css file -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ace-responsive-menu.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ud-custom-spacing.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

@yield('stylesheet')


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


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



