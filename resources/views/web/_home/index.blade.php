<!DOCTYPE html>
<html>
    <head>
        <title>Drogaria</title>
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsivo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/javascript.css')}}">

        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Quicksand:500')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

        <link href="{{url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700')}}" rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <script src="{{url('https://code.jquery.com/jquery-3.2.1.js')}}"></script>

    </head>
    <body class="no-js">

        <div class="wrapper">

            <header>
                <nav>
                    <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                    </div>
                    <div class="logo">
                        DROGARIA
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a class="active" href="#">Entrar</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            <section class="content">
                <div class="maxwidth">
                    <article class="col-1_4">
                        <span class="icon-stopwatch"></span>
                        <h3 class="content-title">Designer Guff</h3>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </article>

                    <article class="col-1_4">
                        <span class="icon-stats-bars2"></span>
                        <h3 class="content-title">Detaild Stats</h3>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </article>

                    <article class="col-1_4">
                        <span class="icon-clock"></span>
                        <h3 class="content-title">Dashboard</h3>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </article>

                    <article class="col-1_4">
                        <span class="icon-cog"></span>
                        <h3 class="content-title">Development</h3>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </article>
                </div>
            </section>

            <section class="sec1"></section>

            <div class="slider">            
                <div class="slideshow">
                    <figure><img alt="" src="{{url('front/imagens/slider/slide1.jpg')}}" /></figure>
                    <figure><img alt="" src="{{url('front/imagens/slider/slide2.jpg')}}" /></figure>
                    <span class="prev" style="display: none;"><i class="fas fa-angle-left fa-4x"></i></span>
                    <span class="next" style="display: none;"><i class="fas fa-angle-right fa-4x"></i></span>
                </div>                    
            </div>

            <section class="quote-container">

                <div class="quote-slideshow">
                    <figure>
                        <h2>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. </h2>
                        <figcaption>
                            Nam mi enim, auctor non ultricies.
                        </figcaption>
                    </figure>
                    <figure>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</h2>
                        <figcaption>
                            Nam mi enim, auctor.
                        </figcaption>
                    </figure>
                    <span class="prev" style="display: none;"><i class="fas fa-angle-left fa-2x"></i></span>
                    <span class="next" style="display: none;"><i class="fas fa-angle-right fa-2x"></i></span>
                </div>

            </section>

            <div class="maps">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251265.5010661449!2d-48.48732280553023!3d-10.259691820136736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x933b3439911f1257%3A0x93b8070d05c818f!2sPalmas%2C+TO!5e0!3m2!1spt-BR!2sbr!4v1537641157435" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
            </div>

            <footer class="footer">
                <div class="container">
                    <h2 class="footer-logo">Drogaria</h2>

                    <p>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. Maecenas diam est, venenatis vitae dui in, vestibulum mollis arcu. Donec eu nibh tincidunt, dapibus sem eu, aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

                    <p>aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

                    <ul class="footer-links">
                        <li><a href="#"><i class="fab fa-facebook fa-1x"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram fa-1x"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter fa-1x"></i></a></li>
                        <li><a href="#"><i class="fab fa-github fa-1x"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope fa-1x"></i></a></li>
                    </ul>
                </div>

            </footer>

            <footer class="rodape">
                <p>&copy; Untitled | Drogaria</p>

                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
            </footer>


            <script src="{{asset('front/js/menu.js')}}"></script>
            <script src="{{asset('front/js/carousel.js')}}"></script>
            <script src="{{asset('front/js/main.js')}}"></script>

        </div>
    </body>
</html>