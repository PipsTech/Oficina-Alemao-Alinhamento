<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();

$funcao = $_POST['funcao'];
$obj-> alteraFuncaoFuncionario($funcao);
header("Location: perfilFuncionario.php");

?>