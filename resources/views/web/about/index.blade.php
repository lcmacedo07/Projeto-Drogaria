@extends('layouts.web.app')

@section('title','About')

@push('css')

@endpush

@section('content')

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