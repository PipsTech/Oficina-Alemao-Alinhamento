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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="nav-brand" href="./homeFun.php" style="font-size: 35px;">Oficina Alemão Alinhamento</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav m-auto" style="padding-left: 100px;">

                    <li class="nav-item">
                        <a class="nav-link" href="./cadastraServico.php">Cadastro-Serviço</a>
                    </li>
                    <li class="nav-item" style="padding-left: 20px;">
                        <a class="nav-link" href="./cadastroProduto.php">Cadastro-Produto</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-4" style="padding-left: 200px;">
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
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="text-center" style="background: -webkit-linear-gradient(left, rgb(233, 71, 7), #f7bd00);">
                        AGENDA ELETRÔNICA
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col">
            <div class="row">

                <br>
                <table class="table table-bordered table-style table-responsive" >
                    <tr>
                        <th colspan="1" style="width: 50px;text-align: left;"><a href="?ym=<?php  ob_start();
                           require "../backend/autenticaAgenda.php";
                           ob_end_clean(); echo $prev; ?>"><span class="glyphicon glyphicon-chevron-left" ></span></a></th>
                        
                        <th colspan="5" style="width: 1090px; text-align: center;">MÊS <?php echo $mes_num; ?></th>
                        
                        <th colspan="1" style="width: 50px; text-align: right;"><a href="?ym=<?php echo $next; ?>"><span class="glyphicon glyphicon-chevron-right"></span></a></th>
                    </tr>
                    <tr>
                        <th style="width: 170px; text-align:center">Domingo</th>
                        <th style="width: 170px; text-align:center">Segunda-Feira</th>
                        <th style="width: 170px; text-align:center">Terça-Feira</th>
                        <th style="width: 170px; text-align:center">Quarta-Feira</th>
                        <th style="width: 170px; text-align:center">Quinta-Feira</th>
                        <th style="width: 170px; text-align:center">Sexta-Feira</th>
                        <th style="width: 170px; text-align:center">Sábado</th>
                    </tr>

                    <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    };
                    ?>
                </table>
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-12  col-md-12">
                            <a class="btn btn-lg btn-block btn-outline-danger text-uppercase" href="./agendarServico.php" style="border-width: 1px 1px 1px 1px; border-style: groove; border-color: red; border-radius: 5px;">Agendar Serviço</a>
                        </div>
                    </div>
                </div>

            </div>
             <div style="text-align: center">
             
                    <?php
                     ob_start();
                     require "../backend/Calendario.php";
                     ob_end_clean();
                     if(isset($_REQUEST['data'])){
                         $d = $_REQUEST['data'];
                         $f = $_GET['function']($d);}
                    
                        function visuAdia($data){
                          
                            $obj = new Calendario();
                           echo  $obj->getAgendamentos($data);
                        }
                        
                    ?>
             </div>
        </div>

    </div>
    <p></p>
    <div class="footer" style="width:100%;height:380px; background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <p></p>
                    <h5 style="font-size: 20px; color: gold;">Slogan</h5>
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
                    <h5 style="font-size: 20px; color: gold;">Infos</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li style="color: white"><i class="fa fa-home mr-2"></i>Rua do Ouro, 83 - Bairro Serra</li>
                        <li style="color: white"><i class="fa fa-city mr-2"></i>Belo Horizonte-MG</li>
                        <li style="color: white"><i class="fa fa-envelope mr-2"></i>alincarro@gmail.com</li>
                        <li style="color: white"><i class="fa fa-phone mr-2"></i>(31) 3241-1012</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="text-right text-muted">Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
                </div>
</body>