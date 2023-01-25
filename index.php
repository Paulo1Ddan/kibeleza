<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KI.Beleza - Clínica de Estética</title>
    <script src="https://kit.fontawesome.com/a9f506c8dd.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/logo/logo.svg">
    <link rel="stylesheet" href="links/css/reset.css">
    <!-- Animação do banner -->
    <link rel="stylesheet" href="home/css/slick/slick.css">
    <link rel="stylesheet" href="home/css/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="lib/lity-2.4.1/dist/lity.css">
    <link rel="stylesheet" href="home/css/home.css">
    <link rel="stylesheet" href="home/header/header.css">
    <link rel="stylesheet" href="home/footer/footer.css">
</head>

<body>
    <!--CORPO DO SITE-->
    <?php require_once('home/header/header.php') ?>
    <main>
        <!--COMEÇO DO CONTEUDO-->
        <section id="banner" class="banner">
            <img src="assets/bannerCarrosel/banner5.jpg" alt="">
            <img src="assets/bannerCarrosel/banner2.png" alt="">
            <img src="assets/bannerCarrosel/banner3.jpg" alt="">
            <img src="assets/bannerCarrosel/banner4.jpg" alt="">
            <img src="assets/bannerCarrosel/banner6.gif" alt="">
        </section>
        <section class="sobre">
            <article class="site">
                <!-- <h2>Sobre</h2> -->
                <div class="topo">
                    <!--Seria a subdivisão  para colocar um item do lado do outro, uma caixa menho que "article"-->
                    <img src="assets/sobre/sobre1.jpg" alt="Sobre">
                    <div class="textoSobre">
                        <h2>Sobre</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque vero possimus, culpa ratione
                            magni eos! Voluptas iure, ab nisi delectus obcaecati dolore nesciunt nobis odio dolor
                            aperiam reprehenderit dicta voluptates? Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                        </p>
                        <div>
                            <a><button>Leia mais >>></button></a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="servicos">
            <article class="site">
                <h2>Serviços</h2>
                <div class="txtServicos">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque vero possimus, culpa ratione
                            magni eos! Voluptas iure, ab nisi delectus obcaecati dolore nesciunt nobis odio dolor
                            aperiam reprehenderit dicta voluptates? Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.</p>
                </div>
                <div class="containerServicos">
                    <div class="conteudo">
                        <img src="assets/servicos/servico.jpeg" alt="01">
                        <div class="textoServico">
                            <h3>Serviço 1</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                    <div class="conteudo">
                        <img src="assets/servicos/servico.jpeg" alt="01">
                        <div class="textoServico">
                            <h3>Serviço 1</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                    <div class="conteudo">
                        <img src="assets/servicos/servico.jpeg" alt="01">
                        <div class="textoServico">
                            <h3>Serviço 1</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                    <div class="conteudo">
                        <img src="assets/servicos/servico.jpeg" alt="01">
                        <div class="textoServico">
                            <h3>Serviço 1</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="destaque">
            <div class="play">
                <a href="https://www.youtube.com/watch?v=O91DT1pR1ew" data-lity><i class="fa-solid fa-play"></i></a>
            </div>
        </section>
        <section class="equipe">
            <article class="site">
                <h2>Equipe</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque vero possimus, culpa ratione
                            magni eos! Voluptas iure,</p>
                <div class="conteudoEquipe">
                    <div>
                        <img src="assets/equipe/equipe1.png" alt="Equipe 01">
                        <h3>Nome</h3>
                    </div>
                    <div>
                        <img src="assets/equipe/equipe1.png" alt="Equipe 02">
                        <h3>Nome</h3>
                    </div>
                    <div>
                        <img src="assets/equipe/equipe1.png" alt="Equipe 03">
                        <h3>Nome</h3>
                    </div>
                    <div>
                        <img src="assets/equipe/equipe1.png" alt="Equipe 04">
                        <h3>Nome</h3>
                    </div>
                </div>
            </article>
        </section>
        <section id="galeria">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
            <img src="assets/galeria/galeria.jpeg" alt="">
        </section>
        <!-- Depoimentos -->
        <section id="depoimentos">
            <div class="site">
                <p class="txtDepoimento">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore illum autem
                    nulla tenetur! Optio explicabo voluptatum aperiam, ratione itaque molestiae sit beatae? Minus,
                    voluptates facere et ducimus exercitationem modi quaerat.</p>
                <p class="autor">Paulo Daniel</p>
            </div>
        </section>
        <section id="news">
            <div class="site">
                <h3>Notícias</h3>
                <div class="conteudoNoticias">
                    <div class="noticia">
                        <div class="imgNoticia">
                            <img src="assets/news/news1.jpg" alt="news">
                        </div>
                        <div class="txtNoticia">
                            <h3>Serviço 1</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusamus perspiciatis
                                delectus deleniti, sapiente omnis odit non pariatur ad corrupti, rerum fugiat voluptate
                                quidem numquam nulla ipsam doloribus, vel harum.</p>
                        </div>
                    </div>
                    <div class="noticia">
                        <div class="imgNoticia">
                            <img src="assets/news/news1.jpg" alt="news">
                        </div>
                        <div class="txtNoticia">
                            <h3>Serviço 2</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusamus perspiciatis
                                delectus deleniti, sapiente omnis odit non pariatur ad corrupti, rerum fugiat voluptate
                                quidem numquam nulla ipsam doloribus, vel harum.</p>
                        </div>
                    </div>
                    <div class="noticia">
                        <div class="imgNoticia">
                            <img src="assets/news/news1.jpg" alt="news">
                        </div>
                        <div class="txtNoticia">
                            <h3>Serviço 3</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusamus perspiciatis
                                delectus deleniti, sapiente omnis odit non pariatur ad corrupti, rerum fugiat voluptate
                                quidem numquam nulla ipsam doloribus, vel harum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FIM DO CONTEUDO-->
    </main>
    <?php require_once "home/footer/footer.php"?>
    <!--FIM DO RODAPÉ-->
    <!-- Animação do banner -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="home/js/slick/slick.min.js"></script>
    <script src="home/js/homeScript.js"></script>
    <script src="lib/lity-2.4.1/dist/lity.js"></script>
    <script src="home/header/header.js"></script>
</body>

</html>
