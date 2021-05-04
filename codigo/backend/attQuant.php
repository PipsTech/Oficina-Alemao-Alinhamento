<?php
ob_start();
require "ControleProduto.php";
ob_end_clean();

$quant = $_POST['quant'];
$obj = new ControleProduto();
$obj->alteraQuantidadeProduto($quant);
header("Location: ../frontend/editarProduto.php");




?>