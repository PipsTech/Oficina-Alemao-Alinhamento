<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hm.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2e1a878a13.js" crossorigin="anonymous"></script>
</head>

<body>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="nav-brand" href="./homeFun.php">Oficina Alemão Alinhamento</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav m-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="./cadastraServico.php">Cadastro-Serviço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cadastroProduto.php">Cadastro-Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./agendaEletronica.php">Agenda Eletrônica</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <?php
                    ob_start();
                    require "../backend/Autentica_loginFuncionario.php";
                    ob_end_clean();
                    echo $obj->alteraHeader();
                    ?>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">
        <p></p>

        <a class="btn btn-lg btn-block btn-outline-info text-uppercase" href="./pendentes.php">Filtrar por Pendentes <i class="fas fa-exclamation-circle" style="color: rgb(0, 204, 255);"></i></a>
        <p></p>
        <a class="btn btn-lg btn-block btn-outline-danger text-uppercase" href="./fechadas.php">Filtrar por Finalizados <i class="fas fa-check-circle" style="color:red"></i></a>
        <p></p>
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="text-center" style="background: -webkit-linear-gradient(left, rgb(233, 71, 7), #f7bd00);">
                        Vendas Reservadas
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col">
            <div class="row">
                <?php
                ob_start();
                require "../backend/Carrinho.php";
                ob_end_clean();
                $obj2 = new Carrinho();
                $a = $obj2->printVendas();
                echo $a;
                ?>


                <div class="col-12">
                    <p></p>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="text-center" style="background: -webkit-linear-gradient(left, rgb(233, 71, 7), #f7bd00);">
                        Serviços Agendados
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    </div>
    <div class="container">
        <div class="col">
            <div class="row">

                <?php
                ob_start();
                require "../backend/Calendario.php";
                ob_end_clean();
                $obj3 = new Calendario();
                $a = $obj3->printSerAgendados();
                echo $a;
                ?>

                <div class="col-12">
                    <p></p>
                </div>
            </div>
        </div>

    </div>

    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <p></p>
                    <h5>Slogan</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        <img class="card-img-top" src="../fotos/slogan.jfif" alt="Card image cap" style="border-radius: 20px;">
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <p></p>
                    <h5 style="font-size: 20px; color: gold;">Mais</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="./cadastroProduto.php">Cadastro do Produto</a></li>
                        <li><a href="./cadastraServico.php">Cadastro do Serviço</a></li>
                        <li><a href="./agendaEletronica.php">Agenda Eletrônica</a></li>

                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <p></p>
                    <h5>Infos</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i>Rua do Ouro, 83 - Bairro Serra</li>
                        <li><i class="fas fa-city"></i> Belo Horizonte-MG</li>
                        <li><i class="fa fa-envelope mr-2"></i>alincarro@gmail.com</li>
                        <li><i class="fa fa-phone mr-2"></i>(31)3241-1012</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Voltar para cima</a>
                    </p>
                    <p class="text-right text-muted">Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
</body>