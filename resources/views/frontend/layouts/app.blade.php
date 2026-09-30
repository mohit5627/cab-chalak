<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'Cab-Chalak | Cab Booking')
    </title>

    <meta
        name="description"
        content="@yield('meta_description', 'Book safe, comfortable and reliable cabs with Cab-Chalak.')"
    >

    {{-- Main Frontend CSS --}}
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/frontend.css') }}"
    >

    @stack('styles')
</head>

<body>

    {{-- Navbar --}}
    @include('frontend.includes.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>


    {{-- Footer --}}
    @include('frontend.includes.footer')
    {{-- Main Frontend JS --}}
    <script src="{{ asset('assets/js/frontend.js') }}"></script>

    @stack('scripts')

</body>

</html>