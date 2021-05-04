<?php
ob_start();
require "ControleServico.php";
ob_end_clean();

$preco = $_POST['preco'];
$obj = new ControleServico();
$obj->alteraPrecoServico($preco);
header("Location: ../frontend/editarServico.php");




?>