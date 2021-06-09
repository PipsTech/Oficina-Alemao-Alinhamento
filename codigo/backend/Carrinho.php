<?php

class Carrinho
{

    protected   $host = "localhost";
    protected $root = "root";
    protected $pass = "";
    protected $con = null;
    protected  $f = null;
    public   $l = false;
    public function __construct()
    {

        $this->con = new mysqli($this->host, $this->root, $this->pass);
        mysqli_select_db($this->con, 'tis');
        if ($this->con->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->con->connect_error;
            exit();
        }
    }
    function __getcon()
    {
        return $this->con;
    }

    function isLogado($id)
    {

        if (isset($_COOKIE['id'])) {
            $this->addCarrinho($id);
        } else {
            header("Location: ../frontend/loginCliente.php");
        }
    }

    function addCarrinho($id)
    {

        $comando = "SELECT Preço FROM produto WHERE Id_Produto = '$id'";
        $res = mysqli_query($this->con, $comando);
        $x = $res->fetch_assoc();
        $preco = $x['Preço'];
        $idc = $_COOKIE['id'];
        $status = FALSE;
        $quant = 1;
        $comInsert = "insert into vendas (Preco,Quantidade,Id_Cliente,Id_Produto,Status_Reserva,Status_Retirada) values ('$preco','$quant','$idc','$id','$status','$status')";
        $res2 = mysqli_query($this->con, $comInsert);
        header("Location: ../frontend/carrinho.php");
    }
    function printCarrinho()
    {

        $idc = $_COOKIE['id'];
        $comando = "SELECT * FROM vendas WHERE Id_Cliente='$idc' AND Status_Reserva = FALSE";
        $res = mysqli_query($this->con, $comando);
        $array = array();
        $i = 0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $a = '<tr id="prod1';
        $y = '">
        <td><img src="data:image/jpeg;base64,';
        $b = '" alt="Card image cap" style="width: 100px; height: 50px;"/> </td>
        <td>';
        $c = '</td>
        <script>
        function setQuant';
        $d = '(){
            var a = document.getElementById("';
        $e = '");
            
            var node = document.getElementById("id';
        $f = '");
            var c = node.getAttribute("id");
            
            if (node.parentNode) {
                node.parentNode.removeChild(node);
                }
                if(a.value >';
        $p = '| a.value < 1){
                    alert("Quantidade inválida para "+a.value+"! \n Quantidade máxima disponível em estoque: "+';
        $v = ');
                    a.value = 1;
                } 
                
             var preco = a.value*';
        $g = '
            let b = document.createElement("td");
            b.classList = "text-right";
            b.setAttribute("id",c);
            b.innerHTML = "R$"+preco;
            console.log(b);
            let d =document.getElementById("3';
        $h = '");
            console.log(d);
            let e = document.getElementById("prod1';
        $w = '");
            e.insertBefore(b,d);   
            window.location="../backend/alteraCarrinho.php?preco="+preco+"&quant="+a.value+"&id=';
        $x = '";
        }
        </script>
        <td class="text-left"><input type="number" id="';
        $i = '"onchange=setQuant';
        $j = '() value="';
        $k = '"></td>
        <td class="text-right" id="id';
        $l = '">R$ ';
        $m = '</td>
        <td id="3';
        $n = '"class="text-right"><a  class="btn btn-sm btn-danger" href="../backend/excluirVenda.php?id=';
        $o = '"><i class="fas fa-trash-alt"></i> </a> </td>
         </tr>';
        $z = '';

        for ($cont = 0; $cont < $tam; $cont++) {
            $res = $array[$cont];
            $preco = $res['Preco'];
            $quant = $res['Quantidade'];
            $idp = $res['Id_Produto'];
            $idv = $res['Id_Venda'];
            $comando2 = "SELECT foto_produto,Preço,Nome,Quantidade FROM Produto WHERE Id_Produto='$idp'";
            $res2 = mysqli_query($this->con, $comando2);
            $aux = $res2->fetch_assoc();
            $nome = $aux['Nome'];
            $preprod = $aux['Preço'];
            $quantProd = $aux['Quantidade'];
            $preco = $preco;
            $foto =  base64_encode($aux['foto_produto']);
            $z = $z . $a . $idv . $y . $foto . $b . $nome . $c . $idv . $d . $idv . $e . $idv . $f . $quantProd . $p . $quantProd . $v . $preprod . $g . $idv . $h . $idv . $w . $idv . $x . $idv . $i . $idv . $j . $quant . $k . $idv . $l . $preco . $m . $idv . $n . $idv . $o;
        }
        return $z;
    }

    function printCompra()
    {
        $idc = $_COOKIE['id'];
        $comando = "SELECT * FROM vendas WHERE Status_Reserva = TRUE and Id_Cliente = '$idc'";
        $res = mysqli_query($this->con, $comando);
        $array = array();
        $i = 0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $z = "";
        $a = '<div class="col-12 col-md-6 col-lg-4">
        <p></p>
        <div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
        $b = '" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
                <hr>
             
              </h4>
    
         <b><p class="card-text" style="font-family: Arial;text-align:justify">';
        $c = '</p></b>
        
    </div>
    </div>
    </div>';
        for ($i = 0; $i < $tam; $i++) {
            $res = $array[$i];
            $idp = $res['Id_Produto'];
            $idc = $res['Id_Cliente'];
            $idv = $res['Id_Venda'];
            $preco = $res['Preco'];
            $quant = $res['Quantidade'];

            $comando2 = "SELECT Nome,foto_produto FROM produto WHERE Id_Produto = '$idp'";
            $res2 = mysqli_query($this->con, $comando2);
            $t = $res2->fetch_assoc();
            $nomep = $t['Nome'];
            $img = base64_encode($t['foto_produto']);

            $comando3 = "SELECT * FROM agenda WHERE Id_Cliente = '$idc' AND Id_Venda = '$idv' ORDER BY Data_Agendamento AND Horario";
            $res3 = mysqli_query($this->con, $comando3);
            $aux = $res3->fetch_assoc();
            $data = $aux['Data_Agendamento'];
            $horario = $aux['Horario'];

            $z = $z . $a . $img . $b . ' Sua compra de ' . $quant . ' unidades de ' . $nomep . ' por R$' . $preco . ' foi reservada para retirada na loja no horário de ' . $horario . '  na data ' . $data . $c;
        }
        return $z;
    }

    function printServico()
    {
        $idc = $_COOKIE['id'];
        $comando = "SELECT * FROM agenda WHERE Id_Anuncio != 0 and Id_Venda = 0 and Id_Cliente = '$idc'";
        $res = mysqli_query($this->con, $comando);
        $array = array();
        $i = 0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $z = "";
        $a = '<div class="col-12 col-md-6 col-lg-4">
        <p></p>
        <div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
        $b = '" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
                <hr>
             
              </h4>
    
         <b><p class="card-text" style="font-family: Arial;text-align:justify">';
        $c = '</p></b>
        
    </div>
    </div>
    </div>';
        for ($i = 0; $i < $tam; $i++) {
            $res = $array[$i];
            $ida = $res['Id_Anuncio'];
            $idc = $res['Id_Cliente'];
            $idv = $res['Id_Venda'];
            $preco = $res['Preço'];


            $comando2 = "SELECT Titulo,Imagem FROM anuncio_serviço WHERE Id_Anuncio = '$ida'";
            $res2 = mysqli_query($this->con, $comando2);
            $tt = $res2->fetch_assoc();
            $nomes = $tt['Titulo'];
            $img = base64_encode($tt['Imagem']);

            $comando3 = "SELECT * FROM agenda WHERE Id_Cliente = '$idc' AND Id_Venda = '$idv' ORDER BY Data_Agendamento AND Horario";
            $res3 = mysqli_query($this->con, $comando3);
            $aux = $res3->fetch_assoc();
            $data = $aux['Data_Agendamento'];
            $horario = $aux['Horario'];

            $z = $z . $a . $img . $b . ' Seu serviço ' . $nomes . ' foi agendado por R$' . $preco . ' no horário de ' . $horario . ' na data ' . $data . $c;
        }
        return $z;
    }


    function printVendas()
    {


        $comando = "SELECT * FROM vendas WHERE Status_Reserva = TRUE";
        $res = mysqli_query($this->con, $comando);
        $array = array();
        $i = 0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $z = "";
        $a = '<div class="col-12 col-md-6 col-lg-4">
        <p></p><div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
        $b = '" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
             
             
              </h4>
         <p class="card-text">';
        $c = '</p>
        <div class="row">
            <div class="col">
                <a href="../backend/finalizaCompra.php?id=';
        $d = '" class="btn btn-outline-success btn-block">Finalizar</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        $x = '</p>
    <div class="row">
            <div class="col">
                <a href="#" class="btn btn-danger btn-block">Finalizado</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        for ($i = 0; $i < $tam; $i++) {
            $res = $array[$i];
            $idp = $res['Id_Produto'];
            $idc = $res['Id_Cliente'];
            $idv = $res['Id_Venda'];

            $preco = $res['Preco'];
            $quant = $res['Quantidade'];

            $comando2 = "SELECT Nome,foto_produto FROM produto WHERE Id_Produto = '$idp'";
            $res2 = mysqli_query($this->con, $comando2);
            $t = $res2->fetch_assoc();
            $nomep = $t['Nome'];
            $img = base64_encode($t['foto_produto']);
            $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
            $res3 = mysqli_query($this->con, $comando3);
            $ax = $res3->fetch_assoc();
            $nomec = $ax['Nome'];
            $comando4 = "SELECT Data_Agendamento,Status_Prestação,Id_Agendamento FROM agenda WHERE Id_Cliente = '$idc' AND Id_Venda = '$idv'";
            $res4 = mysqli_query($this->con, $comando4);
            $aux = $res4->fetch_assoc();
            $data = $aux['Data_Agendamento'];
            $status = $aux['Status_Prestação'];
            $id = $aux['Id_Agendamento'];
            if ($status) {

                $z = $z . $a . $img . $b . ' O cliente ' . $nomec . ' compra ' . $quant . ' unidades de ' . $nomep . ' por ' . $preco . '  na data ' . $data . $x;
            } else {
                $z = $z . $a . $img . $b . ' O cliente ' . $nomec . ' compra ' . $quant . ' unidades de ' . $nomep . ' por ' . $preco . '  na data ' . $data . $c . $id . $d;
            }
        }
        return $z;
    }


    function printVendasFechadas()
    {


        $comando = "SELECT * FROM vendas WHERE Status_Reserva = TRUE AND Status_Retirada = TRUE";
        $res = mysqli_query($this->con, $comando);
        $array = array();
        $i = 0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $z = "";
        $a = '<div class="col-12 col-md-6 col-lg-4">
        <p></p><div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
        $b = '" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
             
             
              </h4>
         <p class="card-text">';
        $c = '</p>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-danger btn-block">Finalizado</a>
            </div>
        </div>
    </div>
    </div>
    </div>';

        for ($i = 0; $i < $tam; $i++) {
            $res = $array[$i];
            $idp = $res['Id_Produto'];
            $idc = $res['Id_Cliente'];
            $idv = $res['Id_Venda'];
            $preco = $res['Preco'];
            $quant = $res['Quantidade'];

            $comando2 = "SELECT Nome,foto_produto FROM produto WHERE Id_Produto = '$idp'";
            $res2 = mysqli_query($this->con, $comando2);
            $t = $res2->fetch_assoc();
            $nomep = $t['Nome'];
            $img = base64_encode($t['foto_produto']);
            $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
            $res3 = mysqli_query($this->con, $comando3);
            $ax = $res3->fetch_assoc();
            $nomec = $ax['Nome'];
            $comando4 = "SELECT Data_Agendamento FROM agenda WHERE Id_Cliente = '$idc' AND Id_Venda = '$idv'";
            $res4 = mysqli_query($this->con, $comando4);
            $aux = $res4->fetch_assoc();
            $data = $aux['Data_Agendamento'];
            $z = $z . $a . $img . $b . ' O cliente ' . $nomec . ' compra ' . $quant . ' unidades de ' . $nomep . ' por ' . $preco . '  na data ' . $data . $c;
        }
        return $z;
    }

    function printVendasAbertas()
    {


        $comando = "SELECT * FROM vendas WHERE Status_Reserva = TRUE AND Status_Retirada = FALSE";
        $res = mysqli_query($this->con, $comando);
        $array = array();
        $i = 0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $z = "";
        $a = '<div class="col-12 col-md-6 col-lg-4">
        <p></p><div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
        $b = '" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
             
             
              </h4>
         <p class="card-text">';
        $c = '</p>
        <div class="row">
            <div class="col">
                <a href="../backend/finalizaCompra.php?id=';
        $d = '" class="btn btn-outline-success btn-block">Finalizar</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        $x = '</p>
    <div class="row">
    </div>
    </div>
    </div>
    </div>';
        for ($i = 0; $i < $tam; $i++) {
            $res = $array[$i];
            $idp = $res['Id_Produto'];
            $idc = $res['Id_Cliente'];
            $idv = $res['Id_Venda'];

            $preco = $res['Preco'];
            $quant = $res['Quantidade'];

            $comando2 = "SELECT Nome,foto_produto FROM produto WHERE Id_Produto = '$idp'";
            $res2 = mysqli_query($this->con, $comando2);
            $t = $res2->fetch_assoc();
            $nomep = $t['Nome'];
            $img = base64_encode($t['foto_produto']);
            $comando3 = "SELECT Nome FROM cliente WHERE Id_Cliente = '$idc'";
            $res3 = mysqli_query($this->con, $comando3);
            $ax = $res3->fetch_assoc();
            $nomec = $ax['Nome'];
            $comando4 = "SELECT Data_Agendamento,Status_Prestação,Id_Agendamento FROM agenda WHERE Id_Cliente = '$idc' AND Id_Venda = '$idv'";
            $res4 = mysqli_query($this->con, $comando4);
            $aux = $res4->fetch_assoc();
            $data = $aux['Data_Agendamento'];
            $status = $aux['Status_Prestação'];
            $id = $aux['Id_Agendamento'];
            if ($status) {

                $z = $z . $a . $img . $b . ' O cliente ' . $nomec . ' compra ' . $quant . ' unidades de ' . $nomep . ' por ' . $preco . '  na data ' . $data . $x;
            } else {
                $z = $z . $a . $img . $b . ' O cliente ' . $nomec . ' compra ' . $quant . ' unidades de ' . $nomep . ' por ' . $preco . '  na data ' . $data . $c . $id . $d;
            }
        }
        return $z;
    }

    function excluir($id)
    {
        $fun = "DELETE FROM vendas WHERE Id_Venda = '$id'";
        isset($this->con);
        $ress = mysqli_query($this->con, $fun);
        if ($ress == true) {
            header("Location: ../frontend/carrinho.php");
        } else {
            echo $id;
        }
    }
    function excluirCliente($id)
    {
        $fun = "DELETE FROM vendas WHERE Id_Cliente = '$id'";
        isset($this->con);
        $ress = mysqli_query($this->con, $fun);
        if ($ress == true) {
        } else {
            echo $id;
        }
    }
    function setQuantidade($quant, $id)
    {

        $fun = "UPDATE vendas SET Quantidade = '$quant' WHERE Id_Venda = '$id'";
        $res = mysqli_query($this->con, $fun);
    }

    function setPreco($preco, $id)
    {

        $fun = "UPDATE vendas SET Preco = '$preco' WHERE Id_Venda = '$id'";
        $res = mysqli_query($this->con, $fun);
        header("Location: ../frontend/carrinho.php");
    }

    function calculaPrecoFinal()
    {
        $idc = $_COOKIE['id'];
        $fun = "SELECT SUM(Preco) AS tot FROM vendas WHERE Id_Cliente = '$idc' AND Status_Reserva = FALSE";
        $res = mysqli_query($this->con, $fun);
        return $res;
    }
}
