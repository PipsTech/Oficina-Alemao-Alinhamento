<?php
ob_start();
require "Calendario.php";
ob_end_clean();
$idc = $_REQUEST['id'];
$hora = $_POST['horario'];
$data = $_POST['data'];
$forma = $_POST['forma'];
$obj = new Calendario();
$obj->addAgendamentoRetirada($data,$hora,$forma,$idc);

header("Location: ../frontend/home.php");


?>
