<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @if($meta_seo->meta_title == '') {{ config('app.name', 'Laravel') }} @else {{ config('app.name', 'Laravel') }}-{{ $meta_seo->meta_title }} @endif</title>

    <meta name="description" content="{{ $meta_seo->meta_description }}">
    <meta name="keywords" content="{{ $meta_seo->meta_keywords }}"/>
    <meta name="author" content="">

    <meta property="og:title" content="{{ $meta_seo->meta_title }}">
    <meta property="og:description" content="{{ $meta_seo->meta_description }}">
    <meta property="og:image" content="{{Voyager::image($meta_seo->meta_image) }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="/css/style.css">

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
<script src="/js/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
        //
    });

    var $menuWrp = '.mobile-menu-wrapper';
    var $closeOpenMenu = '.close-open-menu';
    $(document).on("click",$closeOpenMenu, function (e){
        e.preventDefault();
        if($($menuWrp).hasClass('hidden')){
            $($menuWrp).removeClass('hidden');
        }else{
            $($menuWrp).addClass('hidden');
        }
    })
</script>
</body>
</html>

<div class="swipe-wrp"></div>
