<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'Cab-Chalak | Cab Booking')
    </title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <meta
        name="description"
        content="@yield('meta_description', 'Book safe, comfortable and reliable cabs with Cab-Chalak.')"
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
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