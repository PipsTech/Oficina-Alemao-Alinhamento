<?php
ob_start();
require "ControleProduto.php";
ob_end_clean();
$obj = new ControleProduto();
$obj->excluirProduto();
?>