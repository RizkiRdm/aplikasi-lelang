<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lelang ID</title>

    {{-- link bootstrap sb admin --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- link bootstrap  --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- Hot Reload --}}
    @vite([])
</head>

<body>

    <div class="container-fluid">
        {{ $slot }}
    </div>
    <footer class="text-center text-lg-start text-white" style="background-color: #333333">
        @yield('footer')
    </footer>
    {{-- link bootstrap js --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
