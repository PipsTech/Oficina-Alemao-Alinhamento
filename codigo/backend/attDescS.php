<?php
ob_start();
require "ControleServico.php";
ob_end_clean();

$desc = $_POST['desc'];
$obj = new ControleServico();
$obj->alteraDescricaoServico($desc);
header("Location: ../frontend/editarServico.php");


?>