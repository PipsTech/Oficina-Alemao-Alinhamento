<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
                            <a class="nav-link" href="category.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./QuemSomos.php">QuemSomos</a>
                        </li>
                    </ul>
        
                    <form class="form-inline my-2 my-lg-0">
                        
                        <a class="nav-link" href="./loginFuncionario.php">LogIn <i class="fas fa-sign-in-alt"></i> LogOut <i class="fas fa-sign-out-alt"></i></a>
        
                        <a class="btn btn-success btn-sm ml-3" href="cart.html">
                            <i class="fa fa-shopping-cart"></i> Carrinho
                            <span class="badge badge-light">3</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>

 <div class="container login__container my-5">
        <div class="row login__row">
            <div class="col-md-6 d-flex">
                <img class="login__imagek align-self-center" src="https://image.freepik.com/vetores-gratis/oficina-de-desenho-animado-com-equipe-mecanica-consertando-um-carro_43633-7276.jpg"
                    width="100%" alt="" />
            </div>
            <div class="col-md-5 d-flex">
                <div class="align-self-center card login__card shadow-sm w-100">
                    <div class="card-body">
                        <form action="">
                            <h2 class="text-center">Sistema de Login</h2>
                            
                            <p></p>
                            <p>--------------------------------------------------------------</p>

                            <div class="">
                                <div class="form-group">
                                    <label for="">Digite seu email</label>
                                    <input type="text" class="form-control form-control-lg" />
                                </div>
                                <div class="form-group">
                                    <label for="">Digite sua senha</label>
                                    <input type="password" class="form-control form-control-lg" />
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control"
                                        id="customCheckDisabled1" />
                                    <label class="custom-control-label" for="customCheckDisabled1">Lembrar de mim</label>
                                </div>
                                <div class="form-group">
                                    <a href="#" class="btn btn-primary btn-lg btn-block my-3">
                                        Logar
                                    </a>

                                    <div class="d-flex justify-content-between">
                                        <a href="#!">Esqueceu a senha?</a>
                                        <span> <a href="./loginCliente.php">Entrar como Cliente</a></span>
                                    </div>
                                    <div class="dropdown-divider my-4"></div>
                                    <div class="text-center w-100">
                                        <small><a href="./cadastroFuncionario.php">Não possui conta? Criar conta</a> </small>
                                    </dvi>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
  </body>
</html>