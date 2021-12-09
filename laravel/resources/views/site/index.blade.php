<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="/css/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/owl/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/style.css"/> -->
    <link rel="sortcut icon" href="/BankSystem/laravel/public/assets/DogeLogo.png"/>
    <!-- <link rel="stylesheet" href="/css/footer.css"/>
    <link rel="stylesheet" href="/css/googlemaps.css"/> -->
    <link rel="stylesheet" href="/BankSystem/laravel/public/site/css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>DogeBank</title>
  </head>

  <body>
    <!--HEADER-->
    <div id="header">
      <div class="container">
        <nav
          class="navbar navbar-expand-lg navbar-light justify-content-between"
        >
          <a class="navbar-brand" href="#">
            <img src="/BankSystem/laravel/public/assets/LOGO_DOGE.png" class="img-fluid" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section-slider" data-href="#section-slider">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('form_login')}}" data-href="#section-fundamental">Acessar Minha Conta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('abrasuaconta')}}" data-href="depoimentos">Abra sua conta</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--//ENCERRAMENTO DO HEADER-->


    <!--Background Inicio-->

<main>
  <div class="backgroundPI"></div>
  <div>
    <center>
      <h1 style="padding: 50px 0 0">
        <p>Cartões</p>
      </h1>
    </center>
  </div>
</main>
<!--Fim Back-->



<!--SLIDER-->
<!--Ínicio do carrossel principal-->
    <!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/banner-colegio_feb_2020.1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/FEBBANNER_PRINCIPAL_MATRICULAS.jpg" alt="Second slide">
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>-->
<!--Final do carrossel principal-->

<!--Ínicio do slide principal-->

    <div id="slider" class="">
        <div class="container pt-5">
          <div class="row">

          <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4" style="margin-bottom: 100px;">
            <h4 class="title" style="color: #131313; font-size: 45px;">Black Premium</h4>
            <h3 class="mb-4" style="color: #131313;"></h3>

            <p style="color: #131313; font-family: Arial, Helvetica, sans-serif; text-align: justify;">
              <b style="font-size: 30px;">O cartão pensado para <br> quem quer ver além.</b>
              </p>

            <a id="bbb" class="button btn btn-primary button-primary d-md-inline-block d-block mb-md-0 mb-2 mr-md-2 "style="text-transform: uppercase;">Saiba mais</a>
          </div>



          <div class="col-lg-6 col-md-6 align-self-center text-center">
            <img src="/laravel/public/assets/cardBlack.png" class="img-fluid menina-medio" style="margin-bottom: 100px;"/>
          </div>

      </div>


      </div>
    </div>


    <!--//ENCERRAMENTO DO SLIDER-->

    <!--Fundamental-->


      <div class="container">
        <div class="row">
          <div
            class="col-md-6 align-self-center text-center order-md-1 order-2"
          >
            <img src="/laravel/public/assets/cardGold.png" class="img-fluid menina-medio" style="margin-top: 50px;" />
          </div>
          <div
            class="col-md-6 align-self-center order-md-2 order-1 mb-md-0 mb-4"
          >
            <h4 class="title" style="color: #ff9900; font-size: 45px;">Gold Edition</h4>
            <h4 class="subtitle" style="color: #131313;">
              A hora de decidir o seu futuro.
            </h4>
            <p style="color: #131313; text-align: justify;"><b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus cupiditate delectus odio pariatur quo, neque sit impedit, dicta dolores totam, quidem cum? Consequuntur tempora, officia ut dicta rerum aliquid minima?

            </p></b>
            <a id="bbb" class="button btn btn-primary button-primary d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" style="text-transform: uppercase;">Saiba mais</a>
          </div>

        </div>
      </div>
    </div>

    <div id="slider" class="">
      <div class="container pt-5">
        <div class="row">

        <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4" style="margin-bottom: 100px;">
          <h1 style="color: #131313;"></h1>
          <h4 class="mb-4" style="color: #423aff; font-size: 45px;"> Cartão de Crédito</h4>

          <p style="color: #131313; font-family: Arial, Helvetica, sans-serif; text-align: justify;"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa modi quibusdam quisquam ipsum magni quia, saepe mollitia delectus sapiente repellat, architecto alias in eos voluptatem reprehenderit assumenda, illum deserunt?

            </p></b>

          <a id="bbb" class="button btn btn-primary button-primary d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" style="text-transform: uppercase;">Saiba mais</a>
        </div>



        <div class="col-lg-6 col-md-6 align-self-center text-center">
          <img src="/laravel/public/assets/cardPadrao.png" class="img-fluid menina-medio" style="margin-bottom: 100px;"/>
        </div>

    </div>


    </div>
  </div>
    <!--//ENCERRAMENTO DO SOBRE-->


    <!--NOSSOS SERVICOS-->
    <div id="servicos" class="block">
      <div class="container">
        <h2 class="title text-center">O DogeBank é a direção!</h2>
        <h4 class="subtitle text-center mb-4">
        </h4>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img src="/laravel/public/assets/cartao-de-credito.png" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Cartões</h5>
              <p class="mb-0">

              </p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img src="/laravel/public/assets/transferencia-bancaria.png" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Transferências</h5>
              <p class="mb-0">

              </p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img src="/laravel/public/assets/duvida.png" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Dúvidas?</h5>
              <p class="mb-0">

              </p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img src="/laravel/public/assets/investindo.png" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Facilidade</h5>
              <p class="mb-0">

              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--// ENCERRAMENTO DO NOSSOS SERVICOS-->


    <!--// Inicio Da nossa insfraestura-->
<div class="container">
    <div class="infra block">
      <div class="row">
      <div class="col-lg-6 col-md-6">

        <h2 class="title">Conheça nossa Infraestrutura</h2>

        <p style="font-size: 19px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium.<br>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium.<br><br>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium<br>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium.
          </div>

          <div class="col-md-6 col-lg-6">

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>

            </ol>

            <div id="carouselExampleIndicatorsa" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicatorsa" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicatorsa" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicatorsa" data-slide-to="2"></li>

              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://source.unsplash.com/400x220/?coins" alt="First slide" style="border-radius: 3%;">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/400x220/?dog" alt="Second slide" style="border-radius: 3%;">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/400x220/?bank" alt="Terceiro slide" style="border-radius: 3%;">
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicatorsa" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicatorsa" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <!--CLIENTES-->
    <div id="clientes" class="block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-1.jpg" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-2.jpg" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-3.jpg" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-4.png" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-5.png" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-6.png" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-7.png" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-8.png" class="img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img src="/laravel/public/assets/clientes/empresa-9.png" class="img-fluid" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="cliente-texto ml-5">
              <div class="imagem">
                <img src="/laravel/public/assets/clientes-img.svg" />
                <div class="d-inline-block pl-md-0 pl-3">
                  <span>10</span>
                  <A>Anos reescrevendo histórias</A>
                </div>
              </div>
              <div class="telefone">
                <img src="/laravel/public/assets/phone.svg" class="img-fluid" />
                <div class="d-inline-block pl-3">
                  <span>(17) 3321-3333</span>
                  Atendimento de segunda a sexta, das 8h as 19h
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--//CLIENTES-->

    <!--DEPOIMENTOS DOGEBANK -->
    <div id="depoimentos" class="block">
      <div class="container">
        <h2 class="title text-center">depoimentos</h2>
        <h4 class="subtitle text-center mb-4">
          Podemos colocar alguns depoimentos dos membros da empresa
        </h4>

        <div class="owl-carousel owl-theme owl-loaded">
          <div>
            <div class="depoimento">
              <img src="/laravel/public/assets/redes-sociais/Vands1.jpeg" style="height: 150px; width: 150px; border-radius: 300px;" />
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Vandrei Ribeiro</span> / Back-End DogeBank
                </p>
                <p class="mb-0">
                  <img src="" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="/laravel/public/assets/redes-sociais/Su1.jpeg" style="height: 150px; width: 150px; border-radius: 300px;"/>
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Suelen Maria</span> / Back-End DogeBank
                </p>
                <p class="mb-0">
                  <img src=""  class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="/laravel/public/assets/redes-sociais/Eiji.jpg" style="height: 150px; width: 150px; border-radius: 300px;" />
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Bruno Eiji</span> / Front-End DogeBank
                </p>
                <p class="mb-0">
                  <img src="" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="/laravel/public/assets/redes-sociais/Greco1.jpeg" style="height: 150px; width: 150px; border-radius: 300px;" />
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Greco Fernando</span> / Front-End DogeBank
                </p>
                <p class="mb-0">
                  <img src="" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="/laravel/public/assets/redes-sociais/Luiz1.jpeg" style="height: 150px; width: 150px; border-radius: 300px;" />
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Luiz Henrique</span> / Documentação, Redes DogeBank
                </p>
                <p class="mb-0">
                  <img src="" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento"> <!--Lembrarrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->
              <img src="/laravel/public/assets/redes-sociais/Marco1.jpg" style="height: 150px; width: 150px; border-radius: 300px;" />
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Marco Antonio</span> / Banco de Dados - DogeBank
                </p>
                <p class="mb-0">
                  <img src="" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="/laravel/public/assets/redes-sociais/Gustavo1.jpeg" style="height: 150px; width: 150px; border-radius: 300px;" />
              <div class="depoimento-texto pl-3">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium dolorem que laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis.
                </p>
                <p class="name">
                  <span>Gustavo Martins</span> / Banco de Dados - DogeBank
                </p>
                <p class="mb-0">
                  <img src="" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--//DEPOIMENTOS-->


    <!-- Google Maps -->
    <div class="container">
      <h2 style="text-align: center; margin: 30px;">
        Aonde nos encontrar
      </h2>
      <center>
      <div class="mapBox">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7470.6427661616435!2d-48.56314302868866!3d-20.574928998377136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bb8552148654b5%3A0xb036ef36027e831c!2sUnifeb!5e0!3m2!1spt-BR!2sbr!4v1632600769127!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </center>
    </div>
    <!-- Final Google Maps -->



    <!--FOOTER

    <footer id="contato">
      <div class="container block">
        <div class="email">
          <img src="/laravel/publicassets/paperplane.svg" />
          <h2 class="title text-center">Fique por dentro das novidades</h2>
          <h4 class="subtitle text-center mb-4">
          Através do seu e-mail entraremos em contato para mais novidades!
          </h4>
          <form>
            <div class="flex-md-grow-1 pr-md-3 pb-md-0 pb-3">
              <label for="email" class="sr-only">Password</label>
              <input
                type="email"
                class="form-control w-100"
                id="email_input"
                placeholder="seu email"
              />
            </div>
            <div class="flex-grow-1 flex-md-grow-0">
              <button
                type="submit"
                class="btn btn-light button mb-3 d-md-inline d-block w-100" style="background-color: #da9323; border-color: #da9323;"
              >
                cadastre-se
              </button>
            </div>
          </form>
        </div>
-->
<!--//FOOTER-->

<section style="background-color: #131313;">
<div class="container">
        <div class="logo py-4">
          <div class="row">
            <div class="col-md-6 align-self-center text-md-left text-center">
              <img src="/laravel/public/assets/LOGO DOGE.png" class="img-fluid" />
            </div>
            <div class="col-md-6 align-self-center text-right">
              <ul>
                <li>
                  <a href="#"><img src="/laravel/public/assets/redes-sociais/facebook.png"/></a>
                </li>
                <li>
                  <a href="#"><img src="/laravel/public/assets/redes-sociais/instagram.png"/></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      </div>
    </footer>
</section>

<!--Final Footer-->


<!--Footer 2 teste

    <section style="background-color: black;">
    <footer class="">

      <div id="div-contato">
        <div style="margin-right:150px;">
          <h2 style="color:white;">Navegação</h2>
          <p style="color:white;">Inicio</p>
          <p style="color:white;">Produtos</p>
          <p style="color:white;">Quem Somos</p>
        </div>
      </div>
      <div style="margin-right:150px;">
          <h2 style="color:white;">Redes Sociais</h2>
          <img src="/laravel/public/assets/instagram.svg" style="width:40px; margin-right:20px; margin-left:10px;" alt="">
          <img src="/laravel/public/assets/facebook.svg" style="width: 38px;" alt="">
        </div>
        <div style="margin-right:5px;">
          <h2 style="color:white;">Contato</h2>
          <p style="color:white;">(17)99426-0709</p>
          <p style="color:white;">Agendas_pet@gmail.com</p>
          <p style="color:white;">São Paulo</p>
        </div>
       </div>
  </footer>
</section>

Footer2 Final-->


    <!--JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js?a"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/magnify/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  </body>
</html>
