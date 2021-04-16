<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$quant = $_POST['quant'];
$obj = new Funcionario();
$obj->alteraQuantidadeProduto($quant);
header("Location: editarProduto.php");




?>