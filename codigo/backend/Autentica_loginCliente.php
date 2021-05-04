<?php
session_start();
require "ControleConta.php";
$obj = new Controle();
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email != null || $senha!=null)
    $id = $obj->loginCliente($email,$senha)



?>