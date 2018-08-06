<!doctype html>
<html lang='{{ app()->getLocale() }}'>
    @include('layouts.restrict._head-html')
    <body class='icon-menu horizontal-menu menu-alt'>
        <div class='wrapper'>
            @include('layouts.restrict._navs')
            <div class='container-fluid'>
                @yield('content')
            </div>
        </div>
        <input type='hidden' id='token' value='{{csrf_token()}}'/>
        <form id='logout-form' action='{{ url('/logout')}}' method='POST' style='display: none;'>
            {{ csrf_field() }}
        </form> 
        @include('layouts.restrict._scripts')
    </body>
</head>