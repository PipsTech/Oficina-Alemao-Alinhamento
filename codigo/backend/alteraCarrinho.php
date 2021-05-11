<?php
ob_start();
require "Carrinho.php";
ob_end_clean();
$obj = new Carrinho();
$quant = $_REQUEST['quant'];
$preco = $_REQUEST['preco'];
$id = $_REQUEST['id'];
$obj->setQuantidade($quant,$id);
$obj->setPreco($preco,$id);

?>