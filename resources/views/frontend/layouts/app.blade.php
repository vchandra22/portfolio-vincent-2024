<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/bfb24335ca.js" crossorigin="anonymous"></script>

    {{-- vite resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ __(@$pageTitle) }} | {{ get_app_name() }}</title>
</head>

<body class="antialiased">
    {{-- navbar --}}
    @include('frontend.layouts.navbar')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('frontend.layouts.footer')
</body>

</html>
