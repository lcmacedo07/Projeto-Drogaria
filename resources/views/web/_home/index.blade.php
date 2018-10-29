@extends('layouts.web.app')

@section('title','Drogaria')

@push('css')

@endpush

@section('content')

<!-- Start section-home -->
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url('assets/frontend/images/farmacia01.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                <div class="animation animated-item-2">
                                    Every new computer that’s brought home from the store has an operating system installed onto it.
                                </div>
                                <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                <a class="btn-slide white animation animated-item-3" href="#">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.item-->

            <div class="item" style="background-image: url('assets/frontend/images/farmacia02.jpeg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                <div class="animation animated-item-2">
                                    Every new computer that’s brought home from the store has an operating system installed onto it.
                                </div>
                                <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>
<!-- End section-home -->

<!-- Start section-about -->
<section id="section-about" class="about-wrap">
    <div class="container">
        <div class="row">
            <!-- Start section-title -->
            <div class="col-md-12 section-title">
                <h3 class="black-border">
                    <span class="red-border">About and </span><span class="red-bold"> Features</span>
                </h3>
            </div>
            <!-- End section-title -->

            <div class="col-md-6">
                <!-- Start image-slider -->
                <div class="image-slider">
                    <ul class="slider">
                        <li><img src="{{asset('assets/frontend/images/team1.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/frontend/images/team2.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/frontend/images/team3.png')}}" alt=""></li>
                    </ul>
                </div>
                <!-- End image-slider -->
            </div>

            <div class="col-md-6">
                <!-- Start tab-container -->
                <div class="tab-container">
                    <!-- Start tab-nav -->
                    <ul class="tab-nav">
                        <li class="tab-selected"><a href="#one">About</a></li>
                        <li><a href="#two">Features</a></li>
                        <li><a href="#three">Others</a></li>
                    </ul>
                    <!-- End tab-nav -->

                    <!-- Start Tab -->
                    <div class="tab one">
                        <h4>Our professionalism helps us to grow</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, soluta.
                            consectetur adipisicing elit. Id, soluta elit consectetur adipisicing elit. Id, soluta consectetur adipi sicing elit. id soluta soluta consec elit tetur adipisicing elit soluta consectetur.</p>
                        <!-- Start list-items -->
                        <ul class="list-items">
                            <li><span class="fa fa-long-arrow-right"></span>We always make our clients happy.</li>
                            <li><span class="fa fa-long-arrow-right"></span>World class designers are our team members.</li>
                            <li><span class="fa fa-long-arrow-right"></span>Best quality products makes us exceptional</li>
                        </ul>
                        <!-- End list-items -->
                    </div>
                    <!-- End Tab -->

                    <!-- Start Tab -->
                    <div class="tab two">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, soluta consectetur adipisicing elit Id soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, dignissimos</p>

                        <!-- Start single feature -->
                        <div class="feature">
                            <span class="feature-icon">
                                <i class="fa fa-bolt"></i>
                            </span>
                            <div class="feature-desc">
                                <h5>Our main feature one</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus cupiditate esse soluta corrupti. Id, dolores eos.</p>
                            </div>
                        </div>
                        <!-- End single feature -->

                        <!-- Start single feature -->
                        <div class="feature">
                            <span class="feature-icon">
                                <i class="fa fa-database"></i>
                            </span>
                            <div class="feature-desc">
                                <h5>Our main feature two</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus cupiditate esse soluta corrupti. Id, dolores eos.</p>
                            </div>
                        </div>
                        <!-- End single feature -->
                    </div>
                    <!-- End Tab -->

                    <!-- Start Tab -->
                    <div class="tab three">
                        <h4>This is another tab title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus obcaecati cupiditate accusamus corporis commodi praesentium fuga, dolor recusandae ea blanditiis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus obcaecati cupiditate accusamus corporis commodi praesentium fuga, dolor recusandae ea blanditiis.</p>
                    </div>
                    <!-- End Tab -->
                </div>
                <!-- End tab-container -->
            </div>
            <!-- End col-md-6 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section-about -->

<!-- Start Services -->
<section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 section-title">
                    <h3 class="black-border">
                        <span class="red-border">Our main </span><span class="red-bold"> services</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-edit"></i></div>
                    <div class="icon two"><i class="fa fa-edit"></i></div>
                    <h2><a href="#">Lorem Ipsum</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                    <div class="icon two"><i class="fa fa-lightbulb-o"></i></div>
                    <h2><a href="#">Lorem Ipsum</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="icon two"><i class="fa fa-money"></i></div>
                    <h2><a href="#">Lorem Ipsum</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                    <div class="icon two"><i class="fa fa-clock-o"></i></div>
                    <h2><a href="#">Lorem Ipsum</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-globe"></i></div>
                    <div class="icon two"><i class="fa fa-globe"></i></div>
                    <h2><a href="#">Lorem Ipsum</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-magic"></i></div>
                    <div class="icon two"><i class="fa fa-magic"></i></div>
                    <h2><a href="#">Lorem Ipsum</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <!--/ End Single Service -->
        </div>
    </div>
</section>
<!--/ End Services -->

<!-- Start section-achievement -->
<section id="section-achievement" class="achievement-wrap text-center">
    <div class="achievement-overlay"></div>
    <div class="container">
        <div class="row">
            <!-- Start section-title -->
            <div class="col-md-12 section-title">
                <h3 class="white-border">
                    <span class="red-border">Our </span><span class="red-bold"> Achievements</span>
                </h3>
            </div>
            <!-- End section-title -->

            <!-- Start achievement-box -->
            <div class="col-md-3 achievement-box">
                <div class="achievement">
                    50
                    <span>Projects</span>
                </div>
            </div>
            <!-- End achievement-box -->

            <!-- Start achievement-box -->
            <div class="col-md-3 achievement-box">
                <div class="achievement">
                    40
                    <span>Articles</span>
                </div>
            </div>
            <!-- End achievement-box -->

            <!-- Start achievement-box -->
            <div class="col-md-3 achievement-box">
                <div class="achievement">
                    2050
                    <span>Sales</span>
                </div>
            </div>
            <!-- End achievement-box -->

            <!-- Start achievement-box -->
            <div class="col-md-3 achievement-box">
                <div class="achievement">
                    60
                    <span>Tutorials</span>
                </div>
            </div>
            <!-- End achievement-box -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- Start section-achievement -->

<!-- Start section-contact -->
<section id="section-contact" class="contact-wrap">
    <div class="container">
        <div class="row">
            <!-- Start section-title -->
            <div class="col-md-12 section-title">
                <h3 class="black-border">
                    <span class="red-border">Leave a </span><span class="red-bold"> message</span>
                </h3>
            </div>
            <!-- End section-title -->

            <!-- Start address-wrap -->
            <div class="col-md-6 address-wrap">
                <!-- Start address-item -->
                <div class="address-item">
                    <span class="address-icon">
                        <i class="fa fa-mobile"></i>
                    </span>
                    <div class="address-desc">
                        <h4>Available 24/7</h4>
                        <p>000 00 00000-0000</p>
                    </div>
                </div>
                <!-- End address-item -->

                <!-- Start address-item -->
                <div class="address-item">
                    <span class="address-icon">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <div class="address-desc">
                        <h4>Email us</h4>
                        <p>drogaria@gmail.com</p>
                    </div>
                </div>
                <!-- End address-item -->

                <!-- Start address-item -->
                <div class="address-item">
                    <span class="address-icon">
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <div class="address-desc">
                        <h4>Corporate office</h4>
                        <p>22/Tocantins, Palmas, Rua 22</p>
                    </div>
                </div>
                <!-- End address-item -->
            </div>
            <!-- End address-wrap -->

            <!-- Start form-wrap -->
            <div class="col-md-6 form-wrap">
                <form class="contact-form" method="post" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input id="name" class="form-input" type="text" name="name" required="required" placeholder="Seu Nome">
                    </div>

                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <input id="email" class="form-input" type="email" name="email" required="required" placeholder="Seu E-mail">
                    </div>
                    
                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <input id="subject" class="form-input" type="text" name="subject" required="required" placeholder="Assunto">
                    </div>

                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </span>
                        <textarea id="message" class="form-input" name="message" required="required" cols="30" rows="4" placeholder="Sua Mensagem"></textarea>
                    </div>

                    <button type="submit" id="submit" name="submit" class="form-submit">
                        <span class="fa fa-paper-plane-o"></span> 
                        Enviar
                    </button>
                </form>
                <!-- End form -->
                <div class="success-msg"><p></p></div>
            </div>
            <!-- End form-wrap -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section-contact -->

<div class="maps">  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251265.5010661449!2d-48.48732280553023!3d-10.259691820136736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x933b3439911f1257%3A0x93b8070d05c818f!2sPalmas%2C+TO!5e0!3m2!1spt-BR!2sbr!4v1537641157435" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
</div>

<footer class="footer">
    <div class="container">
        <h2 class="footer-logo"><img src="{{asset('assets/frontend/images/logo1.png')}}"></h2>

        <p>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. Maecenas diam est, venenatis vitae dui in, vestibulum mollis arcu. Donec eu nibh tincidunt, dapibus sem eu, aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

        <p>aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

    </div>

</footer>

<footer class="rodape">
    <p>&copy; Untitled | Drogaria</p>

    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
    </p>
</footer>


@endsection

@push('js')

@endpush
