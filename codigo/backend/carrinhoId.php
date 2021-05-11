<?php
ob_start();
require "Carrinho.php";
ob_end_clean();
$id = $_REQUEST['id'];
$idp = intval($id);
$obj = new Carrinho();
$obj->isLogado($idp);

?>