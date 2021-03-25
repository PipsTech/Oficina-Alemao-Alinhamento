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


$email = $_POST['email'];
$senha = $_POST['senha'];

$comando = "SELECT Nome FROM `cliente` WHERE Email = '$email' AND Senha = '$senha'";
$res = mysqli_query($con,$comando);
$num = mysqli_num_rows($res);

if(1 == $num){
    echo "login realizado com sucesso\n";
    $a = $res->fetch_array();
    echo $a['Nome'];
}
else{
    echo "login falhou";
}


?>