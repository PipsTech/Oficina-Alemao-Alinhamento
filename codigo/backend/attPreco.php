<?php
ob_start();
require "ControleProduto.php";
ob_end_clean();
$obj = new ControleProduto();
$preco = $_POST['preco'];
$obj->alteraPrecoProduto($preco);
header("Location: ../frontend/editarProduto.php");

?>