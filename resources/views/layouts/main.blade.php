<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="keywords" content=""/>
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <title>alvorada</title>
    <!-- WebFont.js -->
    <script>
        const LANG = '{{ $locale ?? 'ka' }}';
        @if(auth()->check())
        const UserInfo = {!! json_encode(['id'=>auth()->user()->id,'name'=> auth()->user()->name,'created_at'=> auth()->user()->created_at]) !!};
        @else
        const UserInfo = {!! json_encode([]) !!};
        @endif
    </script>



    @vite(['resources/css/app.css'])
    @yield('css')

</head>

<body>

<!-- Start of Header -->
@include('includes.header')
<!-- End of Header -->


<!-- Start of Main -->
    @yield('content')
    <!-- End of Main -->

    <!-- Start of Footer -->
    @include('includes.footer')
    <!-- End of Footer -->



@vite(['resources/js/app.js'])
@yield('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
        //
    });
</script>
</body>
</html>

<div class="swipe-wrp"></div>
