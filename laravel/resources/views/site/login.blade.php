<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/laravel/public/site/css/estilo.css">
    <link rel="sortcut icon" href="/assets/DogeLogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Logar</title>

<!--NavBar-->
  </head>
  <body>
    <section>
        <div class="banner">
        <div class="navbar">
            <div class="container">
                <div style="display: flex; flex-direction: row;">
                    <a href="./index.html"><img src="/laravel/public/assets/LOGO_DOGE.png" class="logo"></a>
                </div>
            </div>
</section>
<!--Fim Nav-->

<!--Login-->

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row  no-gutters">
                <div class="col-lg-5">
                    <img src="/laravel/public/assets/CELULARLOGIN.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3" style="color: white;">DOGEBANK</h1>
                    <h4 style="color: white;">Faça login em sua conta</h4>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" id="inputp" placeholder="Endereço de E-mail" class="my-3 p-4" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" id="inputp" placeholder="Senha" class="my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button"  class="btn1 mt-3 mb-4">Entrar</button>
                            </div>
                        </div>
                        <a href="{{ route('recuperarsenha') }}">Esqueceu sua senha</a>
                        <p style="color: rgb(141, 141, 141);">Não tem uma conta?
                        <a href="{{ route('abrirconta') }}">Abra sua conta aqui</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!--Fim Login-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>
</html>
