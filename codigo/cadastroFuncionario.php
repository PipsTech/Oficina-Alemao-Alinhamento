<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cad.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2e1a878a13.js" crossorigin="anonymous"></script>
  </head>

  <body>
    
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="nav-brand" href="home.html">Oficina Alemão Alinhamento</a>
    
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav m-auto">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.html">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="QuemSomos.html">QuemSomos</a>
                    </li>
                </ul>
    
                <form class="form-inline my-2 my-lg-0">
                    
                    <a class="nav-link" href="loginCliente.html">LogIn <i class="fas fa-sign-in-alt"></i> LogOut <i class="fas fa-sign-out-alt"></i></a>
                    
                    <a class="btn btn-sm ml-3" href="cart.html" style="margin-right:20px;">
                        <i class="fa fa-shopping-cart fa-2x"></i> 
                    </a>
            
                
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img src="https://thumbs.dreamstime.com/z/mec%C3%A2nico-dos-desenhos-animados-com-ferramentas-19317279.jpg" alt="" style="height: 140px; width: 120px;"/>
                            <h3>Cadastro do Funcionário</h3>
                            <p>Preencha os campos corretamente</p>
                            
                        </div>
                        <div class="col-md-9 register-right">
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Funcionário</h3>
                                    <form action="RegistrarFuncionario.php" method="POST">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="nome"class="form-control" placeholder="Nome Completo *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="funcao"class="form-control" placeholder="Função *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="senha"class="form-control" placeholder="Senha *" value="" />
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email"class="form-control" placeholder="Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="telefone"minlength="1" maxlength="20" name="txtEmpPhone" class="form-control" placeholder="Telefone *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="confirmarSenha"class="form-control"  placeholder="Confirmar senha *" value="" />
                                            </div>
                                           
                                            <button type="submit" class="btnRegister" value="Cadastrar" >Cadastrar</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3  class="register-heading">Apply as a Hirer</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                            </div>
    
    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                    <option>What is your Birthdate?</option>
                                                    <option>What is Your old Phone Number</option>
                                                    <option>What is your Pet Name?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                            </div>
                                            <button type="submit" class="btnRegister" value="Cadastrar" >Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
  </body>
</html>
