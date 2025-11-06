<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.header')
</head>
<body>
    @include('frontend.layout.navbar')
    <main>
        @yield('content')
    </main>
    @include('frontend.layout.footer')
</body>
</html>
