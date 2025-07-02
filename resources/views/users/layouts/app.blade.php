<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Superio | Just another HTML Template | Home Page 01</title>


  @vite(['resources/usersassets/app.css'])

  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader"></div>
            @include('users.includes.header-main')

            @yield('content')

            @include('users.includes.footer-main')

  </div>





  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/chosen.min.j')}}s"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
  <script src="{{asset('assets/js/jquery.modal.min.js')}}"></script>
  <script src="{{asset('assets/js/mmenu.polyfills.js')}}"></script>
  <script src="{{asset('assets/js/mmenu.js')}}"></script>
  <script src="{{asset('assets/js/appear.js')}}"></script>
  <script src="{{asset('assets/js/anm.min.js')}}"></script>
  <script src="{{asset('assets/js/ScrollMagic.min.js')}}"></script>
  <script src="{{asset('assets/js/rellax.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.js')}}"></script>
  <script src="{{asset('assets/js/wow.js')}}"></script>
  <script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-validation/additional-methods.min.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>

   {{--  @vite(['resources/usersassets/app.js']);


    @vite([
    'resources/usersassets/js/jquery.js',
    'resources/usersassets/js/popper.min.js',
    'resources/usersassets/js/chosen.min.js',

    'resources/usersassets/js/bootstrap.min.js',
    'resources/usersassets/js/jquery.fancybox.js',
    'resources/usersassets/js/jquery.modal.min.js',
    'resources/usersassets/js/mmenu.polyfills.js',
    'resources/usersassets/js/mmenu.js',
    'resources/usersassets/js/appear.js',
    'resources/usersassets/js/anm.min.js',
    'resources/usersassets/js/ScrollMagic.min.js',
    'resources/usersassets/js/rellax.min.js',
    'resources/usersassets/js/owl.js',
    'resources/usersassets/js/wow.js',
    'resources/usersassets/js/script.js'
    ]); --}}
</body>
</html>
