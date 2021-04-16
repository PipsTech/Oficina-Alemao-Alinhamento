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
                <a class="nav-brand" href="./home.php">Oficina Alemão Alinhamento</a>
        
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav m-auto">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="./serviços.php">Serviços</a>
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
                    require "Autentica_loginCliente.php";
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
                        <ol class="text-center">
                            Nossos produtos
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
                    require "ControleFuncionario.php";
                    ob_end_clean();
                    $obj2 = new Funcionario();
                    $a = $obj2->orgProduto();
                    $tam = sizeof($a);
                    $d = "";
                    $x = '<div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                       <img class="card-img-top" src="data:image/jpeg;base64,';
                       $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title">
                            <script>
                            function getId';$p='(){
                                let thomas = document.getElementById("';$bah='");
                                var gabriel = thomas.getAttribute("id");
                                window.location="visuP.php?id="+gabriel;
                            }
                            </script>
                          <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getId';$jorge='()" id="';$y='" value="';$o='" >
                         
                          </h4>

                     <p class="card-text">';
                     $z = '</p>
                     </div>
                     <div class="col">
                         <a href="#" class="btn btn-outline-success btn-block">Adicionar ao carrinho</a>
                                    </div>
                                    </div>
                                </div>
                             </div>
                        </div>';  
                    $w= '</p>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-outline-danger btn-block">';             
                    for($i = 0;$i< $tam;$i++){
                        $res = $a[$i];
                        $img = base64_encode($res['foto_produto']);
                        $nome = $res['Nome'];
                        $preco = $res['Preço'];
                        $desc = $res['Descrição'];
                        $id = $res['Id_Produto'];
                            $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$preco.$z;
                    } 
                    echo $d;
                    
                    ?>
                  
                    
                    <div class="col-12">
                        <p></p>
                    </div>
                </div>
            </div>
    
        </div>
        
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
