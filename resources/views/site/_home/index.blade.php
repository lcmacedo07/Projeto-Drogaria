@extends('layouts.web.layout-web')
@section('content')


<section id="corpo">
    <article id="noticia-principal">
        <header id="cabecalho-artigo">
            <hgroup>
                <h1>Tudo sobre a Drogaria</h1>
                <h2>por Leandro Macedo</h2>
            </hgroup>
        </header>

        <h2>O que é</h2>
        <p>No Brasil, drogaria é um estabelecimento comercial que comercializa e dispensa medicamentos e insumos farmacêuticos contidos em suas embalagens originais provenientes da indústria.[1] Diferente de uma farmácia, drogarias não podem manipular fórmulas oficinais e magistrais.[2]
            Em Portugal, drogaria é um estabelecimento comercial especializado em produtos químicos, embora seja comum também vender materiais de construção e outros produtos não exatamente químicos.</p>

        <figure class="foto-legenda">
            <img src="{{asset('/front/imagens/drogaria.jpg')}}"/>
            <figcaption>
                <h3>Drogaria</h3>
                <p>Drogaria, todo tipo de medicamento que voçê precisa.</p>
            </figcaption>
        </figure>

        <h2>Data de Lançamento</h2>
        <p>Não há uma data específica e oficial, ainda. Pode ser que ele esteja disponível em demonstrações a partir de 2018,
            mas seu lançamento para as lojas fica para, pelo menos, 2019.</p>

        <h2>O que você pode fazer quanto a Drogaria</h2>
        <p>O vídeo de divulgação da Drogaria mostra que você pode se transformar em uma espécie de “super-<wbr/>humano”, já que a loja pode indicar a
            quantos metros você está de seu destino, se o metrô está aberto ou fechado, mostrar o clima, agenda e até mesmo permitir que você marque encontros apenas com 
            comandos de voz.</p>

        <figure class="imagem1">
            <img src="{{asset('/front/imagens/pode.jpg')}}"/>
            <figcaption>
                <h3>Drogaria</h3>
                <p>O vídeo de divulgação da Drogaria mostra que você pode se transformar em uma espécie de “super-<wbr/>humano”, já que a loja pode indicar a
                    quantos metros você está de seu destino, se o metrô está aberto ou fechado, mostrar o clima, agenda e até mesmo permitir que você marque encontros apenas com 
                    comandos de voz.</p>
            </figcaption>
        </figure>

    </article>
</section>

<aside id="lateral">
    <h1>Outras Noticias</h1>
    <h2>Noticias</h2>

    <figure class="imagem2">
        <img src="{{asset('/front/imagens/localizacao.jpg')}}"/>
        <figcaption>
            <h3>Drogaria</h3>
            <p>Os moradores de Artur Nogueira agora tem uma nova opção em drogaria. Chegou na cidade a Drogaria Total com muitas promoções, facilidades e preços imbatíveis.</p>
        </figcaption>
    </figure>

    <h2>Novidades na Drogaria</h2>
    <p>Os moradores de Artur Nogueira agora tem uma nova opção em drogaria. Chegou na cidade a Drogaria Total com muitas promoções, facilidades e preços imbatíveis.
        Rodrigo Silva, farmacêutico responsável, conta que escolheu realizar esse investimento em Artur Nogueira, pois viu a necessidade na cidade de uma drogaria que facilitasse a vida dos moradores nos bairros mais distantes do centro como o: São João dos Pinheiros (Casinhas), Itamaraty, Jd. Carolina e Conservani.
        A Drogaria Total é uma franquia de farmácias do Estado de São Paulo que vem conquistando muitos clientes fiéis por onde passa e já tem 400 lojas em todo estado. “Abrir uma drogaria é um sonho realizado”, relata Rodrigo.</p>

</aside>

@endsection()

