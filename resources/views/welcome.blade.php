<!--<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

          
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

         
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        
    </head>

    <body>

        <div id="interface">

            <header id="cabecalho">

                <hgroup>
                    <h1>Drogaria</h1> 
                </hgroup>

                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="fotos.html">Fotos</a></li>
                        <li><a href="fale-conosco.html">Fale Conosco</a></li>
                        <li><a href="sobre.html">Entrar</a></li>
                    </ul>
                </nav>
            </header>

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
            <footer id="rodape">
                <p>Copyright &copy; 2018 - by Leandro Macedo</br>
                    <a href="#" target="_blank">Facebook</a>
                    <a href="#" target="_blank">Twitter</a></p>
            </footer>
        </div>	
    </body>	
</html>