<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title')</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="canonical" href="" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="}" />
  <meta property="og:description"content="" />
  <meta property="og:site_name" content="" />

  <meta name="robots" content="noindex, nofollow" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />


  <link rel="icon" href="{{asset('dashboard/images/fav.png')}}" type="image/png" sizes="16x16"> 

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />




  <link rel="stylesheet" href="{{asset('assets/vendor/fonts/iconify-icons.css')}}" />

  {{-- Core CSS --}}
  {{-- build:css assets/vendor/css/theme.css')}}  --}}
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" />

  {{-- Vendors CSS --}}
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  {{-- endbuild --}}

  {{-- Vendor --}}


  {{-- Page CSS --}}
  {{-- Page --}}
  <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}" />

  {{-- Helpers --}}



  @yield('stylesheet')


</head>

<body>

  @yield('layoutContent')





  {{-- / Content --}}

    {{-- Core JS --}}
    {{-- build:js assets/vendor/js/theme.js--}}


    {{--  <script src="{{asset('assets/js/config.js')}}"></script>--}}
    
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/@algolia/autocomplete-js.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>

    {{-- endbuild --}}

    {{-- Vendors JS --}}
    <script src="{{asset('assets/vendor/libs/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/jquery-validate/additional-methods.min.js')}}"></script>

    {{-- Main JS --}}

    <script src="{{asset('assets/js/main.js')}}"></script>


    @yield('scripts')



</body>

</html>
