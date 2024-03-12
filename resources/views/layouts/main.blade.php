<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | @yield('title')</title>

    @vite('resources/js/app.js')

    {{-- CDNS --}}
    @yield('cdns')
</head>
<body>

    {{-- Header --}}
    @include('includes.header')


    {{-- Main --}}
    @yield('main-content')


    {{-- Footer --}}
    @yield('footer')
    
</body>
</html>