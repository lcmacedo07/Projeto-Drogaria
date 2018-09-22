<!DOCTYPE html>
<html>
    <head>
        <title>{{$titulo or 'Sign In'}}</title>
        <link rel="stylesheet" href="{{url("assets/painel/css/style.css")}}">
    </head>
    <body>

        <div class="signin">

            <h2>Drogaria</h2>
            
            @yield('content-form')
        </div>

    </body>
</html>
