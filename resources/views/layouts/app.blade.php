<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>

    @include('layouts.nav')
    
    @yield('content')

    @include('layouts.footer')

    @include('layouts.script')
</body>
</html>