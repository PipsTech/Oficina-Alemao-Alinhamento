<?php
ob_start();
require "ControleProduto.php";
ob_end_clean();

$desc = $_POST['desc'];
$obj = new ControleProduto();
$obj->alteraDescricaoProduto($desc);
header("Location: ../frontend/editarProduto.php");


?>
