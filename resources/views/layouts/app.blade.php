<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    @stack('styles')
    <title>{{ isset($title) ? $title . ' | ' . config('app.name') . ' App' : config('app.name') . ' App' }}</title>
</head>

<body>
    @yield('content')
</body>

</html>
