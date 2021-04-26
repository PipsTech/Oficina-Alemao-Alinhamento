<?php
ob_start();
require "ControleFuncionario.php";
ob_end_clean();

$nome = $_POST['nome'];
$obj = new Funcionario();
$obj->alteraNomeServico($nome);
header("Location: ../frontend/editarServico.php");




?>