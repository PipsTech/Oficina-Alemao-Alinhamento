<?php
ob_start();
require "Autentica_loginFuncionario.php";
ob_end_clean();

$nome = $_POST['nome'];

$obj->alteraNomeFuncionario($nome);
header("Location: perfilFuncionario.php");




?>