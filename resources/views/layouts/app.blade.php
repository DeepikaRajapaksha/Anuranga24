<!DOCTYPE html>
<html>
<head>
    <title>Anuranga24</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.nav')
    <div class="main-content">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>
