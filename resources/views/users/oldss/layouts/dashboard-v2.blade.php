<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kochaisa Kurmi Samaj') - kochaisakurmi.in </title>
    <link rel="canonical" href="@yield('canonical', URL::current())" />
    <meta name="description" content="@yield('description', '')">

    <link href="{{asset('dashboard/images/favicon.png')}}" rel="icon" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('dashboard/css/tailwind.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}">



    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

     @yield('stylesheet')
 
</head>
<body>

    @yield('content')





<script src="{{asset('dashboard/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script src="{{asset('dashboard/js/uikit.min.js')}}"></script>
<script src="{{asset('dashboard/js/simplebar.js')}}"></script>

<script src="{{asset('dashboard/js/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('dashboard/js/jquery-validation/additional-methods.min.js')}}"></script>

<script src="{{asset('dashboard/js/script.js')}}"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
 
  @yield('scripts')

</body>
</html>
