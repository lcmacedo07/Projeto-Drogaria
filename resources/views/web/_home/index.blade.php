@extends('layouts.web.layout-web')
@section('content')

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
    

@endsection()

