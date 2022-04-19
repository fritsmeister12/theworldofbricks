<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>The World Of Bricks - @yield('title')</title>
</head>

<body class="dark:bg-gray-800 bg-gray-200">
    @include('components.navbar')
    @yield('content')
    {{-- @include('components.highlights') --}}
    @include('components.message')
    @include('components.footer')
    @yield('scripts')
</body>

</html>
