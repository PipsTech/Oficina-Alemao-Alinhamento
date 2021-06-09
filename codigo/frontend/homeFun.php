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

            <div class="collapse navbar-collapse" style="padding-left: 40px">
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
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link" href="./vendas.php">Vendas</a>
                    </li>
                </ul>
            </div>

            <form class="form-inline my-2 my-lg-0" style="padding-left: 50px;">
                    <?php
                    ob_start();
                    require "../backend/Autentica_loginFuncionario.php";
                    ob_end_clean();
                    echo $obj->alteraHeader();
                    ?>
            </form>
        </div>
    </nav>


    <div class="container">
        <p></p>
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="text-center" style="background: -webkit-linear-gradient(left, rgb(233, 71, 7), #f7bd00);">
                        Produtos Registrados
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
                require "../backend/ControleProduto.php";
                ob_end_clean();
                $obj2 = new ControleProduto();
                echo $obj2->orgProdFun();
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
                        Serviços Registrados
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
                 require "../backend/ControleServico.php";
                 ob_end_clean();
                 $obj3 = new ControleServico();
                 echo $obj3->orgSerFun();
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