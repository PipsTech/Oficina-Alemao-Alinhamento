<?php
ob_start();
require "Carrinho.php";
ob_end_clean();
$obj = new Carrinho();
$id = $_REQUEST['id'];
$obj->excluir($id);


?>