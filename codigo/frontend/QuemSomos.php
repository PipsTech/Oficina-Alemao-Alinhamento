<!DOCTYPE html>
<html lang="pt-br"><head>
    <title>Oficina Alemão Alinhamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/qs.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body class="bd">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <header class="header">
        <a href="#" class="titulo">Oficina Alemão Alinhamento</a>
        <nav>
          <ul class="menu">
            <li><a href="./home.php">Home</a></li>
            <li><a href="./serviços.php">Serviços</a></li>
            <li><a href="./produtos.php" style="margin-right:80px;">Produtos</a></li>
            <?php
                    ob_start();
                    require "../backend/Autentica_loginCliente.php";
                    ob_end_clean();
                    echo $obj->alteraHeader();
                    ?>
            <li><a class="btn btn-sm ml-3" href="./carrinho.php" style="margin-right:20px;">
              <i class="fa fa-shopping-cart fa-2x"></i> 
          </a></li>
          </ul>
        </nav>
      </header>
      <div>
        <div>
            <p></p>
           <strong class="lines">QUEM SOMOS</strong>
           <p></p>
           <p class="card-text">A Oficina Alemão Alinhamento há mais de 30 anos, em Belo Horizonte, presta serviços relacionados à
            mecânica, tanto para veículos nacionais quanto importados, com uma oferta de serviços de qualidade
            de reparação e consertos.</p>
            <p class="card-text">Com isso, conquistamos uma clientela fiel ao longo dos anos e portanto, uma boa imagem no ramo. 
            Estamos localizados na Rua do Ouro 83 no bairro Serra na região centro-sul, e esperamos por você.</p>
            <p class="linha">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </div>
<div class="container">
	<hr>	
	<div class="col-sm-12">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
	<div class="carousel-item active">
		<div class="row">
			<div class="col-sm-3">
				<img class="d-block img-fluid" src="4qs.png" alt="First slide" style="width: 400px; height: 250px;">
			</div>
  			
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="2qs.png" alt="First slide" style="width: 400px; height: 250px;">
  			</div>
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="3qs.png" alt="First slide" style="width: 400px; height: 250px;">
  			</div>
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="1qs.png" alt="First slide" style="width: 400px; height: 250px;">
  			</div>
  		</div>
  	</div>
  	<div class="carousel-item">
  		<div class="row">
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="5qs.png" alt="First slide" style="width: 400px; height: 250px;">
  			</div>
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="6qs.png" alt="First slide" style="width: 400px; height: 250px;">
  			</div>
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="7qs.png" alt="First slide" style="width: 400px; height: 250px;">
  			</div>
  			<div class="col-sm-3">
  				<img class="d-block img-fluid" src="8qs.png" alt="First slide" style="width: 400px; height: 250px;">
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
        <footer class="footer-qs">
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
            <h5>Telefone fixo <i class="fas fa-phone"></i></h5>
            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
            <ul class="list-unstyled">
                <li><a href="">(31) 3241-1012</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-5">
            <h5>Whatsapp <i class="fab fa-whatsapp"></i></h5>
            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
            <ul class="list-unstyled">
                <li>n° telefone proprietario</li>
            </ul>
        </div>
        </footer>
  </body>
</html>
