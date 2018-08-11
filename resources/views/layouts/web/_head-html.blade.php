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
    <link href="{{asset('/front/css/index.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/front/css/fotos.css')}}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/index.css">

    <link href='favicon.ico' rel='shortcut icon' />

</head>
