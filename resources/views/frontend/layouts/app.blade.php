<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- SEO Meta Tags -->
    @yield('meta')

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('resources/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('resources/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('resources/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('resources/favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/bfb24335ca.js" crossorigin="anonymous"></script>

    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- vite resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ __(@$pageTitle) }} | {{ get_app_name() }}</title>
</head>

<body class="antialiased bg-primary">
    {{-- navbar --}}
    @include('frontend.layouts.navbar')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('frontend.layouts.footer')

</body>
{{-- Scripts --}}
@stack('script')

</html>
