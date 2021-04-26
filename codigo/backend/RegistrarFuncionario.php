<?php
session_start();
$host = "localhost";
$root = "root";
$pass = "";
$con = new mysqli($host,$root,$pass);
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }


mysqli_select_db($con, 'tis');


$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$confirmarSenha = $_POST['confirmarSenha'];


if($senha == $confirmarSenha)
{
    $reg = "insert into funcionario (Email,Senha,Nome,Função,Telefone) values ('$email','$senha','$nome','$funcao','$telefone')";
    mysqli_query($con,$reg);
    echo "Cadastro realizado com Sucesso!";
    header("Location: ../frontend/home.php");
}
else
{
    echo "Senha Incorreta";
}


?>