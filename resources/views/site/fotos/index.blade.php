@extends('layouts.web.layout-web')
@section('content')

<section id="corpo-full">
    <article id="noticia-principal">	
        <header id="cabecalho-artigo">
            <hgroup>	
                <h3>Drogaria > Fotos</h3>
                <h1>Galeria de Imagens da Drogaria</h1>
                <h2>por Leandro Macedo</h2>
            </hgroup>
        </header>

        <p>Veja na nossa galeria de fotos vários produtos que mostram algumas das principais características da Drogaria, como recursos e propriedades 
            que estão impressionando o mundo inteiro. Basta passar o mouse sobre uma das fotos para ver uma versão ampliada do produto e com uma breve descrição.</p>

        <ul id="album-fotos">
            <li id="foto01"><span>Medicamentos Genericos</span></li>
            <li id="foto02"><span>Produtos como Acetonas</span></li>
            <li id="foto03"><span>Cremes para a Pele</span></li>
            <li id="foto04"><span>Medicamentos em Capsulas</span></li>
            <li id="foto05"><span>Fixadores Coregas</span></li>
            <li id="foto06"><span>Suplementos para Treino</span></li>
        </ul>

    </article>	
</section>

@endsection()

