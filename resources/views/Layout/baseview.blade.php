<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="time_color" content="#712cf9">
    <title>BOOKING MANAGMENT SYSTEM | @yield('tittle')</title>
    @include('layout.css')
    @yield('style')
</head>
<body>
@yield('content')
@include('layout.js')
@yield('customjs')

</body>
</html>
