<head>
    <meta charset='utf-8'/>
    <meta name='csrf-token' content='{{ csrf_token() }}' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script> window.Drog = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    @yield('title')

    <!-- CSS PAGE -->
    @stack('css')

    <!-- CSS COMMON -->
    <link href='{{url('http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300')}}' rel='stylesheet' type='text/css'>
    <link href='{{url('http://fonts.googleapis.com/css?family=Roboto:400,500,300,700')}}' rel='stylesheet' type='text/css'>

    <!--========== Stylesheets  ==========-->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">


    <link href="{{asset('front/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
