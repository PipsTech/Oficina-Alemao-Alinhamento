<?php
ob_start();
require "ControleProduto.php";
ob_end_clean();
$obj = new ControleProduto();
$nome = $_POST['nome'];

$obj-> alteraNomeProduto($nome);
header("Location: ../frontend/editarProduto.php");




?>