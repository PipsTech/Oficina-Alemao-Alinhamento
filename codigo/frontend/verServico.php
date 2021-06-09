<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/visuProd.css">

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
                ?>
    
                <a class="btn btn-sm ml-3" href="./carrinho.php" style="margin-right:20px;">
                    <i class="fa fa-shopping-cart fa-2x"></i> 
                </a>
                </form>
            </div>
        </div>
    </nav>
         

        <div class="container">
            <p></p>
            <div class="row">
                <!-- Image -->
                <div class="col-lg-5">
                    <div class="card bg-light mb-4">
                        <div class="card-body">
                          <a href="" data-toggle="modal" data-target="#productModal">
                                <img class="img-fluid"  style="width: 400px; height: 250px; "src="data:image/jpeg;base64,<?php
                                ob_start();
                                require "../backend/ControleServico.php";
                                ob_end_clean();
                                $obj2 = new ControleServico();
                                if(isset($_COOKIE['Id_Anuncio'])){
                                $idh = $_COOKIE['Id_Anuncio'];
                                $aux = $obj2->veServico($idh);
                                $temp = $aux->fetch_assoc();
                                $desc = base64_encode($temp['Imagem']);
                                    echo $desc;
                            }
                                ?>" >
                                
                           </a>
                        </div>
                    </div>
                </div>
        
                <!-- Add to cart -->
                <div class="col-12 col-lg-6 add_to_cart_block">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-dark text-white text-uppercase text-center"> <?php
                        $desc = $temp['Titulo'];
                        echo $desc;
                        ?>
                        </div>
                        <div class="card-body">
                            <p class="price">Preço Estimado: R$<?php
                        $desc = $temp['Preço_Estimado'];
                        echo $desc;
                       ?></p>
                            <form method="get" action="cart.html">
                                <div class="form-group">
                                    <label>Descrição :<i class="name"><?php
                    $desc = $temp['Descrição'];
                            echo $desc;
                        ?></i></label>
                                </div>
                                <div class="form-group">
                                    <script src="visuProd.js"></script>
                                    <label><strong>O agendamento do serviço se dá por meio do WhatsApp abaixo</strong></label>
                                </div>
                            </form>
                            
                                <p></p>                          
                                <a href="https://api.whatsapp.com/send?phone=553195281401&text=Ola%20Estou%20interessado%20na%20contratação%20do%20serviço%20de%20<?php echo $temp['Titulo']?>" class="btn btn-dark btn-lg btn-block text-uppercase">
                                    <i class="far fa-calendar-alt"></i> Agendar Serviço
                                </a> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <footer class="text-light" style="height: 392px;">
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
                    <h5>Mídias Sociais</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">Whatsapp</a></li>
                        <li><a href="">Google</a></li>
                        <li><a href="">Facebook</a></li>
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