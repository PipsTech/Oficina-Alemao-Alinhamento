<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$preco = $_POST['preco'];
$obj = new Funcionario();
$obj->alteraPrecoProduto($preco);
header("Location: ../frontend/editarProduto.php");




?>