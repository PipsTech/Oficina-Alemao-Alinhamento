<?php
class Controle 
{

 protected   $host = "localhost";
protected $root = "root";
protected $pass = "";
protected $con = null;
protected   $c=null;
protected  $f = null;
public   $l = false;
public function __construct()
{
    session_start();
    $this->con = new mysqli($this->host,$this->root,$this->pass);
    mysqli_select_db($this->con, 'tis');
if ($this->con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $this->con -> connect_error;
    exit();
  }
}
function alteraHeader(){ 
    if(isset($_COOKIE['id'])){
        $id = ($_COOKIE['id']);
        $comando = "SELECT Nome FROM `cliente` WHERE Id_Cliente = '$id' ";
        $res = mysqli_query($this->con,$comando);
        $c = $res->fetch_array();
        $n = $c['Nome']; 
        $b ="<a class='perfil' href='#'>";
        $g = "</a>";
        return "$b $n $g";
    }
    else{
       return '<a class="nav-link"  id="Gabriel" href="./loginCliente.php">LogIn <i class="fas fa-sign-in-alt"></i> LogOut <i class="fas fa-sign-out-alt"></i></a>';
    }
}

function loginCliente($email,$senha){
    
    if($email != null || $senha !=null){
    $comando = "SELECT Nome,Id_Cliente FROM `cliente` WHERE Email = '$email' AND Senha = '$senha'";
    $res = mysqli_query($this->con,$comando);
    $num = mysqli_num_rows($res);
    
    if(1 == $num){
        echo "login realizado com sucesso\n";
        $this->c = $res->fetch_array();
        echo $this->c['Nome'];
        $id = $this->c['Id_Cliente'];
        $this->l = true;
        setcookie('id',$id,time() + 3600,'/');
        header("Location: home.php");
        
        
    }
    else if ($num == 0){
        echo "login falhou";
    }
    }
    
}
function loginFuncionario(){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $comando = "SELECT Nome,Função FROM `funcionario` WHERE Email = '$email' AND Senha = '$senha'";
    $res = mysqli_query($this->con,$comando);
    $num = mysqli_num_rows($res);
    
    if(1 == $num){
        echo "login realizado com sucesso\n";
        $this->f = $res->fetch_array();
        
        echo $this->f['Nome'];
        echo " - ";
        echo $this->f['Função'];
       
    }
    else{
        echo "login falhou";
    }


}
function excluirPerfil(){
    
   
    if(isset($_COOKIE['id'])){
        $a = $_COOKIE['id'];
        $fun = "DELETE FROM cliente WHERE Id_Cliente = '$a'";
        isset($this->con);
        $ress = mysqli_query($this->con,$fun);
        if($ress == true){
            echo "Conta excluída com sucesss\n";
        }
        else{
            echo "Parabens! seus dados são nossos para sempre";
        }
    }



}


}
