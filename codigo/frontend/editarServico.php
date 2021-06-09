<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2e1a878a13.js" crossorigin="anonymous"></script>
</head>

<body>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <nav class="navbar navbar-expand-md" style="width: 103%">
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
                <a class="nav-link" id="Gabriel" href="./logOutfuncionario.php"> LogOut <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <p></p>
    </div>


    <div class="row">
        <div class="col-xl-8 m-auto order-xl-1">
            <div class="card bg-secondary shadow">

                <div class="card-body">
                    <form class="infos">
                        <h6 class="btn btn-outline-warning text-center" style="align-items: center;">Dados do Produto</h6>
                        <p></p>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Nome -
                                            <?php
                                            ob_start();
                                            require "../backend/ControleServico.php";
                                            ob_end_clean();
                                            $obj2 = new ControleServico();
                                            if (isset($_COOKIE['Id_Anuncio'])) {
                                                $idh = $_COOKIE['Id_Anuncio'];
                                                $aux = $obj2->veServico($idh);
                                                $temp = $aux->fetch_assoc();
                                                echo $temp['Titulo'];
                                            }
                                            ?>
                                        </label>
                                        <a href="./editarNomeS.php" class="btn btn-success" style="padding: 2px;">Editar
                                            nome</a>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Descrição -
                                            <?php
                                            echo $temp['Descrição'];
                                            ?>
                                        </label>
                                        <a href="./editarDescricaoS.php" class="btn btn-success" style="padding: 2px;">Editar Descrição</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-telephone">Preço -
                                            <?php
                                            echo $temp['Preço_Estimado'];
                                            ?>
                                        </label>
                                        <a href="./editarPrecoS.php" class="btn btn-success" style="padding: 2px;">Editar preço</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-password">
                                            <img class="img-fluid" style="width: 338px; height: 300px; " src="data:image/jpeg;base64,<?php
                                                                                                                                        $img = base64_encode($temp['Imagem']);
                                                                                                                                        echo $img;
                                                                                                                                        ?>"></label>
                                        <a href="./editarImgS.php" class="btn btn-success" style="padding: 2px;">Editar
                                            imagem</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-header bg-white border-0">

                    <div class="row align-items-center">
                        <div class="col-8">
                            <a href="./homeFun.php" class="btn btn-dark">Voltar para a home</a>
                        </div>
                        <div class="col-4 text-right">
                            <button type="submit" class="btn btn-danger" value="Cadastrar" onclick="javascript: location.href='../backend/excluirservico.php'">Excluir Serviço</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <p></p>


    <footer class="text-light" style="width: 103%">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
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

</html>