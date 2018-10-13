@extends('layouts.web.layout-web')
@section('content')

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
                <form id="contact-form" action="#">
                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input id="name" class="form-input" type="text" name="name" placeholder="Your Name">
                    </div>

                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <input id="email" class="form-input" type="email" name="email" placeholder="Your Email">
                    </div>

                    <div class="col-md-12 form-item">
                        <span class="input-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </span>
                        <textarea id="message" class="form-input" name="message" cols="30" rows="4" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="form-submit">
                        <span class="fa fa-paper-plane-o"></span> 
                        Send Message
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

@endsection