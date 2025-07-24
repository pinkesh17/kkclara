<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>@yield('title')</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="canonical" href="" />

<link rel="icon" type="image/png" href="{{asset('admin/assets/images/favicon.png')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="robots" content="noindex, nofollow" />

<link rel="stylesheet" href="{{asset('admin/assets/css/sidebar-menu.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/simplebar.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/apexcharts.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/prism.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/rangeslider.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/quill.snow.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/google-icon.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/remixicon.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/swiper-bundle.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/fullcalendar.main.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/jsvectormap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/lightpick.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">

@yield('stylesheet')

</head>

 <body class="boxed-size">

    @yield('variable_section')


  @include('includes.admin.sidebar-left')

  <div class="container-fluid">
    <div class="main-content d-flex flex-column">

      @include('includes.admin.header-main')

      @yield('layoutContent')

      @include('includes.admin.footer-main')

    </div>
  </div>

  @include('includes.admin.theme-setting')




<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('admin/assets/js/dragdrop.js')}}"></script>
<script src="{{asset('admin/assets/js/rangeslider.min.js')}}"></script>
<script src="{{asset('admin/assets/js/quill.min.js')}}"></script>
<script src="{{asset('admin/assets/js/data-table.js')}}"></script>
<script src="{{asset('admin/assets/js/prism.js')}}"></script>
<script src="{{asset('admin/assets/js/clipboard.min.js')}}"></script>
<script src="{{asset('admin/assets/js/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/js/echarts.min.js')}}"></script>
<script src="{{asset('admin/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/fullcalendar.main.js')}}"></script>
<script src="{{asset('admin/assets/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/world-merc.js')}}"></script>
<script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lightpick.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/apexcharts.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/echarts.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/custom.js')}}"></script>
    @yield('scripts')



</body>

</html>



