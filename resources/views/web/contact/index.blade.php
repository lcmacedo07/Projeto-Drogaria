@extends('layouts.web.app')

@section('title','Contact')

@push('css')

@endpush

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

<footer class="footer">
    <div class="container">
        <h2 class="footer-logo"><img src="{{asset('assets/frontend/images/logo1.png')}}"></h2>

        <p>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. Maecenas diam est, venenatis vitae dui in, vestibulum mollis arcu. Donec eu nibh tincidunt, dapibus sem eu, aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

        <p>aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

    </div>

</footer>

@endsection