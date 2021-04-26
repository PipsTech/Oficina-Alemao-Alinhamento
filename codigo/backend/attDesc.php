<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$desc = $_POST['desc'];
$obj = new Funcionario();
$obj->alteraDescricaoProduto($desc);
header("Location: ../frontend/editarProduto.php");


?>