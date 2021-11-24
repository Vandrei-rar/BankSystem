<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/BankSystem/laravel/public/assets/DogeLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/BankSystem/laravel/public/site/css/dashboard.css" />
    <title>Painel do Cliente</title>
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
                
                <a href="{{ route('logout') }}" style="text-decoration: none;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configurações</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>