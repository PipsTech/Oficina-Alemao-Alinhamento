<?php
ob_start();
session_start();
require "Calendario.php";
ob_end_clean();
$obj = new Calendario();
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$preco = $_POST['preco'];
$servico = $_POST['servico'];
$horario = $_POST['horario'];
$forma = $_POST['forma'];

$obj-> addAgendamento($data,$horario,$telefone,$servico,$preco,$forma);
?>