<?php
class Funcionario{


    protected   $host = "localhost";
    protected $root = "root";
    protected $pass = "";
    protected $con = null;
    protected  $f = null;
    public   $l = false;
    public function __construct()
    {
        //session_start();
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

    function loginFuncionario()
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $comando = "SELECT Nome,Função,Id_Funcionario FROM `funcionario` WHERE Email = '$email' AND Senha = '$senha'";
        $res = mysqli_query($this->con, $comando);
        $num = mysqli_num_rows($res);

        if (1 == $num) {
            echo "login realizado com sucesso\n";
            $this->f = $res->fetch_array();
            $id = $this->f['Id_Funcionario'];
            echo $this->f['Nome'];
            echo " - ";
            echo $this->f['Função'];
            setcookie('id', $id, time() + 3600, '/');
            header("Location: ../frontend/homeFun.php");
        } else {
            echo "login falhou";
        }
    }
    function logOut(){
        if (isset($_COOKIE['id'])) {
            unset($_COOKIE['id']); 
            setcookie('id', null, -1, '/'); 
            header("Location: ../frontend/home.php");
        }
       
    }

    function excluirPerfil()
    {


        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "DELETE FROM funcionario WHERE Id_Funcionario = '$a'";
            isset($this->con);
            $ress = mysqli_query($this->con, $fun);
            if ($ress == true) {
                $this->logOut();
                header("Location: ../frontend/home.php");
                echo "Conta excluída com sucesss\n";
            } else {
                echo "Parabens! seus dados são nossos para sempre";
            }
        }
    }
    function alteraNomeFuncionario($nome)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE funcionario SET Nome = '$nome' WHERE Id_Funcionario = '$a'";
           $res= mysqli_query($this->con, $fun);
           if($res){
               echo "ho yeah";
           }
        }
    }
    function alteraFuncaoFuncionario($funcao)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE funcionario SET Função = '$funcao' WHERE Id_Funcionario = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }
    function alteraEmailFuncionario($email)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE funcionario SET Email = '$email' WHERE Id_Funcionario = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }
    function alteraSenhaFuncionario($senha)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE funcionario SET Senha = '$senha' WHERE Id_Funcionario = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }
    function alteraTelefoneFuncionario($telefone)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE funcionario SET Telefone = '$telefone' WHERE Id_Funcionario = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }

    function getNome()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Nome FROM `funcionario` WHERE Id_Funcionario = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Nome'];
            return "$n";
        } 
    }
    function getSenha()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Senha FROM `funcionario` WHERE Id_Funcionario = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Senha'];
            return "$n";
        } 
    }
    function getFuncao()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Função FROM `funcionario` WHERE Id_Funcionario = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Função'];
            return "$n";
        } 
    }
    function getEmail()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Email FROM `funcionario` WHERE Id_Funcionario = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Email'];
            return "$n";
        }
    }
    function getTelefone()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Telefone FROM `funcionario` WHERE Id_Funcionario = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Telefone'];
            return "$n";
        } 
    }
    function alteraHeader()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Nome FROM `funcionario` WHERE Id_Funcionario = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Nome'];
            $b = "<a class='perfil' href='./perfilFuncionario.php'> <i class='far fa-user-circle'>";
            $g = "</i></a>";
            return "$b $n $g";
        } else {
            return '<a class="nav-link"  id="Gabriel" href="./loginFuncionario.php">LogIn <i class="fas fa-sign-in-alt"></i> </a>';
        }
    }

    /*function cadastraProduto($nome,$descricao,$preco,$quant,$conteudo){
        if (isset($_COOKIE['id'])){
        $id = ($_COOKIE['id']);
        $reg = "insert into produto (Descrição,Preço,Nome,Quantidade,Id_Funcionario,foto_produto) values ('$descricao','$preco','$nome','$quant','$id','$conteudo')";
        mysqli_query($this->con,$reg);
        header("Location: ../frontend/homeFun.php");
        }
    }*/

    /*function cadastraServico($nome,$descricao,$preco,$conteudo){
        if (isset($_COOKIE['id'])){
        $id = ($_COOKIE['id']);
        $reg = "insert into anuncio_serviço (Descrição,Preço_Estimado,Titulo,Id_Funcionario,Imagem) values ('$descricao','$preco','$nome','$id','$conteudo')";
        mysqli_query($this->con,$reg);
        header("Location: ../frontend/homeFun.php");
        }
    }*/
/*
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
                    <div class="card">
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
                        $res = $array[$i];
                        $img = base64_encode($res['foto_produto']);
                        $nome = $res['Nome'];
                        $preco = $res['Preço'];
                        $desc = $res['Descrição'];
                        $id = $res['Id_Produto'];
                            $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$preco.$z;
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
        <div class="card">
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
    }*/
    /*function veServico($id){
        $comando = "SELECT * FROM `anuncio_serviço` WHERE Id_Anuncio = '$id'";
        $res = mysqli_query($this->con,$comando);
        //$c = $res->fetch_array();
        return $res;
    }*/
   /* function orgServico(){

        $comando = "SELECT * FROM anuncio_serviço";
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
                    <div class="card">
                       <img class="card-img-top" src="data:image/jpeg;base64,';
                       $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title">
                            <script>
                            function getSId';$p='(){
                                let thomas = document.getElementById("';$bah='");
                                var gabriel = thomas.getAttribute("id");
                                    console.log(gabriel);
                                window.location="../backend/visuS.php?id="+gabriel;
                            }
                            </script>
                          <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getSId';$jorge='()" id="';$y='" value="';$o='" >
                         
                          </h4>

                     <p class="card-text">';
                     $z = '</p>
                     </div>
                     <div class="col">
                         <a href="https://api.whatsapp.com/send?phone=553195281401&text=Ola%20Estou%20interessado%20na%20contratação%20do%20serviço%20de%20';$h='" class="btn btn-outline-success btn-block">Agendar Serviço</a>
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
                        $res = $array[$i];
                        $img = base64_encode($res['Imagem']);
                        $nome = $res['Titulo'];
                        $preco = $res['Preço_Estimado'];
                        $desc = $res['Descrição'];
                        $id = $res['Id_Anuncio'];
                            $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$preco.$z.$nome.$h;
                    } 
                    return $d;


    }
    function orgSerFun(){

        $comando = "SELECT * FROM anuncio_serviço";
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
        <div class="card">
           <img class="card-img-top" src="data:image/jpeg;base64,';
           $g ='" alt="Card image cap" style="width: 338px; height: 300px;">
            <div class="card-body">
                <h4 class="card-title">
                <script>
                function getSId';$p='(){
                    let thomas = document.getElementById("';$bah='");
                    var gabriel = thomas.getAttribute("id");
                    console.log(gabriel);
                    window.location="../backend/visuS.php?id="+gabriel;
                }
                function gettSId';$pi='(){
                    let thomas = document.getElementById("';$ba='");
                    var gabriel = thomas.getAttribute("id");
                    console.log(gabriel);
                    window.location="../backend/visuSF.php?id="+gabriel;
                }
                </script>
              <input type="submit"class="form-submit-button btn-info "style="width= 50px;" onclick="getSId';$jorge='()" id="';$y='" value="';$o='" >
             
              </h4>

         <p class="card-text">';
        $w = '</p>
        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-outline-success btn-block" onclick="gettSId';$b='()" >Editar</a>
            </div>
        </div>
    </div>
    </div>
    </div>';
        for($i = 0;$i< $tam;$i++){
            $res = $array[$i];
        $img = base64_encode($res['Imagem']);
        $nome = $res['Titulo'];
        $preco = $res['Preço_Estimado'];
        $desc = $res['Descrição'];
        $id = $res['Id_Anuncio'];
        $d =$d.$x.$img.$g.$id.$p.$id.$bah.$id.$pi.$id.$ba.$id.$jorge.$id.$y.$nome.$o.$desc.$w.$id.$b;
        } 
        return $d;


    }*/
   /* function setCookie($id){
        setcookie('Id_Produto', $id, time() + 3600, '/');
        header('Location: ../frontend/verProduto.php');

    }*/
    /*function setCookieS($id){
        setcookie('Id_Anuncio', $id, time() + 3600, '/');
        header('Location: ../frontend/verServico.php');

    }*/
   /* function setCookieF($id){
        setcookie('Id_Produto', $id, time() + 3600, '/');
        header('Location: ../frontend/editarProduto.php');

    }*/
    /*function setCookieSF($id){
        setcookie('Id_Anuncio', $id, time() + 3600, '/');
       header('Location: ../frontend/editarServico.php');

    }*/
    

   /* function excluirProduto(){
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
       
    }*/
    /*function excluirServico(){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "DELETE FROM anuncio_serviço WHERE Id_Anuncio = '$a'";
            isset($this->con);
            $ress = mysqli_query($this->con, $fun);
            if ($ress == true) {
                echo "Conta excluída com sucesss\n";
            } else {
                echo "Parabens! seus dados são nossos para sempre";
            }
            header('Location: ../frontend/homeFun.php');
        }
       
    }*/
    /*function alteraNomeProduto($nome){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Nome = '$nome' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        }        
    }*/
    /*function alteraNomeServico($nome){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Titulo = '$nome' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        }        
    }*/
   /* function alteraDescricaoProduto($desc){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Descrição = '$desc' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/
   /* function alteraDescricaoServico($desc){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Descrição = '$desc' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/
  /*  function alteraQuantidadeProduto($quant){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Quantidade = '$quant' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/
   /* function alteraPrecoProduto($preco){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET Preço = '$preco' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/
   /* function alteraPrecoServico($preco){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Preço_Estimado = '$preco' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/
   /* function alteraImagemProduto($img){
        if (isset($_COOKIE['Id_Produto'])) {
            $a = $_COOKIE['Id_Produto'];
            $fun = "UPDATE produto SET foto_produto = '$img' WHERE Id_Produto = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/
    /*function alteraImagemServico($img){
        if (isset($_COOKIE['Id_Anuncio'])) {
            $a = $_COOKIE['Id_Anuncio'];
            $fun = "UPDATE anuncio_serviço SET Imagem = '$img' WHERE Id_Anuncio = '$a'";
           $res= mysqli_query($this->con, $fun);
        } 
    }*/

}
