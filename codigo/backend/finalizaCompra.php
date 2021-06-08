<?php
ob_start();
require "Calendario.php";
ob_end_clean();
$obj = new Calendario();
$id = $_REQUEST['id'];
$obj->finalizaCompra($id);
header("Location: ../frontend/vendas.php");


?>
