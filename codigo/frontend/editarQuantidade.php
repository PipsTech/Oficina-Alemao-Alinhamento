<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/editar.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2e1a878a13.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

   
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="nav-brand" href="home.php">Oficina Alemão Alinhamento</a>
        
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav m-auto">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="serviços.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuemSomos.html">QuemSomos</a>
                        </li>
                    </ul>
        
                    <form class="form-inline my-2 my-lg-0">
                        
                        <a class="btn btn-sm ml-3" href="carrinho.html" style="margin-right:20px;">
                            <i class="fa fa-shopping-cart fa-2x"></i> 
                        </a>

                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <p></p>
        </div>
      
        <div class="row">
            <div class="col-xl-8 m-auto order-xl-1">
                <div class="card bg-secondary shadow">
                <form action="../backend/attQuant.php" method="POST">
                    <div class="card-body">
                        <form class="infos">
                            <h6 class="btn btn-outline-warning text-center" style="align-items: center;">Editar - Quantidade</h6>
                            <p></p>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6"> 
                                       
                                        <label for="" class="form-control-label">Digite a quantidade do produto</label>
                                          <input type="text" name = "quant" class="form-control form-control-lg" />
                                          <button type="submit">Enviar</button>
                                       
                                    </div>    
                                </div>
                            </div>
                        </form>
                    </div>
                    </form> 
                    <div class="card-header bg-white border-0">
    
                        <div class="row align-items-center">
                            <div class="col-8">
                                <a href="./homeFun.php" class="btn btn-dark">Voltar para a home</a>
                            </div>
                            <div class="col-4 text-right">
                            <a href="./editarProduto.php" class="btn btn-danger">Voltar para editar produto</a>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

        <p></p>


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