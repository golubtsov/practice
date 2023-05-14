<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/icons/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('./public/css/app.scss')}}">
    @vite(['resources/css/app.scss', 'resources/js/app.jsx'])
</head>
<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer')
</body>
</html>
