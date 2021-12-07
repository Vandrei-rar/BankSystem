<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/IMG/DogeLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/BankSystem/laravel/public/site/css/dashboard.css" />
    <title>Painel do Cliente - Saldo</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="coluna" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
                <i class=""> <a href="" style="text-decoration: none; color: #da9323;"></i>DOGEBANK</div></a>
            <div class="list-group list-group-flush my-3">

                <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fa fa-home"></i> Inicio</a>

                <a href="{{route('dash-saldo')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fa fa-money"></i> Saldo</a>

                <a href="{{route('dash-transferencia')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                    class="fa fa-exchange" aria-hidden="true"></i> Transferência</a>

                <a href="{{route('dash-dadosconta')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fa fa-list-alt"></i> Dados da Conta</a>

                <a href="{{route('logout')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fa fa-sign-out" style="color: red;"></i> Sair</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa fa-bars" style="color: #fff;  padding: 10px;" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0" style="color: #fff;">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" style="color: #fff;" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user" style="color: #fff;"></i> Conta Teste
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
    <!-- /#page-content-wrapper -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">R$ 100.000.00</h3>
                            <p class="fs-5">Saldo</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">R$ 100.000.00</h3>
                            <p class="fs-5">Valor Disponível para Saque</p>
                        </div>
                    </div>
                </div>  -->

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">R$ 3.564</h3>
                            <p class="fs-5">CashBack</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">R$30.0000</h3>
                            <p class="fs-5">Valor Investido</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <h3 class="fs-4 mb-3" style="color: #da9323;">Transferências recentes</h3>
                <div class="col">
                    <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">ID da Transferência</th>
                                <th scope="col">Nome Destinatário</th>
                                <th scope="col">Valor da Transferência</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>5413324</td>
                                <td>Junior</td>
                                <td>R$1200</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>5413390</td>
                                <td>Ricardo</td>
                                <td>R$750</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>4413324</td>
                                <td>Felipe</td>
                                <td>R$600</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>5412224</td>
                                <td>Eiji</td>
                                <td>R$300</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>5423324</td>
                                <td>Vandrei</td>
                                <td>R$120</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>5413123</td>
                                <td>Dener</td>
                                <td>R$1800</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>5233324</td>
                                <td>Greco</td>
                                <td>R$75</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>1413324</td>
                                <td>Luiz</td>
                                <td>R$36</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>2413324</td>
                                <td>Suelen</td>
                                <td>R$255</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>7413324</td>
                                <td>Marco</td>
                                <td>R$434</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>8413324</td>
                                <td>Gustavo</td>
                                <td>R$1236</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>9413324</td>
                                <td>Kayky</td>
                                <td>R$422</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>


    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>