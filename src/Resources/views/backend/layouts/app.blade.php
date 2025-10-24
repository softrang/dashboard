<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Softrang Dashboard')</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('vendor/ecommerce-dashboard/images/favicon.png') }}">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('vendor/ecommerce-dashboard/css/topbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/ecommerce-dashboard/css/layout.css') }}">

    {{-- Additional Page Styles --}}
    @stack('styles')

   
</head>
<body>

    {{-- Sidebar --}}
    @include('ecommerce-dashboard::backend.partials.topbar')
    @include('ecommerce-dashboard::backend.partials.sidebar')

    {{-- Main Content --}}
    <div class="main-content">
       

        <div class="content">
            @yield('content')
        </div>

        <footer>
            © {{ date('Y') }} Softrang — All Rights Reserved
        </footer>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('vendor/ecommerce-dashboard/js/layout.js') }}"></script>

    @stack('scripts')
</body>
</html>
