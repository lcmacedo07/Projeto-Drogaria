<!doctype html>
<html lang='{{ app()->getLocale() }}'>
    @include('layouts.web._head-html')
    <body>
        
            @include('layouts.web._navs')
            @yield('content')
            @include('layouts.web._footer')
        
    </body>
</head>