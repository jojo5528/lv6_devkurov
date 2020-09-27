<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.includes.meta')

    <title>Devkurov รับทำเว็บไซต์เกมออนไลน์</title>

    @include('layouts.includes.css')
</head>
<body class="antialiased font-sans text-white gradient">
    <div id="app">
        @yield('body')
    </div>

    @yield('script')
</body>
</html>
