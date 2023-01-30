<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lelang ID</title>

    {{-- link style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- link bootstrap  --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- Hot Reload --}}
    @vite([])
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">
        {{ $slot }}
    </div>

    {{-- link bootstrap js --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
