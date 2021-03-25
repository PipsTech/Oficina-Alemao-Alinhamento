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


$primeiro_nome = $_POST['primeiro_nome'];
$sobrenome = $_POST['sobrenome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$confirmarSenha = $_POST['confirmar_senha'];


if($senha == $confirmarSenha)
{
    $reg = "insert into cliente (Email,Senha,Nome,Sobrenome,Telefone) values ('$email','$senha','$primeiro_nome','$sobrenome','$telefone')";
    mysqli_query($con,$reg);
    echo "Cadastro realizado com Sucesso!";
}
else
{
    echo "Senha Incorreta";
}


?>