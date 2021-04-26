<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$nome = $_POST['nome'];
$obj = new Funcionario();
$obj->alteraNomeProduto($nome);
header("Location: ../frontend/editarProduto.php");




?>