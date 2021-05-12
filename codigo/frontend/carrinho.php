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
                <a class="nav-brand" href="./home.php">Oficina Alemão Alinhamento</a>
        
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav m-auto">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="./servicos.php">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./QuemSomos.php">QuemSomos</a>
                        </li>
                    </ul>
        
                    <form class="form-inline my-2 my-lg-0">
                                                
                    <?php
                    ob_start();
                    require "../backend/Autentica_loginCliente.php";
                    ob_end_clean();
                    echo $obj->alteraHeader();
                    ?>
                    </form>
                </div>
            </div>
        </nav>
      
        <div class="container mb-4" style="width: 1800px;">
            <p></p>
            <div class="row">
                <div class="col-12">
                <p></p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Produto</th>
                                   
                                    <th scope="col" class="text-left">Quantidade</th>
                                    <th scope="col" class="text-right">Preço</th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               ob_start();
                               require "../backend/Carrinho.php";
                               ob_end_clean();
                               $obj2 = new Carrinho();
                               $a = $obj2->printCarrinho();
                               echo $a;
                               
                               ?>
                               
                                <tr>
                                    <td><strong>TOTAL</strong></td>
                                    <td></td>
                                    <td></td>
                                    
                                    <td class="text-right"><strong>R$<?php
                                        $b = $obj2->calculaPrecoFinal();
                                        $aux = $b->fetch_assoc();
                                        $pf = $aux['tot'];
                                        echo $pf;
                                    ?></strong></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p></p>
                </div>
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-12  col-md-6">
                            <a class="btn btn-lg btn-block btn-outline-danger text-uppercase" href="./home.php">Continue Comprando</a>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <a class="btn btn-lg btn-block btn-outline-success text-uppercase"href="#">Confirmar Compra</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
