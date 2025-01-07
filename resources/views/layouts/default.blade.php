<!DOCTYPE html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
</head>

<body class="mx-auto bg-base-100">
    {{-- INCLUDES FOR COMPONENTS --}}
    @include('components.header')

    <main class="py-4 mx-[10%]">
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>

    @include('components.footer')

    {{-- @livewireScripts --}}

</body>
</html>
