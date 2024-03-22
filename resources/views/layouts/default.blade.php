<!DOCTYPE html>
<html data-theme="nord" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/29c53c0003.js" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
</head>

<body class="mx-auto">
    {{-- INCLUDES FOR COMPONENTS --}}
    @include('components.navbar')

    <main class="mx-auto px-6 lg:px-[10%]">
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>
