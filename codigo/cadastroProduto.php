<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="hm.css">
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
                            <a class="nav-link" href="serviços.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cadastroProduto.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./QuemSomos.php">Calendario</a>
                        </li>
                    </ul>
        
                    <form class="form-inline my-2 my-lg-0">
                        
                    <?php
                    ob_start();
                    require "Autentica_loginFuncionario.php";
                    ob_end_clean();
                    echo $obj->alteraHeader();
                    ?>
                    </form>
                </div>
            </div>
        </nav>
        <form action="cadP.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <!-- Description -->
            <p></p>
            
            <div class="col-md-12">
                <div class="form-group">
                    <p>Nome do produto</p>
                    <input type="text"  name = "nome"class="form-control" placeholder="Nome *" value="" />
                </div>
                <div class="form-group">
                    <p>Descrição do produto</p>
                    <input type="text"  name = "descricao"class="form-control" placeholder="Descrição *" value="" />
                </div>
                <div class="form-group">
                    <p>Preço do produto</p>
                    <input type="text" name = "preco"class="form-control" placeholder="Preço *" value="" />
                </div>
                <div class="form-group">
                    <p>Quantidade</p>
                    <input type="text" class="form-control" name = "quantidade" placeholder="Quantidade *" value="" />
                </div>
                
                
            </div>
        
            <input type="file" name="image" class="form-control" required>
           <!-- <input type ="submit" name="submit" value="confirmar">-->
            
    
            <!-- Reviews -->
            <div class="col-12" id="reviews">
                <div class="card border-light mb-3">
                    <button type="submit" class="btn btn-dark btn-lg btn-block text-uppercase" name="submit" value="Cadastrar" >CADASTRAR PRODUTO</button>
                </div>
            </div>
        </div>
        </form>
    </div>
 
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>Slogan</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        <img class="card-img-top" src="/fotos/slogan.jfif" alt="Card image cap" style="border-radius: 20px;">
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
