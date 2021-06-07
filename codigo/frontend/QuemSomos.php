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

    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="text-center" style="background: -webkit-linear-gradient(left, rgb(233, 71, 7), #f7bd00);">
                            QUEM SOMOS
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div>
    <div>
      <p></p>
      <p class="card-text" style="padding-left: 180px; padding-right: 180px; text-align: center; font-size: 15px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">A Oficina Alemão Alinhamento há mais de 30 anos, em Belo Horizonte, presta serviços relacionados à
        mecânica, tanto para veículos nacionais quanto importados, com uma oferta de serviços de qualidade
        de reparação e consertos. Estamos localizados na Rua do Ouro 83, no bairro Serra, na região centro-sul de Belo Horizonte, e esperamos por você.</p>
    </div>
    <div class="container">
      <hr>
      <div class="col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/4qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>

                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/2qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/3qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/1qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/5qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/6qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/7qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
                <div class="col-sm-3">
                  <img class="d-block img-fluid" src="../fotos/8qs.png" alt="First slide" style="width: 400px; height: 250px;">
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <hr>

        <div class="col-12">
          <p></p>
        </div>
    
        </div>

        
    </div>

    <div class="footer" style="position:absolute; bottom:0; width:100%; background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                <p></p>
                    <h5 style="color: gold">Slogan</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        <img class="card-img-top" src="../fotos/slogan.jfif" alt="Card image cap" style="border-radius: 20px;">
                    </p>
                </div>
    
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <p></p>
                    <h5 style="color: gold">Mídias Sociais</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">Whatsapp</a></li>
                        <li><a href="">Google</a></li>
                        <li><a href="">Facebook</a></li>
                    </ul>
                </div>
    
                <div class="col-md-4 col-lg-3 col-xl-3">
                <p></p>
                    <h5 style="color: gold">Infos</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li style="color: white"><i class="fa fa-home mr-2"></i>Rua do Ouro, 83 - Bairro Serra</li>
                        <li style="color: white"><i class="fa fa-city mr-2"></i>Belo Horizonte-MG</li>
                        <li style="color: white"><i class="fa fa-envelope mr-2"></i>alincarro@gmail.com</li>
                        <li style="color: white"><i class="fa fa-phone mr-2"></i>(31)3241-1012</li>
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
    </div>
  </body>
</html>