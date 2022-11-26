<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title> 
</head>
<body>
    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')
</body>
</html>