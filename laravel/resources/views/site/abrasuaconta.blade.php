
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="/laravel/public/site/css/estilo.css">
    <link rel="sortcut icon" href="/laravel/public/assets/DogeLogo.png">
    <title>Abra sua conta</title>
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
    <div class="text-center" style="margin-top: -7%;">
        <div class="container-xl" id="elemento">
            <h3 id="crie">Abra sua conta</h3>
            <input type="text" id="inputp" placeholder="Nome">
            <input type="text" id="inputp" placeholder="Sobrenome">
            <input type="date" id="inputp" name="birthday">
            <input type="text" id="inputp" placeholder="RG">
            <input type="text" id="inputp" placeholder="Endereço">
            <input type="password" id="inputp" placeholder="Senha">
            <br><br><br>
            <a href="#">
            <button id="cadastro"><span style="color: black;">Abrir conta</span></button></a>
            <a href="{{route('form_login')}}">
            <button id="cadastro"><span style="color: black;">Voltar para o login</span></button></a>
            <p id="sucesso"></p>
        </div>

        <div class="container-xl" id="elemento2">
            <div class="center">
                <img src="/laravel/public/assets/LOGO_DOGE.png" width="100%" height="500%">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
