<?php
session_start();
require "ControleFuncionario.php";
$obj = new Funcionario();
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email != null || $senha!=null)
    $id = $obj->loginFuncionario($email,$senha)





?>