<head>
    <meta charset='utf-8'/>
    <meta name='csrf-token' content='{{ csrf_token() }}' />
    <script> window.Drog = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    @yield('title')

    <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name="msapplication-tap-highlight" content="no" />


    <!-- CSS PAGE -->
    @stack('css')

    <!-- CSS COMMON -->
    <title>Dashboard Drogaria</title>	
    <link href="{{asset('/front/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/front/css/responsivo.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/front/css/javascript.css')}}" rel="stylesheet" type="text/css" />


    <!-- Optional theme -->
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Quicksand:500')}}">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700')}}">
    <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}">
    <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}">

    
</head>
