<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css">
</head>
<body>
    @include('partials.nav')
    @yield('content')
</body>
</html>