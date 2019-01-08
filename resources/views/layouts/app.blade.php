<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')
</head>
<body class="rtl">
<div id="app">
    <div class='thetop'></div>
    @include('include.header')

    <main class="bg-texture">
        @yield('content')
    </main>
    @include('include.footer')
</div>
</body>
</html>
