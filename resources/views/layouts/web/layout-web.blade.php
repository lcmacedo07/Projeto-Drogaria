<!doctype html>
<html lang='{{ app()->getLocale() }}'>
    @include('layouts.web._head-html')
    <body class='icon-menu horizontal-menu menu-alt'>
        
        <div id="interface">
            @include('layouts.web._navs')
            @yield('content')
            @include('layouts.web._footer')
        </div>	
    </body>
</head>