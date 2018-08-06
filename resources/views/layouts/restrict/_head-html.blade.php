<head>
    <meta charset='utf-8'/>
    <meta name='csrf-token' content='{{ csrf_token() }}' />
    <script> window.Drog = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    @yield('title')

    <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#49CEFF"/>
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#49CEFF" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <!-- CSS PAGE -->
    @stack('css')

    <!-- CSS COMMON -->
    <link href='{{url('/common/img/favicon.144x144.png')}}' rel='apple-touch-icon' type='image/png' sizes='144x144'/>
    <link href='{{url('/common/img/favicon.114x114.png')}}' rel='apple-touch-icon' type='image/png' sizes='114x114'/>
    <link href='{{url('/common/img/favicon.72x72.png')}}' rel='apple-touch-icon' type='image/png' sizes='72x72'/>
    <link href='{{url('/common/img/favicon.57x57.png')}}' rel='apple-touch-icon' type='image/png'/>
    <link href='{{url('/common/img/favicon.png')}}' rel='icon' type='image/png'>
    <link href='favicon.ico' rel='shortcut icon' />
    <link rel='stylesheet' href='{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/style.css')}}'/>
</head>
