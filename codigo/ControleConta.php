<?php
class Controle
{

    protected   $host = "localhost";
    protected $root = "root";
    protected $pass = "";
    protected $con = null;
    protected   $c = null;
    protected  $f = null;
    public   $l = false;
    public function __construct()
    {
        session_start();
        $this->con = new mysqli($this->host, $this->root, $this->pass);
        mysqli_select_db($this->con, 'tis');
        if ($this->con->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->con->connect_error;
            exit();
        }
    }
   function alteraHeader()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Nome FROM `cliente` WHERE Id_Cliente = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Nome'];
            $b = "<a class='perfil' href='./perfil.php'> <i class='far fa-user-circle'>";
            $g = "</i></a>";
            return "$b $n $g";
        } else {
            return '<a class="nav-link"  id="Gabriel" href="./loginCliente.php">LogIn <i class="fas fa-sign-in-alt"></i> </a>';
        }
    }

    function loginCliente($email, $senha)
    {

        if ($email != null || $senha != null) {
            $comando = "SELECT Nome,Id_Cliente FROM `cliente` WHERE Email = '$email' AND Senha = '$senha'";
            $res = mysqli_query($this->con, $comando);
            $num = mysqli_num_rows($res);

            if (1 == $num) {
                echo "login realizado com sucesso\n";
                $this->c = $res->fetch_array();
                echo $this->c['Nome'];
                $id = $this->c['Id_Cliente'];
                $this->l = true;
                setcookie('id', $id, time() + 3600, '/');
                header("Location: home.php");
            } else if ($num == 0) {
                echo "login falhou";
            }
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
            $fun = "DELETE FROM cliente WHERE Id_Cliente = '$a'";
            isset($this->con);
            $ress = mysqli_query($this->con, $fun);
            if ($ress == true) {
                echo "Conta excluída com sucesss\n";
            } else {
                echo "Parabens! seus dados são nossos para sempre";
            }
        }
    }
    function alteraNomeCliente($nome)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE cliente SET Nome = '$nome' WHERE Id_Cliente = '$a'";
           $res= mysqli_query($this->con, $fun);
           if($res){
               echo "ho yeah";
           }
        }
    }
    function alteraSobrenomeCliente($sobrenome)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE cliente SET Sobrenome = '$sobrenome' WHERE Id_Cliente = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }
    function alteraEmailCliente($email)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE cliente SET Email = '$email' WHERE Id_Cliente = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }
    function alteraSenhaCliente($senha)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE cliente SET Senha = '$senha' WHERE Id_Cliente = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }
    function alteraTelefoneCliente($telefone)
    {
        if (isset($_COOKIE['id'])) {
            $a = $_COOKIE['id'];
            $fun = "UPDATE cliente SET Telefone = '$telefone' WHERE Id_Cliente = '$a'";
            $ress = mysqli_query($this->con, $fun);
        }
    }

    function getNome()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Nome FROM `cliente` WHERE Id_Cliente = '$id' ";
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
            $comando = "SELECT Senha FROM `cliente` WHERE Id_Cliente = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Senha'];
            return "$n";
        } 
    }

    function getSobrenome()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Sobrenome FROM `cliente` WHERE Id_Cliente = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Sobrenome'];
            return "$n";
        } 
    }
    function getEmail()
    {
        if (isset($_COOKIE['id'])) {
            $id = ($_COOKIE['id']);
            $comando = "SELECT Email FROM `cliente` WHERE Id_Cliente = '$id' ";
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
            $comando = "SELECT Telefone FROM `cliente` WHERE Id_Cliente = '$id' ";
            $res = mysqli_query($this->con, $comando);
            $c = $res->fetch_array();
            $n = $c['Telefone'];
            return "$n";
        } 
    }

}
