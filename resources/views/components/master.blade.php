<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('http://back-lego.test/image/logo.png') }}">
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png"> --}}
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>The World Of Bricks - @yield('title')</title>
</head>

<body class="dark:bg-gray-800 bg-white">
    @include('components.navbar')
    <div class="mx-auto container mt-24">
        @yield('content')
    </div>
    {{-- @include('components.highlights') --}}
    @include('components.message')
    @include('components.footer')
    @yield('scripts')
</body>

</html>
