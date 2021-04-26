<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$desc = $_POST['desc'];
$obj = new Funcionario();
$obj->alteraDescricaoServico($desc);
header("Location: ../frontend/editarServico.php");


?>