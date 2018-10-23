<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')  {{ config('app.name', 'Laravel') }}</title>

        <!-- CSS COMMON -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300" rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,300,700" rel='stylesheet' type='text/css'>

        <!--========== Stylesheets  ==========-->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.bxslider.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">


        <link href="{{asset('assets/frontend/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        @stack('css')

    </head>
    <body>

        <div class="preloader">
            <div class="loading-icon"></div>
        </div>


        @include('layouts.web.partial.navs')

        <div class="content">
            @yield('content') 
        </div>



        <script src="{{asset('assets/frontend/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.nav.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.jcountdown.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.bxslider.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.xdomainrequest.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('assets/frontend/js/scripts.js')}}"></script>
        <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>



        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}  

        @stack('js')    
    </body>
</html>
