<!DOCTYPE html>
<html>
<head>
    <title>Anuranga24</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- <div class="hero-default">
        @include('partials.nav')
    </div> --}}
    <div class="main-content">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>
