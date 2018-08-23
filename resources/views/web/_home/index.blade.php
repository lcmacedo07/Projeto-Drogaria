@extends('layouts.web.layout-web')
@section('content')


<section class="slide text-center section1 color-white">
    <h1 class="titulo-slide">Informações sobre a Drogaria</h1>
    <p class="descricao-slide">Tudo sobre o Drogaria, de maneira pratica e  profissional.</p>

    <a class="btn-saiba-mais" href="">Saiba Mais</a>
</section>

<!-- Fim da Section de Informações do Blog -->

<!-- Section Sobre -->

<section class="sobre">
    <a name="sobre"></a>
    <div class="container text-center">
        <h1 class="titulo">Sobre</h1>

        <p class="descricao">Tudo que você precisa saber sobre a Drogaria<br>
            de Maneira rapida. Informações onlines de nossos principais autores.</p>


        <article class="col-md-3 detalhe-sobre">
            <ul id="foto">
                <li id="foto01"></li>
            </ul>
            <h1 class="titulo-sobre">Medicamentos Genericos</h1>
            <p class="sobre">Todos os medicamentos Genericos</p>
        </article>

        <article class="col-md-3 detalhe-sobre">
            <ul id="foto">
                <li id="foto02"></li>
            </ul>
            <h1 class="titulo-sobre">Varios produtos de beleza</h1>
            <p class="sobre">Produtos de belezas</p>
        </article>

        <article class="col-md-3 detalhe-sobre">
            <ul id="foto">
                <li id="foto05"></li>
            </ul>
            <h1 class="titulo-sobre">Corega</h1>
            <p class="sobre">Produto Corega</p>
        </article>

        <article class="col-md-3 detalhe-sobre">
            <ul id="foto">
                <li id="foto06"></li>
            </ul>
            <h1 class="titulo-sobre">Fitness</h1>
            <p class="sobre">Medicamentos fitness</p>
        </article>

    </div>
</section>

<!-- Fim da Section Sobre -->

<!-- Section de Detalhes -->

<section class="detalhes padding-40 section2">
    <a name="detalhes"></a>
    <div class="container text-center">
        <h1 class="titulo">Detalhes</h1>
        <p class="descricao color-white">Informações sobre a Drogaria toda semana!</p>

        <article class="col-md-4 detalhe-sobre">

            <h1 class="titulo-sobre">Conteúdo Online</h1>
            <p class="sobre">Materias onlines.</p>
        </article>

        <article class="col-md-4 detalhe-sobre">

            <h1 class="titulo-sobre">Orientação</h1>
            <p class="sobre">Toda e qualquer dúvida que você tiver basta postar no Blog que será respondido o mais rápido possível</p>
        </article>

        <article class="col-md-4 detalhe-sobre">

            <h1 class="titulo-sobre">1 Ano de Acesso</h1>
            <p class="sobre">Você tem acesso a todo o conteúdo durante 1 ano, com total apoio.</p>
        </article>

    </div>
</section>

<!--  Fim da Section de Detalhes -->

<!-- Section de Contato -->

<section class="contato">
    <a name="contato"></a>
    <div class="container text-center">
        <h1 class="titulo">Contato</h1>
        <p class="descricao">Entre em contato e tenha todas as suas dúvidas respondidas<br>
            Responderemos o mais rápido possível</p>
    </div>

    <div class="contato-form">
        <form class="blog-form">
            <input type="text" name="nome" placeholder="Seu Nome">
            <input type="email" name="email" placeholder="Seu E-mail">
            <textarea name="descricao" placeholder="Sua descrição"></textarea>

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</section>

@endsection()

