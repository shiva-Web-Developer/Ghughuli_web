<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title> 
</head>
<body>
    @include('backend.layout.header')
    @yield('content')
    @include('backend.layout.footer')
</body>
</html>