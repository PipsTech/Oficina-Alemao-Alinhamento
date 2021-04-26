<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();

$telefone = $_POST['telefone'];
$obj->alteraTelefoneFuncionario($telefone);
header("Location: ../frontend/perfilFuncionario.php");




?>