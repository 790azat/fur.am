<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fur.am</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @yield('content')
</body>
</html>
