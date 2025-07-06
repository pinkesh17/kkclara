<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title', 'Kochaisa Kurmi Samaj') - kochaisakurmi.in </title>
    <link rel="canonical" href="@yield('canonical', '')" />
    <meta name="description" content="@yield('description', '')">

    <link rel="icon" href="{{asset('userdash/images/fav.png')}}" type="image/png" sizes="16x16"> 


    <link rel="stylesheet" href="{{asset('userdash/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('userdash/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('userdash/css/toast-notification.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">


    {{-- 
    <link rel="stylesheet" href="{{asset('userdash/css/page-tour.css')}}">--}}


    <link rel="stylesheet" href="{{asset('userdash/css/stories-zuck.css')}}">
    <link rel="stylesheet" href="{{asset('userdash/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('userdash/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('userdash/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('userdash/css/custom.css')}}">



    

    @yield('stylesheet')


</head>
<body>


<body>

    {{-- 
    <div class="wavy-wraper">
        <div class="wavy">
          <span style="--i:1;">kochaisa</span>
          <span style="--i:2;"> &nbsp;  </span>
          <span style="--i:3;">kurmi</span>
          <span style="--i:4;">.</span>
          <span style="--i:5;">.</span>
          <span style="--i:6;">.</span>
        </div>
    </div>--}}


    @yield('content')





<script src="{{asset('userdash/js/main.min.js')}}"></script>
<script src="{{asset('userdash/js/TweenMax.min.js')}}"></script>
<script src="{{asset('userdash/js/jquery-stories.js')}}"></script>
<script src="{{asset('userdash/js/toast-notificatons.js')}}"></script>

{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3vI4IQqzxRU1449lbIHThUb2gCeDW47w&amp;callback=initMap"></script>
<script src="{{asset('userdash/js/locationpicker.jquery.js')}}"></script>
<script src="{{asset('userdash/js/map-init.js')}}"></script> --}}


<script src="{{asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>


<script src="{{asset('userdash/js/stories-zuck.js')}}"></script>
<script src="{{asset('userdash/js/stories-zuck-necessery.js')}}"></script>
<script src="{{asset('userdash/js/stories-zuck-init.js')}}"></script>

<script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-validation/additional-methods.min.js')}}"></script>

<script src="{{asset('userdash/js/script.js')}}"></script>


  @yield('scripts')

</body>
</html>
