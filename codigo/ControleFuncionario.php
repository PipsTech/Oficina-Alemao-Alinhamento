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
            header("Location: homeFun.php");
        } else {
            echo "login falhou";
        }
    }
    function logOut(){
        if (isset($_COOKIE['id'])) {
            unset($_COOKIE['id']); 
            setcookie('id', null, -1, '/'); 
            header("Location: home.php");
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

    function cadastraProduto($nome,$descricao,$preco,$quant){
        if (isset($_COOKIE['id'])){
        $id = ($_COOKIE['id']);
        $reg = "insert into produto (Descrição,Preço,Nome,Quantidade,Id_Funcionario) values ('$descricao','$preco','$nome','$quant','$id')";
        mysqli_query($this->con,$reg);
        header("Location: homeFun.php");
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

        return $array;
    }

}
?>
