<!doctype html>
<html lang='{{ app()->getLocale() }}'>
    @include('layouts.web._head-html')
    <body>
        <div class="preloader">
            <div class="loading-icon"></div>
        </div>

        @include('layouts.web._navs')
        @yield('content')
        @include('layouts.web._footer')

        @include('layouts.web._scripts')

    </body>
</head>