<?php
ob_start();
require "ControleServico.php";
ob_end_clean();
$obj = new ControleServico();
$nome = $_POST['nome'];
$obj->alteraNomeServico($nome);
header("Location: ../frontend/editarServico.php");




?>