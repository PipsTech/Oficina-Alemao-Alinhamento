<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$preco = $_POST['preco'];
$obj = new Funcionario();
$obj->alteraPrecoServico($preco);
header("Location: ../frontend/editarServico.php");




?>