<?php


class ControleProduto{
    protected   $host = "localhost";
    protected $root = "root";
    protected $pass = "";
    protected $con = null;

    public function __construct(){
    //session_start();
    $this->con = new mysqli($this->host, $this->root, $this->pass);
    mysqli_select_db($this->con, 'tis');
    if ($this->con->connect_errno) {
        echo "Failed to connect to MySQL: " . $this->con->connect_error;
        exit();
    }
    }   
    function __getcon(){
    return $this->con;
    }
    function cadastraProduto($nome,$descricao,$preco,$quant,$conteudo){
        if (isset($_COOKIE['id'])){
        $id = ($_COOKIE['id']);
        $reg = "insert into produto (Descrição,Preço,Nome,Quantidade,Id_Funcionario,foto_produto) values ('$descricao','$preco','$nome','$quant','$id','$conteudo')";
        mysqli_query($this->con,$reg);
        header("Location: ../frontend/homeFun.php");
        }
    }

    function orgProduto(){
        $comando = "SELECT * FROM produto";
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
                    $d = "";
                    $x = '<div class="col-12 col-md-6 col-lg-4">
                    <p></p><div class="card">
                       <img class="card-img-top" src="data:image/jpeg;base64,';
                       $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title">
                            <script>
                            function getId';$p='(){
                                let thomas = document.getElementById("';$bah='");
                                var gabriel = thomas.getAttribute("id");
                                window.location="../backend/visuP.php?id="+gabriel;
                            }
                            </script>
                          <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getId';$jorge='()" id="';$y='" value="';$o='" >
                         
                          </h4>
                     <p class="card-text">';
                     $z = '</p>
                     </div>
                     <div class="col">
                         <a href="../backend/carrinhoId.php?id=';$j='" class="btn btn-outline-success btn-block">Adicionar ao carrinho</a>
                                    </div>
                                    </div>
                                </div>
                             </div>
                        </div>';  
                    $w= '</p>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-outline-danger btn-block">R$';             
                    for($i = 0;$i< $tam;$i++){
                        $res = $array[$i];
                        $img = base64_encode($res['foto_produto']);
                        $nome = $res['Nome'];
                        $preco = $res['Preço'];
                        $desc = $res['Descrição'];
                        $id = $res['Id_Produto'];
                            $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$preco.$z.$id.$j;
                    } 
                    return $d;

    }
    function orgProdFun(){

        $comando = "SELECT * FROM produto";
        $res = mysqli_query($this->con,$comando);
        $array = array();
        $i =0;
        while ($item = mysqli_fetch_array($res, MYSQLI_BOTH)){
            $array[$i] = $item;
            $i++;
        }
        $tam = sizeof($array);
        $d = "";
        $x = '<div class="col-12 col-md-6 col-lg-4">
        <p></p><div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
           $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
                <script>
                function getId';$p='(){
                    let thomas = document.getElementById("';$bah='");
                    var gabriel = thomas.getAttribute("id");
                    console.log(gabriel);
                    window.location="../backend/visuP.php?id="+gabriel;
                }
                function gettId';$pi='(){
                    let thomas = document.getElementById("';$ba='");
                    var gabriel = thomas.getAttribute("id");
                    console.log(gabriel);
                    window.location="../backend/visuPF.php?id="+gabriel;
                }
                </script>
              <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getId';$jorge='()" id="';$y='" value="';$o='" >
             
              </h4>
         <p class="card-text">';
        $w = '</p>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-outline-success btn-block" onclick="gettId';$b='()" >Editar</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        for($i = 0;$i< $tam;$i++){
            $res = $array[$i];
        $img = base64_encode($res['foto_produto']);
        $nome = $res['Nome'];
        $preco = $res['Preço'];
        $desc = $res['Descrição'];
        $id = $res['Id_Produto'];
        $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$pi.$id.$ba.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$id.$b;
        } 
        return $d;


    }
    function veProduto($id){
        $comando = "SELECT * FROM `produto` WHERE Id_Produto = '$id'";
        $res = mysqli_query($this->con,$comando);
        //$c = $res->fetch_array();
        return $res;
    }
    function excluirProduto(){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "DELETE FROM produto WHERE Id_Produto = '$a'";
            isset($this->con);
            $ress = mysqli_query($this->con, $fun);
            if ($ress == true) {
                echo "Conta excluída com sucesss\n";
            } else {
                echo "Parabens! seus dados são nossos para sempre";
            }
            header('Location: ../frontend/homeFun.php');
        }
       
    }
    function alteraNomeProduto($nome){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Nome = '$nome' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        }        
    }
    function alteraDescricaoProduto($desc){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Descrição = '$desc' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }
    function alteraQuantidadeProduto($quant){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Quantidade = '$quant' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }
    function alteraPrecoProduto($preco){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Preço = '$preco' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }
    function alteraImagemProduto($img){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET foto_produto = '$img' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }
    function setCookie($id){
        setcookie('Id_Produto', $id, time() + 3600, '/');
        header('Location: ../frontend/verProduto.php');

    }
    function setCookieF($id){
        setcookie('Id_Produto', $id, time() + 3600, '/');
        header('Location: ../frontend/editarProduto.php');

    }
}

?>